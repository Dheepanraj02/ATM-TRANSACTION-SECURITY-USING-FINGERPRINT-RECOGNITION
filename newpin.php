<?php
$con= mysqli_connect("localhost", "root", "", "atm")
         or die(mysqli_errno($con));
session_start();
$newpin= $_POST['newpin'];
$pin=$_SESSION['Pin'];
$select_query="update card set card_pin=$newpin where card_pin=$pin";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php "Pin Change"; ?> </title>
        <link  rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link href="style.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
    </head>
    <body style="background-image:url(img1/atm2.jpg)">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <div class="header">
        <div class="inner-header">
            <div class="logo">
                <p><center>
                    CoderBank ATM</center><br><br><br> <br><br><br>
                </p>
            </div>
        </div>
    </div>
    <div class="header">
            <div class="banner-image">
                <div class="inner-banner-image">
                <b>
                    <h4>Pin is Successfully Changed</h4>
                </b>
           
              
                </div>
            </div>   
        </div>
    <div class="container">
        <div class="padding">
        
            <center>  <a href="index.php" class="button">Exit</a></center> <br><br><br> &emsp; 
                   
        </div>
    </div>
        
    </body>
</html>


