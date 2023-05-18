<?php
namespace view\generic\page;
class galleryVP extends talVP
{
  use \cb\view\fragment\cbGalleryVF;

  // dont't add these to the constructor
  // all views should have the same construction api
  // so we can instantiate them programmatically

  /**
   * render cbBox
   * ________________________________________________________________
   */
  public function mainContent()
  {
    return $this->renderGallery();
  }
}

?>
