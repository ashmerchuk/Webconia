<?php
require_once 'send.php';
require_once 'funcs.php';
require_once 'head.php';

//echo "<link href='style.css' rel='stylesheet' >";

//if (!empty($_POST)) {
 //   save_mess();
//    header("Location: {$_SERVER['PHP_SELF']}");
//    exit;
//}
?>

    <form style="position: relative;" method="POST" action="php2.php">
        <!--<img src="Germany-Hamburg_H1_1200x600px.jpg" >-->
        <div class="form">
            <div class="row justify-content-md-center">
                <div class="col-md-4">
                    <input type="text" class="form-control" name="firstname" placeholder="Vorname" aria-label="First name" required>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="lastname" placeholder="Nachname" aria-label="Last name" required>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-8">
                    <input type="email" class="form-control" name="email" placeholder="E-Mail" aria-label="Email" required>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-8">
                    <input type="text" class="form-control" name="firm" placeholder="Firma" aria-label="Firma" required>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-8">
                    <input class="bot" type="submit" name="create" value="Anmelden"></input>
                </div>
            </div>
        </div>
    </form>

    <?php
    require_once 'footer.php';
?>