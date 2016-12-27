<h1 class="text-md-center">Members</h1>

<h3 class="text-md-center">Officers</h3>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <table  align="center" class="table">
            <tr>
                <?php
                $con = mysql_connect(HOST, USER, PASS);
                mysql_select_db(DB, $con);
                $res = mysql_query("SELECT * FROM e39.members WHERE rank = 'Capitan'");
                while ($row = mysql_fetch_array($res)) {
                    echo('<td><b>' . $row['firstName'] . ' ' . $row['lastName'] . '</b></td>');
                    echo('<td><b>Capitan</b></td>');
                }
                ?>
            </tr>
            <tr>
                <?php
                $con = mysql_connect(HOST, USER, PASS);
                mysql_select_db(DB, $con);
                $res = mysql_query("SELECT * FROM e39.members WHERE rank = 'Asst. Capitan'");
                while ($row = mysql_fetch_array($res)) {
                    echo('<td><b>' . $row['firstName'] . ' ' . $row['lastName'] . '</b></td>');
                    echo('<td><b>Asst. Capitan</b></td>');
                }
                ?>
            </tr>
        </table>
    </div>
    <div class="col-md-4"></div>
</div>

<h3 class="text-md-center">Corporate Officers</h3>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <table  align="center" class="table">
            <tr>
                <?php
                $con = mysql_connect(HOST, USER, PASS);
                mysql_select_db(DB, $con);
                $res = mysql_query("SELECT * FROM e39.members WHERE rank = 'President'");
                while ($row = mysql_fetch_array($res)) {
                    echo('<td><b>' . $row['firstName'] . ' ' . $row['lastName'] . '</b></td>');
                    echo('<td><b>President</b></td>');
                }
                ?>
            </tr>
            <tr>
                <?php
                $con = mysql_connect(HOST, USER, PASS);
                mysql_select_db(DB, $con);
                $res = mysql_query("SELECT * FROM e39.members WHERE rank = 'Vice President'");
                while ($row = mysql_fetch_array($res)) {
                    echo('<td><b>' . $row['firstName'] . ' ' . $row['lastName'] . '</b></td>');
                    echo('<td><b>Vice President</b></td>');
                }
                ?>
            </tr>
            <tr>
                <?php
                $con = mysql_connect(HOST, USER, PASS);
                mysql_select_db(DB, $con);
                $res = mysql_query("SELECT * FROM e39.members WHERE rank = 'Secretary'");
                while ($row = mysql_fetch_array($res)) {
                    echo('<td><b>' . $row['firstName'] . ' ' . $row['lastName'] . '</b></td>');
                    echo('<td><b>Secretary</b></td>');
                }
                ?>
            </tr>
            <tr>
                <?php
                $con = mysql_connect(HOST, USER, PASS);
                mysql_select_db(DB, $con);
                $res = mysql_query("SELECT * FROM e39.members WHERE rank = 'Treasurer'");
                while ($row = mysql_fetch_array($res)) {
                    echo('<td><b>' . $row['firstName'] . ' ' . $row['lastName'] . '</b></td>');
                    echo('<td><b>Treasurer</b></td>');
                }
                ?>
            </tr>
        </table>
    </div>
    <div class="col-md-4"></div>
</div>

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
        <h3 class="text-md-center">Members</h3>
        <table  align="center" class="table">
            <?php
            $con = mysql_connect(HOST, USER, PASS);
            mysql_select_db(DB, $con);
            $res = mysql_query("SELECT * FROM e39.members");
            while ($row = mysql_fetch_array($res)) {
                if ($row['rank'] == "Member") {
                    echo('<tr>');
                    echo('<td><b>' . $row['firstName'] . ' ' . $row['lastName'] . '</b></td>');
                    echo('<td><b>' . $row['rank'] . isEMTDisp($row['username']) . '</b></td>');
                    echo('</tr>');
                } elseif ($row['rank'] == "Junior") {
                    echo('<tr>');
                    echo('<td><b>' . $row['firstName'] . ' ' . $row['lastName'] . '</b></td>');
                    echo('<td><b>' . $row['rank'] . isEMTDisp($row['username']) . '</b></td>');
                    echo('</tr>');
                } elseif ($row['rank'] == "Cadet") {
                    echo('<tr>');
                    echo('<td><b>' . $row['firstName'] . ' ' . $row['lastName'] . '</b></td>');
                    echo('<td><b>' . $row['rank'] . isEMTDisp($row['username']) . '</b></td>');
                    echo('</tr>');
                }
            }
            ?>
        </table>
    </div>
    <div class="col-md-4">
        <h3 class="text-md-center">Support Team</h3>
        <table  align="center" class="table">
            <?php
            $con = mysql_connect(HOST, USER, PASS);
            mysql_select_db(DB, $con);
            $res = mysql_query("SELECT * FROM e39.members");
            while ($row = mysql_fetch_array($res)) {
                if ($row['tType'] == "Support") {
                    echo('<tr>');
                    echo('<td><b>' . $row['firstName'] . ' ' . $row['lastName'] . '</b></td>');
                    echo('<td><b>' . $row['rank'] . isEMTDisp($row['username']) . '</b></td>');
                    echo('</tr>');
                }
            }
            ?>
        </table>
    </div>
    <div class="col-md-2"></div>
</div>

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
        <h3 class="text-md-center">Charter Members</h3>
        <table  align="center" class="table">
            <?php
            $con = mysql_connect(HOST, USER, PASS);
            mysql_select_db(DB, $con);
            $res = mysql_query("SELECT * FROM e39.members WHERE rank = 'Charter'");
            while ($row = mysql_fetch_array($res)) {
                echo('<tr>');
                echo('<td><b>' . $row['firstName'] . ' ' . $row['lastName'] . '</b></td>');
                echo('</tr>');
            }
            ?>
        </table>
    </div>

    <div class="col-md-4">
        <h3 class="text-md-center">Life Members</h3>
        <table  align="center" class="table">
            <?php
            $con = mysql_connect(HOST, USER, PASS);
            mysql_select_db(DB, $con);
            $res = mysql_query("SELECT * FROM e39.members WHERE rank = 'Life'");
            while ($row = mysql_fetch_array($res)) {
                echo('<tr>');
                echo('<td><b>' . $row['firstName'] . ' ' . $row['lastName'] . '</b></td>');
                echo('</tr>');
            }
            ?>
        </table>
    </div>
    <div class="col-md-2"></div>
</div>