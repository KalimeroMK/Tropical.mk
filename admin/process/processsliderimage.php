<?php

// Create connection
$con = mysqli_connect("localhost", "zoran", "simeon08@.!", "cms");
// za kirilica od baza
mysqli_query($con, "SET NAMES UTF8");
// Check connection
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQLI: " . mysqli_connect_error();
}

$image = $_POST['slika'];
$img_title = $_POST['name'];
$img_text = $_POST['opis'];
$img_link = $_POST['link'];
if ($image == NULL) {
    echo "staj slika alo";
} else {

    $sql = "INSERT INTO sliderimages (image, img_text, img_title, img_link) VALUES ('$image', '$img_text', '$img_title','$img_link')";
    if (!mysqli_query($con, $sql)) {
        die('ne zapisuva u baza: ' . mysqli_error($con));
    }
    header('Location: ../index.php');

    mysqli_close($con);
}
?>
</body>
</html>