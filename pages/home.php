<!DOCTYPE html>
<html>
    <head>
	<title>Single Page Application in PHP and HTMX</title>
	<link rel="stylesheet" href="pages/home.css">
	<link rel="stylesheet" href="globals.css">
    </head>

    <body>
	<nav id="navigation-bar">
	    <h1>SPA in PHP and HTMX</h1>
	    <div>
		<div id="link-underline"></div>
		<label class="link-container">
		    <input type="radio" name="links" value="home" marked />
		    <span hx-post="/" hx-swap="innerHTML" hx-target="#app">Home</span>
		</label>
		<label class="link-container">
		    <input type="radio" name="links" value="contact" />
		    <span hx-post="/contact" hx-swap="innerHTML" hx-target="#app">Contact us!</span>
		</label>
		<label class="link-container">
		    <input type="radio" name="links" value="thankyou" />
		    <span hx-post="/thankyou" hx-swap="innerHTML" hx-target="#app">Thank You</span>
		</label>
		<script>
		 var underline = document.querySelector("#link-underline")
		 document.querySelectorAll(".link-container span").forEach(element => {
		       element.addEventListener('click', e => {
			     underline.style.width = e.target.offsetWidth + "px";
			     underline.style.left = e.target.offsetLeft + "px";
			     underline.style.top = e.target.offsetHeight + 28 + "px";
		       })
		 })
		</script>
	    </div>
	</nav>

	<main id="app"></main>
    </body>
    <script src="https://unpkg.com/htmx.org@1.9.9"></script>
</html>
