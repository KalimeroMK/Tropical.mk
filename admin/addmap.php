<?php require_once 'header.php'; ?>

<script>
    $(function() {

        $("#map").goMap({
            address: 'Macedonia',
            zoom: 8,
            scaleControl: true,
            maptype: 'ROADMAP',
            addMarker: 'single',
            disableDoubleClickZoom: true,
            navigationControl: true,
            mapTypeControl: true,
            scrollwheel: true

        });



        $("#default").click(function() {
            $("#dump").val($.dump($.goMap.getMarkers()));
        });

        $("#clear").click(function() {
            $.goMap.clearMarkers();
        });




    });
</script>

<?php
if (isset($_POST['default']) && ($_POST['dump'] != NULL)) {
    echo '';
} else {
    echo '<div id="map" style="width: 100%; height: 400px;"></div>
<div id="forma">
    <form action="" method="post">
        <input type="hidden" id="dump" name="dump" value="dump">
        <button type="submit" name="default" id="default" class="btn btn-block btn-danger">Потврди</button>
    </form>
</div>        

';
}
?>

<?php
$pieces = explode(",", $_POST['dump']);
$latidude = substr($pieces[0], 15, 200);
$latidude = str_replace("\"", "", $latidude);
$longitude = substr($pieces[1], 0, -2);
$longitude = str_replace("\"", "", $longitude);
?>
<div class="clearfix"><br /></div>



<form action="addmapinfo.php" method="post">
    <input type="hidden" value="<?php echo $latidude; ?>" name="latidude"/>
    <input type="hidden" value="<?php echo $longitude; ?>" name="longitude"/>

    <?php
    if (isset($_POST['default']) && ($_POST['dump'] != NULL) && $latidude != NULL) {
        echo '<p style="text-align: center">Успешно внесени координати</p>';
        echo '<p style="text-align: center">Латитуда: ' . $latidude . '  Лонгитуда: ' . $longitude . '</p>';
    }
    ?>



    <button type="submit" class="pull-right btn btn-success" <?php
    if (isset($_POST['default']) && ($_POST['dump'] != NULL) && $latidude != NULL) {
        echo "enabled";
    } else {
        echo "disabled";
    }
    ?>> Продолжи понатаму <span class="glyphicon glyphicon-log-in"></span></button>
</form>



<?php require_once 'footer.php'; ?>