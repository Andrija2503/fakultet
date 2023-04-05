<?php

if(isset($_POST)){
    if(!empty($_POST['ime']) && !empty($_POST['prezime']) && !empty($_POST['email']) && !empty($_POST['tel'])){
        require "function.php";
        $ime = $_POST['ime'];
        $prezime = $_POST['prezime'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];

        $sql = "INSERT INTO student VALUES (NULL, '$ime', '$prezime', '$email', $tel)";
        $query = mysqli_query($con,$sql);

        header("Location: index.php?akcija=svi");
    }else{
        header("Location: unosgreska.php");
    }
}else{
    echo "Greska";
}


?>