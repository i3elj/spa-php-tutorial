<?php function navbar() { ?>
    <nav id="navigation-bar">
        <h1>My WebSite</h1>
        
        <div id="links">
            <div id="link-underline"></div>
        
            <label class="link-container">
                <input type="radio" name="links" value="home" marked />
                <span hx-post="/home"
					  hx-trigger="click[shift()] delay:800ms"
					  hx-target="#app"
					  hx-swap="innerHTML">Home</span>
            </label>
        
            <label class="link-container">
                <input type="radio" name="links" value="contact" />
                <span hx-post="/contact"
					  hx-trigger="click[shift()] delay:800ms"
					  hx-target="#app"
					  hx-swap="innerHTML">Contact Me!</span>
            </label>
			
            <label class="link-container">
                <input type="radio" name="links" value="thankyou" />
                <span hx-post="/thankyou"
					  hx-trigger="click[shift()] delay:800ms"
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
     }
    </script>
<?php } ?>
