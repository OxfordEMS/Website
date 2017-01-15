<h3 class="text-lg-center">New Call</h3>

<form action="lib/Actions/POST/NewCallCard.php" enctype="multipart/form-data" method="post">
    <div class="row">
        <div class="col-md-4">
            <!--SQUAD CALL ID-->
            <div class="form-group">
                <label for="scid">Squad Call ID</label>
                <input class="form-control" type="text" id="scid" name="scid" placeholder="0000" maxlength="4">
            </div>


            <!--TODO IN PHP MAKE SURE THIS GETS THE YEAR ADDED TO THE FRONT-->
            <!--WC CALL ID-->
            <div class="form-group">
                <label for="wccid">WC Call ID</label>
                <div class="input-group">
                    <div class="input-group-addon"><?php echo date("y"); ?></div>
                    <input class="form-control" type="text" id="wccid" name="wccid" placeholder="000000" maxlength="6">
                </div>
            </div>

            <!--CALL TYPE-->
            <div class="form-group">
                <label for="callType"> Call Type</label>
                <select class="form-control" id="callType" name="callType">
                    <optgroup label="EMS">
                        <?php

                        $con = mysql_connect(HOST, USER, PASS);
                        mysql_select_db(DB, $con);

                        $res = mysql_query("SELECT * FROM e39.callTypes WHERE type = 'EMS' ORDER BY name");

                        while ($row = mysql_fetch_array($res)){
                            echo('<option>' . $row['name'] . '</option>');
                        }

                        ?>
                    </optgroup>
                    <optgroup label="Fire">
                        <?php

                        $con = mysql_connect(HOST, USER, PASS);
                        mysql_select_db(DB, $con);

                        $res = mysql_query("SELECT * FROM e39.callTypes WHERE type = 'FIRE' ORDER BY name");

                        while ($row = mysql_fetch_array($res)){
                            echo('<option>' . $row['name'] . '</option>');
                        }

                        ?>
                    </optgroup>
                    <optgroup label="Police">
                        <?php

                        $con = mysql_connect(HOST, USER, PASS);
                        mysql_select_db(DB, $con);

                        $res = mysql_query("SELECT * FROM e39.callTypes WHERE type = 'POLICE' ORDER BY name");

                        while ($row = mysql_fetch_array($res)){
                            echo('<option>' . $row['name'] . '</option>');
                        }

                        ?>
                    </optgroup>
                </select>
            </div>
        </div>

        <div class="col-md-4">
            <!--DESCRIPTION-->
            <div class="form-group">
                <label for="description">Description</label>
                <input class="form-control" type="text" id="description" name="description" placeholder="i.e 60 YOM">
            </div>

            <!--LOCATION-->
            <div class="form-group">
                <label for="location">Address</label>
                <input class="form-control" id="location" name="location" placeholder="i.e 76 ACADEMY STREET">
            </div>

            <!--LOCATION TOWN-->
            <div class="form-group">
                <label for="locTown">Town</label>
                <select class="form-control" id="locTown" name="locTown">
                    <option>OXFORD TWP</option>
                    <option>WHITE TWP</option>
                    <option>WASHINGTON TWP</option>
                    <option>WASHINGTON BORO</option>
                    <option>LIBERTY TWP</option>
                    <option>HARMONY TWP</option>
                    <option disabled>----</option>
                    <option>ALLAMUCHY TWP</option>
                    <option>ALPHA BORO</option>
                    <option>BELVIDERE TOWN</option>
                    <option>BLAIRSTOWN TWP</option>
                    <option>FRANKLIN TWP</option>
                    <option>FRELINGHUYSEN TWP</option>
                    <option>GREENWICH TWP</option>
                    <option>HACKETTSTOWN TOWN</option>
                    <option>HARDWICK TWP</option>
                    <option>HOPE TWP</option>
                    <option>INDEPENDENCE TWP</option>
                    <option>KNOWLTON TWP</option>
                    <option>LOPATCONG TWP</option>
                    <option>MANSFIELD TWP</option>
                    <option>PHILLIPSBURG TOWN</option>
                    <option>POHATCONG TWP</option>
                    <option>OUT OF COUNTY</option>
                </select>
            </div>
        </div>


        <div class="col-md-4">
            <!--LOCATION ABOUT-->
            <div class="form-group">
                <label for="locAbout">About Location</label>
                <input class="form-control" type="text" id="locAbout" name="locAbout" placeholder="i.e OXFORD EMERGENCY SQUAD">
            </div>

            <!--CARD TIME-->
            <div class="form-group">
                <label for="cardTime">Card Time</label>
                <input class="form-control" type="text" id="cardTime" name="cardTime" placeholder="i.e 00/00 00:00 (time in 24 hour format)">
            </div>

            <!--ADD CARD-->
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Card</button>
            </div>
            <small class="form-text text-muted">Responding members can be added afterward.</small>
        </div>
    </div>
</form>