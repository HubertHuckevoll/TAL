<?php

/**
 * sidebar
 * __________________________________________________________________
 */
class sidebarC extends cbPageC
{
  /**
   * Konstruktor
   * ________________________________________________________________
   */
  public function __construct($linker, $requestM)
  {
    try
    {
      parent::__construct($linker, $requestM);

      $viewHints = [
        'ep' => 'index.php',
        'mod' => 'sidebarC',
        'hook' => 'index',
        'articleMod' => 'articleC',
        'articleHook' => 'index'
      ];

      $this->initView('sidebarVP', $viewHints);
    }
    catch (Exception $e)
    {
      $this->view->drawPage($e->getMessage());
    }
  }

  /**
   * fill sidebar with random Stuff
   * called from JavaScript
   * ________________________________________________________________
   */
  public function index()
  {
    $cb = new cbBoxM('TAL-articles');
    $arts = $cb->articleObjs2Array($cb->getRandomArticles(6));
    $this->view->data = $arts;

    $this->view->drawPage();
  }
}

?>
