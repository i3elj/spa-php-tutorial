<?php

function dd(...$args)
{
      echo "<pre>";
      var_dump(...$args);
      echo "</pre>";
      die();
}

$path = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
      ['path' => '/', 'page' => 'pages/home.php']
];

foreach ($routes as $route)
{

      if ($path == '/' && $_SERVER['REQUEST_METHOD'] == 'POST') echo '<h1>Hello Home</h1>';
      if ($path == '/contact' && $_SERVER['REQUEST_METHOD'] == 'POST' ) echo '<h1>Contact Us</h1>';
      if ($path == '/thankyou' && $_SERVER['REQUEST_METHOD'] == 'POST') echo '<h1>Thank you</h1>';

      if ($path == $route['path'] && $_SERVER['REQUEST_METHOD'] == 'GET') {
	    require_once $route['page'];
      }
      exit(0);
}
