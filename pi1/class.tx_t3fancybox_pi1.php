<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Dirk Wildt <http://wildt.at.die-netzmacher.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

// require_once(PATH_tslib . 'class.tslib_pibase.php');

/**
 * Plugin '' for the 't3fancybox' extension.
 *
 * @author	Dirk Wildt <http://wildt.at.die-netzmacher.de>
 * @package	TYPO3
 * @subpackage	tx_t3fancybox
 */
class tx_t3fancybox_pi1 extends tslib_pibase
{
    // Same as class name
  public $prefixId      = 'tx_t3fancybox_pi1';
    // Path to this script relative to the extension dir.
  public $scriptRelPath = 'pi1/class.tx_t3fancybox_pi1.php';
    // The extension key.
  public $extKey        = 't3fancybox';	
  
  public $pi_checkCHash = true;
  
    // Current TypoSCript configuration
  public $conf;
  
    // Current content
  public $content ;


  
 /**
  * main( ) : The main method of the Plugin.
  *
  * @param string $content The Plugin content
  * @param array $conf The Plugin configuration
  * @return string The content that is displayed on the website
  */
  public function main( $content, array $conf )
  {
    $this->conf     = $conf;
    $this->content  = $content;

      // Set JavaScript code
    $jss = $this->jss( );
      // Handle cObj->data
    $this->cObjData( );

    $content = $this->content( );
    return $jss . $content;

//    return 'Hello World!<hr />
//            Here is the TypoScript passed to the method:' .
//            var_export($conf, true);
  }
  
 /**
  * jss( ) : The main method of the Plugin.
  *
  * @return string    $jss
  */
  private function jss( )
  {
    $jss = null;
    
    $imgLinks = $this->cObj->data['image_link'];
    if( empty( $imgLinks ) )
    {
      return;
    }
    
    $arrImgLinks = explode( PHP_EOL, $imgLinks );
    
    $jss = var_export( $arrImgLinks, true );
    
    return $jss;
    
    
  }
  
 /**
  * content( ) : The main method of the Plugin.
  *
  * @return string  $content
  */
  private function content( )
  {
    $cObj_name  = $this->conf['content'];
    $cObj_conf  = $this->conf['content.'];
    $content    = $this->cObj->cObjGetSingle( $cObj_name, $cObj_conf );
    
    return $content;

  }
  
 /**
  * cObjData( ) : The main method of the Plugin.
  *
  * @return void
  */
  private function cObjData( )
  {
    unset( $this->cObj->data['image_link'] );
  }
}



if (defined('TYPO3_MODE') && isset($GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/t3fancybox/pi1/class.tx_t3fancybox_pi1.php'])) {
  include_once($GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/t3fancybox/pi1/class.tx_t3fancybox_pi1.php']);
}

?>