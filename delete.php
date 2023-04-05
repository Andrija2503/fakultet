<?php

if(isset($_GET['id'])){
    require "function.php";
    $id = $_GET['id']; 
    $query = "DELETE FROM student WHERE id = '$id'";
    mysqli_query($con,$query);

    header("Location: index.php?akcija=svi");
}else{
    echo "Greska";
}

?>