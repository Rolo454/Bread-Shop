<!--
Rohan Tumkur
12/1/2023
IT202-003
Section 003 Unit 11 Asignment
rat6@njit.edu
-->
<?php 
function add_bread_manager($email, $password, $firstName, $lastName) {
    require('database.php');
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query = 'INSERT INTO breadManagers (emailAddress, password, firstName, lastName)
    VALUES (:email, :password, :firstName, :lastName)';
    $s = $db->prepare($query);
    $s->bindValue(':email', $email);
    $s->bindValue(':password', $hash);
    $s->bindValue(':firstName', $firstName);
    $s->bindValue(':lastName', $lastName);
    $s->execute();
    $s->closeCursor();
}

add_bread_manager('bradpitt@gmail.com', 'fight_club', 'Brad', 'Pitt');
add_bread_manager('angelinajolie@gmail.com', 'maleficent', 'Angelina', 'Jolie');
add_bread_manager('jamiefoxx@gmail.com', 'django_unchained', 'Jamie', 'Foxx');
?>