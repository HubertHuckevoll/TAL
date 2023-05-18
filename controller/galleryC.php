<?php

/**
 * front controller
 * __________________________________________________________________
 */
class galleryC extends cbGalleryC
{

  public function __construct()
  {
    parent::__construct();

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
}

?>
