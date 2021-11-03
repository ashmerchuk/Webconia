<?php
    function save_mess(){
        global $db;
        global $firstname;
        global $lastname;
        global $email;
        global $firm;
        global $howmuch;
        $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $firm = mysqli_real_escape_string($db, $_POST['firm']);

        $query = "INSERT INTO gb2 (firstname, lastname, email, firm) VALUES ('$firstname','$lastname','$email','$firm')";
        mysqli_query($db,$query);

    }
?>

