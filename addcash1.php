<?php 
$con= mysqli_connect("localhost", "root", "", "atm")
         or die(mysqli_errno($con));
session_start();
$admin_cash=$_POST['admin_amount'];
$atm_id=$_SESSION['atm_id'];
$select_query="update atm set available_cash=available_cash+$admin_cash where atm_id=$atm_id";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
$select_query="select available_cash from atm where atm_id=$atm_id";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
$row = mysqli_fetch_array($select_query_result);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php "Transaction page"; ?> </title>
        <link  rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link href="style.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
    <body style="background-image:url(img1/atm4.jpg)">
    <link href="style.css" rel="stylesheet" type="text/css"/>
</head>
    <div class="header">
        <div class="inner-header">
            <div class="logo">
                <p><center>
                    CoderBank ATM</center> 
                </p>
            </div>
        </div>
    </div>
<div class="container">
            <div class="banner-image">
                <div class="inner-banner-image">
                <b>
                    <h4>Transaction Successful</h4>
                </b>
           
              
                </div>
            </div>
        </div>
<div class="container1">
     <div class="row">
         <h7><br> <b><div class="col-xs-2">Cash Available: </div>
                        <div class="col-xs-10"><?php echo $row['available_cash']; ?> </div><br><br></b></h7>
            </div>
</div>
<div class="container">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                    <br><Br>    <a href="index.php" class="button">Exit</a> <br> &emsp;</center>
    </div>
            </div>
            </div>
</body>
</html>