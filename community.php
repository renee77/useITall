<?php require "./includes/header.php"; ?>
  
  <main id="community">
    <!--The introduction of the page.-->
    <section class="introduction">
      <h1>De Community</h1>
      <p>Welkom bij de Community van useITall! Wij van useITall willen mensen motiveren om meer van hun groenten op te gebruiken en te kiezen voor biologische en lokale groenten. Buiten dat wij dit doen door lokale groenten aan te bieden via onze webshop, willen wij mensen die niets kopen ook helpen met het leveren van een bijdrage aan een wereld waar we iets minder gaan verspillen. Op deze pagina zal je recepten vinden om je groenten (verder) op te gebruiken, ideeën om onderdelen van de groenten te gebruiken die je niet kan eten, en zal je binnenkort ook je eigen ideeën kunnen delen!</p>
      <img src="./assets/community-firstPic.jpg" alt="Twee vrouwelijke boeren die elkaar aan het helpen zijn. Ze houden samen een tomaat vast en kijken naar deze tomaat.">
      <p class="apa">Foto door Pexels (Pexels, z.d.)</p>
    </section>

    <!-- The Recipes part of the page-->
    <section class="recipesSection">
      <h2>Recepten</h2>
      <!--A div with the goal of being able to flexbox the three recipes next to one another on big screens.-->
      <div class="recipeOptions">

        <!--A block for the recipes that can be repeated, as the base is the same-->
        <a href="./recipe-wortelsalade.php"><div class="recipeBlock">
          <img src="./assets/bowl-carrot-salad-tablecloth-marble-background.jpg" alt="een foto van een wortelsalade in een schaal. De schaal staat voor de helft op een wit-groen geblokt tafelkleed en voor de helft op een marble ondergrond">
          <div class="recipeBlock__background">
            <p class="recipleBlock__text">Wortelsalade</p>
          </div>
        </div></a>

        <a href="./recipe-wortelGroenPesto.php"><div class="recipeBlock">
          <img src="./assets/corrot-top-pesto-photo.jpg" alt="Een foto van een wit schaaltje met daarin groene pesto. Rond het schaaltje ligt een wortel, met het loof achter het bakje langs gelegd.">
          <p class="recipleBlock__text">Wortelloof pesto</p>
        </div></a>

        <a href="./recipe-wortelchips.php"><div class="recipeBlock">
          <img src="./assets/wortelchips.jpg" alt="Een afbeelding van wortelchips, met een aantal op de witte ondergrond en een aantal in een wit schaaltje.">
          <div class="recipeBlock__background">
            <p class="recipleBlock__text">Wortelchips</p>
          </div>
        </div></a>
      </div>
    </section>

    <!--The section where we will expand on the ideas that can help people use up more of their groceries-->
    <section class="ideasSection">
      <h2>Ideeën</h2>
      <p>Het is niet altijd mogelijk, of gewenst om met een recept de resten van je groenten op te gebruiken. Er zijn natuurlijk onderdelen van groenten die je niet mag eten, of die moeilijker te verwerken zijn. Daarom zal je binnenkort hier de aanvullende ideeën kunnen vinden om de resten van je groenten toch nog te kunnen gebruiken.</p>
      <img src="./assets/ideas-Image.png" alt="Een groene achtergrond met daarop maïs, tomaten, lente-ui, champginons, op een speelse manier door elkaar gelegd.">
      <p class="apa">Foto door Pexels (Pexels, z.d.)</p>
      <button class="dark-button" id="js-soonBtn" aria-label="Coming Soon button">Coming soon!</button>
      <span id="btn-click"></span>
    </section>

    <!-- A section with a small fact about food waste/being better for the environment etc.-->
    <section class="factSection">
      <h2>Wist je dat?</h2>
      <p>Nederlanders gooiden in 2018 voor ongeveer 2,5 miljard euro aan voedsel weg. Dat is per huishouden ruim € 340,00, en per persoon € 150,00! Dat komt neer op zo'n 50 kilo per persoon. Buiten dat om verspillen producten, tussenhandelaren, horeca en supermarken ook nog eens zo'n 2,5 miljard euro aan voedsel. Dat is 5 miljard euro per jaar!</p>
      <p class="apa">(Verwoerdt, 2018)</p>
      <!--(Verwoerdt, M. (2018, 27 oktober). 7 feitjes over voedeselverspilling die je nog niet kende. Geraadpleeg op 4 oktober 2025, van https://www.bedrock.nl/8-feitjes-voedselverspilling/)-->
    </section>

    <h2 class="comingSoon">More coming soon!</h2>

    <script src="./script/community.js/"></script>
  </main>
<?php require "./includes/footer.php"; ?>