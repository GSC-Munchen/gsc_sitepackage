<?php

defined('TYPO3') or die('Access denied.');

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'gelb_schwarz_casino_muenchen';

    /**
     * Default TypoScript for GelbSchwarzCasinoMuenchen
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Gelb-Schwarz-Casino München'
    );
});
