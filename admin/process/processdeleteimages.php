
<?php


// Create connection
$con = mysqli_connect("localhost", "zoran", "simeon08@.!", "cms");
// za kirilica od baza
mysqli_query($con, "SET NAMES UTF8");
// Check connection
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQLI: " . mysqli_connect_error();
}

$img_id = $_POST['img_id'];



// Check connection
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$delete = "DELETE FROM sliderimages WHERE img_id = '$img_id'";
$execute = mysqli_query($con, $delete);

header('Location: ../addimages.php');
?>

