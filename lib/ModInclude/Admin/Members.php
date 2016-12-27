<table class="table table-hover">
    <thead>
    <tr>
        <th>Name</th>
        <th>E-Mail</th>
        <th>Cell Phone</th>
        <th>Position</th>
    </tr>
    </thead>
    <?php

    $con = mysql_connect(HOST, USER, PASS);
    mysql_select_db(DB, $con);

    $res = mysql_query("SELECT * FROM e39.members ORDER BY lastName ");

    while ($row = mysql_fetch_array($res)) {
        echo('<tr>');
        echo('<td><a href="/EditMember?id=' . $row['id'] . '">' . $row['lastName'] .  ', ' . $row['firstName'] . '</a></td>');
        echo('<td>' . $row['email'] .  '</td>');
        echo('<td>' . $row['cellPhone'] .  '</td>');
        echo('<td>' . $row['rank'] .  isEMTDisp($row['username']) . isSupportDisp($row['username']) . '</td>');
        echo('</tr>');
    }

    ?>
</table>