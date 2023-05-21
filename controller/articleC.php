<?php

/**
 * article controller
 * __________________________________________________________________
 */
class articleC extends cbArticleC
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
      parent::__construct('TAL-articles', $articleName, $linker, $requestM);

      $viewHints = [
        'ep' => 'index.php',
        'mod' => 'articleC',
        'hook' => 'index',
        'backLinkMod' => 'indexC',
        'backLinkHook' => 'index',
        'galleryMod' => 'galleryC',
        'galleryHook' => 'index',
        'pageNumbers' => 'true'
      ];

      $this->initView('articleVP', $viewHints);
      $this->view->setData('bgImg', 'dienste.gif');
      $this->view->setData('ver', getVer());
    }
    catch (Exception $e)
    {
      $this->view->drawPage($e->getMessage());
    }
  }

}

?>
