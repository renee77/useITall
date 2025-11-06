<?php require "./includes/header.php"; ?>

  <main class="mainRecipes">
    <section class="headingIntro">
      <h1>Alle recepten</h1>
      <p>Vind hier alle recepten van useITall! Filter binnenkort op groenten, soorten gerechten en nog meer!</p>
    </section>
    <aside class="filters">
      <h4>Groente</h4>
      <!--Here you can find a simple nonfunctional filter system. With the input being the checkbox, and it being labeled with the name.-->
      <input type="checkbox" name="wortel" value="wortel" checked>
      <label for="wortel">Wortel</label> <br />

      <input type="checkbox" name="paprika" value="paprika">
      <label for="paprika">Paprika</label> <br />

      <input type="checkbox" name="ui" value="ui">
      <label for="ui">Ui</label> <br />

      <input type="checkbox" name="bloemkool" value="bloemkool">
      <label for="bloemkool">Bloemkool</label> <br />

      <input type="checkbox" name="sperziebonen" value="sperziebonen">
      <label for="sperziebonen">Sperziebonen</label> <br />

      <input type="checkbox" name="spinazie" value="spinazie">
      <label for="spinazie">Spinazie</label> <br />

      <h4>Gerecht</h4>
      <input type="checkbox" name="voorgerecht" value="voorgerecht" checked>
      <label for="voorgerecht">Voorgerecht</label> <br />

      <input type="checkbox" name="hoofdgerecht" value="hoofdgerecht" checked>
      <label for="hoofdgerecht">Hoofdgerecht</label> <br />

      <input type="checkbox" name="bijgerecht" value="bijgerecht" checked>
      <label for="bijgerecht">Bijgerecht</label> <br />

      <input type="checkbox" name="nagerecht" value="nagerecht">
      <label for="nagerecht">Nagerecht</label> <br />
    </aside>
    <div class="recipeOptions">

        <!--A block for the recipes that can be repeated, as the base is the same-->
        <a href="./recipe-wortelsalade.php"><div class="recipeBlock">
          <img src="./assets/bowl-carrot-salad-tablecloth-marble-background.jpg" alt="een foto van een wortelsalade in een schaal. De schaal staat voor de helft op een wit-groen geblokt tafelkleed en voor de helft op een marble ondergrond">
          <div class="recipeBlock__background">
            <p class="recipeBlock__text">Wortelsalade</p>
          </div>
        </div></a>

        <a href="./recipe-wortelGroenPesto.php"><div class="recipeBlock">
          <img src="./assets/corrot-top-pesto-photo.jpg" alt="Een foto van een wit schaaltje met daarin groene pesto. Rond het schaaltje ligt een wortel, met het loof achter het bakje langs gelegd.">
          <p class="recipeBlock__text">Wortelloof pesto</p>
        </div></a>

        <a href="./recipe-wortelchips.php"><div class="recipeBlock">
          <img src="./assets/wortelchips.jpg" alt="Een afbeelding van wortelchips, met een aantal op de witte ondergrond en een aantal in een wit schaaltje.">
          <div class="recipeBlock__background">
            <p class="recipeBlock__text">Wortelchips</p>
          </div>
        </div></a>
      </div>
  </main>
<?php require "./includes/footer.php"; ?>