<?php
session_start();

$width = 150;
$height = 50;
$image = imagecreatetruecolor($width, $height);

$r=rand(0,225);
$g=rand(0,225);
$b=rand(0,225);

$e=rand(0,225);
$f=rand(0,225);
$g=rand(0,225);

$l=rand(0,225);
$o=rand(0,225);
$s=rand(0,225);

 $tlo = imagecolorallocate($image, $r, $g, $b);
 imagefill($image, 0, 0, $tlo);

$napis = imagecolorallocate($image, $e, $f, $g);

$color= imagecolorallocate($image, $r, $g, $b);

$linka = imagecolorallocate($image, $l, $o, $s);


//napis
$tab = array("1","2","3","4","5","6","7","8","9","A","b","C","D","e","f","g","H","I","J","k","l","m","N","o","P","R","S","t","U","W","x","Y","z","#","!"); //tworzenie tab

$xn = 10;
$yn = 15;

for($i = 0; $i < 9; $i++){
    $x = rand(0,34); //losow mjsc z tab
    $tab[$i] = $tab[$x];
    imagechar($image, 5, $xn, $yn, $tab[$i], $napis);
    $xn += 15;
 }

 $los = rand(0,3);
 for ($i = 0; $i < $los; $i++){
    $x = rand(0,110);
    $x2 = rand(1, 90);
    $y = rand(0, 40);
    $y2 = rand(1,20);

    imageline($image, $x, $y, $x2, $y2, $linka);

 }


 $_SESSION['przepisz'] = $tab[0].$tab[1].$tab[2].$tab[3].$tab[4].$tab[5].$tab[6].$tab[7].$tab[8];




header('Content-type: image/png');
imagepng($image);
imagedestroy($image);

?>