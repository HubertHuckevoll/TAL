<?php
namespace view\generic\page;

class indexVP extends talVP
{
  use \cb\view\fragment\cbBoxVF;

  /**
   * render cbBox
   * ________________________________________________________________
   */
  protected function mainContent()
  {
    return $this->renderArticleList();
  }

}

?>
