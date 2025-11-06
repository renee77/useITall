<footer>
    <div class="footer-main">
        <div class="footer-col footer-sitemap">
            <h3>Sitemap</h3>
            <ul>
              <li><a href="/index.php">Home</a></li>
              <li><a href="/webshop.php">Webshop</a></li>
              <li><a href="/recipe.php">Recepten</a></li>
              <li><a href="/faq.php">FAQ's</a></li>
              <li><a href="/community.php">Community</a></li>
              <li><a href="/lidmaatschap.php">Abonnementen</a></li>
              <li><a href="/contact.php">Contact</a></li>
              <li><a href="/over-ons.php">Over ons</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h3>Nieuwsbrief & Lidmaatschap</h3>
            <p><a id="subscribeLink" href="/lidmaatschap.php">Word lid voor extra voordelen!</a> </p>
            <p>Of schrijf je in voor onze nieuwsbrief:</p>
            <form id="newsletterForm">
                <label for="newsletterEmail" class="invisible">E-mailadres voor nieuwsbrief</label>
                <input type="email" id="newsletterEmail" placeholder="Emailadres" name="email" required/>    
                <button class="light-button" id="newsletter" type="submit">Inschrijven</button>
            </form>
            
        </div>
        <div class="footer-col">
            <h3>Adres & Contact</h3>
            <address>
                useITall<br>
                Hogeschoollaan 1<br>
                1234 AA Breda<br>
                Tel: 012-3456789
            </address>
            <p>Email: <a href="mailto:info@useitall.nl">info@useitall.nl</a></p>
            <button class="light-button contact">Neem nu contact op</button>
        </div>
    </div>
    <div class="footer-bottom">
        <img src="/assets/logo-licht-groen.svg" alt="UseITall logo" class="logo">
        <span>© 2025, useITall. Alle rechten voorbehouden.</span>
    </div>


    <!-- popup dat het inschrijven voor de nieuwsbrief is gelukt -->
    <div id="newsletterPopup" class="popup-overlay invisible" role="dialog" aria-modal="true" aria-labelledby="succes-title" aria-describedby="succes-desc">
        <div class="popup-content">
            <!-- het &times; is html voor het sluitteken de x  -->
            <!-- Het <span>‑element is van nature niet focusbaar via toetsenbordnavigatie.
            Door tabindex="0" toe te voegen, maak je het bereikbaar met de Tab‑toets.
            Dat is nodig omdat dit element dient als interactief element (in dit geval een sluitknop) -->
            <span class="close-btn" aria-label="venster sluiten" role="button" tabindex="0" >&times;</span> 
            <h3 id="succes-title">Inschrijven nieuwsbrief gelukt!</h3>
            <p id="succes-desc">U ontvang na vandaag wekelijks onze nieuwsbrief!</p>
            <img src="/assets/logo-donker-groen.png" alt="logo useITall">
        </div>
    </div>

</footer>

<script src="/script/header-footer.js"></script>

</body>
</html>