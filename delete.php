<?php

include "config.php";

$id = $_GET['id'];

$sql = "DELETE FROM patient WHERE id = $id";

$result = mysqli_query($conn, $sql);

if($result){

    header("Location:registered.php?msg= Record deleted successfully");
}

else{

    echo "Failed:" . mysqli_error($conn);
}