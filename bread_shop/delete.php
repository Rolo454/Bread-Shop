<!--
Rohan Tumkur
12/1/2023
IT202-003
Section 003 Unit 11 Asignment
rat6@njit.edu
-->
<?php
require('database.php');
$breadID = filter_input(INPUT_POST, 'breadID');


$query = 'DELETE FROM bread WHERE breadID = :breadID';
$s = $db->prepare($query);
$s->bindValue(':breadID', $breadID);
$s->execute();
$s->closeCursor();

include('bread.php');
?>

