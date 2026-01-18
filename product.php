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
                    <div id="productImage" class="main-image" role="img" aria-label="Primary product image"
                        style="background-image:url('/assets/irasutoya/food_aardappel.png')">
                    </div>
                </section>
        
                <section class="product-details">
                    <h1 class="title" id="productTitle">ProductNaam</h1>
                    <p class="sku">SKU: <span id="productSKU">PROD-0000</span></p>
        
                    <div class="price-stock">
                        <p class="price" id="productPrice">€--.--</p>
                        <p class="stock out-of-stock" id="productAvailable"></p>
                    </div>
        
                    <div class="options">
                        <label for="qty" class="option-label">Aantal</label>
                        <input id="qty" class="qty" type="number" min="1" value="1" />
                    </div>
        
                    <div class="actions">
                        <button class="btn add-to-cart" type="button" aria-label="Add to cart">In mijn Winkelwagen</button>
                    </div>
        
                    <div class="description">
                        <h2 class="section-title">Beschrijving</h2>
                        <p id="productDescription">-</p>
                    </div>
        
                    <div class="specs">
                        <h2 class="section-title">Bron</h2>
                        <p id="productOrigin">-</p>
                    </div>
                </section>
            </div>
        </section>

        <?php $productId = $_GET['id'] ?? 1; // default to product 1 ?>
        <script> const PRODUCT_ID = <?php echo $productId; ?>; </script>
        <script src="script/getproduct.js" defer></script>
    </main>

    <?php require './includes/footer.php'; ?>