<?php 
$con= mysqli_connect("localhost", "root", "", "atm")
         or die(mysqli_errno($con));
session_start();
$select_query="CALL transaction_display()";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
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
    <body style="background-color: black">
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
 <center>

    <div class="container">
     <div class="row">
         <table class="table table-bordered table1">
             <tbody>
             <th>transaction id</th>
             <th>User id</th>
             <th>Transaction type</th>
             <th>Transaction status</th>
             <th>Transaction Date</th>
     <?php
              $num = mysqli_num_rows($select_query_result);
 while($num!=0)
 {
  $row = mysqli_fetch_array($select_query_result );
  echo "<h7>";
  echo "<tr>";
  echo "<td>";
  echo $row[1];
  echo "</td>";
  echo "<td>";
  echo $row[4];
  echo "</td>";
  echo "<td>";
  echo $row[3];
  echo "</td>";
  echo "<td>";
  echo $row[2];
  echo "</td>";
  echo "<td>";
  echo $row[0];
  echo "</td>";
  echo"</tr>";
  echo"</h7>";
  $num--;
 }
 ?>
             </tbody></table>
         <br><Br>    <a href="index.php" class="button">Exit</a>
     </body>
     </html>