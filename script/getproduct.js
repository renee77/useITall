document.addEventListener("DOMContentLoaded", () => {
    fetch("../products.json")
        .then(response => response.json())
        .then(products => {
            const product = products.products.find(p => p.id === PRODUCT_ID);

            if (!product) {
                console.error("Product not found");
                return;
            }
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
