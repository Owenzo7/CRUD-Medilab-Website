<?php

session_start();



if (isset($_SESSION['Admin'])) {

unset($_SESSION['Admin']);

header("Location:register.php");

}


if (isset($_SESSION['User'])) {

    unset($_SESSION['User']);
    
    header("Location:register.php");
    
    }

?>