<?php
    $pg = $_GET['p'];
    if (!(isset($_GET['p']))) {
        $pg = 0;
    }
?>
<!--CAROUSEL-->
<div id="chome" class="carousel slide" data-ride="carousel" data-interval="8000">
    <ol class="carousel-indicators">
        <li data-target="#chome" data-slide-to="0" class="active"></li>
        <li data-target="#chome" data-slide-to="1"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="../../assets/img/carousel/1.png" width="100%" alt="First Slide">
            <div class="carousel-caption">
                <h3>Gear</h3>
                <p>This is a helmet</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../../assets/img/carousel/2.png" width="100%" alt="Second Slide">
            <div class="carousel-caption">
                <h3>Medical Gear</h3>
                <p>This is a medical bag</p>
            </div>
        </div>
    </div>

    <a class="left carousel-control" href="#chome" role="button" data-slide="prev">
        <span class="icon-prev" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#chome" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<hr />

<div class="row">
    <div class="col-lg-8">
        <!--POSTS-->
        <div class="list-group">
            <?php
            $con = mysql_connect(HOST, USER, PASS);
            mysql_select_db(DB, $con);

            $res = mysql_query("SELECT * FROM e39.news ORDER BY postedOn DESC LIMIT ". $pg*5 . ",5");

            while ($row = mysql_fetch_array($res)) {
                echo('<a  href="/post?id=' . $row['id'] . '" class="list-group-item list-group-item-action">');
                    echo('<h5 class="list-group-item-heading">' . $row['title'] . '<small> posted on ' . date("m/d/y", $row['postedOn']) . '</small></h5>');
                    echo('<p class="list-group-item-text">' . substr($row['post'], 0, 200) . ' <small>...Read More</small></p>');
                echo('</a>');
            }
            ?>
        </div>
        <!--PAGINATION-->
        <nav aria-label="Post Navigation" class="text-lg-center">
            <ul class="pagination">
                <li class="page-item <?php if ($pg == 0) { echo(' disabled'); } ?>">
                    <a class="page-link" href="/?p=<?php echo backOne($pg); ?>" aria-label="Previous">
                        <span aria-hidden="true" class="fa fa-arrow-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="/?p=<?php echo forwardOne($pg); ?>" aria-label="Next">
                        <span aria-hidden="true"class="fa fa-arrow-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="col-lg-4">
        <h4>Some meaningful information</h4>
        <p>And stuff about it</p>
    </div>
</div>