<!DOCTYPE html>
<html>
    <head>
        <title>Admin View</title>
        <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" type="text/css" href="../../css/main_page.css">
        <link rel="stylesheet" type="text/css" href="../../css/Admin.css">

    </head>
    <body id="top">
        <header>
            <a href="">
                <img src="../../images/logo.webp">
            </a>
            <nav> 
                <ul>
                    <li><a href=""> Account</a></li>
                    <li><a href="../../index.html"> Logout</a></li>
                    <li><a href="../InventoryMAnager/InventoryAdmin.html"> Inventory </a></li>
                    <li><a href="../purchasing/purchase.html"> Purchasing </a></li>
                </ul>
            </nav>
        </header>
        <section>
            <h1 class="text-left">
                Welcome, 'Name of Admin User'!
            </h1>
        </section>
        <section class="food-search text-center">
            <span class="food-search">
                <form action="">
                    <input type="search" name="search" placeholder="Order ID, Email. Phone Number" class="text-left">
                    <input type="submit" name="submit" value="Go" class="btn btn-primary">
                    <input type="search" name="search" placeholder="User Lookup" style="width: 250px;" class="text-left">
                    <input type="submit" name="submit" value="Go" class="btn btn-primary">
                </form>
            </span>
        </section>
        <section>
            <div class="boxed">
                <ul>
                    <h4 class="boxed2">Results:</h4>
                </ul>
            </div>
            
        </section>
    </body>
    <footer>
        <div class="footer-content text-center" style="margin-bottom: 10%">
            <p class="copyright">© Designed by <a href="#">Team 5 COSC 3380 Spring 2022</a>. All rights reserved.</p>
            <a href="#top">Go to top.</a>
        </div>
    </footer>
</html>