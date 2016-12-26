<?php
    $pg = $_GET['p']
?>
<div class="row">
    <div class="col-md-5">
        <h3>New Post</h3>
        <form action="lib/Actions/POST/NewPost.php" enctype="multipart/form-data" method="post">
            <input type="hidden" name="postedBy" value="<?php echo $user;?>">
            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" type="text" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="post">Post</label>
                <textarea class="form-control" id="post" name="post" rows="8"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Post</button>
        </form>
    </div>
    <div class="col-md-7">
        <h3>Edit Post</h3>
        <table class="table">
            <thead>
            <tr>
                <th>Title</th>
                <th>Posted On</th>
                <th>Posted By</th>
            </tr>
            </thead>
            <?php
            $con = mysql_connect(HOST, USER, PASS);
            mysql_select_db(DB, $con);

            $res = mysql_query("SELECT * FROM e39.news ORDER BY postedOn DESC LIMIT ". $pg*5 . ",5");

            while ($row = mysql_fetch_array($res)) {
                echo('<tr>');
                    echo('<td><a href="/EP?id=' . $row['id'] . '">' . $row['title'] . '</a></td>');
                    echo('<td>' . date("m/d/y", $row['postedOn']) . '</td>');
                    echo('<td><a href="/EditMember?id=' . getUserID($row['postedBy']) . '">' . $row['postedBy'] . '</a></td>');
                echo('</tr>');
            }
            ?>
        </table>
    </div>
    <nav aria-label="Post Navigation" class="text-lg-center">
        <ul class="pagination">
            <li class="page-item <?php if ($pg == 0) { echo(' disabled'); } ?>">
                <a class="page-link" href="/admin?p=<?php echo backOne($pg); ?>&na" aria-label="Previous">
                    <span aria-hidden="true" class="fa fa-arrow-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="/admin?p=<?php echo forwardOne($pg); ?>&na" aria-label="Next">
                    <span aria-hidden="true"class="fa fa-arrow-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>
</div>