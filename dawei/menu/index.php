<?php

    include("../templates/navigation.php");

    $dbc = mysqli_connect("localhost","root","","dawei");

    mysqli_query($dbc,"SET NAMES UTF8");

    $query = "SELECT * FROM dishes";

    $result = mysqli_query($dbc,$query);

    



?>

    <?php
}
?>

    </body>

    </html>
