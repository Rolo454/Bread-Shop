<!--
Rohan Tumkur
12/1/2023
IT202-003
Section 003 Unit 11 Asignment
rat6@njit.edu
-->
<?php
function is_valid_login($email, $password) {
    require('database.php');
    $query = 'SELECT password FROM breadManagers
    WHERE emailAddress = :email';
    $s = $db->prepare($query);
    $s->bindValue(':email', $email);
    $s->execute();
    $hash = $s->fetch()['password'];
    $s->closeCursor();
    if ($hash !== false) {
        return password_verify($password, $hash);
    }
}
?>
