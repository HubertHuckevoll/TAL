<?php

namespace view\generic\page;

class gaestebuchVP extends talVP
{
  use \cb\view\fragment\cbArticleClassicStyle1VF,
      \cb\view\fragment\cbCommentsVF;

  // dont't add these to the constructor.
  // all views should have the same construction api
  // so we can instantiate them programmatically

  /**
   *
   * ________________________________________________________________
   */
  protected function mainContent()
  {
    $html = $this->renderArticle();
    return $html;
  }

  /**
   *
   * ________________________________________________________________
   */
  protected function additionalContent()
  {
    $viewOp = $this->data['viewOp'];
    return $this->exec($viewOp);
  }

  /**
   *
   * ________________________________________________________________
   */
  public function drawAjax()
  {
    echo $this->additionalContent();
  }
}

?>
