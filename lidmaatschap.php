<!-- ==========================
     Pagina: Lidmaatschap
     Stylesheet: Lidmaatschap.css
     Project: Use-IT-All
     Auteur: Serdar Kalin
     Laatste wijziging: 25-10-2025
=========================== -->

<?php require "./includes/header.php"; ?>

  <main id="lidmaatschap" aria-labelledby="pricing-heading"> 
    <!-- Introductie -->
    <section class="intro container">
      <h1 class="intro_title">Overzicht van prijzen</h1>
      <p class="intro_subtitle">
        Verbeter jij met ons de wereld, om de aarde beter te maken?</p>
      <p class="intro_subtitle">Word lid en draag bij aan ons <strong>steward-programma:</strong> wij zetten ons in om duurzame producten te leveren, lokale boeren te ondersteunen en de aarde elke dag een stukje groener te maken.</p>
    </section>

    <!-- Prijzen -->
    <section class="pricing container" aria-labelledby="pricing-heading">
      <h2 id="pricing-heading" class="visually-hidden">Prijstabellen</h2>
      
              <!-- Toggle voor betaalperiode -->
        <div class="billing-toggle" role="group" aria-label="Kies betaalperiode">
            <span class="billing-label billing_label-left">Maandelijks</span>
              <label class="switch">
                <input type="checkbox" id="billingSwitch" aria-label="Schakel naar jaarlijkse betaling">
                <span class="slider"></span>
              </label>
            <span class="billing-label billing_label-right" aria-hidden="true">Jaarlijks</span>
        </div>

      <div class="membership-options">
        
        <!-- Basis -->
        <article class="membership-card" aria-labelledby="plan-basic-title">
            <header class="membership-card_header">
              <h3 class="membership-card_title">Basis</h3>
            </header>

            <div class="membership-card_price" aria-label="Prijs: 44 euro 99 per maand">
                <span class="price_amount">€44,99</span>
                <span class="price_period">/maand</span>
            </div>

          <p class="membership-card_info">
            Word lid en geniet elke week van verse, seizoensgebonden ingrediënten en verrassende recepten.</p>

              <ul class="membership-card_features" aria-label="Voordelen van het basispakket">
                  <li>Maat S pakket</li>
                  <li>Bestellen</li>
                  <li>Steward-ownership</li>
                  <li>Wekelijkse recepten</li>
              </ul>

          <div class="membership-card_action">
            <button type="button" class="dark-button js-open-signup" data-plan="basis">Kies</button>
          </div>
        </article>

        <!-- Populair -->
        <article class="membership-card membership-card-highlighted populair" aria-labelledby="Aanbevolen/Meest gekozen">
          <header class="membership-card_header">
            <p class="membership-card_meest">Meest gekozen</p>
            <h3 class="membership-card_title">Plus<br></h3>
          </header>

          <div class="membership-card_price" aria-label="Prijs: 67 euro 99 per maand">
            <span class="price_amount">€67,99</span>
            <span class="price_period">/maand</span>
          </div>

          <p class="membership-card_info">
            Kies voor net wat extra's met exclusieve hotpick-recepten elke week
          </p>

          <ul class="membership-card_features" aria-label="Voordelen van het pluspakket">
              <li>Maat M pakket</li>
              <li>Bestellen</li>
              <li>Steward-ownership</li>
              <li>Wekelijkse recepten</li>
              <li>Hotpick-recept in het pakket</li>
          </ul>

            <div class="membership-card_action">
            <button type="button" class="dark-button js-open-signup" data-plan="plus">Kies</button>
          </div>
        </article>

        <!-- Premium -->
        <article class="membership-card" aria-labelledby="plan-premium-title">
          <header class="membership-card_header">
            <h3 class="membership-card_title">Premium</h3>
          </header>
          
          <div class="membership-card_price" aria-label="Prijs: 75 euro 99 per maand">
              <span class="price_amount">€75,99</span>
              <span class="price_period">/maand</span>
          </div>

          <p class="membership-card_info">
            Ga voor het premium pakket met de meeste recepten en spaarpunten voor nog meer voordeel</p>

                <ul class="membership-card_features" aria-label="Voordelen van het premiumpakket">
                  <li>Maat L pakket</li>
                  <li>Bestellen</li>
                  <li>Steward-ownership</li>
                  <li>Wekelijkse recepten</li>
                  <li>Hotpick-recept in het pakket</li>
                  <li>75+ extra recepten</li>
                  <li>Verzamel punten</li>
              </ul>

          <div class="membership-card_action">
            <button type="button" class="dark-button js-open-signup" data-plan="premium" aria-label="Kies voor het premiumpakket">Kies</button>

          </div>
        </article>
      </div>
    </section>
    
    <!-- Hoe het werkt -->
    <section class="how-it-works-wrapper" role="region" aria-labelledby="how-title">
      <div class="how-it-works container">
        <h2 class="how-title">Hoe het werkt</h2>
            <div class="how-steps" role="list" aria-label="Stappen om lid te worden en duurzame producten te ontvangen">
              
                  <div class="how-step" role="listitem" aria-label="Stap 1: Word lid">
                      <span class="how-number" aria-hidden="true">1</span>
                      <p><strong>Word lid:</strong> Kies het pakket dat bij jou past en sluit je aan bij onze community.</p>
                  </div>

                  <div class="how-step" role="listitem" aria-label="Stap 2: Wij verzamelen">
                      <span class="how-number" aria-hidden="true">2</span>
                      <p><strong>Wij verzamelen:</strong> Onze stewards selecteren verse, lokale producten.</p>
                  </div>

                  <div class="how-step" role="listitem" aria-label="Stap 3: Ontvang en geniet">
                      <span class="how-number" aria-hidden="true">3</span>
                      <p><strong>Ontvang & geniet:</strong> Krijg wekelijks een box met seizoensgebonden ingrediënten.</p>
                  </div>

                  <div class="how-step" role="listitem" aria-label="Stap 4: Draag bij">
                      <span class="how-number" aria-hidden="true">4</span>
                      <p><strong>Draag bij:</strong> Met elke bestelling steun je duurzame landbouw en minder verspilling.</p>
              </div>

    </div>
  </div>
