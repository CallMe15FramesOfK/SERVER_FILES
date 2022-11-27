<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_login.css">
    <title>SIGN_UP</title>



</head>
<body>
<div class="center">


    <h1>SIGN UP</h1>
    <form action="sign.php" method="post">
        <?php if (isset($_GET['error'])) {?>

         <p class="error"><?php echo $_GET['error']; ?></p>

        <?php }?>
    <div class="txt_field">

        <input type="text" name="user" placeholder="max 20 characters" maxlength="20">
        <span></span>
        <label>Login</label>
    </div>

    <div class="txt_field">


        <input type="password" name="passwrd" placeholder="max 15 characters" maxlength="15">
        <span></span>
        <label>Password</label>
    </div>
    <input type="submit" value="Sign up">
    <div class="signup_link">
          Got an account? <a href="index.php">Log in</a>
    </div>




    </form>
</div>

</body>
</html>