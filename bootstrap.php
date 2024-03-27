<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

require_once "vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: array(__DIR__."/src"),
    isDevMode: true,
);

$connection = DriverManager::getConnection([
    'driver' => "pdo_mysql",
    'dbname' => "phptest",
    'user' => $_ENV['DB_USER'],
    'password' => $_ENV["DB_PASSWORD"],
    'host' => $_ENV['DB_HOST']
], $config);

$entityManager = new EntityManager($connection, $config);