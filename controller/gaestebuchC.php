<?php

/**
 * front controller
 * __________________________________________________________________
 */
class gaestebuchC extends cbArticleCommentsC
{
  public function __construct($linker, $requestM)
  {
    try
    {
      parent::__construct('TAL-pages', 'Gaestebuch', $linker, $requestM);

      $viewHints = [
        'ep' => 'index.php',
        'mod' => 'gaestebuchC',
        'hook' => 'index'
      ];

      $this->initView('gaestebuchVP', $viewHints);
      $this->view->setData('ver', getVer());
      $this->view->setData('bgImg', 'gbuch.gif');
    }
    catch (Exception $e)
    {
      $this->view->drawPage($e->getMessage());
    }
  }
}

?>
