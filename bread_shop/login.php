<!--
Rohan Tumkur
12/1/2023
IT202-003
Section 003 Unit 11 Asignment
rat6@njit.edu
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = 'stylesheet' href = 'stylesheet.css'/>
    <link rel = 'icon' href = 'images/icon.png' type = 'image/x-icon'/>
    <title>Login | Voyage Bakery</title>
</head>
<body>
    <?php include('header.php') ?>
    <main style = 'margin-top: 100px; height: 520px;' >
        <?php if(!empty($e)) {?> 
            <p style = 'color: red; font-family: Garamond, serif; margin-left: 58px;'>
                <?php echo $e;?>
            </p>
        <?php } ?>
        <form action = 'logged_in.php' method = 'post'>
            <label for = 'email'>Email Address:</label>
            <input type = 'text' name = 'email'/>
            <br>
            <label for = 'password'>Password:</label>
            <input type = 'password' name = 'password'/>
            <br>
            <input type = 'submit' value = 'Login' class = 'button'/>
        </form>
    </main>
    <?php include('footer.php') ?>
</body>
</html>