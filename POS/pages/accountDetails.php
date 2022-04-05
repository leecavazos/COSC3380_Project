<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>POS Team 5</title>
    <link rel="stylesheet" type="text/css" href="../css/accountDetails.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="icon" type="image/x-icon" href="../images/logo.webp">
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
</head>

<header>
    <a href="user.html">
        <img src="../images/logo.webp">
    </a>
    <!-- Navbar Starts -->
    <nav>
        <ul>
            <li><a href="user.html">Home</a></li>
            <li>
                <div class="dropdown">
                    <a href="#" class="drop-btn">
                        Profile
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <div class="dropdown-content">
                        <a href="#">Profile Management</a>
                        <a href="#">Account Details</a>
                        <a href="../index.html">Sign Out</a>
                    </div>
                </div>
            </li>

            <li><a href="#">Orders</a></li>
            <li><a href="checkout.php">Cart</a></li>

            <li><a href="#" class="order-btn btn btn-primary">Order Now</a></li>
        </ul>
    </nav>
    <!-- Navbar End -->
</header>

<body>
    <div class="grid-container">
        <div class="grid-item aboutInfo">
            <h2> Caela Intertas </h2>
            <p id="displayEmail">caelaintertas@gmail.com</p>
            <h2 id="about">About</h2>
            <p>@caelaintrtas</p>
            <p>832-274-1885</p>
            <p>Shipping Address: 9103 Stoney Lake Dr, Houston, TX, 77064-6426</p>

        </div>
        <div class="grid-item">
            <form>
                <div class="grid-container2">
                    <div class="grid-item2">
                        <h4>Personal Details</h4>
                        <label for="First_name"><b>First name:</b></label>
                        <input type="text" name="First_name" id="First_name" placeholder="Enter first name" required>

                        <label for="Last_name"><b>Last name:</b></label>
                        <input type="text" name="Last_name" id="Last_name" placeholder="Enter last name" required>

                        <label for="Email"><b>Email</b></label>
                        <input type="email" name="Email" id="Email" placeholder="Enter email" required>

                        <label for="Phone_number"><b>Phone number:</b></label>
                        <input type="text" name="Phone_number" id="Phone_number" placeholder="Enter phone number">

                    </div>
                    <div class="grid-item2">
                        <h4>Address</h4>
                        <label for="Street_address"><b>Street address:</b></label>
                        <input type="text" name="Street_address" id="Street_address" placeholder="Enter street address" required>

                        <label for="APT"><b>APT:</b></label>
                        <input type="text" name="APT" id="APT" placeholder="Enter apartment number">

                        <label for="City"><b>City:</b></label>
                        <input type="text" name="City" id="City" placeholder="Enter city" required>

                        <label for="State"><b>State:</b></label>
                        <input type="text" name="State" id="State" placeholder="Enter state" required>

                        <label for="Zip"><b>Zipcode:</b></label>
                        <input type="text" name="Zip" id="Zip" placeholder="Enter Zipcode" required>
                    </div>
                    <div class="grid-item2">
                        <h4>Account Details</h4>
                        <label for="Username"><b>Username:</b></label>
                        <input type="text" name="Username" id="Username" placeholder="Enter username" required>

                        <label for="Password"><b>Password:</b></label>
                        <input type="password" name="Password" id="Password" placeholder="Enter password" required>
                    </div>
                    <div class="grid-item2">
                        <button id="cancel" onclick="clearForm()">Cancel</button>
                        <button id="update" type="submit">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>