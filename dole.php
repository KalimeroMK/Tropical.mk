<!-- section start -->
<!-- ================ -->
<section class="section dark-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="call-to-action text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title">Travel Agency Tropical - Dream becomes reality </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section end -->
<!-- section start -->
<!-- ================ -->
<section class="pv-30 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="block clearfix">
                    <h3 class="title">Актуелно </h3>
                    <div class="separator-2"></div>
                    <div class="media margin-clear">
                        <?php
                        /*top 5 najcitani vesti od baza */
                        $results4 = mysqli_query($con, "SELECT * FROM tekst ORDER BY views DESC LIMIT 4");
                        while ($row4 = mysqli_fetch_array($results4)) {
                            $id4 = $row4['id'];
                            $description4 = $row4['rte'];
                            $title4 = $row4['title'];
                            $image4 = $row4['slika'];
                            $kategorija4 = $row4['type'];
                            $date4 = $row4['date'];
                            $drzava4 = $row4['drzava'];
                            echo '  <div class="media-left">
                            <div class="overlay-container">';
                                if (!($image4 = $row4['slika'])) {
                                } else {
                                    echo ' <img class="media-object" src="http://dev.tropical.mk/' . $image4 . '" width="200" height="200" alt="' . $title4 . '" class="img-responsive img-rounded">';
                                }
                                echo '<a href="/story/' . $row4['id'] . '/" class="overlay-link small"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="media-body">';
                            $kopche4 = '... ';
                            $description4 = truncate($description4, $length = '200', $kopche4, '', 'true');
                            echo '<h6 class="media-heading"><a href="/story/' . $row4['id'] . '/">' . $title4 . '</a></h6>
                            <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>' . $kategorija4 . '</p>
                        </div>
                        <hr>
                        ';
                    }
                    ?>
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="block clearfix">
                <h3 class="title">По случаен избор</h3>
                <div class="separator-2"></div>
                <div class="media margin-clear">
                    <?php
                    /*top 5 najcitani vesti od baza */
                    $results5 = mysqli_query($con, "SELECT * FROM tekst ORDER BY RAND() LIMIT 4");
                    while ($row5 = mysqli_fetch_array($results5)) {
                        $id5 = $row5['id'];
                        $description5 = $row5['rte'];
                        $title5 = $row5['title'];
                        $image5 = $row5['slika'];
                        $kategorija5 = $row5['type'];
                        $date5 = $row5['date'];
                        $drzava5 = $row5['drzava'];
                        echo '  <div class="media-left">
                        <div class="overlay-container">';
                            if (!($image5 = $row5['slika'])) {
                            } else {
                                echo ' <img class="media-object" src="http://dev.tropical.mk/' . $image5 . '" width="200" height="200" alt="' . $title5 . '" class="img-responsive img-rounded">';
                            }
                            echo '<a href="/story/' . $row5['id'] . '/" class="overlay-link small"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="media-body">';
                        $kopche5 = '... ';
                        $description5 = truncate($description5, $length = '200', $kopche5, '', 'true');
                        echo '<h6 class="media-heading"><a href="/story/' . $row5['id'] . '/">' . $title5 . '</a></h6>
                        <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>' . $kategorija5 . '</p>
                    </div>
                    <hr>
                    ';
                }
                ?>
            </div>

        </div>
    </div>
    <div class="col-md-4">
        <div class="block clearfix">
            <h3 class="title">Најпродавани</h3>
            <div class="separator-2"></div>
            <div class="media margin-clear">
                <?php
                /*top 5 najcitani vesti od baza */
                $results6 = mysqli_query($con, "SELECT * FROM tekst ORDER BY views DESC LIMIT 4");
                while ($row6 = mysqli_fetch_array($results6)) {
                    $id6 = $row6['id'];
                    $description6 = $row6['rte'];
                    $title6 = $row6['title'];
                    $image6 = $row6['slika'];
                    $kategorija6 = $row6['type'];
                    $date6 = $row6['date'];
                    $drzava6 = $row6['drzava'];
                    echo '  <div class="media-left">
                    <div class="overlay-container">';
                        if (!($image6 = $row6['slika'])) {
                        } else {
                            echo ' <img class="media-object" src="http://dev.tropical.mk/' . $image6 . '" width="200" height="200" alt="' . $title6 . '" class="img-responsive img-rounded">';
                        }
                        echo '<a href="/story/' . $row6['id'] . '/" class="overlay-link small"><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="media-body">';
                    $kopche6 = '... ';
                    $description6 = truncate($description6, $length = '200', $kopche6, '', 'true');
                    echo '<h6 class="media-heading"><a href="/story/' . $row6['id'] . '/">' . $title6 . '</a></h6>
                    <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>' . $kategorija6 . '</p>
                </div>
                <hr>
                ';
            }
            ?>

        </div>

    </div>
</div>

</section>
<!-- section end -->
<!-- section start -->
<!-- ================ -->
<section class="section dark-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="call-to-action text-center">

                </div>
            </div>
        </div>
    </div>
</section>
<!-- section end -->