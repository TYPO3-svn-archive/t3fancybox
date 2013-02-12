<?php
  if ( ! defined( 'TYPO3_MODE' ) )
  {
    die ( 'Access denied.' );
  }

  ////////////////////////////////////////////////////////////////////////////
  //
  // INDEX

  // tt_content
  // Enables the Include Static Templates
  // Add pagetree icons



  ////////////////////////////////////////////////////////////////////////////
  //
  // tt_content

  t3lib_div::loadTCA( 'tt_content' );
//$TCA['tt_content']['types'][$_EXTKEY . '_pi1']['showitem'] = $TCA['tt_content']['types']['image']['showitem'];
$TCA['tt_content']['types'][$_EXTKEY . '_pi1']['showitem'] = $TCA['tt_content']['types']['textpic']['showitem'];
unset( $TCA['tt_content']['columns']['imageheight']['config']['eval'] );
unset( $TCA['tt_content']['columns']['imagewidth']['config']['eval'] );

t3lib_extMgm::addPlugin( 
  array (
    'LLL:EXT:t3fancybox/locallang_db.xml:tt_content.' . $_EXTKEY . '_pi1',
    $_EXTKEY . '_pi1',
    t3lib_extMgm::extRelPath( $_EXTKEY ) . 'ext_icon.gif'
  ),
  'CType'
);
  // tt_content
  
  
  
  ////////////////////////////////////////////////////////////////////////////
  //
  // Enables the Include Static Templates

t3lib_extMgm::addStaticFile( $_EXTKEY , 'static/', 'Fancybox by thumbnails');
  // Enables the Include Static Templates



  ////////////////////////////////////////////////////////////////////////////
  //
  // Add pagetree icon

$TCA['pages']['columns']['module']['config']['items'][] =
    array('T3 fancybox', 't3fbox', t3lib_extMgm::extRelPath( $_EXTKEY ) . 'ext_icon.gif' );
t3lib_SpriteManager::addTcaTypeIcon( 'pages', 'contains-t3fbox', '../typo3conf/ext/' . $_EXTKEY . '/ext_icon.gif');
  // Add pagetree icon

?>