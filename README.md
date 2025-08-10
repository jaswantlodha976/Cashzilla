# CashZilla - Referral Dashboard (v2) - Colorful UI
Upgraded package with:
- Colourful, professional login & signup UI (responsive)
- Fake Recent Withdrawals popup (random Indian names & amounts animate)
- All previous features from v1 (Watch & Earn flow, Withdraw pending, Deposit tab visibility)
- Works in Firebase mode if you paste firebaseConfig in firebase-config.js, otherwise demo localStorage mode.

Files:
- index.html
- admin.html
- firebase-config.js
- app.js
- style.css
- manifest.json
- assets/*

Instructions: same as v1 README. Deploy to Firebase Hosting for full functionality.
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>CashZilla - Login</title>
  <style>
    body { font-family: Arial; background: #f2f2f2; display: flex; justify-content: center; align-items: center; height: 100vh; }
    .box { background: white; padding: 30px; border-radius: 10px; width: 300px; box-shadow: 0 0 10px rgba(0,0,0,0.2); }
    h2 { text-align: center; color: #333; }
    input { width: 100%; padding: 10px; margin: 8px 0; border: 1px solid #ccc; border-radius: 5px; }
    button { width: 100%; padding: 10px; background: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer; }
    button:hover { background: #45a049; }
    a { text-decoration: none; color: blue; font-size: 14px; }
  </style>
</head>
<body>
  <div class="box">
    <h2>Login</h2>
    <input type="email" id="email" placeholder="Email" required>
    <input type="password" id="password" placeholder="Password" required>
    <button onclick="login()">Login</button>
    <p style="text-align:center; margin-top:10px;">New user? <a href="signup.html">Sign Up</a></p>
  </div>

  <script>
    function login(){
      // Fake login - always success
      localStorage.setItem("loggedIn", "true");
      window.location.href = "dashboard.html";
    }
  </script>
</body>
</html>
