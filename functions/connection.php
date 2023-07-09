<?php
function connection()
{
    // DOTENV
    require_once '../vendor/autoload.php';
    $path = dirname(__FILE__, 2);
    $dotenv = Dotenv\Dotenv::createUnsafeImmutable($path);
    $dotenv->load();
    // conexao com banco de dados
    $arr = array(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASSWORD'), getenv('DB_DATABASE'));
    return $arr;
}
