<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="products.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,300,0,0" />
   <script src="https://kit.fontawesome.com/da8d2380f3.js" crossorigin="anonymous"></script>
   <title>Shop</title>
</head>
<body>
<!--<header>
        <a href="#" class="logo">Logo</a>
        <ul class="navmenu">
            <li><a href="index.html">Home</a></li>
            <li><a href="index.html">About Us</a></li>
            <li><a href="#" class="active">Shop</a></li>
        </ul>

        <div class="nav-icons">
            <a href="#"><i class="fa-regular fa-user"></i></a>
            <a href="#"><i class="fa-solid fa-basket-shopping"></i>
            <div class="cart-quantity">0</div>
            <div class="cart-text">Cart</div>
            </a>
        </div>
    </header>-->

    <div class="header">
      <div class="header-left-section">
        <a href="home-logged-in.html" class="header-link">
         Cosmos
        </a>
      </div>

      <div class="header-middle-section">
      <input class="search-bar" type="text" placeholder="Search">

        <button class="search-button">
        <img class="search-icon" src="Bilder/search-icon.svg">
        </button>
      </div>

      <div class="header-right-section">
        <a class="user-link" href="#">
            <img class="user-icon" src="Bilder/user.svg">
        </a>

        <a class="cart-link" href="#">
          <img class="cart-icon" src="Bilder/cart.svg">
          <div class="cart-quantity js-cart-quantity">0</div>
          <div class="cart-text">Cart</div>
        </a>
      </div> <!--header-right-section-->
    </div> <!--header-->

    <div class="main">
      <div class="products-grid js-products-grid">
      </div> <!--products-grid-->
    </div> <!--main-->

    <script src="cart.js"></script> 
    <script src="script.js"></script>  
</body>
</html>