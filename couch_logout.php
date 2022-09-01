<?php


session_start();

if (isset($_SESSION['coach_id'])) {
    unset($_SESSION['coach_id']);
}


header("Location: coach_login.php");
die;
