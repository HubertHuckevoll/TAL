<?php

namespace view\generic\page;

class schlaglVP extends talVP
{
  use \cb\view\fragment\cbArticleMetadataVF,
      \cb\view\fragment\cbArticleClassicStyle0VF;

  /**
   * metadata
   * ________________________________________________________________
   */
  protected function additionalHeadData()
  {
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
