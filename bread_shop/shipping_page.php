<!--
Rohan Tumkur
12/1/2023
IT202-003
Section 003 Unit 11 Asignment
rat6@njit.edu
-->
<?php
session_start();
if ($_SESSION == []) {
    include('login_error.php');
    exit();
}
if(!isset($first_name)) {$first_name = '';}
if(!isset($last_name)) {$last_name = '';}
if(!isset($address)) {$address = '';}
if(!isset($state)) {$state = '';}
if(!isset($city)) {$city = '';}
if(!isset($zip)) {$zip = '';}
if(!isset($date)) {$date = '';}
if(!isset($o_num)) {$o_num = '';}
if(!isset($d1)) {$d1 = '';}
if(!isset($d2)) {$d2 = '';}
if(!isset($d3)) {$d3 = '';}
if(!isset($weight)) {$weight = '';}
?>

<html>
<head>
    <link rel = 'stylesheet' href = 'stylesheet.css'/>
    <title>Shipping | Voyage Bakery</title>
    <link rel = 'icon' href = 'images/icon.png' type = 'image/x-icon'/>
</head>
<body>
    <?php include('header.php'); ?>
    <main id = 'reg'>
        <?php if($_SESSION != []) {?>
            <h2><?php echo $_SESSION['greeting']; ?></h2>
        <?php } ?>
        <?php if(!empty($e)) {?> 
            <p style = 'color: red; font-family: Garamonf, serif; margin-left: 8px;'>
                <?php echo $e;?>
            </p>
        <?php } ?>
        <form action = 'shipping_results.php' method = 'post'>
            <p>Shipping Information: </p>
            <label>First Name:</label>
            <input type = 'text' name = 'first_name' value = '<?php echo htmlspecialchars($first_name);?>'/>
            <br>
            <label>Last Name:</label>
            <input type = 'text' name = 'last_name' value = '<?php echo htmlspecialchars($last_name);?>'/>
            <br>
            <label>Street Address:</label>
            <input type = 'text' name = 'address' value = '<?php echo htmlspecialchars($address);?>'/>
            <br>
            <label>City:</label>
            <input type = 'text' name = 'city' value = '<?php echo htmlspecialchars($city);?>'/>
            <br>
            <label>State:</label>
            <input type = 'text' name = 'state' value = '<?php echo htmlspecialchars($state);?>'/>
            <br>
            <label>Zip Code:</label>
            <input type = 'text' name = 'zip' value = '<?php echo htmlspecialchars($zip);?>'/>
            <br>
            <label>Shipping Date:</label>
            <input type = 'date' name = 'date' value = '<?php echo htmlspecialchars($date);?>'/>
            <br>
            <label>Order Number:</label>
            <input type = 'text' name = 'o_num'value = '<?php echo htmlspecialchars($o_num);?>'/>
            <br>
            <label>Package Dimensions (Inches):</label>
            <br>
            <label>Length:</label>
            <input type = 'text' name = 'd1' value = '<?php echo htmlspecialchars($d1);?>'/>
            <label>Width:</label>
            <input type = 'text' name = 'd2' value = '<?php echo htmlspecialchars($d2);?>'/>
            <label>Height:</label>
            <input type = 'text' name = 'd3' value = '<?php echo htmlspecialchars($d3);?>'/>
            <br>
            <label>Weight (Pounds):</label>
            <input type = 'text' name = 'weight' value = '<?php echo htmlspecialchars($weight);?>'/>
            <br>
            <input class = 'submit' type = 'submit'/>
        </form>
    </main>
    <?php include('footer.php'); ?>
</body>
</html>
