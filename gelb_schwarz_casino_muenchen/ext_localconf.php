<?php

defined('TYPO3') or die('Access denied.');

/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['gelb_schwarz_casino_muenchen'] = 'EXT:gelb_schwarz_casino_muenchen/Configuration/RTE/Default.yaml';

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:gelb_schwarz_casino_muenchen/Configuration/TsConfig/Page/All.tsconfig">');
