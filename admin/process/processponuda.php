<?php require_once '../conf/conf.php'; ?>
<?php

$naslov = $_POST['naslov'];
$tip = $_POST['tip'];
$drzava = $_POST['drzava'];
$date = $_POST['date'];
$slika = $_POST['slika'];
$slika_large = $_POST['slikathumb'];
$youtb = $_POST['youtube'];
$p_url = parse_url($youtb);
parse_str($p_url['query'], $p_param);
$youtube = $p_param['v'];
$rte = $_POST['rte'];
$cena = $_POST['cena'];
$grad = $_POST['grad'];
$popust = $_POST['popust'];
$kapaciteti = $_POST['kapaciteti'];
$ostrov = $_POST['ostrov'];
$keywords = $_POST['keywords'];

$sql="INSERT INTO tekst (title, DATE , TYPE, grad, drzava, cena, rte, youtube, keywords, slika, slika_large, popust, ostrov, kapaciteti)
VALUES ('$naslov','$date','$tip','$grad','$drzava','$cena','$rte','$youtube','$keywords','$slika','$slika_large','$popust','$ostrov','$kapaciteti')";

if (!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con));
}

header('Location: /');
?>
