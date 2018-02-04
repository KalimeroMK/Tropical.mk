<?php

$page = (isset($_GET['page']) ? $_GET['page'] : '');
$limit = 4;
// How many records you want to show on each page
$url = (isset($_GET['url']) ? $_GET['url'] : '');
$query = "SELECT COUNT(*) as num FROM tekst WHERE ostrov='Закинтос'";

$total_pages = mysqli_fetch_array(mysqli_query($con, $query));
$total_pages = $total_pages['num'];

$stages = 4;

if ($page) {
    $start = ($page - 1) * $limit;
} else {
    $start = 0;
}

// Get page data
$query1 = "SELECT * FROM tekst WHERE ostrov='Закинтос' ORDER BY id DESC LIMIT $start, $limit";
$result = mysqli_query($con, $query1);
$resultdva = mysqli_query($con, $query1);

// Initial page num setup
if ($page == 0) {
    $page = 1;
}
$prev = $page - 1;
$next = $page + 1;
$lastpage = ceil($total_pages / $limit);
$LastPagem1 = $lastpage - 1;
$paginate = '';
if ($lastpage > 1) {
    $paginate .= '<nav class="text-center">';
    $paginate .= '<ul class="pagination">';
    // копче за враќење назад
    if ($page > 1) {
        $paginate .= '<li><a href="/zakintos/' . $prev . '/" aria-label="Previous"><i class=" glyphicon glyphicon-chevron-left"></i></a></li>';
    } else {
        $paginate .= '<li style="display: none;"><a href=".#" aria-label="Previous"> <i class=" glyphicon glyphicon-chevron-left"></i></a></li>';
    }
    // Pages
    if ($lastpage < 7 + ($stages * 2)) {
        // Not enough pages to breaking it up
        for ($counter = 1; $counter <= $lastpage; $counter++) {
            if ($counter == $page) {
                $paginate .= '<li class="active"><a href="/zakintos/' . $counter . '/">' . $counter . '</a></li>';
            } else {
                $paginate .= '<li><a href="/zakintos/' . $counter . '/">' . $counter . '</a></li>';
            }
        }
    } elseif ($lastpage > 5 + ($stages * 2)) {
        // Enough pages to hide a few?
        // Beginning only hide later pages
        if ($page < 1 + ($stages * 2)) {
            for ($counter = 1; $counter < 4 + ($stages * 2); $counter++) {
                if ($counter == $page) {
                    $paginate .= '<li class="active"><a href="/zakintos/' . $counter . '/">' . $counter . '</a></li>';
                } else {
                    $paginate .= '<li><a href="/zakintos/' . $counter . '/">' . $counter . '</a></li>';
                }
            }
            $paginate .= "<li><a href='#'>...</a></li>";
            $paginate .= "<li><a href='/$LastPagem1/'>$LastPagem1</a></li>";
            $paginate .= "<li><a href='/$lastpage/'>$lastpage</a></li>";
        } // Middle hide some front and some back
        elseif ($lastpage - ($stages * 2) > $page && $page > ($stages * 2)) {
            $paginate .= "<li><a href='/1/'>1</a></li>";
            $paginate .= "<li><a href='/2/'>2</a></li>";
            $paginate .= "<li><a href='#'>...</a></li>";
            for ($counter = $page - $stages; $counter <= $page + $stages; $counter++) {
                if ($counter == $page) {
                    $paginate .= '<li class="active">"/' . $counter . '/"</span></li>';
                } else {
                    $paginate .= '<li><a href="/zakintos/' . $counter . '/">' . $counter . '</a></li>';
                }
            }
            $paginate .= "<li><a href='#'>...</a></li>";
            $paginate .= '<li><a href="/zakintos/' . $LastPagem1 . '/">' . $LastPagem1 . '</a></li>';
            $paginate .= '<li><a href="/zakintos/' . $lastpage . '/">' . $lastpage . '</a></li>';
        } // End only hide early pages
        else {
            $paginate .= "<li><a href='/1/'>1</a></li>";
            $paginate .= "<li><a href='/2/'>2</a></li>";
            $paginate .= "<li><a href='#'>...</a>";
            for ($counter = $lastpage - (2 + ($stages * 2)); $counter <= $lastpage; $counter++) {
                if ($counter == $page) {
                    $paginate .= '<li class="active">"/' . $counter . '/"</span></li>';
                } else {
                    $paginate .= '<li><a href="/zakintos/' . $counter . '/">' . $counter . '</a></li>';
                }
            }
        }
    }
    // Next
    if ($page < $counter - 1) {
        $paginate .= '<li><a href="/zakintos/' . $next . '/" aria-label="&laquo;"><i class=" glyphicon glyphicon-chevron-right"></i></a></li>';
    } else {
        $paginate .= '<li style="display: none;" aria-label="Next"><a href=".#"><&laquo; class=" glyphicon glyphicon-chevron-right"></i></a></li>';
    }
    $paginate .= "</ul>";
    $paginate .= "</nav>";
}
?>