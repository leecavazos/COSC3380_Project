<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="../php/checkoutAction.php" method="post">
        <div>
            <select id="Card_type" name="Card_type">
                <option value="Visa">Visa</option>
                <option value="Mastercard">Mastercard</option>
                <option value="Discover">Discover</option>
                <option value="AMEX">AMEX</option>
            </select>
        </div>
        <div>
            <label for="Last_4_digits">Please enter last 4 digits of your card.</label>
            <input type="text" name="Last_4_digits" id="Last_4_digits" maxlength="4">
        </div>
    </form>

</body>
</html>