<?php 




    session_start();
    session_destroy();
    
    header("LOCATION: /SURVODY/index.php");

?>