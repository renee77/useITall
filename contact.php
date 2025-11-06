<!-- ==========================
     Pagina: Contact
     Stylesheet: contact.css
     Project: Use-IT-All
     Auteur: Timo van der Lugt
     Laatste wijziging: 10-10-2025
=========================== -->

<?php require "./includes/header.php"; ?>


<main id="contact">
    <section class="contact-banner">
        <div class="contact-banner-inhoud">
            <h1>Contact opnemen</h1>
        </div>
    </section>
    <section class="contact">
        <div class="container contact-indeling">

            <div class="contact-tekst">
                <p class="klein-label">Neem contact op</p>
                <h2 class="kop">We horen graag van je</h2>
                <p class="uitleg">
                    Vragen over onze groentenboxen, abonnement of afhaalpunten?
                    Stuur ons een bericht via het formulier of gebruik de gegevens hieronder.
                    We reageren meestal binnen één werkdag.
                </p>

                <ul class="contact-gegevens">
                    <li>
                        <strong>E-mail</strong><br>
                        <a href="mailto:hallo@use-it-all.nl">hallo@use-it-all.nl</a>
                    </li>
                    <li>
                        <strong>Telefoon</strong><br>
                        <a href="tel:+310851234567">085 – 123 45 67</a>
                    </li>
                    <li>
                        <strong>Adres</strong><br>
                        Hogeschoollaan 1, 4818 CR Breda
                    </li>
                    <li>
                        <strong>Bereikbaarheid</strong><br>
                        Ma–Vr 09:00–17:00
                    </li>
                </ul>

                <p class="tip">
                    Tip: staat je vraag al in onze <a href="/faq.php">Veelgestelde vragen</a>?
                </p>

                <div class="maps" style="width: 100%">
                    <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?width=100%25&amp;height=300&amp;hl=en&amp;q=Hogeschoollaan%201,%204818%20CR%20Breda,%20Nederland+(useITall)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                    </iframe>
                </div>
            </div>


            <div class="contact-formulier-kaart">
                <form class="contact-formulier" method="post" action="#">
                    <!-- Ik heb nog geen action toegevoegd aan het formulier, dus na het invullen gebeurt er niks -->

                    <div class="veldgroep">
                        <label for="naam">Naam</label>
                        <input id="naam" name="naam" type="text" placeholder="Voor- en achternaam" required>
                    </div>

                    <div class="veldgroep">
                        <label for="email">E-mail</label>
                        <input id="email" name="email" type="email" placeholder="naam@voorbeeld.nl" required>
                    </div>

                    <div class="veldgroep">
                        <label for="telefoon">Telefoon (optioneel)</label>
                        <input id="telefoon" name="telefoon" type="tel" placeholder="06 12345678">
                    </div>

                    <div class="veldgroep">
                        <label for="onderwerp">Onderwerp</label>
                        <input id="onderwerp" name="onderwerp" type="text" placeholder="Bijv. Abonnement pauzeren"
                               required>
                    </div>

                    <div class="veldgroep">
                        <label for="bericht">Bericht</label>
                        <textarea id="bericht" name="bericht" rows="6" placeholder="Schrijf hier je bericht…"
                                  required></textarea>
                    </div>

                    <div class="veldgroep rij">
                        <label class="checkbox-label">
                            <input type="checkbox" required>
                            Ik ga akkoord met de privacyverklaring</a>
                        </label>
                    </div>

                    <button class="knop-verstuur" type="submit">Verstuur bericht</button>
                </form>
            </div>

        </div>
    </section>

</main>


<?php require "./includes/footer.php"; ?>
