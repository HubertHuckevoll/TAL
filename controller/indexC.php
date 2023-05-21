<?php

/**
 * index page / blog / articles
 * __________________________________________________________________
 */
class indexC extends cbBoxC
{

  public function __construct($linker, $requestM)
  {
    try
    {
      parent::__construct('TAL-articles', $linker, $requestM);

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
    catch (Exception $e)
    {
      $this->view->drawPage($e->getMessage());
    }
  }

}

?>
