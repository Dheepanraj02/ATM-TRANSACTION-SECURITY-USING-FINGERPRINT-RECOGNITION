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
<center>
       <div class="container">
            <div class="row">
                <div class="col-xs-4 col-lg-offset-4"><center>
                        <form method="post" action="generatepin1.php">
                            <br><Br><br><br><br><br><input type="text" placeholder="Enter the account number"  class="form-control input-lg" name="account1"><br><br>
                            <input type="text" placeholder="Enter the User id"  class="form-control input-lg" name="user"><br><br>
                            <input type="text" placeholder="Enter your New Pin"  class="form-control input-lg" name="newpin"><br><br>
                 <input type="submit"  class="button" value="Submit">&emsp;
                      
                 <a  href="index.php" class="button">Exit</a> <br><br><br> &emsp;
                        </form>
                        
                 </div>
                </div>
       </div>
           


