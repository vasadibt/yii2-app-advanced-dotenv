<?php
// Composer
require(__DIR__ . '/vendor/autoload.php');

// Environment
require(__DIR__ . '/common/helpers/env.php');

/**
 * Load application environment from .env file
 */
$dotenv = Dotenv\Dotenv::createMutable(__DIR__);
$dotenv->load();

/**
 * Init application constants
 */
defined('YII_DEBUG') or define('YII_DEBUG', env('YII_DEBUG') || isset($_COOKIE[env('YII_DEBUG_COOKIE')]));
defined('YII_ENV') or define('YII_ENV', env('YII_ENV', 'prod'));

// Yii
require(__DIR__ . '/vendor/yiisoft/yii2/Yii.php');

// Bootstrap application
require(__DIR__ . '/common/config/bootstrap.php');