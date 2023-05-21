<?php
namespace view\generic\page;

class sidebarVP extends \cb\view\page\cbPageVP
{
  use \cb\view\fragment\cbArticleTeasersVF;

  /**
   * render sidebarV
   * _________________________________________________________________
   */
  public function drawPage($err = '')
  {
    echo $this->renderTeasers();
  }

}

?>
