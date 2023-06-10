<?php
    session_start();

    // unset all session variables
    $_SESSION = array();

    // destroy the session
    session_destroy();

    // redirect to the index page
    header("location: index.php");
    exit;
?>