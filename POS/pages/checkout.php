<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>POS Team 5</title>
    <link rel="stylesheet" type="text/css" href="../css/checkout.css">
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
				<li><a href="#">Cart</a></li>

				<li><a href="#" class="order-btn btn btn-primary">Order Now</a></li>
			</ul>
		</nav>
		<!-- Navbar End -->
</header>

<body style="margin-top: 10%">
    <div class="grid-container">
        <div class="grid-item info">
            <h2>Delivery to:</h2>
            <p style="padding: 5px">Caela Intertas - 9103 Stoney Lake Dr, Houston, TX, 77064-7626</p>
            <a href="user.html"><button class="change">Change Information</button></a>
        </div>
        <div class="grid-item cartInfo">
            <p><span class="cart">Your cart</span><span class="cartItems">
                    <box-icon name='cart' style="margin-right: 5px; padding-top: 3px;"></box-icon>3 items
                </span></p>
            <hr>
            <div class="grid-container2">
                <div class="grid-item2">
                    <img src="../images/item sample 2.jpeg">
                </div>
                <div class="grid-item2">
                    <div class="itemName">Ice cream</div>
                </div>
                <div class="grid-item2">
                    <div class="price"><input type="number" min="0" max="10" value="2" class="quantityInput" onchange="calculateTotal()"> x $5.00<input type="hidden" class="iprice" value="5"></div>
                </div>
            </div>
            <hr>
            <div class="grid-container2">
                <div class="grid-item2">
                    <img src="../images/item sample 2.jpeg">
                </div>
                <div class="grid-item2">
                    <div class="itemName">Ice cream</div>
                </div>
                <div class="grid-item2">
                    <div class="price"><input type="number" min="0" max="10" value="2" class="quantityInput" onchange="calculateTotal()"> x $5.00<input type="hidden" class="iprice" value="5"></div>
                </div>
            </div>
            <hr>
            <div class="grid-container2">
                <div class="grid-item2">
                    <img src="../images/item sample 2.jpeg">
                </div>
                <div class="grid-item2">
                    <div class="itemName">Ice cream</div>
                </div>
                <div class="grid-item2">
                    <div class="price"><input type="number" min="0" max="10" value="2" class="quantityInput" onchange="calculateTotal()"> x $5.00<input type="hidden" class="iprice" value="5"></div>
                </div>
            </div>
            <hr>
            <p><span class="total">Total</span><span class="amount" id="gtotal"></span></p>
        </div>
        <div class="grid-item paymentInfo">
            <p class="pay">Payment Information</p>
            <form action="../php/checkoutAction.php" method="POST">
                <label for="CardName">Name on card</label>
                <input type="text" id="CardName" name="CardName" placeholder="John Smith" class="payInput">
                <label for="CardNumber">Credit card number</label>
                <input type="text" id="CardNumber" name="CardNumber" placeholder="1111-2222-3333-4444" class="payInput">
                <label for="ExpDate">Expiration Date</label>
                <input type="text" id="ExpDate" name="ExpDate" placeholder="01/11" class="payInput">
                <label for="CVV">CVV</label>
                <input type="text" id="CVV" name="CVV" placeholder="123" maxlength="3" class="payInput">
                <button type="submit" class="checkout">Checkout</button>
            </form>
        </div>
    </div>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', calculateTotal);

        function calculateTotal() {
            var iquantity = document.getElementsByClassName("quantityInput");
            var iprice = document.getElementsByClassName("iprice");
            var total = 0;
            for (var i = 0; i < iquantity.length; i++) {
                if (parseInt(iquantity[i].value))
                    total += parseInt(iquantity[i].value) * parseFloat(iprice[i].value);
            }
            document.getElementById('gtotal').innerHTML = "$" + total;
        }
    </script>
</body>

</html>