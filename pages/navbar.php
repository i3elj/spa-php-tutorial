<?php

function navbar() { ?>
    <nav id="navigation-bar">
	<h1>My WebSite</h1>
	<div>
	    <div id="link-underline"></div>
	    <label class="link-container">
		<input type="radio" name="links" value="home" marked />
		<span hx-post="/home"
		      hx-trigger="click[eventTest()] delay:800ms"
		      hx-target="#app"
		      hx-swap="innerHTML">Home</span>
	    </label>
	    <label class="link-container">
		<input type="radio" name="links" value="contact" />
		<span hx-post="/contact"
		      hx-trigger="click[eventTest()] delay:800ms"
		      hx-target="#app"
		      hx-swap="innerHTML">Contact us!</span>
	    </label>
	    <label class="link-container">
		<input type="radio" name="links" value="thankyou" />
		<span hx-post="/thankyou"
		      hx-trigger="click[eventTest()] delay:800ms"
		      hx-target="#app"
		      hx-swap="innerHTML">Thank You</span>
	    </label>
	</div>
    </nav>
    
    <script>
     var underline = document.querySelector("#link-underline")
     var spans = document.querySelectorAll(".link-container span")
     spans.forEach(el => el.addEventListener('click', e => offsetUnderline(e)))
     const offsetUnderline = e => {
	   underline.style.width = e.target.offsetWidth + "px";
	   underline.style.left = e.target.offsetLeft + "px";
	   underline.style.top = e.target.offsetHeight + 28 + "px";
     }
    </script>
<?php } ?>
