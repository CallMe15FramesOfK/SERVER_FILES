<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_contact.css">
    <script src="script.js" defer></script>
    <title>Contact</title>
</head>
<body>
<nav class="nav_bar">
        <div class="title">Contact</div>
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="navbar-links">
            <ul>
                <li><a href="main_page.php">Home</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about_me.html">About us</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>

<div class="center">    


	<h1>Contact us</h1>
	<form action="mail.php" method="post">
    <?php if (isset($_GET['error'])) { ?>

     <p class="error"><?php echo $_GET['error']; ?></p>

    <?php } ?>
	<div class="txt_field">
        

    <input type="email" name="email">
    <span></span>
    <label>E-mail</label>
</div>
<div class="txt_field">
    <input type="text" name="subject">
    <span></span>
    <label>Subject</label>


</div>
<div class="txt_field">
    <input type="text" name="mess">
    <span></span>
    <label>Message</label>
    
<input type="submit" value="Send">

<div class="signup_link">
      We will answer your question as soon as we can 
</div>


</div>
    
</form>
</div>

</body>
</html>