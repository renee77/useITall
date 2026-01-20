document.addEventListener("DOMContentLoaded", () => {
    fetch("../products.json")
        .then(response => response.json())

        // Zoek het product met de PRODUCT_ID
        .then(products => {
            const product = products.products.find(p => p.id === PRODUCT_ID);

            // Controleer of het product bestaat 
            if (!product) {
                console.error("Product not found");
                return;
            }

            // Vul de pagina met productgegevens
            document.getElementById("productSKU").textContent = product.sku;
            document.getElementById("productTitle").textContent = product.title;
            document.getElementById("productPrice").textContent = "€" + product.price;
            document.getElementById("productDescription").textContent = product.summary;
            document.getElementById("productAvailable").textContent = product.available ? "Op voorraad" : "Niet op voorraad";
            document.getElementById("productAvailable").className = product.available ? "stock in-stock" : "stock out-of-stock";
            document.getElementById("productImage").style.backgroundImage = `url('${product.image_url}')`;
            document.getElementById("productOrigin").textContent = `Geteeld door ${product.origin.producer} uit ${product.origin.location}`;
        })
        .catch(err => console.error("Error loading products:", err));
});
