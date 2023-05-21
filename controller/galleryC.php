<?php

/**
 * gallery controller
 * __________________________________________________________________
 */
class galleryC extends cbGalleryC
{

  public function __construct($linker, $requestM)
  {
    try
    {
      parent::__construct($linker, $requestM);

      $viewHints = [
        'ep' => 'index.php',
        'mod' => 'galleryC',
        'hook' => 'index',
        'articleMod' => 'articleC',
        'articleHook' => 'index'
      ];

      $this->initView('galleryVP', $viewHints);

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
