<?php

error_reporting(E_ALL ^ E_NOTICE);

require_once($_SERVER["DOCUMENT_ROOT"].'/cardboard/cbLoader.php');
require_once('autoload.php');

try
{
  $lV = new \cb\view\fragment\cbLinkVF('index.php');

  // link to article
  $lV->add('/index\.php\?mod=.*&amp;hook=(.*)\&amp;articleBox=(.*)\&amp;article=(.*)\&amp;articlePage=(.*)/', function($a)
  {
    return $a[2].'/'.$a[3].','.(int)$a[4].'.html';
  });

  // back link to box - FIXME
  $lV->add('/index\.php\?mod=.*&amp;hook=(.*)\&amp;articleBox=(.*)\&amp;boxPage=(.*[a-zA-Z]+.*)/', function($a)
  {
    return 'backFrom/'.$a[2].'/'.$a[3].'.html';
  });

  // link to box page
  $lV->add('/index\.php\?mod=.*&amp;hook=.*\&amp;articleBox=(.*)\&amp;boxPage=([0-9]*)/', function($a)
  {
    return $a[1].'/'.(int)$a[2];
  });

  // link to image of article
  $lV->add('/index\.php\?mod=.*&amp;hook=(.*)\&amp;articleHook=(.*)\&amp;articleBox=(.*)\&amp;article=(.*)&amp;articlePage=(.*)&amp;imgIdx=(.*)/', function($a)
  {
    return 'gallery/'.$a[3].'/'.$a[4].','.$a[5].'.html/'.$a[6];
  });

  $talR = new cbRouterModHookC('indexC', 'index', $lV);
  $talR->runWithGetVarsModHook();
}
catch (Exception $e)
{
  die($e->getMessage());
}

?>
