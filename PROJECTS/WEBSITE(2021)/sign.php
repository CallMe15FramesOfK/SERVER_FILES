<?php
session_start();
include "connection.php";


if (isset($_POST['user']) && isset($_POST['passwrd'])) {

    function validate($data)
    {

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;

    }

    $user = validate($_POST['user']);

    $pass = validate($_POST['passwrd']);

    if (empty($user)) {

        header("Location: signup.php?error=Login required");

        exit();

    } else if (empty($pass)) {

        header("Location: signup.php?error=Password required");

        exit();

    } else {
        $sql = "INSERT INTO info(user,passwrd) VALUES('$user','$pass')";

        $result = mysqli_query($conn, $sql)or die("Could Not Perform Sign Up");

        
    header("Location: index.php?error=Success sign up");

    exit();

}
}
?>