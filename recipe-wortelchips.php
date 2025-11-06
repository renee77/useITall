<?php require './includes/header.php'; ?>
  <main id="recipe">
    <!--Breadcrumbs to return to where you were-->
    <section class="breadcrumbs">
      <a href="./index.php">Home</a> > <a href="./community.php">Community en recepten</a> > <a href="./recipe-wortelchips.php">Wortelchips</a>
    </section>
    <!--The section where you put the information about the recipe, as well as have an image present-->
    <section class="recipePage">
      <section class="recipeText">
        <h1>Wortelchips van de schillen</h1>
        <p>Wortelchips van wortelschillen zijn een smakelijke en duurzame snack, waarbij je de schillen van wortels gebruikt om knapperige chips te maken. Deze gezonde lekkernij is eenvoudig te bereiden en ideaal als tussendoortje zonder onnodige toevoegingen.</p>
        <p class="cookingTime">Bereidingstijd: <br>
                                Voorbereidingstijd: 5 minuten <br>
                                Baktijd: 10-15 minuten <br>
                                Totaal: circa 15-20 minuten</p>
        <div class="imageSize">
          <img class="recipeImage" src="./assets/wortelchips.jpg" alt="Een afbeelding van wortelchips, met een aantal op de witte ondergrond en een aantal in een wit schaaltje.">
        </div>
        <!-- Freepik. (z.d.). Carrot chips [Fotografie]. Geraadpleegd op 5 oktober 2025, van https://www.freepik.com/free-photos-vectors/carrot-chips
         -->
        <p class="apa">Foto by XYZ</p>
      </section>

      <hr />

      <!--The main section (which will be used for grid distribution) where you can find the Ingrediënten, Bereiding and Voedingswaarden -->
      <section class="mainSection">
        <aside class="preperationInfo">
          <section class="Ingredients">
            <h2>Ingrediënten</h2>
            <ul> 
                <li>Schillen van 3-4 wortels</li> 
                <li>1-2 eetlepels olijfolie</li> 
                <li>Grof zeezout naar smaak</li> 
            </ul>

            <h2 class="foodInformation">Voedingswaarden per 100gr wortelchips</h2>
            <ul> 
                <li>Calorieën: ongeveer 70-110 kcal</li> 
                <li>Eiwitten: 1 gram</li> 
                <li>Vetten: 4-8 gram (door de olie)</li> 
                <li>Koolhydraten: 8-12 gram</li> 
                <li>Vezels: 2-3 gram</li> 
            </ul>
          </section>
        </aside>

        <section class="preperation">
          <h2>Bereiding</h2>
            <ol> 
                <li>Verwarm de oven voor op 180 graden Celsius.</li> 
                <li>Gebruik een dunschiller om dunne slierten van de wortelschillen te maken.</li> 
                <li>Verdeel de wortelslierten gelijkmatig over een met bakpapier beklede bakplaat. Ze mogen elkaar licht raken, want ze krimpen nog tijdens het bakken.</li> 
                <li>Bestrijk de slierten dun met olijfolie met een kwastje.</li> 
                <li>Bestrooi met grof zeezout naar smaak.</li> 
                <li>Bak ze ongeveer 10 tot 15 minuten in het midden van de oven. Houd ze goed in de gaten, ze moeten knapperig en licht goudbruin worden. Is de kleur al te donker terwijl ze nog vochtig zijn, dek dan af met bakpapier.</li> 
                <li>Laat de wortelchips 5 minuten afkoelen buiten de oven zodat ze nog krokanter worden.</li> 
                <li>Serveertip: meteen eten voor de beste knapperigheid.</li> 
            </ol>
        </section>

      </section>
    </section>
  </main>
<?php require './includes/footer.php'; ?>