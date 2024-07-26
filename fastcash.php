<?php 
$con= mysqli_connect("localhost", "root", "", "atm")
         or die(mysqli_errno($con));
session_start();
$pin=$_SESSION['Pin'];
$select_query="select balance from card where card_pin=$pin";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
$row= mysqli_fetch_array($select_query_result);
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
            <div class="row">
                <br><Br><BR> <h7> <b><div class="col-xs-2">Remaining Balance: </div>
                        <div class="col-xs-10"><?php echo $row['balance']; ?> </div><br><br></b></h7> &emsp;&emsp;</h7>
            </div>
    <div class="container">
        <div class="padding">
        <table>
            <tbody>
            <th><h1><center>
                        Please select a Denomination<br><br>
                </center></h1>
            </th>
                <tr>
                    <td>
                        <a href="250.php" class="button">250</a> <br><br><br> &emsp; 
                    </td>
                    <td>
                        <a href="500.php" class="button">500</a><br><br><br> &emsp;
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="1000.php" class="button">1000</a><br><br><br>
                    </td>
                    <td>
                        <a href="5000.php" class="button">5000</a><br><br><br>
                </td>
                </tr>
          
            </tbody>
        </table>
    </div>
    </div>
</body>
    </html>