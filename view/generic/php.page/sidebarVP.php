<?php
namespace view\generic\page;

class sidebarVP extends \cb\view\page\cbPageVP
{
  use \cb\view\fragment\cbArticleTeasersVF;

  /**
   * render sidebarV
   * _________________________________________________________________
   */
  public function drawPage($errMsg = '')
  {
    echo $this->renderTeasers();
  }

}

?>
