<?php

return [
    // Non-configured components
    'assets' => 'craft\app\services\Assets',
    'assetIndexer' => 'craft\app\services\AssetIndexer',
    'assetTransforms' => 'craft\app\services\AssetTransforms',
    'categories' => 'craft\app\services\Categories',
    'config' => 'craft\app\services\Config',
    'content' => 'craft\app\services\Content',
    'dashboard' => 'craft\app\services\Dashboard',
    'deprecator' => 'craft\app\services\Deprecator',
    'elementIndexes' => 'craft\app\services\ElementIndexes',
    'elements' => 'craft\app\services\Elements',
    'email' => 'craft\app\services\Email',
    'entries' => 'craft\app\services\Entries',
    'entryRevisions' => 'craft\app\services\EntryRevisions',
    'et' => 'craft\app\services\Et',
    'feeds' => 'craft\app\services\Feeds',
    'fields' => 'craft\app\services\Fields',
    'globals' => 'craft\app\services\Globals',
    'install' => 'craft\app\services\Install',
    'imageEffects' => 'craft\app\services\ImageEffects',
    'images' => 'craft\app\services\Images',
    'matrix' => 'craft\app\services\Matrix',
    'path' => 'craft\app\services\Path',
    'plugins' => 'craft\app\services\Plugins',
    'relations' => 'craft\app\services\Relations',
    'routes' => 'craft\app\services\Routes',
    'search' => 'craft\app\services\Search',
    'sections' => 'craft\app\services\Sections',
    'security' => 'craft\app\services\Security',
    'structures' => 'craft\app\services\Structures',
    'tags' => 'craft\app\services\Tags',
    'tasks' => 'craft\app\services\Tasks',
    'templateCaches' => 'craft\app\services\TemplateCaches',
    'tokens' => 'craft\app\services\Tokens',
    'updates' => 'craft\app\services\Updates',
    'users' => 'craft\app\services\Users',
    'view' => 'craft\app\web\View',
    'volumes' => 'craft\app\services\Volumes',
    // Configured components
    'migrator' => [
        'class' => 'craft\app\db\MigrationManager',
        'migrationNamespace' => 'craft\app\migrations',
        'migrationPath' => '@app/migrations',
        'fixedColumnValues' => ['type' => 'app'],
    ],
    'resources' => [
        'class' => 'craft\app\services\Resources',
        'dateParam' => 'd',
    ],
    'systemSettings' => [
        'class' => 'craft\app\services\SystemSettings',
        'defaults' => [
            'users' => [
                'requireEmailVerification' => true,
                'allowPublicRegistration' => false,
                'defaultGroup' => null,
                'photoVolumeId' => null
            ],
        ]
    ],
    'i18n' => [
        'class' => 'craft\app\i18n\I18N',
        'translations' => [
            'yii' => [
                'class' => 'craft\app\i18n\PhpMessageSource',
                'sourceLanguage' => 'en-US',
                'basePath' => '@yii/messages',
                'forceTranslation' => true,
                'allowOverrides' => true,
            ],
            'app' => [
                'class' => 'craft\app\i18n\PhpMessageSource',
                'sourceLanguage' => 'en-US',
                'basePath' => '@app/translations',
                'forceTranslation' => true,
                'allowOverrides' => true,
            ],
            'site' => [
                'class' => 'craft\app\i18n\PhpMessageSource',
                'sourceLanguage' => 'en-US',
                'basePath' => '@translations',
                'forceTranslation' => true,
            ],
        ],
    ],
];
