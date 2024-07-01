<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */
session_start();
require_once __DIR__ . '/vendor/autoload.php';

require "config/autoload.php";

// charge le contenu du .env dans $_ENV
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/config");
$dotenv->load();

$router = new Router();
$router->handleRequest($_GET);

