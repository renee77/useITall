fetch('aardappel.json')
  .then(response => response.json())
  .then(data => {
    console.log(data);
    
    // Example: insert into HTML
    document.getElementById('json-title').textContent = data.name;
    document.getElementById('json-SKU').textContent = data.sku;
    document.getElementById('json-price').textContent = '€' + data.price;
    document.getElementById('json-stock').textContent = data.stock;
    document.getElementById('json-description').textContent = data.description;
    document.getElementById('json-source').textContent = data.source;
  })
  .catch(error => console.error('Error:', error));
