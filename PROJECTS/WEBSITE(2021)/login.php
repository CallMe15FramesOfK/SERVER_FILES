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

        header("Location: index.php?error=Username required");

        exit();

    } else if (empty($pass)) {

        header("Location: index.php?error=Password required");

        exit();

    } else {

        $sql = "SELECT * FROM info WHERE user='$user' AND passwrd='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['user'] === $user && $row['passwrd'] === $pass) {

                

                $_SESSION['user'] = $row['user'];

                $_SESSION['ID'] = $row['ID'];

                header("Location: main_page.php");

                exit();

            } else {

                header("Location: index.php?error=Wrong username or password");

                exit();

            }

        } else {

            header("Location: index.php?error=Wrong username or password");

            exit();

        }

    }

} else {

    header("Location: index.php");

    exit();

}
?>