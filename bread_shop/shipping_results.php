
<?php

$first_name = filter_input(INPUT_POST, 'first_name');
$last_name = filter_input(INPUT_POST, 'last_name');
$address = filter_input(INPUT_POST, 'address');
$state = filter_input(INPUT_POST, 'state');
$city = filter_input(INPUT_POST, 'city');
$zip = filter_input(INPUT_POST, 'zip', FILTER_VALIDATE_INT);
$date = filter_input(INPUT_POST, 'date');
$o_num = filter_input(INPUT_POST, 'o_num', FILTER_VALIDATE_INT);
$d1 = filter_input(INPUT_POST, 'd1');
$d2 = filter_input(INPUT_POST, 'd2');
$d3 = filter_input(INPUT_POST, 'd3');
$weight = filter_input(INPUT_POST, 'weight');

if($first_name === ''){
    $e = 'First name must have a valid input.';
} else if ($last_name === ''){
    $e = 'Last name must have a valid input.';
} else if ($address === ''){
    $e = 'Street Address must have a valid input.';
} else if ($city === ''){
    $e = 'City must have a valid input.';
} else if ($state === '' || strlen($state) != 2){
    $e = 'State must have a valid input.';
} else if ($zip === '' || strlen(strval($zip)) != 5){
    $e = 'Zip Code must have a valid input.';
} else if ($date === ''){
    $e = 'Date must have a valid input.';
} else if ($o_num === FALSE){
    $e = 'Order Number must have a valid input.';
} else if ($d1 === ''){
    $e = 'Dimensions must have valid inputs.';
} else if ($d2 === ''){
    $e = 'Dimensions must have valid inputs.';
} else if ($d3 === ''){
    $e = 'Dimensions must have valid inputs.';
} else if ($weight === ''){
    $e = 'Weight must have a valid input.';
} else {
    $e = '';
}

if($d1 > 36 || $d2 > 36 || $d3 > 36){
    $e = 'No dimension can be over 36 inches.';
}
if ($weight > 150){
    $e = 'Weight cannot be over 150lbs.';
}
if ($e != ''){
    include('shipping_page.php');
    exit();
}
?>

<html>
<head>
    <link rel = 'stylesheet' href = 'stylesheet.css'/>
    <title>Voyage Bakery | Shipping</title>
    <link rel = 'icon' href = 'images/icon.png' type = 'image/x-icon'/>
</head>
<body>
    <?php include('header.php'); ?>
    <main id = 'shipping_label'>
        <img src = 'images/shipping_label.png' alt = 'Top of Shipping Label'/>
        <div id = 'from_address'>
            <p>Voyage Bakery</p>
            <p>123 Baker's Lane</p>
            <p>Sugarville, CA 98763</P>
        </div>
        <div id = 'top_right'>
            <p id = 'shippping_date'>Shipping Date: <?php echo $date;?></p>
            <p>Order Number: <?php echo htmlspecialchars($o_num);?> </p>
            <p>Dimensions: <?php echo htmlspecialchars($d1.'in x '.$d2. 'in x '.$d3.'in');?></p>
            <p>Weight: <?php echo htmlspecialchars($weight.'lbs');?></p>
        </div>
        <div id = 'to_address'>
            <p><?php echo htmlspecialchars($first_name.' '.$last_name);?></p>
            <p><?php echo htmlspecialchars($address); ?></p>
            <p><?php echo htmlspecialchars($city.', '.$state.' '.$zip);?></p>
    </div>
        <img src = 'images/barcode.png' alt = 'Barcode' />
    </main>
    <?php include('footer.php'); ?>
</body>
</html>
