<?php
session_start();
unset($_SESSION["uId"]);
unset($_SESSION["orgId"]);
session_destroy();
header('Location: startupPage.php');
?>
