
<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: 618Soleslogin.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">

    body{
        background-image: url('https://wallpapertag.com/wallpaper/full/8/0/b/152144-large-tumblr-theme-backgrounds-1920x1226-for-hd.jpg');
        background-repeat: no-repeat;
         background-attachment: fixed;
         background-size: cover;
    }
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  font-size: 16px;
}

.price {
  color: Black;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: black;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: .7;
}


    </style>
    <div class="card">
  <img src="https://i.ebayimg.com/images/g/s6UAAOSwn7peln7c/s-l1600.jpg" alt="Ebay.com" style="width:100%">
  <h>Yeezy Boost 700 Wave Runner</h>
  <p class="price">$700</p>
  <p>Adidas Yeezy Boost 700 Wave Runner. Brand new, never worn. Size 11</p>
</div>

<div class="card">
<img src="https://stockx.imgix.net/Nike-Air-Force-1-Low-Supreme-Box-Logo-White-Product.jpg?fit=fill&bg=FFFFFF&w=700&h=500&auto=format,compress&q=90&dpr=2&trim=color&updated_at=1583951149" alt= "bing.com" style= "width:100%">
<h>Nike Supreme Airforce One White</h>
<p class="price">$400</p>
<p>Nike Supreme Airforce One White. Brand new, Never worn. Size 11 </p>
</div>

<div class="card">
<img src= "https://i.ebayimg.com/images/g/RdcAAOSw81RfciX4/s-l1600.jpg" alt= "Ebay.com" style="width:100%">
<h>Jordan 1 Royal Toe </h>
<p class="price">$550</p>
<p>Jordan 1 Royal Toe. Brand new, Never Worn. Size 8.5 </p>
</div>

<div class="card">
<img src="https://sneakernews.com/wp-content/uploads/2020/06/Fragment-Jordan-Air-Cadence-Release-Info-2.jpg" alt="sneakernews.com" style="width:100%">
<h>Jordan Cadence<h>
<p class="price">$450</p>
<p>Jordan Cadence. Brand new, Never Worn. Size 10.</p>
</div>

<div class="card">
<img src="https://sneakerbardetroit.com/wp-content/uploads/2019/12/Air-Jordan-1-Court-Purple-555088-500-1.jpg" alt="sneakernews.com" style="width:100%">
<h>Jordan 1 Court Purple 2.0</h>
<p class="price">$350</p>
<p>Jordan 1 Court Purple 2.0. Brand new, Never Worn. Size 11.5.</p>
</div>

<div class="card">
<img src="https://i.ebayimg.com/images/g/1oYAAOSw7blfWUw2/s-l1600.jpg" alt="Ebay.com" style="width:100%">
<h>Jordan 4 Guava Ice</h>
<p class="price">$1200</p>
<p>Jordan 4 Guava Ice. Brand new, Never worn. Size 10.</p>
</div>

<div class="card">
<img src="https://sneakerbardetroit.com/wp-content/uploads/2017/11/off-white-nike-air-presto-1.png" alt="sneakernews.com" style="width:100%">
<h>Nike Air Presto Off White </h>
<p class="price"> $3400</p>
<p>Nike Air Presto Off White. Brand new. Never worn. Tags have not been put on them yet. size 9.</p>
</div>
</head>
</html>
