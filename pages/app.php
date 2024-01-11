<?php require_once "components/navbar.php"; ?>
<?php require_once "components/footer.php"; ?>
<!DOCTYPE html>
<html>
    <head>
		<title>MyWebSite</title>
		<link rel="stylesheet" href="pages/app.css">
		<link rel="stylesheet" href="pages/home/style.css">
		<link rel="stylesheet" href="pages/contact/style.css">
		<link rel="stylesheet" href="components/navbar.css">
		<link rel="stylesheet" href="components/footer.css">
		<link rel="stylesheet" href="globals.css">
		<script src="https://unpkg.com/htmx.org@1.9.9"></script>
    </head>

    <body hx-post="/home" hx-trigger="load[appear()] once" hx-target="#app">
		<?= navbar() ?>
		<div id="app-wrapper">
			<main id="app"></main>
		</div>
		<?= footer() ?>
    </body>
	
    <script type="text/javascript" src="pages/app.js"></script>
</html>
