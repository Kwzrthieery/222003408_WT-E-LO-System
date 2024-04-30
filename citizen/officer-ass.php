<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>officer-assigned</title>
    <link rel="stylesheet" href="../css/dashboard-citizen.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <h2><span style="color: #1aa3ff;">E-</span>Lo Platform</h2>
            </div>
            <ul class="nav-links">
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="contact.html" class="nav-link">Contact</a></li>
                <li><a href="profile.php" class="nav-link">Profile</a></li>
            </ul>
        </nav>
    </header>
    <div class="form-container">
        <div class="form-box">
            <h2 class="form-title">View Officer assigned</h2>
            <form id="response-form" class="response-form">
                <div class="form-group">
                    <label for="request-id">Enter Request ID:</label>
                    <input type="text" id="request-id" name="request-id" required>
                </div>
                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
    </div>


    <button class="logout-btn" onclick="logout()">Logout</button>
    <footer>
        <p class="footer-copyright">&copy; 2024 E-Lo Platform. All rights reserved.</p>
    </footer>
    <script src="../js/dashboard-citizen.js"></script>
</body>
</html>
