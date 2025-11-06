<?php require './includes/header.php'; ?>

    <main id="webshop">
        <section id="webshopnav">
            <div class="navbar">
            <ul class="shopmenu">
                <li><a href="#Webshop">Webshop</a></li>
            </ul>
                <button class="dark-button">Winkelwagen 🛒</button>
            </div>
        </section>

        <section id="searchbar">
            <form class="search-form" action="#" role="search">
                <input type="text" class="search-input" placeholder="Typ hier uw zoekopdracht" aria-label="Search"/>
                <button type="submit" class="search-button">Zoeken</button>
            </form>
        </section>

        <section id="adverts">
            <div class="adbox">
                <div class="aditem">
                    Laatste kans! Nu nog goedkoper!
                    <div class="adcontent tomato"></div>
                </div>
                <div class="aditem">
                    Halloween Actie!
                    <div class="adcontent halloween">
                        <img src="/assets/irasutoya/halloween_pompoen.png" alt="Drie halloween pompoenen">
                    </div>
                </div>
            </div>
        </section>

        <div class="divider">Categorieën</div>

        <section id="categories">
            <div class="catbox">
                <div class="catitem">Groenten
                    <div class="catselection">
                        <a href="/product-spinazie.php"><div class="catproduct"><img src="/assets/irasutoya/food_spinazie.png" alt="Afbeelding van een bos spinazie"><div class="productname">Spinazie</div></div></a>
                        <a href="/product-wortel.php"><div class="catproduct"><img src="/assets/irasutoya/food_wortel.png" alt="Afbeelding van een enkele wortel"><div class="productname">Wortels</div></div></a>
                        <a href="/product-aardappel.php"><div class="catproduct"><img src="/assets/irasutoya/food_aardappel.png" alt="Afbeelding van een aardappel"><div class="productname">Aardappelen</div></div></a>
                    </div>                  
                </div>
                <div class="catitem">Maaltijden
                    <div class="catselection">
                        <div class="catproduct"><img src="/assets/irasutoya/food_soep.png" alt="Afbeelding van een kop soep"><div class="productname">Soepen</div></div>
                        <div class="catproduct"><img src="/assets/irasutoya/food_stamppot.png" alt="Afbeelding van een bord met stamppot"><div class="productname">Stamppotten</div></div>
                        <div class="catproduct"><img src="/assets/irasutoya/food_salade.png" alt="Afbeelding van een bord wortelsalade"><div class="productname">Salades</div></div>
                    </div>
                </div>
                <div class="catitem">Fruit
                    <div class="catselection">
                        <div class="catproduct"><img src="/assets/irasutoya/food_appel.png" alt="Afbeelding van een appel"><div class="productname">Appels</div></div>
                        <div class="catproduct"><img src="/assets/irasutoya/food_peer.png" alt="Afbeelding van een peer"><div class="productname">Peren</div></div>
                        <div class="catproduct"><img src="/assets/irasutoya/food_kersen.png" alt="Afbeelding van een paar kersen"><div class="productname">Kersen</div></div>
                    </div>
                </div>
                <div class="catitem">Pakketten
                    <div class="catselection">
                        <div class="catproduct"><img src="/assets/irasutoya/box_s.png" alt="Afbeelding van een kleine kartonnen doos"><div class="productname">S</div></div>
                        <div class="catproduct"><img src="/assets/irasutoya/box_m.png" alt="Afbeelding van een open kartonnen doos"><div class="productname">M</div></div>
                        <div class="catproduct"><img src="/assets/irasutoya/box_l.png" alt="Afbeelding van een stapel dozen op een kleine vrachtwagen"><div class="productname">L</div></div>
                    </div>
                </div>
            </div>
        </section>
        
    </main>

    <?php require './includes/footer.php'; ?>