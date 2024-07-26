<?php 
 $con= mysqli_connect("localhost", "root", "", "atm")
         or die(mysqli_errno($con));
 session_start();
$pin= $_POST['Pin'];
$_SESSION['Pin']=$pin;
$select_query="select a.first_name, b.account_number from user a, account b "
        . "where b.user_id = a.user_id and a.user_id in"
        . " (select user_id from account where user_id="
        . "(select user_id from card where card_pin=$pin)) ";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
$num= mysqli_num_rows($select_query_result);
if($num==0){
    
    echo"<script>
alert('Incorrect Pin');
window.location.href='pin.php';
</script>";
}
else{
    $row= mysqli_fetch_array($select_query_result);
    }
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
    <body style="background-image:url(img1/atm2.jpg)">
    <link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
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
            <div class="row">
                 <div class="col-lg-5 col-lg-offset-2">
                     <h7><br><Br><b>  Name: <?php echo $row['first_name']; ?></b><br> <br></h7>
            
          
                     <h7><b>Account_Number: <?php echo $row['account_number']; ?></b><br><br></h7></div>
                 </div>
           
    <div class="container">
        <div class="padding">
        <table>
            <tbody>
            <th><h1>
                        Please select a Transaction<br><br>
                </h1>
            </th>
                <tr>
                    <td>
                        <a href="balance.php" class="button">Balance Enquiry</a> <br><br><br> &emsp; 
                    </td>
                    <td>
                        <a href="cash.php" class="button">Cash Withdrawal</a><br><br><br> &emsp;
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="pinchange.php" class="button">Pin Change</a><br><br><br>&emsp;
                    </td>
                    <td>
                        <a href="fastcash.php" class="button">Fast Cash</a><br><br><br>&emsp;
                </td>
                </tr>
                 <tr>
                    <td>
                        <a href="mini.php" class="button">Mini-Statement</a><br><br><br>&emsp;
                    </td>
                    <td>
                        <a href="fundtransfer.php" class="button">Funds Transfer</a><br><br><br>&emsp;
                </td>
                </tr>
          
            </tbody>
        </table>
    </div>
    </div>
            
</body>
    </html>
     
