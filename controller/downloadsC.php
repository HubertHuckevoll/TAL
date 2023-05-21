<?php

/**
 * downloads controller
 * __________________________________________________________________
 */
class downloadsC extends cbBoxC
{

  public function __construct($linker, $requestM)
  {
    try
    {
      parent::__construct('TAL-downloads', $linker, $requestM);

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
    catch (Exception $e)
    {
      $this->view->drawPage($e->getMessage());
    }
  }

}

?>
