<?php
/**
 * Application configuration for acceptance tests
 */
return yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../../../configOld/web.php'),
    require(__DIR__ . '/config.php'),
    [

    ]
);
