<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sumi2.css">
    <title>Cruise Booking Information</title>
</head>
<body>
    <header class="header">
        <div class="bar">
            <a class="bar3" href="">Home</a>
            <a class="bar2" href="">Services</a> 
            <a class="bar2" href="">Offers</a>
            <a class="bar2" href="">Blogs</a>
            <a class="bar2" href="">About Us</a> 
            <a class="bar2" href="">Contact Us</a>
            <a class="bar4" href="">Get Started</a>
        </div>
    </header>
    <main>
        <div class="main">
            <img src="images/cruise1.jpg" alt="Cruise Photo">
            <section class="booking-info">
                <h2>Booking Details</h2>
                <p>Thank you for choosing our cruise ship. Please fill out the form below to book your cruise.</p>
                <form action="confirm_booking.php" method="post">
                    <label for="name">Full Name:</label>
                    <input type="text" id="name" name="name" required>
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" required>
                    <label for="cruise">Select Cruise:</label>
                    <select id="cruise" name="cruise" required>
                        <option value="bahamas">Luxury Cruise to the Bahamas</option>
                        <option value="caribbean">Caribbean Cruise Adventure</option>
                    </select>
                    <button type="submit">Book Now</button>
                </form>
            </section>
        </div>
    </main>
    <footer class="footer">
        <p>&copy; 2024 Cruise Ship Inc. All rights reserved.</p>
    </footer>
</body>
</html>

