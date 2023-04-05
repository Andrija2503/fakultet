<?php 

require "function.php";

$sql = "SELECT * FROM student";
$query = mysqli_query($con, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);


if(count($result) > 0){
    foreach($result as $row){
        echo "<p><b>Ime:</b> " . $row['ime']. "</p>";
        echo "<p><b>Prezime:</b> " . $row['prezime']. "</p>";
        echo "<p><b>E-mail:</b> " . $row['email']. "</p>"; 
        echo "<p><b>Telefon:</b> " . $row['tel']. "</p>";
        echo "<a href=delete.php?id=" .$row['id']. "> Obrisi </a>";
        echo "<a href=update.view.php?id=" .$row['id']. "> Izmeni </a><hr>";
        
    } 
       
}else{
    echo "Nema zapisa";
}

?>