<?php
require 'header.php';
require('paginationalbanijahoteli.php');
?>
    <!-- banner start -->
    <!-- ================ -->
    <div class="dark-bg banner pv-40">
        <div class="container clearfix">
            <!-- slideshow start -->
            <!-- ================ -->
            <div class="slideshow">
                <!-- slider revolution start -->
                <!-- ================ -->

                <div class="slider-banner-container">
                    <div class="slider-banner-boxedwidth">
                        <ul class="slides">
                            <!-- slide 1 start -->
                            <!-- ================ -->
                            <?php
                            while ($row1 = mysqli_fetch_array($results1)) {
                                $id1 = $row1['id'];
                                $description1 = $row1['rte'];
                                $title1 = $row1['title'];
                                $image1 = $row1['slika_large'];
                                $kategorija1 = $row1['type'];
                                $date1 = $row1['date'];
                                $ostrov1=$row['ostrov'];
                                $popust1 = $row['popust'];
                                echo '
                            <li data-transition="random" data-slotamount="7" data-masterspeed="500"
                            data-saveperformance="on" data-title="Тропикал">
                            <!-- main image -->
                            <img src="http://dev.tropical.mk/' . $image1 . '" alt="' . $title1 . '" data-bgposition="center top"
                            data-bgrepeat="no-repeat" data-bgfit="cover">
                            <!-- Transparent Background -->
                            <div class="tp-caption dark-translucent-bg"
                            data-x="center"
                            data-y="bottom"
                            data-speed="600"
                            data-start="0">
                        </div>
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption sfb fadeout large_white"
                        data-x="left"
                        data-y="80"
                        data-speed="500"
                        data-start="1000"
                        data-easing="easeOutQuad"><span class="text-default">'.$popust1.'</span>' . $title1 . '
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption sfb fadeout large_white tp-resizeme hidden-xs"
                    data-x="left"
                    data-y="200"
                    data-speed="500"
                    data-start="1300"
                    data-easing="easeOutQuad">
                    <div class="separator-2 light"></div>
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption sfb fadeout medium_white hidden-xs"
                data-x="left"
                data-y="220"
                data-speed="500"
                data-start="1300"
                data-easing="easeOutQuad"
                data-endspeed="600">' . $title1 . '
            </div>
            <!-- LAYER NR. 4 -->
            <div class="tp-caption sfb fadeout small_white text-center hidden-xs"
            data-x="left"
            data-y="300"
            data-speed="500"
            data-start="1600"
            data-easing="easeOutQuad"
            data-endspeed="600"><a href="/story/' . $row1['id'] . '/" class="btn btn-default btn-animated">Повеќе<i
            class="fa fa-arrow-right"></i></a>
        </div>
    </li>';
                            }
                            ?>
                            <!-- slide 1 end -->
                        </ul><!--slides-->
                        <div class="tp-bannertimer"></div>
                    </div>
                </div>
            </div>
            <!-- slider revolution end -->
        </div>
        <!-- slideshow end -->
    </div>
    </div>
    <!-- banner end -->
    <div id="page-start"></div>
    <!-- section start -->
    <!-- ================ -->
    <section class="section light-gray-bg clearfix">
        <div class="container">
            <div class="row">
                <!-- main start -->
                <!-- ================ -->
                <div class="col-md-8">
                    <!-- pills start -->
                    <!-- ================ -->
                    <!-- Nav tabs -->
                    <!-- Tab panes -->
                    <?php
                    while ($row = mysqli_fetch_array($results2)) { //result
                        $id = $row['id'];
                        $description = $row['rte'];
                        $title = $row['title'];
                        $image = $row['slika'];
                        $kategorija = $row['type'];
                        $date = $row['date'];
                        $keywords = $row['keywords'];
                        $cena = $row['cena'];

                        echo '
                        <div class="col-md-4">
                            <div class="overlay-container">';
                        if (!($image = $row['slika'])) {
                        } else {
                            echo ' <img src="http://dev.tropical.mk/' . $image . '"  alt="' . $title . '" class="img-responsive img-rounded">';
                        }
                        $kopche = '... ';
                        $description = truncate($description, $length = '500', $kopche, '', 'true');
                        echo ' <a class="overlay-link" href="/story/' . $row['id'] . '/"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="body">
                                <h3 class="margin-clear"><a href="/story/' . $row['id'] . '/">' . $title . '</a></h3>
                                
                                <p>' . $description . '</p>
                                <div class="elements-list clearfix">
                                    <span class="price">' . $cena . '</span>
                                    <a href="/story/' . $row['id'] . '/"
                                    class="pull-right btn btn-sm btn-default-transparent btn-animated">Повеќе<i class="fa "></i></a>
                                </div>
                                <hr />

                            </div>
                        </div>
                        
                        ';

                    }
                    //print_r($total_pages3);
                    echo $paginate;
                    ?>
                </div>
                <!-- main end -->
                <!-- sidebar start -->
                <!-- ================ -->
                <div class="col-md-4">
                    <?php require 'desno.php';?>
                </div>
                <!-- sidebar end -->

            </div><!--row-->
        </div><!--container-->

    </section><!--section-->
    <!-- section end -->
<?php require 'dole.php'; ?>

<?php require 'footer.php'; ?>