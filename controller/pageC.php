<?php

/**
 * front controller
 * __________________________________________________________________
 */
class pageC extends cbArticleC
{

  public function __construct()
  {
    try
    {
      $requestM = new cbRequestM(); // FIXME
      $articleName = $requestM->getReqVar('article');
      parent::__construct('TAL-pages', $articleName);

      $viewHints = [
        'ep' => 'index.php',
        'mod' => 'pageC',
        'hook' => 'index',
        'galleryMod' => 'galleryC',
        'galleryHook' => 'index'
      ];

      if ($articleName == 'Schlaglichter')
      {
        $this->initView('schlaglVP', $viewHints);
      }
      else
      {
        $this->initView('articleVP', $viewHints);
      }

      $this->view->setData('bgImg', 'features.gif');
      $this->view->setData('ver', getVer());
    }
    catch(Exception $e)
    {
      throw $e;
    }
  }

}

?>
