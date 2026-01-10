<?php require './includes/header.php'; ?>

    <main id="webshop">
        <section id="webshopnav">
            <div class="navbar">
            <ul class="shopmenu">
                <li><a href="/webshop.php">Webshop</a></li>
                <li><a href="#">Groenten</a></li>
                <li><a href="#">Aardappelen</a></li>
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
                        style="background-image:url('/assets/irasutoya/food_aardappel.png')">
                    </div>
                </section>
        
                <section class="product-details">
                    <h1 class="title" id="json-title">EMPTY</h1>
                    <p class="sku">SKU: <span id="json-SKU">EMPTY</span></p>
        
                    <div class="price-stock">
                        <p class="price" id="json-price">€999.99</p>
                        <p class="stock" id="json-stock">ERROR</p>
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
                        <p id="json-description">EMPTY</p>
                    </div>
        
                    <div class="specs">
                        <h2 class="section-title">Bron</h2>
                        <p id="json-source">EMPTY</p>
                    </div>
                </section>
            </div>
        </section>
        <script src="script/product-fetch.js"></script>
    </main>

    <?php require './includes/footer.php'; ?>