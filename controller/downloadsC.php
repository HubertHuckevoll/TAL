<?php

/**
 * downloads controller
 * __________________________________________________________________
 */
class downloadsC extends cbBoxC
{

  public function __construct()
  {
    parent::__construct('TAL-downloads');

    $viewHints = [
      'ep' => 'index.php',
      'mod' => 'downloadsC',
      'hook' => 'index',
      'articleMod' => 'downloadC',
      'articleHook' => 'index'
    ];
    $this->initView('indexVP', $viewHints);

    $this->view->setData('ver', getVer());
    $this->view->setData('bgImg', 'downloads.gif');
  }

}

?>
