<?php

/**
 * front controller
 * __________________________________________________________________
 */
class gaestebuchC extends cbArticleCommentsC
{
  public function __construct()
  {
    parent::__construct('TAL-pages', 'Gaestebuch');

    $viewHints = [
      'ep' => 'index.php',
      'mod' => 'gaestebuchC',
      'hook' => 'index'
    ];

    $this->initView('gaestebuchVP', $viewHints);
    $this->view->setData('ver', getVer()); // FIXME!!!
    $this->view->setData('bgImg', 'gbuch.gif');
  }
}

?>
