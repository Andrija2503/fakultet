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
            <form action="novistudent.php" method="POST">
                <input type="text" name="ime" placeholder="Unesi ime"><br>
                <input type="text" name="prezime" placeholder="Unesi prezime"><br>
                <input type="email" name="email" placeholder="Unesi email"><br>
                <input type="text" name="tel" placeholder="Unesi telefon"><br>
                <input type="submit" name="submit" value="Snimi unos">
            </form>
        </div>
    </div>
</body>
</html>