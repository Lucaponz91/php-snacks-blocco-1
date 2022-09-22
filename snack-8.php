<!-- Recuperare tutti i parametri che arrivano da query -->



<?php


?>

<ul>
    <?php foreach ($_GET as $param => $value) { 
    ?> 
    <li>
        <?php
            echo $param . ":" . $value;
            ?>
    </li>
    <?php
    }
    ?>
</ul>