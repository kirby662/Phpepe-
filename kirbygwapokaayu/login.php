<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login — Tumboy Slayer</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="card">
    <h1>Welcome Back!</h1>
    <h2>Login to Tumboy Slayer</h2>

    <!-- Google Login Button -->
    <button class="btn-google">
      <img src="https://www.svgrepo.com/show/355037/google.svg" width="18">
      Login with Google
    </button>

    <!-- Login Form -->
    <form action="home.html" method="get">
      <input type="text" class="input" placeholder="Enter your username" required>
      <input type="password" class="input" placeholder="Enter your password" required>
      <button type="submit" class="btn">Login</button>
    </form>

    <!-- Sign Up Redirect -->
    <div class="small">
      Don’t have an account? 
      <a href="signup.html" class="link">Sign Up</a>
    </div>
  </div>
</body>
</html>
