<?php
session_start();

// Function to get cart total
function getCartTotal($cart) {
    return count($cart);
}

// Check if the cart is initialized
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Remove item from cart
if (isset($_GET['remove'])) {
    $id = $_GET['remove'];
    unset($_SESSION['cart'][$id]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Boat Travel Agency Cart</title>
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
            width: 70%;
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #1089ff;
            color: white;
        }
        .remove {
            color: red;
            cursor: pointer;
        }
        .total {
            text-align: right;
            margin-top: 20px;
        }
        .checkout {
            background-color: #1089ff;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .checkout:hover {
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
        <h1>Your Cart</h1>
        <?php if (count($_SESSION['cart']) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Number of Guests</th>
                        <th>Travel Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['cart'] as $id => $item): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($item['name']); ?></td>
                            <td><?php echo htmlspecialchars($item['email']); ?></td>
                            <td><?php echo htmlspecialchars($item['destination']); ?></td>
                            <td><?php echo htmlspecialchars($item['date']); ?></td>
                            <td><a class="remove" href="cart.php?remove=<?php echo $id; ?>">Remove</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="total">
                <strong>Total Items: <?php echo getCartTotal($_SESSION['cart']); ?></strong>
            </div>
            <div style="text-align: center; margin-top: 20px;">
                <button class="checkout" onclick="location.href='checkout.php'">Proceed to Checkout</button>
            </div>
        <?php else: ?>
            <p>Your cart is empty. <a href="booking_form.php">Start booking</a></p>
        <?php endif; ?>
    </div>
</body>
</html>
