<?php

$routes = [];
$routes['home']  = 'HomeViewController';
$routes['about'] = 'AboutViewController';
$routes['blog']  = 'BlogViewController';
$routes['post']  = 'PostViewController';

$pageId = $_GET['page'] ?: 'home';

$viewClass = $routes[$pageId];
$viewClassFile = 'controller/' . $viewClass . '.php';

include $viewClassFile;
$page = new $viewClass($pageId);
$page->render();