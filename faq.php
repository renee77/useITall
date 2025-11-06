<!-- ==========================
     Pagina: FAQ
     Stylesheet: faq.css
     Project: Use-IT-All
     Auteur: Timo van der Lugt
     Laatste wijziging: 11-10-2025
=========================== -->

<?php require "./includes/header.php"; ?>

<main id="faq">
    <section class="faq-banner">
        <div class="faq-banner-inhoud">
            <h1>Veelgestelde vragen</h1>
        </div>
    </section>
    <section class="faq">
        <div class="container">
            <div class="faq-layout">

                <div class="faq-intro">
                    <p class="klein-label">Samen voor een beter milieu</p>
                    <h2 class="kop">Veelgestelde vragen</h2>
                    <p class="faq-tekst">
                        Hier vind je antwoorden op de meest voorkomende vragen over onze werkwijze, producten en missie.
                        We leggen je uit hoe wij samenwerken met lokale boeren, hoe onze pakketten worden
                        samengesteld en hoe jij met een klein gebaar een groot verschil kunt maken.
                        Bij Use-IT-All geloven we namelijk dat niets van waarde verloren mag gaan, en zeker geen goed
                        voedsel. <br><br>
                        Heb je nog andere vragen of suggesties? Neem gerust contact op, we helpen je graag verder!
                    </p>
                    <ul class="faq-punten">
                        <li><b>✓ Levering binnen 24 uur</b></li>
                        <li><b>✓ Abonnement altijd pauzeren</b></li>
                        <li><b>✓ Lokale boeren, seizoensproducten</b></li>
                    </ul>


                    <div class="faq-hulp">
                        <span>Niet gevonden wat je zocht?</span>
                        <a class="knop-hulp" href="/contact">Neem contact op</a>
                    </div>
                </div>


                <div class="faq-lijst">
                    <input id="faq-zoeken" type="search" placeholder="Zoek in veelgestelde vragen…"
                           aria-label="Zoek in veelgestelde vragen" class="faq-zoek">
                    <!-- Wat is het doel van useITall? -->
                    <div class="faq-item">
                        <button class="faq-vraag" aria-expanded="false">
                            <span class="faq-titel">Wat is het doel van useITall?</span>
                            <span class="faq-icoon" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-antwoord">
                            <div class="faq-antwoord-inhoud">
                                <p>
                                    Wij willen voedselverspilling tegengaan door groenten en fruit te redden die boeren
                                    anders niet meer kunnen verkopen. Zo krijgen deze producten alsnog een bestemming,
                                    en help jij direct mee aan een duurzamer voedselsysteem.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Hoe werkt het precies? -->
                    <div class="faq-item">
                        <button class="faq-vraag" aria-expanded="false">
                            <span class="faq-titel">Hoe werkt het precies?</span>
                            <span class="faq-icoon" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-antwoord">
                            <div class="faq-antwoord-inhoud">
                                <p>
                                    Wij halen overgebleven groenten rechtstreeks bij lokale boeren op. Deze worden
                                    zorgvuldig samengesteld in groentenboxen die klanten wekelijks kunnen afhalen bij
                                    een pakketpunt. Zo gaat er niets verloren én steun je boeren uit de regio. </p>
                            </div>
                        </div>
                    </div>
                    <!-- Hoe sluit ik een abonnement af? -->
                    <div class="faq-item">
                        <button class="faq-vraag" aria-expanded="false">
                            <span class="faq-titel">Hoe sluit ik een abonnement af?</span>
                            <span class="faq-icoon" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-antwoord">
                            <div class="faq-antwoord-inhoud">
                                <p>
                                    Je kunt op onze website eenvoudig een abonnement kiezen dat bij jou past. Vul je
                                    gegevens in, kies een afhaalpunt en betaal via de gewenste methode, wij regelen de
                                    rest! </p>
                            </div>
                        </div>
                    </div>
                    <!-- Kan ik mijn abonnement pauzeren of stopzetten? -->
                    <div class="faq-item">
                        <button class="faq-vraag" aria-expanded="false">
                            <span class="faq-titel">Kan ik mijn abonnement pauzeren of stopzetten?</span>
                            <span class="faq-icoon" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-antwoord">
                            <div class="faq-antwoord-inhoud">
                                <p>
                                    Ja, dat kan op elk moment. In je persoonlijke dashboard kun je het abonnement
                                    tijdelijk pauzeren (bijvoorbeeld tijdens een vakantie) of volledig stopzetten,
                                    zonder extra kosten. </p>
                            </div>
                        </div>
                    </div>
                    <!-- Kan ik mijn afhaalpunt later nog wijzigen? -->
                    <div class="faq-item">
                        <button class="faq-vraag" aria-expanded="false">
                            <span class="faq-titel">Kan ik mijn afhaalpunt later nog wijzigen?</span>
                            <span class="faq-icoon" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-antwoord">
                            <div class="faq-antwoord-inhoud">
                                <p>
                                    Zeker. Je kunt in je account altijd een ander pakketpunt selecteren dat handiger
                                    voor je is. De wijziging gaat direct in voor je volgende levering.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Hoe kan ik betalen voor mijn groentenbox? -->
                    <div class="faq-item">
                        <button class="faq-vraag" aria-expanded="false">
                            <span class="faq-titel">Hoe kan ik betalen voor mijn groentenbox?</span>
                            <span class="faq-icoon" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-antwoord">
                            <div class="faq-antwoord-inhoud">
                                <p>
                                    Je kunt betalen via automatische overschrijving, creditcard of PayPal. Betalingen
                                    worden veilig verwerkt, en je ontvangt na elke transactie een bevestiging per
                                    e-mail.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Waar komen de producten vandaan? -->
                    <div class="faq-item">
                        <button class="faq-vraag" aria-expanded="false">
                            <span class="faq-titel">Waar komen de producten vandaan?</span>
                            <span class="faq-icoon" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-antwoord">
                            <div class="faq-antwoord-inhoud">
                                <p>
                                    Al onze producten komen van lokale boeren uit Nederland. We werken uitsluitend met
                                    telers die duurzame teeltmethoden gebruiken en eerlijke prijzen ontvangen voor hun
                                    producten. </p>
                            </div>
                        </div>
                    </div>
                    <!-- Zijn de producten altijd biologisch? -->
                    <div class="faq-item">
                        <button class="faq-vraag" aria-expanded="false">
                            <span class="faq-titel">Zijn de producten altijd biologisch?</span>
                            <span class="faq-icoon" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-antwoord">
                            <div class="faq-antwoord-inhoud">
                                <p>
                                    Niet alle boeren zijn officieel biologisch gecertificeerd, maar bijna allemaal
                                    werken ze zonder chemische bestrijdingsmiddelen. Onze focus ligt op lokaal, vers en
                                    verspilling voorkomen. </p>
                            </div>
                        </div>
                    </div>
                    <!-- Wat gebeurt er met de groenten die overblijven bij jullie? -->
                    <div class="faq-item">
                        <button class="faq-vraag" aria-expanded="false">
                            <span class="faq-titel">Wat gebeurt er met de groenten die overblijven bij jullie?</span>
                            <span class="faq-icoon" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-antwoord">
                            <div class="faq-antwoord-inhoud">
                                <p>
                                    Wij proberen alles te verdelen over de bestellingen. Mochten er onverhoopt nog
                                    restanten zijn, dan doneren we deze aan lokale voedselbanken of sociale
                                    initiatieven. </p>
                            </div>
                        </div>
                    </div>
                    <!-- Kan ik mijn box laten bezorgen in plaats van afhalen? -->
                    <div class="faq-item">
                        <button class="faq-vraag" aria-expanded="false">
                            <span class="faq-titel">Kan ik mijn box laten bezorgen in plaats van afhalen?</span>
                            <span class="faq-icoon" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-antwoord">
                            <div class="faq-antwoord-inhoud">
                                <p>
                                    Op dit moment werken we met vaste afhaalpunten om transportkosten en CO₂-uitstoot te
                                    beperken. In de toekomst willen we duurzame bezorgopties aanbieden met elektrische
                                    voertuigen.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

<script src="/script/over-ons-faq.js"></script>
<?php require "./includes/footer.php"; ?>
