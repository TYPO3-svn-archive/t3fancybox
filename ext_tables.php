<?php
  if ( ! defined( 'TYPO3_MODE' ) )
  {
    die ( 'Access denied.' );
  }

  t3lib_div::loadTCA( 'tt_content' );
  //$TCA['tt_content']['types'][$_EXTKEY]['showitem'] = '--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general, --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.header;header, bodytext;Text;;richtext:rte_transform[flag=rte_enabled|mode=ts_css], rte_enabled;LLL:EXT:cms/locallang_ttc.xml:rte_enabled_formlabel, --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.images, --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.imagefiles;imagefiles, --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.imagelinks;imagelinks, --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.image_accessibility;image_accessibility, --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance, --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames, --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.image_settings;image_settings, --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.imageblock;imageblock, --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.textlayout;textlayout, --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access, --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility, --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access, --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended';
  $TCA['tt_content']['types'][$_EXTKEY . '_pi1']['showitem'] = '--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general, --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.header;header, --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.images, --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.imagefiles;imagefiles, --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.imagelinks;imagelinks, --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.image_accessibility;image_accessibility, --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance, --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames, --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.image_settings;image_settings, --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.imageblock;imageblock, --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access, --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility, --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access, --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended';

  t3lib_extMgm::addPlugin( 
    array (
      'LLL:EXT:t3fancybox/locallang_db.xml:tt_content.' . $_EXTKEY . '_pi1',
      $_EXTKEY,
      t3lib_extMgm::extRelPath( $_EXTKEY ) . 'ext_icon.gif'
    ),
    'CType'
  );



    ////////////////////////////////////////////////////////////////////////////
    //
    // Add pagetree icon

  $TCA['pages']['columns']['module']['config']['items'][] =
     array('T3 fancybox', 't3fancybox', t3lib_extMgm::extRelPath( $_EXTKEY ) . 'ext_icon.gif' );
  t3lib_SpriteManager::addTcaTypeIcon( 'pages', 'contains-t3fancybox', '../typo3conf/ext/' . $_EXTKEY . ' /ext_icon.gif');
    // Add pagetree icon

?>