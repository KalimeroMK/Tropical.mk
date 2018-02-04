<?php
require 'header.php';
?>
<section>
    <div class="container">
        <div class="row">
            <!-- first column -->
            <div class="col-md-9">
                <h3 class="page-header weight-300">
                    <a href="#" data-toggle="tooltip" title="view more"><i class="fa fa-plus-square-o"></i></a>
                    <strong>Тагови</strong>
                </h3>
                <?php
                $keywords = (isset($_GET['keywords']) ? $_GET['keywords'] : '');
                $results = mysqli_query($con, "SELECT * FROM tekst WHERE keywords LIKE '%" . $keywords . "%'");
                while ($row = mysqli_fetch_array($results)) {
                    $title = $row['title'];
                    $description = $row['rte'];
                    $image = $row['slika'];
                    $keywords = $row['keywords'];
                    echo '<hr /><!-- separator -->';
                    echo '<div class="row">';
                    echo '<div class="col-md-4 text-center">';
                    if (!($image = $row['slika'])) {
                    } else {
                        echo ' <img src="http://dev.tropical.mk/' . $image . '" alt="' . $title . '" class="img-responsive img-rounded">';
                    }
                    echo '</div>';
                    echo '<div class = "col-md-8">';
                    echo '<h4><a href="/story/' . $row['id'] . '/">' . $title . '</a></h4>';
                    $kopche = '... ';
                    $description = truncate($description, $length = '500', $kopche, '', 'true');
                    echo ' <p>' . $description . '
                    <small class="block">' . $time . '</small>
                </p>';

                echo'  <div class="separator-2"></div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
        <div class="col-md-3" style="margin-top: 4%;">
            <?php require 'desno.php';?>
        </div>
    </div>
</div>
</section>
</section>
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
<!--/ -->
<?php require 'footer.php';
?>