<div class="block clearfix">
    <h3 class="title naslov">Топ 10</h3>
    <div class="separator-2"></div>
    <div class="media margin-clear">
        <?php
        /*top 5 najcitani vesti od baza */
        $results3 = mysqli_query($con, "SELECT * FROM tekst ORDER BY views DESC LIMIT 10");
        while ($row3 = mysqli_fetch_array($results3)) {
            $id3 = $row3['id'];
            $description3 = $row3['rte'];
            $title3 = $row3['title'];
            $image3 = $row3['slika'];
            $kategorija3 = $row3['type'];
            $date3 = $row3['date'];
            $drzava3 = $row3['drzava'];
            echo '  <div class="media-left">
            <div class="overlay-container">';
                if (!($image3 = $row3['slika'])) {
                } else {
                    echo ' <img class="media-object" src="http://dev.tropical.mk/' . $image3 . '" width="200" height="200" alt="' . $title3 . '" class="img-responsive img-rounded">';
                }
                echo '<a href="/story/' . $row3['id'] . '/" class="overlay-link small"><i class="fa fa-link"></i></a>
            </div>
        </div>
        <div class="media-body">';
            $kopche3 = '... ';
            $description3 = truncate($description3, $length = '200', $kopche3, '', 'true');
            echo '<h6 class="media-heading"><a href="/story/' . $row3['id'] . '/">' . $title3 . '</a></h6>
            <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>' . $kategorija3 . '</p>
        </div>
        <div class="separator-2"></div>
        <hr>
        ';
    }
    ?>
</div>
</div>
<div class="block clearfix">
    <?php
    /*printa tagovi od baza  */
    $results = mysqli_query($con, "SELECT DISTINCT keywords FROM tekst WHERE keywords != '' ORDER BY id DESC LIMIT 23");
    while ($row = mysqli_fetch_array($results)) {
        $id = $row['id'];
        $keywords = $row['keywords'];
        $keywords = explode(",", $keywords);
        //od tigaz proverka za duplikati
        foreach ($keywords as $key => $value) {
            if (in_array(ltrim($value), $tags)) {
            } else {
                if ($value != "") {
                    echo '<div class="tag">
                    <a class="tag" href="/keywords/' . ltrim($value, " ") . '/">' . $value . '</a>
                </div>';
            }
        }
        $tags[] = ltrim($value);
    }
}
$results->close();
?>
</div>
