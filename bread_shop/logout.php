<!--
Rohan Tumkur
12/1/2023
IT202-003
Section 003 Unit 11 Asignment
rat6@njit.edu
-->
<?php
session_start();
$_SESSION = [];
session_destroy();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = 'stylesheet' href = 'stylesheet.css'/>
    <title>Logged Out | Voyage Bakery</title>
    <link rel = 'icon' href = 'images/icon.png' type = 'image/x-icon'/>
</head>
</head>
<body>
    <?php include('header.php') ?>
    <main style = 'margin-top: 100px; height: 450px'>
        <h2 id = 'logout-message'>You were successfully logged out.</h2> 
    </main>
    <?php include('footer.php') ?>
</body>
</html>