let count = 0;
    const counter = document.querySelectorAll('.count h2');

    function increment () {
    count++;
    counter.textContent = "count";
    }

    function decrement () {
    count--;
    counter.textContent = "count";
}

let form = document.querySelector(".submitbtn button")
let inp = document.querySelectorAll("input");
form.addEventListener("submit", function(dets){
dets.preventDefault();
console.log(inp[0].value,inp[1].value,inp[2].value,inp[3].valueinp[4].value);
})

let box = document.querySelectorAll(".input-box input")

console.log(box[0].value,box[1].value)

// let phnenum = document.querySelector(".phonenum input");

// phnenum.addEventListener("input",(dets)=>{
//     if( dets.data !== null ){
//         console.log(dets.data);
//     }
// });

// let email = document.querySelector(".email input");

// email.addEventListener("input",(dets)=>{
//     if( dets.data !== null ){
//         console.log(dets.data);
//     }
// });



// Admin Pannel Section -----------------------

// Initialize products from localStorage or default
    let products = JSON.parse(localStorage.getItem('products')) || [
      {
        id: 1,
        name: "Espresso",
        price: 4.99,
        stock: 100,
        image: "https://images.unsplash.com/photo-1579992357154-faf7e2e6d2c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80",
        ingredients: "Coffee beans, Water",
        type: "Espresso",
        rating: 4.5
      },
      {
        id: 2,
        name: "Latte",
        price: 5.49,
        stock: 80,
        image: "https://images.unsplash.com/photo-1517231924276-72f1d2b7e5e8?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80",
        ingredients: "Espresso, Steamed Milk, Foam",
        type: "Latte",
        rating: 4.8
      }
    ];

    // Sample order data
    let orders = JSON.parse(localStorage.getItem('orders')) || [
      { id: 1, customer: "John Doe", product: "Espresso", quantity: 2, status: "Pending" },
      { id: 2, customer: "Jane Smith", product: "Latte", quantity: 1, status: "Delivered" }
    ];

    // Save data to localStorage
    function saveData() {
      localStorage.setItem('products', JSON.stringify(products));
      localStorage.setItem('orders', JSON.stringify(orders));
    }

    // Toggle sidebar
    function toggleSidebar() {
      const sidebar = document.querySelector('.sidebar');
      const mainContent = document.querySelector('.main-content');
      const toggleBtn = document.querySelector('.toggle-btn');
      sidebar.classList.toggle('hidden');
      mainContent.classList.toggle('full');
      toggleBtn.classList.toggle('hidden');
    }

    // Show section
    function showSection(sectionId) {
      document.querySelectorAll('.nav-item').forEach(item => item.classList.remove('active'));
      document.querySelectorAll('.section').forEach(section => section.classList.remove('active'));
      document.querySelector(`.nav-item[onclick="showSection('${sectionId}')"]`).classList.add('active');
      document.getElementById(sectionId).classList.add('active');
    }

    // Render products
    function renderProducts() {
      const tbody = document.getElementById('productTableBody');
      tbody.innerHTML = '';
      products.forEach(product => {
        const row = document.createElement('tr');
        row.innerHTML = `
          <td>${product.name}</td>
          <td>$${product.price.toFixed(2)}</td>
          <td>${product.stock}</td>
          <td><img src="${product.image}" alt="${product.name}" class="product-image"></td>
          <td>${product.ingredients}</td>
          <td>${product.type}</td>
          <td>${product.rating}</td>
          <td>
            <button class="btn btn-add" onclick="editProduct(${product.id})">Edit</button>
            <button class="btn btn-delete" onclick="deleteProduct(${product.id})">Delete</button>
          </td>
        `;
        tbody.appendChild(row);
      });
    }

    // Add or update product
    function addOrUpdateProduct() {
      const id = parseInt(document.getElementById('productId').value) || products.length + 1;
      const name = document.getElementById('productName').value;
      const price = parseFloat(document.getElementById('productPrice').value);
      const stock = parseInt(document.getElementById('productStock').value);
      const image = document.getElementById('productImage').value;
      const ingredients = document.getElementById('productIngredients').value;
      const type = document.getElementById('productType').value;
      const rating = parseFloat(document.getElementById('productRating').value);

      if (name && price && stock && image && ingredients && type && rating) {
        if (products.some(product => product.id === id)) {
          // Update existing product
          products = products.map(product =>
            product.id === id ? { id, name, price, stock, image, ingredients, type, rating } : product
          );
        } else {
          // Add new product
          products.push({ id, name, price, stock, image, ingredients, type, rating });
        }
        saveData();
        resetForm();
        renderProducts();
      } else {
        alert('Please fill all fields');
      }
    }

    // Edit product
    function editProduct(id) {
      const product = products.find(p => p.id === id);
      document.getElementById('productId').value = product.id;
      document.getElementById('productName').value = product.name;
      document.getElementById('productPrice').value = product.price;
      document.getElementById('productStock').value = product.stock;
      document.getElementById('productImage').value = product.image;
      document.getElementById('productIngredients').value = product.ingredients;
      document.getElementById('productType').value = product.type;
      document.getElementById('productRating').value = product.rating;
      document.querySelector('.btn-add').textContent = 'Update Product';
      document.querySelector('.btn-cancel').style.display = 'inline-block';
    }

    // Reset form
    function resetForm() {
      document.getElementById('productId').value = '';
      document.getElementById('productName').value = '';
      document.getElementById('productPrice').value = '';
      document.getElementById('productStock').value = '';
      document.getElementById('productImage').value = '';
      document.getElementById('productIngredients').value = '';
      document.getElementById('productType').value = '';
      document.getElementById('productRating').value = '';
      document.querySelector('.btn-add').textContent = 'Add Product';
      document.querySelector('.btn-cancel').style.display = 'none';
    }

    // Delete product
    function deleteProduct(id) {
      products = products.filter(product => product.id !== id);
      saveData();
      renderProducts();
    }

    // Render orders
    function renderOrders() {
      const tbody = document.getElementById('orderTableBody');
      tbody.innerHTML = '';
      orders.forEach(order => {
        const row = document.createElement('tr');
        row.innerHTML = `
          <td>${order.customer}</td>
          <td>${order.product}</td>
          <td>${order.quantity}</td>
          <td>${order.status}</td>
          <td>
            <select onchange="updateOrderStatus(${order.id}, this.value)">
              <option value="Pending" ${order.status === 'Pending' ? 'selected' : ''}>Pending</option>
              <option value="Processing" ${order.status === 'Processing' ? 'selected' : ''}>Processing</option>
              <option value="Delivered" ${order.status === 'Delivered' ? 'selected' : ''}>Delivered</option>
            </select>
          </td>
        `;
        tbody.appendChild(row);
      });
    }

    // Update order status
    function updateOrderStatus(id, status) {
      orders = orders.map(order => order.id === id ? { ...order, status } : order);
      saveData();
      renderOrders();
    }

    // Initial render
    renderProducts();
    renderOrders();