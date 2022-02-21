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
     body{ font: 16px sans-serif; text-align: center; background-color: rgb(255,255,255);}
     
        a{
            text-decoration: none;
            color: red;
            font-size: 20px;
            padding: 8px;
        }
        a:hover{
            color: black;
        }
             h1{
        text-align: center;
        color: black;

        }
        nav{
            text-align: center;
        }
     
     footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    color: black;
    text-align: center;
            }

           
.column {
  float: left;
  width: 100%;
  padding: 5px;
}

/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: table;
}
            

    </style>
</head>
<header id= "header" style= "display: block"; >
<div id="clockbox"></div>

<script type="text/javascript">
var tmonth=["January","February","March","April","May","June","July","August","September","October","November","December"];
function GetClock(){
var d=new Date();
var nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();

var nhour=d.getHours(),nmin=d.getMinutes(),ap;
if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nmin<=9) nmin="0"+nmin;

var clocktext=""+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+ap+"";
document.getElementById('clockbox').innerHTML=clocktext;
}

GetClock();
setInterval(GetClock,1000);
</script>
    <hgroup>
       <h1 class ="page-logo">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to 618Soles.</h1>
    </h1>
    </header>

    <div id = "wrap" style= "display: block;">
        </hgroup>


<nav>
<ul>
<li>
    <a href="618SolesWelcome.php">
    <span>Home</span>
    </li>
    <li>
    <a href= "618SolesProducts.php"</a>
    <span>Products</span>
    </li>
    <li>
    <a href="https://www.instagram.com/618_soles/"</a>
    <span>Social Media</span>
    </li>
    <li>
    <a href="618SolesContact-us.php"</a>
    <span>Contact-us</span>
    </li>
    </ul>
 </nav>
 <p>
            <a href="618SolesLogOut.php" class="btn btn-danger">Sign Out of Your Account</a>
        </p>
 <p1><b>About 618Soles.</b> We are a small group of shoe collectors and friends who are passionate about shoes. 
 We have many shoes available to purchase.<br> We have been buying and selling shoes for many years. We are a trusted small business located in the 618. <br>
 If you are new to the shoe game and want to upgrade your kicks browse our products and see if we have a size that fits you. </p1>
 



</body>

<footer>
<p> Copyright 2021. 618Soles All Rights Reserved </p>
</footer>
</html>