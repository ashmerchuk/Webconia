<?php
require_once 'send.php';
require_once 'funcs.php';
require_once 'head.php';
?>

    <div class="row justify-content-md-center">
        <div class="col-md-8">
<?php

            $sql = "SELECT * FROM gb2";
            if($result = $db->query($sql)){
                $rowsCount = $result->num_rows; // количество полученных строк
                echo "<table class='table table-striped'><thead><tr><th>Nummer</th><th>Vorname</th><th>Nachname</th><th>Email</th><th>Firma</th></tr></thead> \n <tbody>"; $n = 1;
                foreach($result as $row){
                    echo "<tr>";

                        echo "<td>" . $n . "</td>"; $n++;
                        echo "<td>" . $row["firstname"] . "</td>";
                        echo "<td>" . $row["lastname"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["firm"] . "</td>";
                    echo "</tr>";
                }
                echo "<tbody> \n </table>";
                echo "<p class='count'>Registrierte <font size='+3'> $rowsCount </font> Personen </p>";

                 echo "<ol>";
                 foreach($result as $row){
                     echo "<li> Name: " . $row['firstname'] .  " " . $row['lastname'] . ", E-Mail: " . $row['email'] . ", Firma: " . $row['firm'] . "</li> \n ";
                        }
                 echo "</ol>";
                $result->free();
            } else{
                echo "Ошибка: " . $conn->error;
            }

?>
        </div>
    </div>

    <div style="text-align: center;">
        <a href="index.php"> Zurück </a>
    </div>

<?php
    require_once 'footer.php';
?>