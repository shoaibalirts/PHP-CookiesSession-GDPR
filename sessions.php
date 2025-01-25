<?php 
    session_start();
    session_regenerate_id();
    $_SESSION['counter']+=1;
    var_dump($_SESSION);    
    // phpinfo();
?>