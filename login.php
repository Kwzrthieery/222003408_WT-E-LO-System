<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="wrapper">
        <div class="inner">
            <div class="image-holder" style="margin-top: 30px;">
                <img src="img/1.png" alt="" style="border-radius: 20px;">
            </div>
            <form id="loginForm" action="login_signup back_end/login.php" method="POST" style="margin-top: 90px;">
                <h3>Log In</h3>
                <div class="form-wrapper">
                    <input id="usernameInput" type="text" name="Username" placeholder="Username" class="form-control" required>
                    <i class="zmdi zmdi-account"></i>
                </div>
                <div class="form-wrapper">
                    <input id="passwordInput" type="password" name="Password" placeholder="Password" class="form-control" required>
                    <i class="zmdi zmdi-lock"></i>
                </div>
                <button id="loginButton">Log In
                    <i class="zmdi zmdi-arrow-right"></i>
                </button>
                <p style="padding: 10px; margin-top: 10px;">Don't have an account? <a href="reg.php">Register</a></p>
            </form>
        </div>
    </div>
</body>
</html>
