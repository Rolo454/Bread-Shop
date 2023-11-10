
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
    <title>Voyage Bakery | Bread</title>
    <link rel = 'stylesheet' href = 'stylesheet.css'/>
    <link rel = 'icon' href = 'images/icon.png' type = 'image/x-icon'/>
</head>
<body>
    <?php include('header.php')?>
    <main id = 'bread-main'>
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
        </tr>
        <?php foreach ($breads as $bread): ?>
        <tr>
            <td style = 'width: 5%;'><?php echo $bread['breadCode'];?></td>
            <td style = 'width: 10%;'><?php echo $bread['breadName'];?></td>
            <td style = 'width: 65%; text-align: left'><?php echo $bread['description'];?></td>
            <td style = 'width: 5%;'>$<?php echo $bread['price'];?></td>
        </tr>
        <?php endforeach;?>
        </table>
        </div>
    </main>
    <?php include('footer.php');?>
</body>
</html>
