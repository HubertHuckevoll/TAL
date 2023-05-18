<?php

/**
 * index page / blog / articles
 * __________________________________________________________________
 */
class indexC extends cbBoxC
{

  public function __construct()
  {
    parent::__construct('TAL-articles');

    $viewHints = [
      'ep' => 'index.php',
      'mod' => 'indexC',
      'hook' => 'index',
      'articleMod' => 'articleC',
      'articleHook' => 'index'
    ];
    $this->initView('indexVP', $viewHints);

    $this->view->setData('ver', getVer()); // FIXME!!!
    $this->view->setData('bgImg', 'index.gif');
  }

}

?>
