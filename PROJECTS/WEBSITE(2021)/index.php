<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_login.css">
    <title>LOGIN</title>



</head>
<body>
<div class="center">    


    <h1>LOGIN</h1>
    <form action="login.php" method="post">
        <?php if (isset($_GET['error'])) { ?>

         <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>
    <div class="txt_field">
        
        <input type="text" name="user" maxlength="20">
        <span></span>
        <label>Login</label>
    </div>

    <div class="txt_field">
            

        <input type="password" name="passwrd"  maxlength="15">
        <span></span>
        <label>Password</label>
    </div>  
    <input type="submit" value="Login">

    <div class="signup_link">
          Not a member? <a href="signup.php">Signup</a>
    </div>

    </form>
</div>

</body>
</html>