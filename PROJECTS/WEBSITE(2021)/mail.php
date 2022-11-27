<?php
session_start();

if (isset($_POST['email']) && isset($_POST['mess']) && isset($_POST['subject'])) {

    function validate($data)
    {

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;

    }
    $email = validate($_POST['email']);

    $mess = "Od : ".$email." \r\n".validate($_POST['mess']."\r\nTa wiadomość została wysłana ze strony interentowej Jankosa :D");

    $subject = validate($_POST['subject']);

    $login = $_SESSION['user'];

    if (empty($email)) {

        header("Location: contact.php?error=Email required");

        exit();

    } else if (empty($mess) || empty($subject)) {

        header("Location: contact.php?error=Something is missing");

        exit();
    } else {

        
        $recipient = 'janekkrzeczo@gmail.com';
        mail($recipient, $subject, $mess)or die("ERROR!");
        header("Location: contact.php?error=Email Sent");
        exit();

    }
}

?>