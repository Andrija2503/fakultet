<?php

if(isset($_POST)){
    if(!empty($_POST['ime']) && !empty($_POST['prezime']) && !empty($_POST['email']) && !empty($_POST['tel'])){
        require "function.php";
        $id=$_POST['id'];
        $ime = $_POST['ime'];
        $prezime = $_POST['prezime'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];

        $sql = "UPDATE student SET ime = '$ime', prezime = '$prezime', email = '$email', tel = '$tel' WHERE id = $id";
        $query = mysqli_query($con,$sql);
        print_r($query);
        header("Location: index.php?akcija=svi");
    }else{
        header("Location: unosgreska.php");
    }
}else{
    echo "Greska";
}


?>

