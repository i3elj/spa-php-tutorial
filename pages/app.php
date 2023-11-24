<?php
require_once "pages/navbar.php";
?>

<!DOCTYPE html>
<html>
    <head>
	<title>Single Page Application in PHP and HTMX</title>
	<link rel="stylesheet" href="pages/style.css">
	<link rel="stylesheet" href="globals.css">
	<script src="https://unpkg.com/htmx.org@1.9.9"></script>
    </head>

    <body hx-post="/home" hx-trigger="load[appear()] once" hx-target="#app">
	<?= navbar() ?>
	<div id="app-wrapper">
	    <main id="app"></main>
	</div>
    </body>
    <script type="text/javascript" src="pages/app.js"></script>
</html>
