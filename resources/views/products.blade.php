<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Products | Database Bakery</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #faf7f2;
      color: #3b2f2f;
      text-align: center;
      padding: 60px;
    }
    h1 {
      margin-bottom: 20px;
    }
    .product-grid {
      display: flex;
      justify-content: center;
      gap: 30px;
      flex-wrap: wrap;
      margin-top: 40px;
    }
    .product-card {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      padding: 20px;
      width: 220px;
    }
    .product-card img {
      width: 100%;
      border-radius: 8px;
    }
    .product-card h3 {
      margin: 15px 0 8px;
    }
  </style>
</head>
<body>
  <h1>🍰 Our Bakery Products</h1>

  <div class="product-grid">
    <div class="product-card">
      <img src="{{ asset('images/chocolate-cake.png') }}" alt="Chocolate Cake">
      <h3>Chocolate Cake</h3>
      <p>Rich & moist 🍫</p>
    </div>

    <div class="product-card">
      <img src="{{ asset('images/cupcake.png') }}" alt="Cupcake">
      <h3>Vanilla Cupcake</h3>
      <p>Soft & sweet 🧁</p>
    </div>

    <div class="product-card">
      <img src="{{ asset('images/cookie.png') }}" alt="Cookie">
      <h3>Butter Cookie</h3>
      <p>Crispy & golden 🍪</p>
    </div>
  </div>
</body>
</html>
