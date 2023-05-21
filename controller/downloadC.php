<?php

/**
 * download controller
 * __________________________________________________________________
 */
class downloadC extends cbArticleC
{

  /**
   * Konstruktor
   * ________________________________________________________________
   */
  public function __construct($linker, $requestM)
  {
    try
    {
      $articleName = $requestM->getReqVar('article');
      parent::__construct('TAL-downloads', $articleName, $linker, $requestM);

      $viewHints = [
        'ep' => 'index.php',
        'mod' => 'downloadC',
        'hook' => 'index',
        'backLinkMod' => 'downloadsC',
        'backLinkHook' => 'index',
        'galleryMod' => 'galleryC',
        'galleryHook' => 'index',
      ];

      $this->initView('articleVP', $viewHints);
      $this->view->setData('bgImg', 'downloads.gif');
      $this->view->setData('ver', getVer());
    }
    catch (Exception $e)
    {
      $this->view->drawPage($e->getMessage());
    }
  }

}

?>
