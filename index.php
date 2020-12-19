<?php
session_start();
/* $_SESSION['UID'] = 0;
session_destroy(); */
//$AimDir = "Aim/";
require_once("../Aim/aim.php");
$pg = isset($_SESSION['UID']) && (int)$_SESSION['UID'] > 0?"root://ui/login/login.aim":"root://ui/login/login.aim";
// $_->Start("ui://main.aim");
$_->Start("root://ui/signup/fsignup.aim");

?>