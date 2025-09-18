<?php

use Symfony\Component\Dotenv\Dotenv;

require dirname(__DIR__).'/vendor/autoload.php';

if (file_exists(dirname(__DIR__).'/config/bootstrap.php')) {
    require dirname(__DIR__).'/config/bootstrap.php';
} else {
    $dotenv = new Dotenv();
    // essaie .env.test d'abord, sinon fallback sur .env
    if (file_exists(dirname(__DIR__).'/.env.test')) {
        $dotenv->loadEnv(dirname(__DIR__).'/.env.test');
    } else {
        $dotenv->bootEnv(dirname(__DIR__).'/.env');
    }
}
