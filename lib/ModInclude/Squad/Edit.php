<h3 class="text-lg-center">Edit Call</h3>

<div class="row">
    <?php

    $cpg = $_GET['p'];

    $con = mysql_connect(HOST, USER, PASS);
    mysql_select_db(DB, $con);

    $res = mysql_query("SELECT * FROM e39.calls ORDER BY wccid DESC LIMIT " . $cpg*3 . ",3");

    while ($row = mysql_fetch_array($res)) {
        echo('<div class="col-sm-4">');
        echo('<div class="card">');
        echo('<div class="card-block">');
        echo('<h4 class="card-title">' . $row['wccid'] . ' - ' . $row['scid'] . '</h4>');
        echo('<h6 class="card-subtitle">' . getFormCallType($row['callType']) . '</h6>');
        echo('<p class="card-text">' . $row['description'] . '</p>');
        echo('<p class="card-text">');
        if (!($row['locAbout'] == null)) {
            echo($row['locAbout'] . ' / ');
        }
        echo('<a target="_blank" href="http://www.google.com/maps/dir/' . str_replace('@', '&amp;', $row['location']) . ', ' . $row['locTown'] . ', NJ/">' . $row['location'] . ', ' . $row['locTown'] . '</a></p>');
        echo('<p class="card-text"><small class="text-muted">' . date("m/d H:i", $row['cardTime']) . '</small></p>');
        echo('<a href="EditCall?id=' . $row['id'] . '" class="btn btn-outline-primary">Edit</a>');
        echo('</div>');
        echo('</div>');
        echo('</div>');
    }

    ?>
</div>
<nav aria-label="Post Navigation" class="text-lg-center">
    <ul class="pagination">
        <li class="page-item <?php if ($cpg == 0) { echo(' disabled'); } ?>">
            <a class="page-link" href="/squad?calls&ec&p=<?php echo backOne($cpg); ?>&ca" aria-label="Previous">
                <span aria-hidden="true" class="fa fa-arrow-left"></span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link" href="/squad?calls&ec&p=<?php echo forwardOne($cpg); ?>&ca" aria-label="Next">
                <span aria-hidden="true"class="fa fa-arrow-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>
</nav>