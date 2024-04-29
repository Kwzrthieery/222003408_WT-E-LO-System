<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Navbar</title>
    <link rel="stylesheet" href="../css/dashboard-citizen.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <h2><span style="color: blue;">E</span>-Lo Platform</h2>
            </div>
            <ul class="nav-links">
                <li><a href="home.html" class="nav-link">Home</a></li>
                <li><a href="services.html" class="nav-link">Services</a></li>
                <li><a href="" class="nav-link">Contact</a></li>
                <li><a href="#" class="nav-link">Profile</a></li>
            </ul>
        </nav>
    </header>

    <section class="cards">
        <div class="card">
            <h3>Make a request</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <button onclick="location.href='#'">Button 1</button>
        </div>
        <div class="card">
            <h3>View request or response</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <button onclick="location.href='#'">Button 2</button>
        </div>
        <div class="card">
            <h3>View officer assigned</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <button onclick="location.href='#'">Button 3</button>
        </div>
        <div class="card">
            <h3>Request for another Officer</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <button onclick="location.href='#'">Button 1</button>
        </div>
    </section>

    <button class="logout-btn" onclick="logout()">Logout</button>
    <footer>
        <div class="footer-content">
            <div class="footer-left">
                <p>Contact us: contact@elo.com</p>
                <p>KK 32 ave, Kigali city, RWANDA</p>
            </div>
            <div class="footer-right">
                <ul>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">FAQs</a></li>
                </ul>
            </div>
        </div>
        <p class="footer-copyright">&copy; 2024 E-Lo Platform. All rights reserved.</p>
    </footer>
    <script src="../js/dashboard-citizen.js"></script>
</body>
</html>


