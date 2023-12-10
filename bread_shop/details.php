<!--
Rohan Tumkur
12/1/2023
IT202-003
Section 003 Unit 11 Asignment
rat6@njit.edu
-->
<?php
include('database.php');

$breadID = htmlspecialchars(filter_input(INPUT_GET, 'breadID'));

$query = 'SELECT breadCode, breadName, description, price FROM bread
WHERE breadID = :breadID';
$s = $db->prepare($query);
$s->bindValue(':breadID', $breadID);
$s->execute();
$bread = $s->fetch();
$s->closeCursor();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details | Voyage Bakery</title>
    <link rel = 'stylesheet' href = 'stylesheet.css'/>
    <link rel = 'icon' href = 'images/icon.png' type = 'image/x-icon'/>
</head>
<body>
    <?php include('header.php'); ?>
    <main id = 'details'>
        <?php if($_SESSION != []) {?>
            <h2><?php echo $_SESSION['greeting']; ?></h2>
        <?php } ?>
        <img src = 'images/bread-images/<?php echo $bread['breadCode']; ?>.jpg' alt = '<?php echo $bread['breadName']; ?>' id = 'bread-pic'/>
        <h1><?php echo $bread['breadName']; ?></h1>
        <h4>Code: <?php echo $bread['breadCode'];?></h4>
        <h4>Description: <?php echo $bread['description']; ?></h4>
        <h4>Price: $<?php echo $bread['price']; ?></h4>
    </main>
    <?php include('footer.php'); ?>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
    <script src = 'details.js'></script>
</body>
</html>