<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user'])) {
    setcookie("id", 'user', time() + 8000, '/');
}

?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_main.css">
     
    <script src="script.js" defer></script>
    <title>Main_Page</title>
</head>

<body>
    <nav class="nav_bar">
        <div class="title">Hello <?php echo $_SESSION['user']; ?></div>
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <canvas id="canvas">
    <script src="canvas.js"></script>
</canvas>
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


    <section id="showcase">
        <h1>Welcome to our website</h1>
        <p>Feel free to browse our gallery and contact us if you need our help in creating your newest office</p>
        <body>
    <button onclick="window.location.href='https://www.youtube.com/watch?v=dQw4w9WgXcQ';">
      Click Me :)
    </button>
    
    </section>






    
    
</body>

</html>