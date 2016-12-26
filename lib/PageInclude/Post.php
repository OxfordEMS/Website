<?php
$pid = $_GET['id'];
?>

<h1>News Post</h1>
<hr/>
<div class="row">
    <?php
    $con = mysql_connect(HOST, USER, PASS);
    mysql_select_db(DB, $con);

    $res = mysql_query("SELECT * FROM e39.news WHERE id = $pid");

    while ($row = mysql_fetch_array($res)) {
        echo('<div class="col-md-1">');
            echo('<h2 class="text-lg-center"><b>' . date("d", $row['postedOn']) . '</b></h2>');
            echo('<h3 class="text-lg-center">' . date("M", $row['postedOn']) . '</h3>');
            echo('<h5 class="text-lg-center">' . date("Y", $row['postedOn']) . '</h5>');
        echo('</div>');

        echo('<div class="col-md-7">');
            echo('<h2 class="text-lg-center">' . $row['title'] . '</h2>');
            echo('<br />');
            echo('<p>' . $row['post'] . '</p>');
        echo('</div>');
    }
    ?>
    <div class="col-md-4">
        <h5>Recent Posts</h5>
        <?php
        $con = mysql_connect(HOST, USER, PASS);
        mysql_select_db(DB, $con);

        $res = mysql_query("SELECT * FROM e39.news ORDER BY postedOn DESC LIMIT 5");

        while ($row = mysql_fetch_array($res)) {
            echo('<p>> <a href="/post?id=' . $row['id'] . '">' . $row['title'] . '</a></p>');
        }
        ?>
    </div>
</div>