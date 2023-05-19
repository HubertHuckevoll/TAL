<?php

/**
 * front controller
 * __________________________________________________________________
 */
class contactC extends cbArticleContactC
{

  /**
   * Konstruktor
   * ________________________________________________________________
   */
  public function __construct()
  {
    try
    {
      parent::__construct('TAL-pages', 'Kontakt');

      $viewHints = [
        'ep' => 'index.php',
        'mod' => 'contactC',
        'hook' => 'index'
      ];

      $this->initView('contactVP', $viewHints);
      $this->view->setData('bgImg', 'kontakt.gif');
      $this->view->setData('ver', getVer());
    }
    catch(Exception $e)
    {
      throw $e;
    }
  }
}

?>
