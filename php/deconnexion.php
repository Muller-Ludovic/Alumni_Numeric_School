<?php
    session_start();
    $_SESSION = array();
    session_destroy();
    header('Location:../index.php?deco'); // Page cible de déconnexion
?>