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
require('database.php');

$breadCategoryName = NULL;

$query = 'SELECT breadCategoryName, breadCategoryID FROM breadCategories
ORDER BY breadCategoryID';
$s1 = $db->prepare($query);
$s1->execute();
$breadCategories = $s1->fetchAll();
$s1->closeCursor();

if (!isset($breadCode)){
    $breadCode = '';
}
if (!isset($breadName)){
    $breadName = '';
}
if (!isset($description)){
    $description = '';
}
if (!isset($price)){
    $price = '';
}
?>

<html>
    <head>
        <title>Create | Voyage Bakery</title>
        <link rel = 'stylesheet' href = 'stylesheet.css'/>
        <link rel = 'icon' href = 'images/icon.png' type = 'image/x-icon'/>
    </head>
    <body>
        <?php include('header.php');?>
        <main id = 'create'>
            <?php if($_SESSION != []) {?>
                <h2><?php echo $_SESSION['greeting']; ?></h2>
            <?php } ?>
            <?php  if(!empty($e)) {?> 
            <p style = 'color: red; font-family: Garamonf, serif; margin-left: 58px;'>
                <?php echo $e;?>
            </p>
            <?php } ?>
            <form class = 'create' action="add_bread.php" method = 'post'>
                <label style = 'padding-bottom = 10px;'>Bread Category:</label>
                <select name = 'breadCategory'>
                <?php foreach ($breadCategories as $breadCategory): ?>
                    <option  value = '<?php echo $breadCategory['breadCategoryID'];?>'><?php echo $breadCategory['breadCategoryName'];?></option>
                <?php endforeach; ?>
                </select>
                <br>
                <br>
                <label>Bread Code:</label>
                <span class = 'error'></span>
                <input type="text" name = 'breadCode' id = 'breadCode' value = '<?php echo htmlspecialchars($breadCode)?>'/>
                <label>Bread Name:</label>
                <span class = 'error'></span>
                <input type="text" name = 'breadName' id = 'breadName' value = '<?php echo htmlspecialchars($breadName)?>'/>
                <label for="description">Bread Description:</label>
                <span class = 'error'></span>
                <input type="text" name = 'description' id = 'description' value = '<?php echo htmlspecialchars($description)?>'/>
                <label for = 'price'>Bread Price:</label>
                <span class = 'error'></span>
                <input type="text" name = 'price' id = 'price' value = '<?php 
                if ($price == '') echo '';
                else echo number_format($price, 2);
                ?>'>
                
                <input class = 'button' type='submit' id = 'submit' />
                <input class = 'button' type = 'button'  value = 'Reset' id = 'reset' />
            </form>
        </main>
        <?php include('footer.php');?>
        <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
        <script src = 'create.js'></script>
    </body>
</html>