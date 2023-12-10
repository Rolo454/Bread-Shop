<!--
Rohan Tumkur
12/1/2023
IT202-003
Section 003 Unit 11 Asignment
rat6@njit.edu
-->
<?php session_start(); ?>
<html>
<head>
    <link rel = 'stylesheet' href = 'stylesheet.css'/>
    <title> Home | Voyage Bakery</title>
    <link rel = 'icon' href = 'images/icon.png' type = 'image/x-icon'/>
</head>
<body>
    <?php include('header.php'); ?>
    <main id = 'reg'>
        <?php if($_SESSION != []) {?>
            <h2><?php echo $_SESSION['greeting']; ?></h2>
        <?php } ?>
        <img id = 'russian' src = "images/russian_bread.jpg" alt = 'Russian Black Rye' height = 500px/>
        <img id = 'french' src = "images/french_bread.jpg" alt = 'French Baguette' height = 800px/>
        <div id = 'about'>
            <h3>ABOUT US</h3>
            <p>Voyage Bakery will take you on an expedition around the world by showcasing a multitude of breads from different cultures/countries. We'll take you on an adventure from the plains of France to the rolling hills of Tuscany and the aromatic spices of India. Customers can enjoy authentic tasting bread from different nations at an affordable price. Let us take your taste buds on the journey of a lifetime.</p>
        </div>
        <img id = 'naan' src = 'images/naan.jpg' alt = 'Indian Naan' />
        <img id = 'bun' src = 'images/bun.webp' alt = 'Bun' height = 400px/>
    </main>
    <?php include('footer.php') ?>
</body>
</html>