<?php
require_once '../conf/conf.php';
session_start();
if (isset($_SESSION['user_email'])) {
$id = $_POST['pageid'];

$delete = "DELETE FROM pages WHERE pageid = '$id'";
$execute = mysqli_query($con, $delete);
header('Location: ../addpage.php');
}
else {
echo 'Please <a href="index.php">Log in</a>';
}
?>
