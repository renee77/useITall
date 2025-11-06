<?php require './includes/header.php'; ?>

    <main id="webshop">
        <section id="webshopnav">
            <div class="navbar">
            <ul class="shopmenu">
                <li><a href="/webshop.php">Webshop</a></li>
                <li><a href="#">Groenten</a></li>
                <li><a href="#">Wortel</a></li>
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

        <section id="product">
            <div class="container">
                <section class="product-gallery" aria-label="Product images">
                    <div class="main-image" role="img" aria-label="Primary product image"
                        style="background-image:url('/assets/irasutoya/food_wortel.png')">
                    </div>
                </section>
        
                <section class="product-details">
                    <h1 id="product-title" class="title">Wortels</h1>
                    <p class="sku">SKU: <span>12345</span></p>
        
                    <div class="price-stock">
                        <p class="price">€3.99</p>
                        <p class="stock out-of-stock">Uitverkocht!</p>
                    </div>
        
                    <div class="options">
                        <label for="qty" class="option-label">Quantity</label>
                        <input id="qty" class="qty" type="number" min="1" value="1" />
                    </div>
        
                    <div class="actions">
                        <button class="btn add-to-cart" type="button" aria-label="Add to cart">In mijn Winkelwagen</button>
                    </div>
        
                    <div class="description">
                        <h2 class="section-title">Beschrijving</h2>
                        <p>Heerlijk biologische wortels, lekker om op te knagen. Uitstekend in een roerbak maaltijd!.</p>
                    </div>
        
                    <div class="specs">
                        <h2 class="section-title">Bron</h2>
                        Geteeld door Boer Smit uit Den Bosch.
                    </div>
                </section>
            </div>
        </section>

    </main>

    <?php require './includes/footer.php'; ?>