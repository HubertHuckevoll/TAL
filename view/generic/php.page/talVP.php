<?php
namespace view\generic\page;
class talVP extends \cb\view\page\cbPageVP
{
  public function drawPage($errMsg = '')
  {
    $erg  = '';
    $erg .= '<!DOCTYPE html>'.
            '<html lang="de">'.
              '<head>'.
                '<title>'.$this->data['pageTitle'].' - Theater-Architekturlicht Chemnitz GmbH</title>'.
                '<base href="'.PROJECT_ROOT_URL.'">'.
                '<meta charset="UTF-8">'.
                '<meta name="robots" content="index,follow">'.
                '<meta name="google-site-verification" content="NLkU631IwlxwJxX_4ehIqxy99LJAw_0zB9XABnJWD8Q">'.
                '<meta name="revisit-after" content="7 days">'.
                '<meta name="keywords" content="theaterlicht, scheinwerfer, lampe, stage, show, vorstellung, veranstaltung, architekturbeleuchtung, architekturlicht,'.
                                               'fest, aussen, innen, architektur, akzente, stimmung, farben, farbwechsler,'.
                                               'farbmischung, rgb, cmy, entladungslampen, hqi, cdm, notlicht, treppenstufenbeleuchtung,'.
                                               'Farbfilterfolien, Filterfolien, Leefilter, Scheinwerferfolien, Arri, Dedo, Stative, Grip, Lichttechnik,'.
                                               'Manfrotto, Avenger, Hmi, Veranstaltungstechnik, Beleuchtung, Licht, Mietlicht, Theaterbeleuchtung,'.
                                               'Lichtmischpult, Scheinwerfer, Filmlicht, kinoflo, Fotolicht, Kabel, Stecker, Verbindungselemente, Dimmer, Par,'.
                                               'Scheinwerfer, Gaffa, Dulling, Dullingspray, Kline, Leefilter, Messebau, Projektion, Buehnenlicht, Derksen, Dia,'.
                                               'Lichteffekt, Filmbeleuchtung, Diaprojektion, Showlight, Showlicht, Blackwrap, Polfilter,'.
                                               'Leefolien, Nebel, Par, Fluter, Tageslicht, Kunstlicht, Pinza, Ltm, Lichtpult, Leuchtmittel, Discokugel, Effektlicht,'.
                                               'Leuchten, Messelicht, Pyro, Profilscheinwerfer, Solar, Grafikwerfer, Cinemagictube, Kobold, Abd, California,'.
                                               'Sunbounce, Lee, Dedolight, Lichtgrafik, Effekte, Spot, Grip, Lowel, Coemar, Butterfly, Scrims, Scrim, flag, flags,'.
                                               'dot, dots, Rednerpulte, nahtlose Kugeln, Illumination, Kronleuchter,'.
                                               'Architektur, Architekturlicht, Ambiente, Ambientedesign, AV-Design, AV-Medien, AV, Medien, Mediendesign,'.
                                               'Veranstaltungstechnik, Video, Videotechnik, Beschallung, Ton, Tontechnik, Tontechniker, Event, Eventtechnik,'.
                                               'Eventdesign, Eventmanagement, Eventmarketing, Licht, Lichttechnik, Lichtdesign, Lichtdesigner, Lichttechniker,'.
                                               'Location, Locationdesign, Regie, Regieturm">'.
                '<meta name="description" content="'.htmlentities(($this->data['metaDescription'] ?? '' )).'">'.
                '<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">'.
                '<meta name="mobile-web-app-capable" content="yes">'.
                '<meta name="apple-mobile-web-app-status-bar-style" content="black">'.
                '<link rel="shortcut icon" href="favicon.ico">'.
                '<link rel="stylesheet" type="text/css" href="'.CB_CSS_ROOT.'cbBox.css'.'">'.
                '<link rel="stylesheet" type="text/css" href="'.CB_CSS_ROOT.'cbArticleClassicS2.css'.'">'.
                '<link rel="stylesheet" type="text/css" href="'.CB_CSS_ROOT.'cbUserClasses.css">'.
                '<link rel="stylesheet" type="text/css" href="'.CB_CSS_ROOT.'cardboardTags.css'.'">'.
                '<link rel="stylesheet" type="text/css" href="'.CB_CSS_ROOT.'cardboardCSS.css'.'">'.
                '<link rel="stylesheet" type="text/css" href="'.PROJECT_CSS_URL.'style.css" title="CSS" media="screen">'.
                '<link rel="stylesheet" media="screen and (max-width: 600px)" href="'.PROJECT_CSS_URL.'w600px.css">'.
                '<link rel="stylesheet" media="screen and (max-width: 480px)" href="'.PROJECT_CSS_URL.'w600px.css">'.
                '<script src="'.CB_JS_ROOT.'cbBase.js'.'"></script>'.
                '<script src="'.CB_JS_ROOT.'cbSearch.js'.'"></script>'.
                '<script src="'.CB_JS_ROOT.'cbComments.js'.'"></script>'.
                '<script src="'.CB_JS_ROOT.'cbSlideshow.js'.'"></script>'.
                '<script src="'.CB_JS_ROOT.'cbGallery.js'.'"></script>'.
                '<script src="'.PROJECT_JS_URL.'jscode.js"></script>'.
                $this->additionalHeadData().
              '</head>'.
              '<body style="background: url('.PROJECT_IMG_URL.'opernball_chemnitz_bg.jpg) left top no-repeat fixed, url('.PROJECT_IMG_URL.($this->data['bgImg'] ?? '').') left bottom no-repeat fixed, url('.PROJECT_IMG_URL.'vorhang_abstrakt.jpg) right top no-repeat fixed;">'.
                  '<div id="banner">'.
                     '<h1>Theater-Architekturlicht Chemnitz GmbH</h1>'.
                     '<h2>Partner für professionelle Theater- und Architekturlichttechnik</h2>'.
                  '</div>'.
                  '<div id="navigation">'.
                     '<div id="linkBox">'.
                       '<a href="./"                               title="Blog">Blog</a>'.
                       '<a href="TAL-pages/Schlaglichter.html"     title="Schlaglichter">Schlaglichter</a>'.
                       '<a href="TAL-pages/Vertrieb.html"          title="Vertrieb">Vertrieb</a>'.
                       '<a href="TAL-pages/Dienste.html"           title="Dienstleistungen">Leistungen</a>'.
                       '<a href="TAL-pages/Kontakt.html"           title="Kontakt">Kontakt</a>'.
                       '<a href="TAL-pages/Standort.html"          title="Standort">Standort</a>'.
                       '<a href="TAL-downloads"                    title="Downloads">Downloads</a>'.
                       '<a href="TAL-pages/Gaestebuch.html"        title="Gästebuch">Gästebuch</a>'.
                    '</div>'.
                    '<form method="post" id="searchBox" name="searchForm" action="index.php?hook=search">'.
                       '<input type="text" name="term" size="30" maxlength="255" autocomplete="off"><button type="submit">&#x1F50D;</button>'.
                    '</form>'.
                  '</div>'.
                  '<main>'.
                    '<div id="content">';

    if ($errMsg == '')
    {
      $erg .= $this->mainContent();
    }
    else
    {
      $erg .= $this->errorMsg($errMsg);
    }

    $erg .=         '<div id="additionalContent">'.$this->additionalContent().'</div>';
    $erg .=         '</div>'.
                    '<div id="sidebar">'.
                      '<div class="sidebarMenuBox">'.
                        '<h3>Qualität und Zuverlässigkeit</h3>'.
                        '<div class="sidebarMenuBoxContent">'.
                          'Die Theater - Architekturlicht Chemnitz GmbH ist ein auf den '.
                          '<a href="TAL-pages/Vertrieb.html">Vertrieb</a> und den <a href="TAL-pages/Dienste.html">Service</a> '.
                          'von Theater- und Architekturlichttechnik spezialisiertes, überregionales Dienstleistungsunternehmen '.
                          'mit Sitz im sächsischen Chemnitz.'.
                        '</div>'.
                      '</div>'.
                      '<div id="hotStuffBox" class="sidebarMenuBox">'.
                        '<h3>Meilensteine</h3>'.
                        '<div class="sidebarMenuBoxContent"></div>'.
                      '</div>'.
                      '<div id="infoSidebarMenuBox" class="sidebarMenuBox">'.
                        '<h3 id="infoBoxHeader">Ein persönliches Verhältnis ist uns wichtig</h3>'.
                        '<div class="sidebarMenuBoxContent" id="infoBox">'.
                          'Wir legen viel Wert auf eine intensive, individuelle Beratung - kontaktieren Sie uns:<br />'.
                          '<table style="margin: 0px; padding: 0px; font-size: 1em;">'.
                            '<tbody>'.
                              '<tr><td style="width: 50%;">Telefon</td><td><strong><a href="tel:+493719099511">+49 371 90 99 511</a></strong></td></tr>'.
                              '<tr><td style="width: 50%;">Telefax</td><td><strong>+49 371 90 99 512</strong></td></tr>'.
                            '</tbody>'.
                          '</table>'.
                          '<br />'.
                          'Geschäftsführer: M. Meyer<br /><a href="mailto:&#109;&#46;&#109;&#101;&#x79;&#101;&#x72;&#64;&#x74;&#97;&#108;&#45;&#99;&#x68;&#101;&#109;&#110;&#105;&#x74;&#x7a;&#46;&#100;&#101;">&#109;&#46;&#109;&#101;&#x79;&#101;&#x72;&#64;&#x74;&#97;&#108;&#45;&#99;&#x68;&#101;&#109;&#110;&#105;&#x74;&#x7a;&#46;&#100;&#101;</a><br />'.
                          '<br />'.
                          'Sekretariat: R. Schneider<br /> <a href="mailto:&#114;&#46;&#x73;&#x63;&#x68;&#x6e;&#101;&#105;&#x64;&#101;&#x72;&#64;&#116;&#97;&#x6c;&#45;&#x63;&#x68;&#101;&#x6d;&#110;&#x69;&#116;&#x7a;&#x2e;&#x64;&#101;">&#114;&#46;&#x73;&#x63;&#x68;&#x6e;&#101;&#105;&#x64;&#101;&#x72;&#64;&#116;&#97;&#x6c;&#45;&#x63;&#x68;&#101;&#x6d;&#110;&#x69;&#116;&#x7a;&#x2e;&#x64;&#101;</a><br />'.
                          '<br /><br />'.
                          'Oder klicken Sie <a href="TAL-pages/Kontakt.html">hier</a>.'.
                        '</div>'.
                      '</div>'.
                    '</div>'.
                  '</main>'.
                  '<div id="footer">'.
                   '<div id="footerLeft">'.
                     '<div>Theater - Architekturlicht Chemnitz GmbH</div>'.
                     '<div>Paul-Gruner-Straße 64</div>'.
                     '<div>09120 Chemnitz</div>'.
                     '<div>Telefon <a href="tel:+493719099511">+49 371 90 99 511</a></div>'.
                     '<div>Fax +49 371 90 99 512</div>'.
                     '<div>e-mail <a href="mailto:&#x6d;&#x2e;&#x6d;&#101;&#121;&#x65;&#114;&#64;&#116;&#x61;&#x6c;&#45;&#99;&#104;&#x65;&#109;&#110;&#x69;&#116;&#x7a;&#46;&#100;&#x65;">&#x6d;&#x2e;&#x6d;&#101;&#121;&#x65;&#114;&#64;&#116;&#x61;&#x6c;&#45;&#99;&#104;&#x65;&#109;&#110;&#x69;&#116;&#x7a;&#46;&#100;&#x65;</a></div>'.
                   '</div>'.
                   '<div id="footerRight">'.
                     '<div>Geschäftsführer: Mathias Meyer</div>'.
                     '<div>USt.-IdNr. DE 23 111 9997</div>'.
                     '<div>Amtsgericht Chemnitz HRB 18656</div>'.
                     '<div>IBAN DE81870500003557005550 &middot; BIC CHEKDE81XXX</div>'.
                     '<div><a href="TAL-pages/Impressum.html">Impressum</a></div>'.
                     '<div><a href="TAL-pages/dsgvo.html">Datenschutzerkl&auml;rung</a></div>'.
                     '<div>Version: '.($this->data['ver'] ?? '').'</div>'.
                   '</div>'.
                  '</div>'.
              '</body>'.
            '</html>';

    echo $erg;
  }

}

?>
