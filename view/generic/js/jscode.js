
window.addEventListener("DOMContentLoaded", function(event)
{
  // Comments
  let comments = new cbComments('#commentsBox');
  comments.init();

  // Slideshow
  let slideShow = new cbSlideshow('.slide', 6000);
  slideShow.init();

  if (document.querySelector('#sidebar').offsetHeight != 0)
  {
    // Search
    let ts = new cbSearch('#searchBox');
    ts.init();

    // Gallery
    //let gallery = new cbGallery('.articleParagraphImg, .articleHeaderImg');
    //gallery.init();

    // Sidebar
    fetch('index.php?ajax=ajax&mod=sidebarC&hook=index').then(response => response.text()).then((data) =>
    {
      // fetch Sidebar
      document.querySelector('#hotStuffBox .sidebarMenuBoxContent').innerHTML = data;

      // Meilensteine Info Box => Hover Effekt
      infoBox = document.getElementById('infoBox').innerHTML;
      infoBoxHeader = document.getElementById('infoBoxHeader').innerHTML;
      let imgs = document.querySelectorAll('.sidebarMenuBoxContent a img');

      imgs.forEach((img) =>
      {
        img.addEventListener('mouseenter', (ev) =>
        {
          document.getElementById('infoBoxHeader').innerHTML = ev.target.parentNode.getAttribute('title').substr(0, 30) + '...';
          document.getElementById('infoBox').innerHTML = ev.target.parentNode.nextElementSibling.innerHTML + '...';
        });
      });

      imgs.forEach((img) =>
      {
        img.addEventListener('mouseleave', (ev) =>
        {
          document.getElementById('infoBoxHeader').innerHTML = infoBoxHeader;
          document.getElementById('infoBox').innerHTML = infoBox;
        });
      });
    });
  }

});


