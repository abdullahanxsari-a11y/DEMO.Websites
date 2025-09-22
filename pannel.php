<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Admin Pannel</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
    <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
    <div class="sidebar">
      
    <h2>Coffee Admin</h2>

      <div class="nav-item active" onclick="showSection('products')">Products</div>
      <div class="nav-item" onclick="showSection('orders')">Orders</div>
      <div class="nav-item"><a href="frontend.html" style="color: inherit; text-decoration: none;">View Shop</a></div>
    </div>

    <div class="main-content">
      <h1>Coffee Admin Panel</h1>
      <div id="products" class="section active">
        <h2>Manage Products</h2>

        <div class="form-group" id="productForm">
          <input type="hidden" id="productId">
          <input type="text" id="productName" placeholder="Product Name">
          <input type="number" id="productPrice" placeholder="Price" step="0.01">
          <input type="number" id="productStock" placeholder="Stock">
          <input type="text" id="productImage" placeholder="Image URL">
          <input type="text" id="productIngredients" placeholder="Ingredients (comma-separated)">
          
          <select id="productType">
            <option value="" disabled selected>Select Type</option>
            <option value="Espresso">Espresso</option>
            <option value="Latte">Latte</option>
            <option value="Cappuccino">Cappuccino</option>
            <option value="Americano">Americano</option>
          </select>

          <input type="number" id="productRating" placeholder="Rating (1-5)" min="1" max="5" step="0.1">
          <button class="btn btn-add" onclick="addOrUpdateProduct()">Add Product</button>
          <button class="btn btn-cancel" onclick="resetForm()" style="display: none;">Cancel</button>

        </div>
        <table id="productTable">
          
        <thead>
            <tr>
              <th>Name</th>
              <th>Price</th>
              <th>Stock</th>
              <th>Image</th>
              <th>Ingredients</th>
              <th>Type</th>
              <th>Rating</th>
              <th>Actions</th>
            </tr>
          </thead>

          <tbody id="productTableBody"></tbody>

        </table>
      </div>

      <div id="orders" class="section">
        <h2>Manage Orders</h2>
        <table id="orderTable">
          
        <thead>
            <tr>
              <th>Customer</th>
              <th>Product</th>
              <th>Quantity</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>

          <tbody id="orderTableBody"></tbody>
          
        </table>
      </div>
    </div>
  </div>

  <script src="./script.js"></script>
</body>
</html>