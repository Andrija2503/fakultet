<?php 

require "function.php";
$id = $_GET['id'];

$sql = "SELECT * FROM student WHERE id = '$id'";
$query = mysqli_query($con, $sql);

$result = mysqli_fetch_assoc($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fakultet</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="wrap">
        <div class="menu">
            <a href="index.php">POCETNA</a>
            <a href="index.php?akcija=svi">SVI STUDENTI</a>
            <a href="">UNESI STUDENTA</a>
        </div><hr>
        <div class="result">
            <form action="update.php" method="POST">
                <input type="hidden" name="id" value=<?php echo $result['id']?>>
                <label><b>Ime:</b><br><input type="text" name="ime" placeholder=<?php echo $result['ime']?> value=<?php echo $result['ime']?>></label><br>
                <label><b>Prezime:</b><br><input type="text" name="prezime" placeholder=<?php echo $result['prezime']?> value=<?php echo $result['prezime']?>></label><br>
                <label><b>Email:</b><br><input type="email" name="email" placeholder=<?php echo $result['email']?> value=<?php echo $result['email']?>></label><br>
                <label><b>Tel:</b><br><input type="text" name="tel" placeholder=<?php echo $result['tel']?> value=<?php echo $result['tel']?>></label><br>
                <input type="submit" name="submit" value="Snimi izmjene">
            </form>
        </div>
    </div>
</body>
</html>