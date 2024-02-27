<?php
require_once "lib.php";
require_once "components/navbar.php";
require_once "components/footer.php";

$path = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
	['path' => '/contact', 'page' => 'pages/contact/index.php'],
	['path' => '/home', 'page' => 'pages/home/index.php'],
	['path' => '/thankyou', 'page' => 'pages/thankyou/index.php'],
];

if ($path == '/') require_page('pages/app.php');

foreach ($routes as $route)
	if ($path == $route['path']) require_page($route['page']);

_404();
