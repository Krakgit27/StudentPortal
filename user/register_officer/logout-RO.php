<?php
session_start();


    if ($_SESSION['role'] == 'register officer') {
        // Student logout
        session_unset(); // Unset student-specific session variables
        session_destroy(); // Destroy the student session
        header('Location: login-RO.php');
        exit();
    }

?>