</section>

  <!--Wist je dat-->
  <section class="Wist-je-dat-LD_wrapper" role="region" aria-labelledby="wist-title" aria-describedby="wist-desc">
    <div class="Wist-je-dat-LD container">
      <h2 id="wist-title" class="Wist-je-dat-LD_title">Wist je dat?</h2>
      <p id="wist-desc" class="Wist-je-dat-LD_p">
        Nederlanders gooiden in 2018 voor ongeveer 2,5 miljard euro aan voedsel weg. Dat is per huishouden ruim €340,00, en per persoon €150,00! Dat komt neer op zo'n 50 kilo per persoon. Daarnaast verspillen producenten, tussenhandelaren, horeca en supermarkten ook nog eens zo'n 2,5 miljard euro aan voedsel — in totaal 5 miljard euro per jaar!</p>
        <div class="Bron">(Verwoerdt, 2018)</div>
    </div>
  </section>

          <!-- Pop-up voor aanmelden knoppen in de kaarten -->
          <div id="signupModal" class="signup-modal-overlay is-hidden" role="dialog" aria-modal="true" aria-labelledby="signup-title" aria-describedby="signup-desc">
            <div class="signup-modal">
              <!-- Sluit knop -->
              <button type="button" class="signup-close js-close-signup" aria-label="Venster sluiten">&times;</button>

              <h2 id="signup-title" class="signup-title">Aanmelden</h2>
              <p id="signup-desc" class="signup-desc">Vul hieronder je gegevens in om lid te worden.</p>

            <!-- Aanmeldformulier -->

              <form id="signup-form" class="signup-form" novalidate>
              <!-- Dit wordt automatisch gevuld via JS op basis van welke kaart is gekozen -->
                <input type="hidden" name="plan" id="signup-plan" value="basis">

                    <label for="signup-name">Naam</label>
                    <input id="signup-name" name="naam" type="text" required placeholder="Voor- en achternaam">

                    <label for="signup-email">E-mail</label>
                    <input id="signup-email" name="email" type="email" required placeholder="jij@voorbeeld.nl">

                    <label for="signup-phone">Telefoonnummer</label>
                    <input id="signup-phone" name="telefoon" type="tel" placeholder="06 12345678">

                    <label for="signup-period">Betaalperiode</label>
                  <select id="signup-period" name="periode">
                    <option value="maand">Maandelijks</option>
                    <option value="jaar">Jaarlijks</option>
                  </select>

                <button type="submit" class="dark-button">Lid worden</button>

              </form>
            </div>
          </div>
  </main>

  <script src="script/lidmaatschap.js"></script>
  
<?php require "./includes/footer.php"; ?>