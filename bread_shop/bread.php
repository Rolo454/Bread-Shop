<!--
Rohan Tumkur
12/1/2023
IT202-003
Section 003 Unit 11 Asignment
rat6@njit.edu
-->
<?php
require("database.php");

$bread_category_id = filter_input(INPUT_GET, 'bread_category_id', FILTER_VALIDATE_INT);

if ($bread_category_id === NULL || $bread_category_id === false) {
    $bread_category_id = 1;
}


$queryCategories = 'SELECT * FROM breadCategories
ORDER BY breadCategoryID';
$s1 = $db->prepare($queryCategories);
$s1->execute();
$bread_categories = $s1->fetchAll();
$s1->closeCursor();

$query = 'SELECT * FROM bread 
WHERE breadCategoryID = :bread_category_id
ORDER BY breadID';
$s = $db->prepare($query);
$s->bindValue(':bread_category_id', $bread_category_id);
$s->execute();
$breads = $s->fetchAll();
$s->closeCursor();
 
$queryCategoryName = 'SELECT * FROM breadCategories
where breadCategoryID = :bread_category_id
ORDER BY breadCategoryID';
$s2 = $db->prepare($queryCategoryName);
$s2->bindValue(':bread_category_id', $bread_category_id);
$s2->execute();
$bread_category_name = $s2->fetch();
$s2->closeCursor();
?>

<html>
<head>
    <title>Bread | Voyage Bakery</title>
    <link rel = 'stylesheet' href = 'stylesheet.css'/>
    <link rel = 'icon' href = 'images/icon.png' type = 'image/x-icon'/>
</head>
<body>
    <?php include('header.php')?>
    <main id = 'bread-main'>
        <?php if($_SESSION != []) {?>
            <h2><?php echo $_SESSION['greeting']; ?></h2>
        <?php } ?>
        <nav id = 'breads'>
            <?php foreach($bread_categories as $bread_category):?>
                <a class = 'bread_link' href = "?bread_category_id=<?php echo $bread_category['breadCategoryID'];?>">
                <?php echo $bread_category['breadCategoryName'];?></a>
            <?php endforeach; ?>
        </nav>
        <div id= 'tbl'>
        <h2 id = 'theader'><?php echo $bread_category_name['breadCategoryName']; ?></h2>
        <table>
        <tr class = 'ttitle'>
            <td style = 'width: 5%;'>Code</td>
            <td style = 'width: 10%;'>Bread Name</td>
            <td style = 'width: 65%;'>Description</td>
            <td style = 'width: 5%;'>Price</td>
            <td>Details</td>
            <?php if ($_SESSION != []) { ?>
                <td>Delete</td>
            <?php } ?>
        </tr>
        <?php foreach ($breads as $bread): ?>
        <tr>
            <td style = 'width: 5%;'><?php echo $bread['breadCode'];?></td>
            <td style = 'width: 10%;'><?php echo $bread['breadName'];?></td>
            <td style = 'width: 45%; text-align: left'><?php echo $bread['description'];?></td>
            <td style = 'width: 5%;'>$<?php echo $bread['price'];?></td>
            <td style = 'width: 7.5%'>
                    <form action = 'details.php' method = 'get' style = 'width: 50px'>
                        <input type = 'hidden' name = 'breadID' value = '<?php echo $bread['breadID']?>'/>
                        <input 
                            style = 'margin-top: 10px'
                            type = 'submit'
                            value = 'Details' 
                            class = 'button details-button' 
                            id = 'details-button'
                        />
                    </form>
                </td>
            <?php if ($_SESSION != []) { ?>
                <td style = 'width: 7.5%'>
                    <form action = 'delete.php' method = 'post' style = 'width: 50px'>
                        <input type = 'hidden' name = 'breadID' value = '<?php echo $bread['breadID']?>'/>
                        <input 
                            style = 'margin-top: 10px'
                            type = 'submit' 
                            value = 'Delete' 
                            class = 'button delete-button' 
                            id = 'delete'
                        />
                    </form>
                </td>
            <?php } ?>
        </tr>
        <?php endforeach;?>
        </table>
        </div>
    </main>
    <?php include('footer.php');?>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
    <script src = 'bread.js'></script>
</body>
</html>
