<?php

session_start();
unset($_SESSION["saccountnr"]);
unset($_SESSION["svoornaam"]);
header("location:index.php");

?>