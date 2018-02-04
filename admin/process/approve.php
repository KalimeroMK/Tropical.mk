<?php //require_once '../config/db.php'; ?>
<?php require_once '../conf/conf.php'; ?>
<?php

$id = $_GET['id'];
$status = $_GET['status'];

if ($status === "on") {
    $updateuser = mysqli_query($con, "UPDATE tekst SET approved = '1' WHERE id = '$id'");
    header('Location: ../pregled.php');
} else {
    $updateuser = mysqli_query($con, "UPDATE tekst SET approved = '0' WHERE id = '$id'");
    header('Location: ../pregled.php');
}
?>


