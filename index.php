<?php

ini_set('display_errors', 1);

// include the Composer autoloader
require 'vendor/autoload.php';

/**
 * -----------------------------------------------------------------------------
 * We need to include our dependency injection container set up file, the file
 * returns a fully configured container, therefore, we can assign it to a
 * variable.
 *
 * @see src/container.php
 * -----------------------------------------------------------------------------
 */
$container = include __DIR__ . '/src/container.php';
/**
 * -----------------------------------------------------------------------------
 * Once we have our fully configured container, we need to set up a route
 * collection. Again, our set up file will return a fully configured
 * object so we can assign it to a variable.
 *
 * @see src/routes.php
 * -----------------------------------------------------------------------------
 */
$route = include __DIR__ . '/src/routes.php';
/**
 * -----------------------------------------------------------------------------
 * From a route collection, we can request a dispatcher based on that
 * collection. With the dispatcher we can dispatch our current route.
 * -----------------------------------------------------------------------------
 */
$dispatcher = $route->getDispatcher();
$response = $dispatcher->dispatch(
    // HTTP Method (GET, POST, PUT, PATCH, DELETE etc)
    $container->get('Symfony\Component\HttpFoundation\Request')->getMethod(),
    // The request URI that we want to match from the collection (/something)
    $container->get('Symfony\Component\HttpFoundation\Request')->getPathInfo()
);
/**
 * -----------------------------------------------------------------------------
 * If there have been no errors or exceptions, the disptacher should have
 * returned a `Response` object with some content attached to it that
 * we can send to the browser.
 * -----------------------------------------------------------------------------
 */
$response->send();
