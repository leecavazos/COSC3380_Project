# UH-Spring 2022 COSC3380_Project (Database System)
## Team members: (Team 5)
- Moreira, Lester (Team Leader)
- Cavazos, Lee
- Nguyen, Minh D
- Intertas, Caela Alexie H

## Point of Sale System (POS)
### Description
- Domain Knowledge:
  - The Point of Sale (POS) database contains customer, sales, and inventory data. This data is very dynamic as sales decrease inventory and increase sales records, while invoices increase inventory quantities and generate invoice records. Sales data can later be analyzed to spot trends in the shopping preferences of customers to better attend to their needs and recommend more products of their liking.
  - It is very important that all functionalities integrate seamlessly while providing ease-of-use to the client and their customers for payments and record generating. 
- Universe of Discourse (Miniworld):
  - The POS database will handle a store’s database that keeps track of inventory, customers and transactions. Customers can check out items, place items in a cart, and the inventory will automatically adjust itself accordingly to purchase orders. If an item hits a certain threshold, then the system will prompt for a re-order of that item. This system will have a Virtual Register with the ability to input any item, add/update/delete items to any given list, and the ability to count individual items. Sales records will also be stored. Managers interested in either order or inventory data are allowed access to this needed information and create reports on the activity of their customer’s shopping habits, location, and amount spent as well as inventory data of the store.
  - We implement our POS in the context of a restaurant ordering system. Where users can order their food, have it delivered to their addresses, and enter their payments. Our inventory will keep track of the individual ingredients that go in a dish, and our category will categorize the dishes for easier browsing. As users order we'll take note of how much each dish uses up ingredients and track our inventory that way. As the restaurant runs low on certain ingredients and reaches the threshold, an alert to reorder more will be sent out. 


- Roles: (Contact us for the login accounts)
  - User
  - Managers
    - Sale Manager
    - Purchasing Manager
    - Inventory Manager


### Project Structure
```
COSC3380_Project
├─ POS                            # Here is our current version. We may have an updated one shortly.
│  ├─ css                         
│  │  ├─ Admin.css
│  │  ├─ accountDetails.css
│  │  ├─ analytics.css
│  │  ├─ checkout.css
│  │  ├─ inventory.css
│  │  ├─ invstyle.css
│  │  ├─ login.css
│  │  ├─ main_page.css
│  │  ├─ orderReceipt.css
│  │  ├─ purchase.css
│  │  ├─ signup.css
│  │  └─ user.css
│  ├─ images
│  │  ├─ Popsicle.jpg
│  │  ├─ cart.jpeg
│  │  ├─ cate pic sample 3.jpeg
│  │  ├─ cover_page.jpeg
│  │  ├─ icecream.jpeg
│  │  ├─ item sample 1.jpeg
│  │  ├─ item sample 2.jpeg
│  │  ├─ item sample 3.jpeg
│  │  ├─ item sample 4.jpeg
│  │  ├─ item sample 5.jpeg
│  │  ├─ login icon.png
│  │  ├─ logo.webp
│  │  ├─ macaron.jpg
│  │  ├─ pastries.jpg
│  │  └─ ube macaron.jpg
│  ├─ index.php                       # Homepage
│  ├─ js
│  │  └─ script.js                    # Some javascript functions used for styling pages.
│  ├─ pages                           # Every pages details
│  │  ├─ AdminLogin.php
│  │  ├─ InventoryMAnager
│  │  │  ├─ InventoryAdmin.php
│  │  │  ├─ category.php
│  │  │  ├─ imanagerprofile.php
│  │  │  ├─ navbar.php
│  │  │  ├─ product.php
│  │  │  ├─ purchaseRequest.php
│  │  │  ├─ reports.php
│  │  │  └─ requestconfirm.php
│  │  ├─ OrdersManager
│  │  │  ├─ EditOrderForm.php
│  │  │  ├─ OrdersAdmin.php
│  │  │  ├─ OrdersAdmin2.php
│  │  │  ├─ imanagerprofile.php
│  │  │  ├─ navbar.php
│  │  │  └─ reportlayout.php
│  │  ├─ PurchaseRequestForm.html
│  │  ├─ accountDetails.php
│  │  ├─ checkout.php
│  │  ├─ login.php
│  │  ├─ orderHistory.php
│  │  ├─ orderReceipt.php
│  │  ├─ purchasing
│  │  │  ├─ analytics.html
│  │  │  ├─ dashboard.php
│  │  │  ├─ finalize.html
│  │  │  ├─ invoice.html
│  │  │  ├─ invoicelayout.php
│  │  │  ├─ invoices.html
│  │  │  ├─ invoices.php
│  │  │  ├─ navbar.php
│  │  │  ├─ pending.php
│  │  │  ├─ pendingprequests.html
│  │  │  ├─ pmanagerprofile.html
│  │  │  ├─ profile.php
│  │  │  ├─ purchase.html
│  │  │  ├─ reject.html
│  │  │  ├─ reject.php
│  │  │  ├─ reports.html
│  │  │  ├─ request.php
│  │  │  └─ requestconfirm.php
│  │  ├─ user.php
│  │  └─ userForm.php
│  └─ php                              # PHP actions
│     ├─ AdminloginAction.php
│     ├─ DeleteOrder.php
│     ├─ EditOrder.php
│     ├─ accountDetailsAction.php
│     ├─ addCategoryAction.php
│     ├─ addProductAction.php
│     ├─ addToCartAction.php
│     ├─ checkoutAction.php
│     ├─ clearCartAction.php
│     ├─ config.php                    # Database configure
│     ├─ deleteAction.php
│     ├─ deleteCategoryAction.php
│     ├─ editProductAction.php
│     ├─ functions.php
│     ├─ loginAction.php
│     └─ signupAction.php
└─ README.md

```

### How to install
- Requirements:
  - Git
  - Visual Studio Code (or other IDEs or code editors)
  - PHP 8.0.17 Development Server (or newer version)
  - MySQL Server
  - MySQLWorkbench (Optional, but recommended)

- If you want to check our database:
  - Open MySQL Workbench (or Extension MySQL if using Visual Studio Code. [Install MySQL Extension](https://marketplace.visualstudio.com/items?itemName=cweijan.vscode-mysql-client2))
  - Open `POS/php/config.php` to get the database connection details.
  - Connect using the configure above.
  
- Install on localhost:
  - Clone git repo: `git clone https://github.com/leecavazos/COSC3380_Project`
  - Go to POS folder: `cd POS`
  - Start PHP server: `php -S 0.0.0.0:8000`

- Access the hosted site (Hosted on AWS EC2)
  - http://18.116.44.118/index.php (If you cannot open the page, contact us. We will open the site for you)
  - If `CONNECTION_TIMED_OUT`, please contact us as soon as possible!
 
