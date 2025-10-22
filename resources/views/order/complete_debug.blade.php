<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Database Bakery - Order Complete (Debug)</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: #faf7f2;
      color: #4a403a;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    /* ===== Topbar ===== */
    .topbar {
      width: 100%;
      padding: 12px 40px;
      display: flex;
      align-items: center;
      background-color: #fff;
      border-bottom: 1px solid #eee;
      box-sizing: border-box;
    }

    .logo-text {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .logo-text img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      object-fit: contain;
    }

    .divider {
      width: 1px;
      height: 60px;
      background-color: #efe6dd;
      margin: 0 20px;
    }

    .top-text {
      font-size: 1rem;
      font-weight: 500;
      color: #3b2f2f;
    }

    /* ===== Main Section ===== */
    .main {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 40px 20px;
    }

    .main h2 {
      font-size: 1.5rem;
      font-weight: 600;
      color: #4a403a;
      margin-bottom: 24px;
    }

    .main .logo-main {
      width: 240px;
      height: 240px;
      object-fit: contain;
      margin-bottom: 20px;
    }

    .main p {
      font-size: 1rem;
      color: #4a403a;
      margin-bottom: 6px;
    }

    .main p.note {
      color: #aba9a5;
      margin-top: 12px;
    }

    .main a.btn {
      display: inline-block;
      background-color: #8b5e3c;
      color: #fff;
      padding: 10px 22px;
      border-radius: 6px;
      text-decoration: none;
      font-weight: 500;
      margin-top: 30px;
      transition: background-color 0.3s ease;
    }

    .main a.btn:hover {
      background-color: #724a31;
    }

    /* ===== Responsive ===== */
    @media (max-width: 768px) {
      .topbar {
        flex-direction: column;
        gap: 10px;
      }

      .divider {
        display: none;
      }

      .main .logo-main {
        width: 180px;
        height: 180px;
      }
    }
  </style>
</head>
<body>
  <!-- Topbar -->
  <div class="topbar">
    <div class="logo-text">
      <img src="{{ asset('images/logo.png') }}" alt="Logo">
      <div class="divider"></div>
      <span class="top-text">Thank you</span>
    </div>
  </div>

  <!-- Main Content -->
  <div class="main">
    <h2>🍰 Thank you for your order!</h2>
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo-main">

    <p>Your order ID is <strong id="orderId"></strong> 💌</p>
    <p>Please pick up your order during our business hours:</p>
    <p><strong>10:00 AM – 6:00 PM 🕓</strong></p>
    <p class="note">We hope our treats make your day a little sweeter! 💖✨</p>

    <a href="{{ url('/') }}" class="btn">Back to Home Page</a>
  </div>

  <script>
    // สุ่มเลข Order ID 6 หลักไม่ซ้ำกันทุกครั้ง
    function generateOrderId() {
      return Math.floor(100000 + Math.random() * 900000);
    }

    document.getElementById('orderId').textContent = generateOrderId();
  </script>
</body>
</html>
