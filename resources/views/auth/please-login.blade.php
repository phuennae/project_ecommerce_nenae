<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Database Bakery - Login/Signup</title>
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
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    /* Navbar / Topbar */
    .topbar {
      width: 100%;
      padding: 12px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #fff;
      border-bottom: 1px solid #eee;
      box-sizing: border-box;
    }

    .logo-text {
      display: flex;
      align-items: center;
      gap: 15px; /* เว้นระยะโลโก้กับข้อความ */
    }

    .logo-text img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      object-fit: contain;
    }

    .top-text {
      font-size: 1rem;
      font-weight: 500;
      color: #3b2f2f;
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
      font-weight: 500;
      transition: 0.3s;
    }

    .login-btn { color: #3b2f2f; }
    .login-btn:hover { color: #b77d4e; }

    .signup-btn { background-color: #b77d4e; color: white; }
    .signup-btn:hover { background-color: #a0693f; }

    /* Main content */
    .main-content {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 40px 20px;
    }

    .main-content img.logo-main {
      width: 160px;
      margin-bottom: 25px;
    }

    .main-content h1 {
      font-size: 2rem;
      margin-bottom: 20px;
    }

    .main-content p {
      font-size: 1rem;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .topbar {
        flex-direction: column;
        gap: 10px;
      }

      .logo-text {
        justify-content: center;
      }
    }
  </style>
</head>
<body>
  <!-- Topbar -->
  <div class="topbar">
    <div class="logo-text">
      <img src="{{ asset('images/logo.png') }}" alt="Logo">
      <span class="top-text">Please Log in or Sign up</span>
    </div>
    <div class="auth-buttons">
      <a href="{{ route('login') }}" class="login-btn">Log in</a>
      <a href="{{ route('register') }}" class="signup-btn">Sign up</a>
    </div>
  </div>

  <!-- Main content -->
  <div class="main-content">
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo-main">
    <h1>DATABASE BAKERY</h1>
    <p>🍪 Please Log in or Sign up before using our website 💖</p>
  </div>
</body>
</html>
