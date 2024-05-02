<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$boot = static function (): void {


    ExtensionManagementUtility::addPageTSConfig(
        "@import 'EXT:cleverreach/Configuration/TsConfig/powermail.tsconfig'"
    );

    ExtensionManagementUtility::addTypoScriptSetup(
        'module.tx_form {
    settings {
        yamlConfigurations {
            43646 = EXT:cleverreach/Configuration/Yaml/BaseSetup.yaml
        }
    }
    view {
        templateRootPaths.80 = EXT:cleverreach/Resources/Private/Backend/Templates/
        partialRootPaths.80 = EXT:cleverreach/Resources/Private/Backend/Partials/
        layoutRootPaths.80 = EXT:cleverreach/Resources/Private/Backend/Layouts/
    }
}'
    );

};

$boot();
unset($boot);
