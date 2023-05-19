<?php
namespace view\generic\page;

class contactVP extends talVP
{

  use \cb\view\fragment\cbArticleClassicStyle1VF,
      \cb\view\fragment\cbContactVF;

  // dont't add this to the constructor
  // all views should have the same construction api
  // so we can instantiate them programmatically

  /**
   * render cbBox
   * ________________________________________________________________
   */
  protected function mainContent()
  {
    return $this->renderArticle();
  }

  /**
   * render cbBox
   * ________________________________________________________________
   */
  protected function additionalContent()
  {
    return $this->renderContact();
  }
}

?>
