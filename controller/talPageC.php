<?php

/**
 * front controller
 * __________________________________________________________________
 */
class talPageC extends cbPageC
{
  /**
   * init view
   * ________________________________________________________________
   */
  public function initView($uiViewName)
  {
    parent::initView($uiViewName);
    $this->view->setData('ver', getVer());
  }

  /**
   * the downloads hook
   * ________________________________________________________________
   */
  public function downloads()
  {
    $boxA = $this->boxes->getBoxByName('TAL-downloads');
    $cbb = new cbBoxC($boxA);
    $ret = array();

    $this->initView('indexVP');
    $this->view->hook = 'downloads';
    $this->view->articleHook = 'download';

    try
    {
      $ret = $cbb->show();

      $this->view->setData('articles', $ret);
      $this->view->setData('pageTitle', $ret['meta']['cTitle']);
      $this->view->setData('metaDescription', $ret['meta']['cTeaser']);
      $this->view->setData('bgImg', 'downloads.gif');

      $this->view->drawPage();
    }
    catch (Exception $e)
    {
      $this->view->drawPage($e->getMessage);
    }
  }

  /**
   * download item
   * _________________________________________________________________
   */
  public function download()
  {
    $articleName = $this->requestM->getReqVar('article');
    $boxA = $this->boxes->getBoxByName('TAL-downloads');
    $ret = '';

    $this->initView('articleVP');
    $this->view->viewHints = array('backLinkHook' => 'downloads', 'galleryHook' => 'gallery');

    try
    {
      $cba = new cbArticleC($boxA, $articleName);
      $ret = $cba->show();

      $this->view->setData('article', $ret);
      $this->view->setData('pageTitle', $ret['meta']['cTitle']);
      $this->view->setData('metaDescription', $ret['meta']['cTeaser']);
      $this->view->setData('bgImg', 'downloads.gif');

      $this->view->drawPage();
    }
    catch (Exception $e)
    {
      $this->view->drawPage($e->getMessage());
    }
  }

  /**
   * just a TAL-pages page
   * _________________________________________________________________
   */
  public function page()
  {
    $articleName = $this->requestM->getReqVar('article');
    $boxA = $this->boxes->getBoxByName('TAL-pages');
    $ret = '';

    if ($articleName == 'Schlaglichter')
    {
      $this->initView('schlaglVP');
    }
    else
    {
      $this->initView('articleVP');
    }
    $this->view->hook = 'page';
    $this->view->viewHints = array('galleryHook' => 'gallery');

    try
    {
      $cba = new cbArticleC($boxA, $articleName);
      $ret = $cba->show();

      $this->view->setData('article', $ret);
      $this->view->setData('pageTitle', $ret['meta']['cTitle']);
      $this->view->setData('metaDescription', $ret['meta']['cTeaser']);
      $this->view->setData('bgImg', 'features.gif');

      $this->view->drawPage();
    }
    catch (Exception $e)
    {
      $this->view->drawPage($e->getMessage());
    }
  }


  /**
   * Contact Hook
   * _________________________________________________________________
   */
  public function contact()
  {
    $op = $this->requestM->getReqVar('op');
    $boxA = $this->boxes->getBoxByName('TAL-pages');
    $email = $boxA['email'];
    $articleName = 'Kontakt';
    $cba = null;
    $cbc = null;
    $ret = '';

    $this->initView('contactVP');

    try
    {
      $cba = new cbArticleC($boxA, $articleName);
      $ret = $cba->show();
      $this->view->setData('article', $ret);
      $this->view->setData('pageTitle', $ret['meta']['cTitle']);
      $this->view->setData('metaDescription', $ret['meta']['cTeaser']);

      $cbc = new cbContactC($boxA, $articleName, $email);
      $ret = $cbc->exec($op);
      $this->view->setData('contact', $ret);

      $this->view->setData('bgImg', 'kontakt.gif');

      $this->view->drawPage();
    }
    catch (Exception $e)
    {
      $this->view->drawPage($e->getMessage());
    }
  }

  /**
   * Gästebuch Hook
   * _________________________________________________________________
   */
  public function gaestebuch()
  {
    $op = $this->requestM->getReqVar('op');
    $boxA = $this->boxes->getBoxByName('TAL-pages');
    $articleName = 'Gaestebuch';
    $cba = null;
    $cbc = null;
    $ret = '';

    $this->initView('gaestebuchVP');

    try
    {
      if (!isAjax())
      {
        $cba = new cbArticleC($boxA, $articleName);
        $ret = $cba->show();

        $this->view->setData('article', $ret);
        $this->view->setData('pageTitle', $ret['meta']['cTitle']);
        $this->view->setData('metaDescription', $ret['meta']['cTeaser']);
        $this->view->setData('bgImg', 'gbuch.gif');

        $cbc = new cbCommentsC($boxA, $articleName, 'gaestebuch');
        $ret = $cbc->exec($op);
        $this->view->setData('comments', $ret);

        $this->view->drawPage();
      }
      else
      {
        $cbc = new cbCommentsC($boxA, $articleName, 'gaestebuch');
        $ret = $cbc->exec($op);
        $this->view->setData('comments', $ret);

        $this->view->drawAjax();
      }
    }
    catch (Exception $e)
    {
      $this->view->drawPage($e->getMessage());
    }
  }


  /**
   * cbSearch Hook
   * _________________________________________________________________
   */
  public function search()
  {
    $term = $this->requestM->getReqVar('term');

    $this->initView('searchVP');
    try
    {
      $erg = $this->boxes->search($term, 'exclude', 'pages');
      $this->view->setData('results', $erg);

      if (!isAjax())
      {
        $this->view->setData('pageTitle', 'Suchergebnisse');
        $this->view->setData('metaDesc', 'Suchergebnisse');

        $this->view->drawPage();
      }
      else
      {
        $this->view->drawAjax();
      }
    }
    catch(Exception $e)
    {
      $this->view->drawPage($e->getMessage());
    }
  }

  /**
   * sitemap
   * ________________________________________________________________
   */
  public function sitemap()
  {
    $this->initView('\cb\view\page\cbSitemapVP');

    $sm = new cbSitemapM($this->linker);
    $sm->addLink('https://wwww.tal-chemnitz.de/');
    $sm->addArticleBox('index.php', 'index', 'article', 'TAL-articles');
    $sm->addArticleBox('index.php', 'downloads', 'download', 'TAL-downloads');
    $sm->addArticle('index.php', 'page', 'TAL-pages', 'Gaestebuch');
    $sm->addArticle('index.php', 'page', 'TAL-pages', 'Kontakt');
    $sm->addArticle('index.php', 'page', 'TAL-pages', 'Impressum');
    $sm->addArticle('index.php', 'page', 'TAL-pages', 'dsgvo');
    $links = $sm->create();

    $this->view->replaceDataFromArray($links);
    $this->view->draw();
  }
}

?>
