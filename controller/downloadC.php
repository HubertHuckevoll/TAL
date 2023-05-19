<?php

/**
 * front controller
 * __________________________________________________________________
 */
class downloadC extends cbArticleC
{

  /**
   * Konstruktor
   * ________________________________________________________________
   */
  public function __construct()
  {
    try
    {
      $requestM = new cbRequestM(); // FIXME
      $articleName = $requestM->getReqVar('article');
      parent::__construct('TAL-downloads', $articleName);

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
    catch(Exception $e)
    {
      throw $e;
    }
  }

}

?>
