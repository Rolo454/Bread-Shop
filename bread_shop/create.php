
<?php
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
        <title>Voyage Bakery | Create</title>
        <link rel = 'stylesheet' href = 'stylesheet.css'/>
        <link rel = 'icon' href = 'images/icon.png' type = 'image/x-icon'/>
    </head>
    <body>
        <?php include('header.php');?>
        <main id = 'bread-main'>
        <?php if(!empty($e)) {?> 
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
                <input type="text" name = 'breadCode' value = '<?php echo htmlspecialchars($breadCode)?>'/>
                <label>Bread Name:</label>
                <input type="text" name = 'breadName' value = '<?php echo htmlspecialchars($breadName)?>'/>
                <label for="description">Bread Description:</label>
                <input type="text" name = 'description' value = '<?php echo htmlspecialchars($description)?>'/>
                <label for = 'price'>Bread Price:</label>
                <input type="text" name = 'price' value = '<?php 
                if ($price == '') echo '';
                else echo number_format($price, 2);
                ?>'>
                
                <input class = 'button' type='submit'/>
            </form>
        </main>
        <?php include('footer.php');?>
    </body>
</html>
