<html>
<title>The Breadman</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/w3.css">
<?php include 'header.php'?>
<style>
body {font-family: "Open Sans", sans-serif;background-color:#faf8f6}
h1,h2,h3,h4,h5,h6 {
    font-family: "Dosis";
    letter-spacing: 5px;}
.w3-theme-l5 {color:#000 !important; background-color:#faf8f6 !important}
.w3-theme-l4 {color:#000 !important; background-color:#efe8e1 !important}
.w3-theme-l3 {color:#000 !important; background-color:#dfd2c3 !important}
.w3-theme-l2 {color:#000 !important; background-color:#cfbba5 !important}
.w3-theme-l1 {color:#000 !important; background-color:#c0a487 !important}
.w3-theme-d1 {color:#fff !important; background-color:#a58057 !important}
.w3-theme-d2 {color:#fff !important; background-color:#93714d !important}
.w3-theme-d3 {color:#fff !important; background-color:#816344 !important}
.w3-theme-d4 {color:#fff !important; background-color:#6e553a !important}
.w3-theme-d5 {color:#fff !important; background-color:#5c4730 !important}

.w3-theme-light {color:#000 !important; background-color:#faf8f6 !important}
.w3-theme-dark {color:#fff !important; background-color:#5c4730 !important}
.w3-theme-action {color:#fff !important; background-color:#5c4730 !important}

.w3-theme {color:#fff !important; background-color:#b18f6a !important}
.w3-text-theme {color:#b18f6a !important}
.w3-border-theme {border-color:#b18f6a !important}

.w3-hover-theme:hover {color:#fff !important; background-color:#b18f6a !important}
.w3-hover-text-theme {color:#b18f6a !important}
.w3-hover-border-theme:hover {border-color:#b18f6a !important}

.w3-order-button{font-family: "Comic Sans MS", cursive, sans-serif;}

}
</style>
<body>

<?php include 'navbar.php'?>

<!-- Navbar (sit on top) 
<div class="w3-theme-l3 w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">The Breadman</a>
    <!-- Right-sided navbar links. Hide them on small screens 
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#menu" class="w3-bar-item w3-button">Menu</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
      <a href="order.php" class="w3-bar-item w3-button">Order</a>
    </div>
  </div>
</div>-->

<!-- Header -->
<header class="w3-theme-light w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-circle center" src="assets/breadmenu.jpg" alt="Hamburger Catering" width="80%" height="80%">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-jumbo w3-text-black">The Breadman</h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-theme-light w3-content" style="max-width:1100px">

  <!--Order Button -->
  <div class="w3-display-bottomleft w3-padding-64 w3-container w3-bar w3-xlarge"; style="position:fixed;">
  <a href="orderdetails.php"class="w3-button w3-border w3-white w3-round-large";><h3>Order Now</h3></a>
  </div>

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="assets/wheat.jpeg" class="w3-round w3-image w3-opacity-min" alt="Production" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">About The Breadman</h1><br>
      <h5 class="w3-center">Tradition since 2010</h5>
      <p class="w3-large">The Breadman was founded by Ludelie Roaring in Bicol, Albay. Starting from a bakery in the woods till now, in the woods. Serving nearby pistolas and schools, The Breadman produces consumer-grade bread. It is assured that we only use <span class="w3-tag w3-light-grey">natural</span> ingredients.</p>
      <p class="w3-large w3-text-grey w3-hide-medium">The Breadman, bread production and bakery.</p>
    </div>
  </div>
  
  <hr>
  
  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Our Selection</h1><br>
      <h4>Loaf Bread</h4>
      <p class="w3-text-grey">The Classic; The Daily Breakfast Staple Php 20.00</p><br>
    
      <h4>Wheat Bread</h4>
      <p class="w3-text-grey">Healthier Option of Loaf Bread Php 23.00</p><br>
    
      <h4>Spanish Bread</h4>
      <p class="w3-text-grey">Rolled Sugary Bread with a sweet flavor Php 15.00</p><br>
    
      <h4>Danish Bread</h4>
      <p class="w3-text-grey">Flour, Buckwheat, and Sugar in a 5-pack Php 15.00</p><br>  
    </div>
    
    <div class="w3-col l6 w3-padding-large">
      <img src="assets/oven.jpeg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
    </div>
  </div>

  <hr>

  <!-- Contact Section 
  <div class="w3-container w3-padding-64" id="contact">
    <h1>Contact</h1><br>
    <p>We offer full and bulk production for any event, large or small. We understand your needs and we will cater the food to satisfy the biggest criteria of them all, both look and taste. Do not hesitate to contact us.</p>
    <p class="w3-text-blue-grey w3-large"><b>The Breadman, Brgy Tola, Bicol, Albay</b></p>
    <p>You can also contact us by phone +639172892330 or email thebreadman@gmail.com, or you can send us a message here:</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="number" placeholder="Contact Number" required name="ContactNo"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
      <p><button class="w3-button w3-light-grey w3-section" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>
  
<!-- End page content -->
</div>

<!-- Footer 
<footer class="w3-theme-l5 w3-center w3-light-grey w3-padding-32">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>-->

</body>
</html>

