<?php

/**
 * contact controller
 * __________________________________________________________________
 */
class contactC extends cbArticleContactC
{

  /**
   * Konstruktor
   * ________________________________________________________________
   */
  public function __construct($linker, $requestM)
  {
    try
    {
      parent::__construct('TAL-pages', 'Kontakt', $linker, $requestM);

      $viewHints = [
        'ep' => 'index.php',
        'mod' => 'contactC',
        'hook' => 'index'
      ];

      $this->initView('contactVP', $viewHints);
      $this->view->setData('bgImg', 'kontakt.gif');
      $this->view->setData('ver', getVer());
    }
    catch (Exception $e)
    {
      $this->view->drawPage($e->getMessage());
    }
  }
}

?>
