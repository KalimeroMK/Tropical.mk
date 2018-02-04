<?php require 'header.php'; ?>
<!-- Slider start -->
<!-- ================ -->
<div class="banner clearfix">
  <!-- slideshow start -->
  <!-- ================ -->
  <div class="slideshow">
    <!-- slider revolution start -->
    <!-- ================ -->
    <div class="slider-banner-container">
      <div class="slider-banner-fullwidth">
        <ul class="slides">
          <!-- slide 1 start -->
          <!-- ================ -->
          <?php
          $results = mysqli_query($con, "SELECT * FROM sliderimages ORDER BY img_id");
          while ($row = mysqli_fetch_array($results)) {
            $id = $row['img_id'];
            $description = $row['img_text'];
            $title = $row['img_title'];
            $image = $row['image'];
            $link = $row['img_link'];
            echo '
            <li data-transition="fade" data-slotamount="4" data-masterspeed="500" data-saveperformance="on"
            data-title="Тропикал">
            <!-- main image -->
            <img src="http://dev.tropical.mk/' . $image . '" alt="' . $title . '" data-bgposition="center top"
            data-bgrepeat="no-repeat" data-bgfit="cover">
            !-- LAYER NR. 1 -->
            <div class="tp-caption sfb fadeout large_white"
            data-x="left"
            data-y="80"
            data-speed="500"
            data-start="1000"
            data-easing="easeOutQuad"><span class="text-default">'.$popust.'</span>' . $title . '
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
            data-endspeed="600">' . $description . '
            </div>
            <!-- LAYER NR. 4 -->
            <div class="tp-caption sfb fadeout small_white text-center hidden-xs"
            data-x="left"
            data-y="300"
            data-speed="500"
            data-start="1600"
            data-easing="easeOutQuad"
            data-endspeed="600"><a href="' . $link . '" class="btn btn-default btn-animated">Повеќе<i
            class="fa fa-arrow-right"></i></a>
            </div>
            </li>';
          }
          ?>
          <!-- slide 1 end -->
        </ul>
        <div class="tp-bannertimer"></div>
      </div>
    </div>
    <!-- slider revolution end -->
  </div>
  <!-- slideshow end -->
</div>
<!-- Slider end -->
<!-- main-container start -->
<!-- ================ -->
<section class="main-container">
  <div class="container">
    <div class="row">
      <!-- main start -->
      <!-- ================ -->
      <div class="main col-md-12">
        <!-- section start -->
        <!-- ================ -->
        <h3 class="text-center" style="color:black">Лето</h3>
        <!-- section end -->  <br>
        <div class="masonry-grid row">
          <?php
          $results1 = mysqli_query($con, "SELECT * FROM tekst WHERE type ='Лето' and approved ='1' ORDER BY id DESC LIMIT 6");
          while ($row1 = mysqli_fetch_array($results1)) {
            $id1 = $row1['id'];
            $description1 = $row1['rte'];
            $title1 = $row1['title'];
            $image1 = $row1['slika'];
            $kategorija1 = $row1['type'];
            $date1 = $row1['date'];
            $keywords1 = $row1['keywords'];
            $cena1 = $row1['cena'];
            echo '
            <!-- masonry grid item start -->
            <div class="masonry-grid-item col-sm-6 col-md-4">
            <!-- blogpost start -->
            <article class="blogpost shadow light-gray-bg bordered">
            <div class="overlay-container overlay-visible">';
            if (!($image1 = $row1['slika'])) {
            } else {
              echo ' <img src="http://dev.tropical.mk/' . $image1 . '"  alt="' . $title1 . ' width="200" height="200" class="img-responsive img-rounded">';
            }
            echo '<a href="/story/' . $row1['id'] . '/" class="overlay-link"><i class="fa fa-link"></i></a>
            <div class="overlay-bottom hidden-xs">
            <div class="text">' . $title1 . ' </div>
            </div>
            </div>
            <!-- blogpost end -->
            </div><!--do tuka zavrsuva grid-->';
          }
          ?>
        </div><!--zavrsuva prv main col-md-12-->
      </div> <!--zavrsuva masonry-grid row-->
      <div class="main col-md-12">
        <h3 class="text-center" style="color:black">Зима</h3>
        <div class="masonry-grid row">
         <?php
         $results2 = mysqli_query($con, "SELECT * FROM tekst WHERE type ='Зима' and approved ='1' ORDER BY id DESC LIMIT 6");
         while ($row2 = mysqli_fetch_array($results2)) {
          $id2 = $row2['id'];
          $description2 = $row2['rte'];
          $title2 = $row2['title'];
          $image2 = $row2['slika'];
          $kategorija2 = $row2['type'];
          $date2 = $row2['date'];
          $keywords2 = $row2['keywords'];
          $cena2 = $row2['cena'];
          echo '
          <!-- masonry grid item start -->
          <div class="masonry-grid-item col-sm-6 col-md-4">
          <!-- blogpost start -->
          <article class="blogpost shadow light-gray-bg bordered">
          <div class="overlay-container overlay-visible">';
          if (!($image2 = $row2['slika'])) {
          } else {
            echo ' <img src="http://dev.tropical.mk/' . $image2 . '"  alt="' . $title2 . ' width="200" height="200" class="img-responsive img-rounded">';
          }
          echo '<a href="/story/' . $row2['id'] . '/" class="overlay-link"><i class="fa fa-link"></i></a>
          <div class="overlay-bottom hidden-xs">
          <div class="text">' . $title2. ' </div>
          </div>
          </div>
          <!-- blogpost end -->
          </div><!--do tuka zavrsuva grid-->';
        }
        ?>
      </div><!--zavrsuva prv main col-md-12-->
    </div> <!--zavrsuva masonry-grid row-->
    <div class="main col-md-12">
     <h3 class="text-center" style="color:black">Екскурзии</h3>
     <div class="masonry-grid row">
      <?php
      $results3 = mysqli_query($con, "SELECT * FROM tekst WHERE type='Есенски патувања' OR type ='Екскурзии' and approved ='1' ORDER BY id DESC LIMIT 6");
      while ($row3 = mysqli_fetch_array($results3)) {
        $id3 = $row3['id'];
        $description3 = $row3['rte'];
        $title3 = $row3['title'];
        $image3 = $row3['slika'];
        $kategorija3 = $row3['type'];
        $date3 = $row3['date'];
        $keywords3 = $row3['keywords'];
        $cena3 = $row3['cena'];
        echo '
        <!-- masonry grid item start -->
        <div class="masonry-grid-item col-sm-6 col-md-4">
        <!-- blogpost start -->
        <article class="blogpost shadow light-gray-bg bordered">
        <div class="overlay-container overlay-visible">';
        if (!($image = $row3['slika'])) {
        } else {
          echo ' <img src="http://dev.tropical.mk/' . $image3 . '"  alt="' . $title3 . ' width="200" height="200" class="img-responsive img-rounded">';
        }
        echo '<a href="/story/' . $row3['id'] . '/" class="overlay-link"><i class="fa fa-link"></i></a>
        <div class="overlay-bottom hidden-xs">
        <div class="text">' . $title3. ' </div>
        </div>
        </div><!-- blogpost end -->
        </div><!--do tuka zavrsuva grid-->';
      }
      ?>
    </div><!-- masonry grid end -->
  </div><!-- main end -->
</div><!--row-->
</div><!--container-->
</section>
<?php require 'dole.php';?>
<!-- main-container end -->
<?php require 'footer.php'; ?>
