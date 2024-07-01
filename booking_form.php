<?php
session_start();

// Initialize cart if not already done
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Function to add booking to cart
function addToCart($name, $email, $destination, $date) {
    $booking = array(
        'name' => $name,
        'email' => $email,
        'destination' => $destination,
        'date' => $date
    );
    $_SESSION['cart'][] = $booking;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $destination = htmlspecialchars($_POST['destination']);
    $date = htmlspecialchars($_POST['date']);

    // Add booking to cart
    addToCart($name, $email, $destination, $date);

    // Redirect to cart page
    header('Location: cart.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Boat Travel Agency Booking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .bar{
            padding-top: 20px;
            text-align: center;
            height: 55px;
            width: auto; 
            background-color: #1089ff;
        }
        .bar4:hover{
            background-color: white;
        }
        a:hover{
            color: #FFB531;
        }
        .bar2{
            margin-left: 80px;
            text-decoration: none;
            padding-bottom: 2px;
            font-weight: 700;
            font-size: 25px;
            color: white;
        }
        .bar3{
            border-bottom: 3px solid #FFFFFF; 
            margin-left: 220px;
            text-decoration: none;
            padding-bottom: 2px;
            font-weight: 700;
            font-size: 25px;
            color: white;
        }
        .bar4{
            float: right;
            margin-right: 80px;
            text-decoration: none;
            background-color: #FFB531;
            padding: 7px 15px 6px 15px;
            border-radius: 33px;
            font-weight: 600;
            font-size: 19px;
            color: white;
        }

        .container {
            width: 50%;
            margin: auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 50px;
        }
        h1 {
            text-align: center;
            color: #1089ff;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin: 10px 0 5px 0;
            font-weight: bold;
        }
        input, select, button {
            padding: 10px;
            font-size: 16px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input:focus, select:focus {
            border-color: #1089ff;
            outline: none;
        }
        button {
            background-color: #1089ff;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0a6fcc;
        }
    </style>
</head>
<body>
    <div class="bar">
        <a class="bar2" href="home.php">Home</a>
        <a class="bar2" href="package.html">Services</a>
        <a class="bar2" href="offers.html">Offers</a>
        <a class="bar2" href="blogs.html">Blogs</a>
        <a class="bar2" href="contact.html">Contact Us</a>
        <a class="bar4" href="index1.html">Get Started</a>
    </div>

    <div class="container">
        <h1>Booking</h1>
        <form action="booking_form.php" method="post">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Phone Number</label>
            <input type="email" id="email" name="email" required>

            <label for="destination">Number of Guests</label>
            <input type="text" id="destination" name="destination" required>

            <label for="date">Travel Date:</label>
            <input type="date" id="date" name="date" required>

            <button type="submit">Book Now</button>
        </form>
    </div>
</body>
</html>
