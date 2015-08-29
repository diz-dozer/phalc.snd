<?php


error_reporting(E_ALL);

try {
    $config = include __DIR__ . "/../../app/config/config.php";

    include __DIR__ . "/../../app/config/loader.php";
    include __DIR__ . "/../../app/config/services.php";

    $app = new \Phalcon\Mvc\Application();
    $app->setDI($di);
    echo $app->handle()->getContent();

} catch (Phalcon\Exception $e) {
    echo $e->getMessage();
} catch (PDOException $e) {
    echo $e->getMessage();
}