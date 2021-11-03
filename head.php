<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Webconia</title>
    </head>

    <body>

        <header>
            <a href="/webconia/">
                <img class="displayed" src="unnamed.png">
            </a>
            <h1>*** ***<h1>
                <h4 align="center">Wir haben beschlossen, dass wir alle unsere Kunden zur diesjährigen WTC
                    (Webconia Technology Conference) einladen möchten. Bitte melden Sie sich an.</h4>
                <div style="text-align: center;">
                    <a href="admin.php">Only for Admin</a>
                </div>
    </header>
<?php
  //  if (isset($_POST['create']))

if (!empty($_POST))
    save_mess();
?>
    <content>