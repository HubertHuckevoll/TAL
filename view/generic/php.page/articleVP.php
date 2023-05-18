<?php
namespace view\generic\page;

class articleVP extends talVP
{
  use \cb\view\fragment\cbArticleMetadataVF,
      \cb\view\fragment\cbArticleClassicStyle2VF;

  public $viewHints = array();

  /**
   * metadata
   * ________________________________________________________________
   */
  protected function additionalHeadData()
  {
    //$this->addDataFromArray($this->data['article']['model']);
    //$this->addDataFromArray($this->data['article']['meta']);

    return $this->renderMetadata();
  }

  /**
   * render cbBox
   * ________________________________________________________________
   */
  protected function mainContent()
  {
    return $this->renderArticle();
  }
}

?>
