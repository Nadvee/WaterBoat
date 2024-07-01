<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"> -->
    <link rel="stylesheet" href="astyle.css">
    <title>WaterBoat</title>
    <link rel="icon" href="images/boat.png">
    <link rel="stylesheet" href="contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belanosima:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    
    <div class="container" id="container">

        <div class="form-container sign-up">
            <form>

                <h1>Create Account</h1>
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <label>Sign Up as:</label>
                <select>
                    <option value="option1">User</option>
                    <option value="option2">Admin</option>
                </select>
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form>

                <h1>Sign In</h1>
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                
               
                <a href="#">Forget Your Password?</a>
                <button>Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Don't have account?</h1>
                    <p>Register with your personal details to book tours</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="ascript.js"></script>
</body>

</html>
