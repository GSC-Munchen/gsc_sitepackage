<?php

defined('TYPO3') or die('Access denied.');

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'gelb_schwarz_casino_muenchen';

    /**
     * Default PageTS for GelbSchwarzCasinoMuenchen
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/Page/All.tsconfig',
        'Gelb-Schwarz-Casino München'
    );
});
