<?php

/**
 * search controller
 * __________________________________________________________________
 */
class sitemapC extends cbPageC
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

      $this->initView('\cb\view\page\cbSitemapVP', array());

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
    }
    catch (Exception $e)
    {
      $this->view->drawPage($e->getMessage());
    }
  }
}

?>
