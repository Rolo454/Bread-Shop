<!--
Rohan Tumkur
11/3/2023
IT202-003
Section 003 Unit 7 Asignment
rat6@njit.edu
-->
<?php 
require('database.php');

$e = '';
$breadCategoryID = filter_input(INPUT_POST, 'breadCategory', FILTER_VALIDATE_INT);
$breadCode = htmlspecialchars(filter_input(INPUT_POST, 'breadCode'));
$breadName = htmlspecialchars(filter_input(INPUT_POST, 'breadName'));
$price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
$description = htmlspecialchars(filter_input(INPUT_POST, 'description'));

if ($breadCode == '' || $breadCode == NULL || $price == '' || $price == NULL ||
$description == '' || $description == NULL || $breadName == '' || $breadName == NULL) {
    $e = 'Please fill in all fields.';
}

if ($price > 10){
    $e = 'Price must be under $10.00.';
}

function dupBreadCode($breadCode) {
    require('database.php');
    $query = 'SELECT breadCode FROM bread
    WHERE breadCode = :breadCode ';
    $s1 = $db->prepare($query);
    $s1->bindValue(':breadCode', $breadCode);
    $s1->execute();
    $bread = $s1->fetch();
    return $bread == NULL;
}
if ($e != ''){
    include('create.php');
    exit();
}


if (!dupBreadCode($breadCode)) {
    $e = 'Bread Code already exists in database.';
}
if ($e != ''){
    include('create.php');
    exit();
}

$query = 'INSERT INTO bread (breadCategoryID, breadCode, breadName, price, description, dateAdded)
VALUES (:breadCategoryID, :breadCode, :breadName, :price, :description, NOW())';
$s1 = $db->prepare($query);
$s1->bindValue(':breadCategoryID', $breadCategoryID);
$s1->bindValue(':breadCode', $breadCode);
$s1->bindValue(':breadName', $breadName);
$s1->bindValue(':price', $price);
$s1->bindValue(':description', $description);
$s1->execute();
$s1->closeCursor();
?>

<html>
    <head>
        <title>Voyage Bakery | Added!</title>
        <link rel = 'stylesheet' href = 'stylesheet.css' />
        <link rel = 'icon' href = 'images/icon.png' type = 'image/x-icon'/>
    </head>
    <body>
        <?php include('header.php'); ?>

        <main class = 'add-bread'>
        <h1 style = 'font-weight: normal;'>Your bread was added to the database!</h1>
        <label>Bread Code:</label>
        <span><?php echo $breadCode; ?></span>
        <br>
        <label>Bread Name:</label>
        <span><?php echo $breadName; ?></span>
        <br>
        <label>Bread Description:</label>
        <span><?php echo $description; ?></label>
        <br>
        <label>Bread Price:</label>
        <span>$<?php echo number_format($price, 2);?></label>
        </main>
        <?php include ('footer.php'); ?>
    </body>
</html>