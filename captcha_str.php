<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captcha</title>
</head>
<body>
    <img src="captcha.php" alt="obrazek captcha z napisem do przepisania">

    <form method="post">
        przepisz tekst z obrazka <input type="text" name="tekst"> <br>
        <input type="submit" value="przeslij">
    </form>
<?php
session_start();

$tekst = $_POST["tekst"];
$_SESSION['tekst'] = $tekst;



if( $_SESSION['tekst'] == $_SESSION['przepisz']){
    echo("brawo przepisales poprawnie znaki");
} else {
    echo("chyba powinienes kupic okulary");
}

unset($_SESSION['tekst']);

?>
    
</body>
</html>