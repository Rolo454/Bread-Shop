<!--
Rohan Tumkur
12/1/2023
IT202-003
Section 003 Unit 11 Asignment
rat6@njit.edu
-->
<?php session_start(); ?>
<header>
    <img src = "images/logo.webp" alt = 'Voyage Logo' height = 75px />
    <h1>Voyage Bakery</h1>
    <nav class = 'head_link'>
        <a href = 'home_page.php'>Home</a>
        <a href = 'bread.php'>Bread</a>
        <?php if ($_SESSION != []) {?>
            <a href = 'shipping_page.php'>Shipping</a>
            <a href = 'create.php'>Create</a>
            <a href = 'logout.php'>Logout</a>
        <?php } else { ?>
            <a href = 'login.php'>Login</a>
        <?php } ?>
    </nav>
</header>