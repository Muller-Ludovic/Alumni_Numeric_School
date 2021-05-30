<?php
    session_start();
    $_SESSION = array();
    session_destroy();
    header('Location:../index.php?deco=login'); // Page cible de déconnexion
?>