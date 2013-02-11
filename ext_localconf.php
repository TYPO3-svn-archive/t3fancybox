<?php
if ( ! defined( 'TYPO3_MODE' ) )
{
  die ( 'Access denied.' );
}

t3lib_extMgm::addPItoST43(
  $_EXTKEY . '_pi1', 
  'pi1/class.tx_t3fancybox_pi1.php',
  '_pi1', 
  'CType', 
   1
);
?>