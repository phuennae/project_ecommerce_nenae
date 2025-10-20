<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Database Bakery</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      color: #3b2f2f;
      background-color: #faf7f2;
    }

    /* Navbar */
    .navbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 12px 40px;
      background-color: #fff;
      border-bottom: 1px solid #eee;
    }

    /* --- Left Group (Logo + Menu) --- */
    .left-group {
      display: flex;
      align-items: center;
      gap: 35px;
    }

    .logo img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      object-fit: contain;
    }

    .menu {
      display: flex;
      align-items: center;
      gap: 25px;
    }

    .menu a {
      text-decoration: none;
      color: #333;
      font-weight: 500;
      letter-spacing: 0.5px;
      transition: color 0.3s;
    }

    .menu a:hover {
      color: #b77d4e;
    }

    /* --- Right Section --- */
    .right-section {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .cart img {
      width: 25px;
      cursor: pointer;
      transition: transform 0.2s;
    }

    .cart img:hover {
      transform: scale(1.1);
    }

    .auth-buttons {
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .auth-buttons a {
      text-decoration: none;
      font-size: 0.9rem;
      padding: 6px 12px;
      border-radius: 5px;
      transition: 0.3s;
      font-weight: 500;
    }

    .login-btn {
      color: #3b2f2f;
    }

    .login-btn:hover {
      color: #b77d4e;
    }

    .signup-btn {
      background-color: #b77d4e;
      color: white;
    }

    .signup-btn:hover {
      background-color: #a0693f;
    }

    /* Hero Section */
    .hero {
      display: flex;
      height: calc(100vh - 100px);
      overflow: hidden;
    }

    .left {
      flex: 2;
    }

    .left img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .right {
      flex: 1;
      background-color: #f8f4ee;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 40px;
    }

    .right h1 {
      font-size: 2rem;
      letter-spacing: 1.5px;
      margin-bottom: 25px;
      color: #3b2f2f;
    }

    .cake {
      width: 160px;
      margin-bottom: 30px;
    }

    .view-btn {
      padding: 12px 28px;
      background-color: #b77d4e;
      color: #fff;
      border: none;
      border-radius: 5px;
      font-weight: 500;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .view-btn:hover {
      background-color: #a0693f;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .navbar {
        flex-direction: column;
        gap: 15px;
      }

      .left-group {
        flex-direction: column;
      }

      .hero {
        flex-direction: column;
        height: auto;
      }

      .right {
        padding: 30px 20px;
      }
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <header class="navbar">
    <div class="left-group">
      <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="Bakery Logo">
      </div>
      <nav class="menu">
        <a href="#">PROMOTION</a>
        <a href="#">PRODUCTS</a>
      </nav>
    </div>

    <div class="right-section">
      <a href="#" class="cart">
        <img src="{{ asset('images/cart.png') }}" alt="Cart">
      </a>
      <div class="auth-buttons">
        <a href="#" class="login-btn">Log in</a>
        <a href="#" class="signup-btn">Sign up</a>
      </div>
    </div>
  </header>

  <!-- Hero Section -->
  <main class="hero">
    <div class="left">
      <img src="{{ asset('images/bakery-bg.jpg') }}" alt="Bakery pastries">
    </div>
    <div class="right">
      <h1>DATABASE<br>BAKERY</h1>
      <img class="cake" src="{{ asset('images/chocolate-cake.png') }}" alt="Chocolate Cake">
      <a href="{{ route('products') }}" class="view-btn">VIEW PRODUCTS</a>
    </div>
  </main>
</body>
</html>
