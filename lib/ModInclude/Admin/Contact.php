<h1 class="text-lg-center">Contact Us Messages</h1>

<div class="row">
    <?php

    $cpg = $_GET['p'];

    $con = mysql_connect(HOST, USER, PASS);
    mysql_select_db(DB, $con);

    $res = mysql_query("SELECT * FROM e39.contact ORDER BY ptime DESC LIMIT " . $cpg*3 . ",3");

    while ($row = mysql_fetch_array($res)) {
        if ($row['status'] == 0) {
            echo('<div class="col-sm-4">');
                echo('<div class="card">');
                    echo('<div class="card-block">');
                        echo('<h4 class="card-title">' . $row['name'] . '</h4>');
                        echo('<h6 class="card-subtitle text-muted">' . $row['email'] . ' : ' . $row['phone'] . '</h6>');
                        echo('<p class="card-text">' . $row['message'] . '</p>');
                        echo('<p class="card-text"><small class="text-muted">' . date("m/d/y h:m A", $row['ptime']) . ' - ' . $row['ip'] . '</small></p>');
                        echo('<a href="lib/Actions/GET/CloseContact.php?id=' . $row['id'] . '" class="btn btn-outline-primary">Close</a>');
                    echo('</div>');
                echo('</div>');
            echo('</div>');
        }
    }

    ?>
</div>
<nav aria-label="Post Navigation" class="text-lg-center">
    <ul class="pagination">
        <li class="page-item <?php if ($cpg == 0) { echo(' disabled'); } ?>">
            <a class="page-link" href="/admin?p=<?php echo backOne($cpg); ?>&ca" aria-label="Previous">
                <span aria-hidden="true" class="fa fa-arrow-left"></span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link" href="/admin?p=<?php echo forwardOne($cpg); ?>&ca" aria-label="Next">
                <span aria-hidden="true"class="fa fa-arrow-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>
</nav>