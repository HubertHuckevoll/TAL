<?php

namespace view\generic\page;

class searchVP extends talVP
{
  use \cb\view\fragment\cbSearchVF;

  // dont't add these to the constructor.
  // all views should have the same construction api
  // so we can instantiate them programmatically

  /**
   * render cbBox
   * ________________________________________________________________
   */
  protected function mainContent()
  {
    $html  = '';
	  $html .= '<div id="searchResultsBox">';
		$html .= '<h3>Suchergebnisse</h3>';
    $html .= $this->renderSearch();
    $html .= '</div>';

    return $html;
  }

}

?>
