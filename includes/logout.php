<?php include 'db.php'; ?>
<?php session_start(); ?>
<?php
    $_SESSION['username'] = null;
    $_SESSION['password'] = null;
    $_SESSION['role'] = null;
    session_destroy();
    header('Location: ../index.php');

?>