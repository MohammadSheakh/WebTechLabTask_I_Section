<?php 

    session_start();
    // remove all session variables
    session_unset();
    
    // destroy the session
    session_destroy(); 

    setcookie('status', 'true', time()-86600, '/');

    header('location: ../../../system/home/home.php');

?>