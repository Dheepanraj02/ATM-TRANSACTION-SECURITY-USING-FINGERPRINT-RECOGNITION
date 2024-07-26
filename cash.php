<?php 
$con= mysqli_connect("localhost", "root", "", "atm")
         or die(mysqli_errno($con));
session_start();
$pin=$_SESSION['Pin'];
$select_query="select a.first_name, b.account_number ,b.account_type,c.balance
    from user a, account b,card c
    where a.user_id=b.user_id and
    b.user_id=c.user_id and
    a.user_id=c.user_id and 
    c.card_pin=$pin;";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
$row= mysqli_fetch_array($select_query_result);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php "mini-statement"; ?> </title>
        <link  rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link href="style.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
    </head>
    <body style="background-image:url(img1/atm4.jpg)">
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
<div class="container">
        <div class="padding">
        <table>
            <tbody>
            <th><h1>
                    <br><Br><BR> Please select the type of account<br><br><br><br>
                </h1>
            </th>
                <tr>
                    <td>
                        <a href="savings.php" class="button">Savings</a> <br><br><br>; 
                    </td>
                    <td>
                        <a href="current1.php" class="button">Current</a><br><br><br> &emsp;
                    </td>
                </tr>
        </tbody>
        </table>
        </body>
        </html>
                
