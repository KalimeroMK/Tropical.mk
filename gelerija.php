<!-- SLIDER -->
<div class="col-md-12" style="margin-top: 1%; margin-bottom: 3%">
    <?php
    $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$id2 = explode('/', $uri_path);
    $query = "SELECT * FROM gallery WHERE gallery_id = '$id2[2]'";
    $res = mysqli_query($con, $query);
    $count = mysqli_num_rows($res);
    $slides = '';
    $Indicators = '';
    $counter = 0;
    while ($row = mysqli_fetch_array($res)) {
    $naslov = $row['p_naslov'];
    $id = $row['gallery_id'];
    $image = $row['imagethumb'];
    if ($counter == 0) {
    $Indicators .= '<li data-target="#carousel-example-generic" data-slide-to="' . $counter . '" class="active"></li>';
    $slides .= '<div class="item active">
        <img src="http://dev.tropical.mk/' . $image . '" alt="' . $naslov . '" />
        <div class="carousel-caption">
            <h3>' . $naslov . '</h3>
        </div>
    </div>';
    } else {
    $Indicators .= '<li data-target="#carousel-example-generic" data-slide-to="' . $counter . '"></li>';
    $slides .= '<div class="item">
        <img src="http://dev.tropical.mk/' . $image . '" alt="' . $naslov . '" />
        <div class="carousel-caption">
            <h3>' . $naslov . '</h3>
        </div>
    </div>';
    }
    $counter++;
    }
    ?>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php echo $Indicators; ?>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <?php echo $slides; ?>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
<!-- KRAJ NA SLIDER -->