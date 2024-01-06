<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
        'uploaders' => [
            'class' => 'gomonkey\uploader\Uploader',
            'baseFrontendUrl' => dirname(dirname(__DIR__)) . '/frontend/web/images',
            'baseBackendUrl' => dirname(dirname(__DIR__)) . '/backend/web/images',
            'rename' => true, // Rename file
            'random' => 12, // random alphanumeric name
            'remove' => true, // Remove original file after upload
            'folders' => [
                [
                    'name' => '1200',
                    'quality' => 70,
                    'width' => 1200
                ],
                [
                    'name' => '800',
                    'quality' => 70,
                    'width' => 800
                ],
                [
                    'name' => '600',
                    'quality' => 70,
                    'width' => 600
                ],
                [
                    'name' => 'avatars',
                    'quality' => 70,
                    'width' => 200
                ]

            ]

        ],
    ],
];
