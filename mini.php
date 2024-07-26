<?php 
$con= mysqli_connect("localhost", "root", "", "atm")
         or die(mysqli_errno($con));
session_start();
$pin=$_SESSION['Pin'];
$select_query="select a.first_name, b.account_number ,b.account_type,c.balance,d.transaction_date,d.transaction_id, e.bank_name,e.branch_location
    from user a, account b,card c, transaction d, bank e
    where a.user_id=b.user_id and
    b.user_id=c.user_id and
    a.user_id=c.user_id and
    d.user_id=b.user_id and
    e.account=b.account_number and
    c.card_pin=$pin;";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
$row= mysqli_fetch_array($select_query_result);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php "Balanace Enquiry"; ?> </title>
        <link  rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link href="style.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
    <body style="background-image:url(img1/atm2.jpg)">
    <link href="style.css" rel="stylesheet" type="text/css"/>
</head>
    <div class="header">
        <div class="inner-header">
            <div class="logo">
                <p><center>
                    CoderBank ATM</center><br><br><br> <br><br><br>
                </p>
            </div>
        </div>
    </div>
<div class="container1">
     <div class="row">
         <h7><br> <b><div class="col-xs-2">Name: </div>
                        <div class="col-xs-10"><?php echo $row['first_name']; ?> </div><br><br></b></h7>
            </div>
            <div class="row">
                <h7> <b><div class="col-xs-2">Account Number: </div>
                        <div class="col-xs-10"><?php echo $row['account_number']; ?> </div><br><br></b></h7><br>
            </div>
    <div class="row">
          
                        <h7> <b><div class="col-xs-2">Account Type:  </div>
                                <div class="col-xs-10"><?php echo $row['account_type']; ?></div></b><br><br></h7><br>
                    
            </div>
            <div class="row">
                <h7> <b><div class="col-xs-2">Balance: </div>
                        <div class="col-xs-10"><?php echo $row['balance']; ?> </div><br><br></b></h7> </h7>
        </div>
    <div class="row">
        <h9><b><div class="col-xs-2">Transaction date: </div></h9>
        <h7>   <div class="col-xs-10"><?php echo $row["transaction_date"]; ?> </div><br><br></b></h7> 
        </div>
    <div class="row">
        <h9> <b><div class="col-xs-2">Transaction id: </div></h9>
        <h7> <div class="col-xs-10"><?php echo $row['transaction_id']; ?> </div><br><br></b></h7>
    </div>
    <div class="row">
        <h9><b><div class="col-xs-2">Bank Name: </div></h9>
        <h7>   <div class="col-xs-10"><?php echo $row["bank_name"]; ?> </div><br><br></b></h7> 
        </div>
    <div class="row">
        <h9><b><div class="col-xs-2">Branch Location: </div></h9>
        <h7>   <div class="col-xs-10"><?php echo $row["branch_location"]; ?> </div><br><br></b></h7> 
        </div><br><br>
        <center><a href="index.php" class="button">Exit</a></center>
</div>