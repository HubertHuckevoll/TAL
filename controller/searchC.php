<?php

/**
 * front controller
 * __________________________________________________________________
 */
class searchC extends cbSearchC
{

  /**
   * Konstruktor
   * ________________________________________________________________
   */
  public function __construct($linker = null, $requestM = null)
  {
    parent::__construct($linker, $requestM);

    $viewHints = [
      'ep' => 'index.php',
      'mod' => 'articleC',
      'hook' => 'index',
      'TAL-articles' => 'articleC',     // our way to pass the entry points is a little hacky but it works very well...
      'TAL-downloads' => 'downloadsC',
      'TAL-pages' => 'pageC',
    ];

    $this->initView('searchVP', $viewHints);
    $this->view->setData('bgImg', 'dienste.gif');
    $this->view->setData('ver', getVer());
  }

}

?>
