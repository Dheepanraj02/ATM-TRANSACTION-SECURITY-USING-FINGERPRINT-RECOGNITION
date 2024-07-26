<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php "ATM Management System"; ?> </title>
        <link  rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link href="style.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
        <style>
 
 </style>
    </head>
    <body  style="background-color:black">
    <link href="style.css" rel="stylesheet" type="text/css"/> 
    <div class="header">
        <div class="inner-header">
            <div class="logo">
                <p>
                    Welcome to CoderBank ATM 
                </p>
            </div>
        </div>
    </div>
    
        
            <div class="banner-image" style="background-image:url(img1/atm1.jpg)">
                <div class="inner-banner-image">
                    <div class="banner-content">
                        <h1><b>Please Scan Your Fingerprint</b></h1>
                        
                        <link rel="stylesheet" href="style1.css">
                        <br><br><br><br><br><br><br><br><br><br><br>
 <div class="center">
    <h1></h1>
    <svg class="fingerprint" xmlns="http://www.w3.org/2000/svg" viewBox="-1.5 -1.5 136.63 136.56" width="136.63" height="136.56">
        <path class="original" d="M74.79 8.76C34.79 5.41 8.15 33.6 8.2 67.06c.02 9.4 4.71 18.2-3.08 26.3M95.66 6.84C64.75-6.62 35.16-.37 12.83 27.07m92.5-14.8c18.89 14.55 28.33 31.7 28.3 55.56M7.33 36.48C-.21 51.34-1.78 65.35 1.96 82.91m15.46-24.84c11.03-56.46 92.3-55.76 99.67 4.91M49 29.02c16.4-7.37 31.33-5.39 44.7 5.88m-9.5-23.96c34.23 11.28 46.91 41.4 41.55 86.97M19.31 114.08c5.28-4.5 10.26-10.33 12.77-17.5m-5.93 22.53c15.22-12.49 18.45-31.24 16.52-44.59-5.3-27.22 16.68-33.82 26.82-32.75m-60.06 59c13.42-12.83 7.13-24.08 7.23-32.41m-2.3 39.33C42.6 79.8 7.64 65.8 40.34 34.52m.44 93.96a60.94 60.94 0 0 0 14.6-22.67M33.32 124.1c13.22-12.7 20.85-31.39 17.7-50.9m18.23 60.37c7.88-12.08 13-25.79 15.32-41.2m.55-9.96c2.77-42.91-32.4-36.83-34.59-18.61m63.56 50.8c3.44-14.48 5.28-28.43 4.18-41.01m-27.51 55.7c3.05-6.22 6.01-13.64 7.48-20.15m3.93 14.49c11.26-26.47 9.82-68.08-1.45-81.57m-51.14 89.23c15.1-16.79 21.81-39.44 17.4-64.39m-8.1 66.06c21.14-28.19 18.43-54.84 16.26-66.68-2.17-11.83-16.63-9.3-16.27 1.18.37 10.48 2.53 14.1-.36 27.83m21.1 37.03c20.46-36.82 16.97-79.29-.42-87.57m20.9 55.5c15.34-83.72-60.42-79.88-66.48-38.07-1.34 12.78 2.22 14.56.76 25.71" fill="none" stroke-width="3" stroke="#ddd" stroke-linecap="round" stroke-miterlimit="3"/>
        <linearGradient id="a" x1="49.4%" y1="-3.33%" x2="49.87%" y2="102.85%">
          <stop offset="0%" stop-color="#b279f7"/>
          <stop offset="90%" stop-color="#4b52db"/>
        </linearGradient>
        <path class="clone" d="M74.79 8.76C34.79 5.41 8.15 33.6 8.2 67.06c.02 9.4 4.71 18.2-3.08 26.3M95.66 6.84C64.75-6.62 35.16-.37 12.83 27.07m92.5-14.8c18.89 14.55 28.33 31.7 28.3 55.56M7.33 36.48C-.21 51.34-1.78 65.35 1.96 82.91m15.46-24.84c11.03-56.46 92.3-55.76 99.67 4.91M49 29.02c16.4-7.37 31.33-5.39 44.7 5.88m-9.5-23.96c34.23 11.28 46.91 41.4 41.55 86.97M19.31 114.08c5.28-4.5 10.26-10.33 12.77-17.5m-5.93 22.53c15.22-12.49 18.45-31.24 16.52-44.59-5.3-27.22 16.68-33.82 26.82-32.75m-60.06 59c13.42-12.83 7.13-24.08 7.23-32.41m-2.3 39.33C42.6 79.8 7.64 65.8 40.34 34.52m.44 93.96a60.94 60.94 0 0 0 14.6-22.67M33.32 124.1c13.22-12.7 20.85-31.39 17.7-50.9m18.23 60.37c7.88-12.08 13-25.79 15.32-41.2m.55-9.96c2.77-42.91-32.4-36.83-34.59-18.61m63.56 50.8c3.44-14.48 5.28-28.43 4.18-41.01m-27.51 55.7c3.05-6.22 6.01-13.64 7.48-20.15m3.93 14.49c11.26-26.47 9.82-68.08-1.45-81.57m-51.14 89.23c15.1-16.79 21.81-39.44 17.4-64.39m-8.1 66.06c21.14-28.19 18.43-54.84 16.26-66.68-2.17-11.83-16.63-9.3-16.27 1.18.37 10.48 2.53 14.1-.36 27.83m21.1 37.03c20.46-36.82 16.97-79.29-.42-87.57m20.9 55.5c15.34-83.72-60.42-79.88-66.48-38.07-1.34 12.78 2.22 14.56.76 25.71" fill="none" stroke-width="3" stroke="url(#a)" stroke-linecap="round" stroke-miterlimit="3" stroke-dasharray="178" stroke-dashoffset="178"/>
        </svg>
    <svg class="icon-success" viewBox="0 0 100 76">
        <circle cx="10" cy="10" r="10" fill="#66bb6a"></circle>
        <path fill="none" stroke="#FFFFFF" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="56" stroke-dashoffset="56" d="M17.7,40.9l10.9,10.9l28.7-28.7"></path>
    </svg>

<br>
<br>
    <div class="scan">hold to scan your finger</div>
    <div class="scan-success"> </div>

    </div>
 <script src="script.js"></script> 
 </div>
 <a href="pin.php" class="button" align="center">Continue</a> 
 
    <footer class="foot">
                    <div class="container">
                        <p align="center">
                            Copyright © CoderBank. All Rights Reserved | Contact Us: +91 90000 00000
                        </p>
                    </div>
                </footer>
    </body>
</html>
