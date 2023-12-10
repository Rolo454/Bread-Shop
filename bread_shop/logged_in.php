<!--
Rohan Tumkur
12/1/2023
IT202-003
Section 003 Unit 11 Asignment
rat6@njit.edu
-->
<?php
session_start();
include('is_valid_login.php');
$e = '';

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password');


if ($email == null || $password == '') {
    $e = 'Email Address or Password is invlaid.';
    include('login.php');
    exit();
}

$is_valid = is_valid_login($email, $password);

if (!$is_valid){
    $e = 'Email Address or Password is invalid.';
    include('login.php');
    exit();
}

include('database.php');
$query = 'SELECT firstName, lastName FROM breadManagers
WHERE emailAddress = :email';
$s = $db->prepare($query);
$s->bindValue(':email', $email);
$s->execute();
$name = $s->fetch();
$s->closeCursor();

$firstName = $name['firstName'];
$lastName = $name['lastName'];
$_SESSION['greeting'] = "Welcome $firstName $lastName ($email)!";

include('home_page.php');

?>

