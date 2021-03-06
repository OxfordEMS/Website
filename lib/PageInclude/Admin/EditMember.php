<?php
$id = $_GET['id'];
$us = getUserFromID($id);
?>
<h2 class="text-lg-center">Member Information - <small><?php echo getUserFromID($id)?></h2>



<div class="row">
    <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" role="tab" href="#pi">Personal Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" role="tab" href="#ci">Contact Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" role="tab" href="#si">Squad Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" role="tab" href="#ceri">Certifications</a>
            </li>
        </ul>
    </div>
    <div class="col-md-9">
        <div class="tab-content">
            <!--PERSONAL INFORMATION-->
            <div class="tab-pane active" id="pi" role="tabpanel">
                <form action="lib/Actions/POST/UpdateMemberPI.php" enctype="multipart/form-data" method="post">
                    <?php

                    $con = mysql_connect(HOST, USER, PASS);
                    mysql_select_db(DB, $con);

                    $res = mysql_query("SELECT * FROM e39.members WHERE id = '$id'");

                    while ($row = mysql_fetch_array($res)) {

                        #PERSONAL INFORMATION
                        echo('<input type="hidden" name="id" value="' . $row['id'] . '">');


                        #FIRST NAME
                        echo('<div class="form-group">');
                        echo('<label for="firstName" >First Name</label>');
                        echo('<input type="text" class="form-control" id="firstName" name="firstName" value="' . $row['firstName'] . '">');
                        echo('</div>');
                        #LAST NAME
                        echo('<div class="form-group">');
                        echo('<label for="lastName" >Last Name</label>');
                        echo('<input type="text" class="form-control" id="lastName" name="lastName" value="' . $row['lastName'] . '">');
                        echo('</div>');
                        #USERNAME
                        echo('<div class="form-group">');
                        echo('<label for="username" >Username</label>');
                        echo('<input type="text" class="form-control" id="username" name="username" value="' . $row['username'] . '">');
                        echo('<small id="username" class="form-text text-muted">Username must be first initial and full last name i.e. PHissm</small>');
                        echo('</div>');
                        #DOB
                        echo('<div class="form-group">');
                        echo('<label for="DOB" >DOB</label>');
                        echo('<input type="text" class="form-control" id="DOB" name="DOB" value="' . $row['dob'] . '">');
                        echo('</div>');

                        #SUBMIT
                        echo('<div class="btn-group" role="group" aria-label="Actions">');
                        echo('<button type="submit" class="btn btn-outline-danger">Update</button>');
                        echo('<a href="/admin" class="btn btn-outline-primary" role="button">Back</a>');
                        echo('</div>');
                    }

                    ?>
                </form>
            </div>
            <!--CONTACT INFORMATION-->
            <div class="tab-pane" id="ci" role="tabpanel">
                <form action="lib/Actions/POST/UpdateMemberCI.php" enctype="multipart/form-data" method="post">
                    <?php

                    $con = mysql_connect(HOST, USER, PASS);
                    mysql_select_db(DB, $con);

                    $res = mysql_query("SELECT * FROM e39.members WHERE id = '$id'");

                    while ($row = mysql_fetch_array($res)) {

                        #CONTACT INFORMATION
                        echo('<input type="hidden" name="id" value="' . $row['id'] . '">');


                        #EMAIL

                        echo('<div class="form-group">');
                        echo('<label for="email" >E-Mail</label>');
                        echo('<input type="email" class="form-control" id="email" name="email" value="' . $row['email'] . '">');
                        echo('</div>');
                        #ADDRESS
                        echo('<div class="form-group">');
                        echo('<label for="address" >Address</label>');
                        echo('<input type="text" class="form-control" id="address" name="address" value="' . $row['address'] . '">');
                        echo('</div>');
                        #CELLPHONE
                        echo('<div class="form-group">');
                        echo('<label for="cellPhone" >Cell Phone</label>');
                        echo('<input type="text" class="form-control" id="cellPhone" name="cellPhone" value="' . $row['cellPhone'] . '">');
                        echo('</div>');
                        #HOME PHONE
                        echo('<div class="form-group">');
                        echo('<label for="homePhone" >Home Phone</label>');
                        echo('<input type="text" class="form-control" id="homePhone" name="homePhone" value="' . $row['homePhone'] . '">');
                        echo('</div>');

                        #SUBMIT
                        echo('<div class="btn-group" role="group" aria-label="Actions">');
                        echo('<button type="submit" class="btn btn-outline-danger">Update</button>');
                        echo('<a href="/admin" class="btn btn-outline-primary" role="button">Back</a>');
                        echo('</div>');
                    }

                    ?>
                </form>
            </div>
            <!--SQUAD INFORMATION-->
            <div class="tab-pane" id="si" role="tabpanel">
                <form action="lib/Actions/POST/UpdateMemberSI.php" enctype="multipart/form-data" method="post">
                    <?php

                    $con = mysql_connect(HOST, USER, PASS);
                    mysql_select_db(DB, $con);

                    $res = mysql_query("SELECT * FROM e39.members WHERE id = '$id'");

                    while ($row = mysql_fetch_array($res)) {

                        #SQUAD INFORMATION
                        echo('<input type="hidden" name="id" value="' . $row['id'] . '">');


                        #RANK
                        echo('<div class="form-group">');
                        echo('<label for="rank" >Position</label>');
                        echo('<select class="form-control" id="rank" name="rank">');
                        echo('<optgroup label="Officer">');
                        echo('<option value="Capitan" ' . getRankDispSEL($row['username'], "Capitan") . '>Capitan</option>');
                        echo('<option value="Asst. Capitan" ' . getRankDispSEL($row['username'], "Asst. Capitan") . '>Asst. Capitan</option>');
                        echo('</optgroup>');
                        echo('<optgroup label="Corprate">');
                        echo('<option value="President" ' . getRankDispSEL($row['username'], "President") . '>President</option>');
                        echo('<option value="Vice President" ' . getRankDispSEL($row['username'], "Vice President") . '>Vice President</option>');
                        echo('<option value="Secretary" ' . getRankDispSEL($row['username'], "Secretary") . '>Secretary</option>');
                        echo('<option value="Treasurer" ' . getRankDispSEL($row['username'], "Treasurer") . '>Treasurer</option>');
                        echo('</optgroup>');
                        echo('<optgroup label="General">');
                        echo('<option value="Member" ' . getRankDispSEL($row['username'], "Member") . '>Member</option>');
                        echo('<option value="Junior" ' . getRankDispSEL($row['username'], "Junior") . '>Junior</option>');
                        echo('<option value="Cadet" ' . getRankDispSEL($row['username'], "Cadet") . '>Cadet</option>');
                        echo('<option value="Charter" ' . getRankDispSEL($row['username'], "Charter Member") . '>Charter</option>');
                        echo('<option value="Life" ' . getRankDispSEL($row['username'], "Life") . '>Life Member</option>');
                        echo('</optgroup>');
                        echo('</select>');
                        echo('</div>');
                        #TEAM TYPE
                        echo('<div class="form-group">');
                        echo('<label for="tType" >Team</label>');
                        echo('<select class="form-control" id="tType" name="tType">');
                        echo('<option value="Squad" ' . getTTypeDispSEL($row['username'], "Squad") . '>Squad Member</option>');
                        echo('<option value="Support" ' . getTTypeDispSEL($row['username'], "Support") . '>Support Team</option>');
                        echo('</select>');
                        echo('</div>');

                        #SUBMIT
                        echo('<div class="btn-group" role="group" aria-label="Actions">');
                        echo('<button type="submit" class="btn btn-outline-danger">Update</button>');
                        echo('<a href="/admin" class="btn btn-outline-primary" role="button">Back</a>');
                        echo('</div>');
                    }

                    ?>
                </form>
            </div>
            <!--CERTIFICATIONS-->
            <div class="tab-pane" id="ceri" role="tabpanel">
                <form action="lib/Actions/POST/UpdateMemberCERTI.php" enctype="multipart/form-data" method="post">
                    <?php

                    $con = mysql_connect(HOST, USER, PASS);
                    mysql_select_db(DB, $con);

                    $res = mysql_query("SELECT * FROM e39.members WHERE id = '$id'");

                    while ($row = mysql_fetch_array($res)) {

                        #CERTIFICATIONS
                        echo('<input type="hidden" name="id" value="' . $row['id'] . '">');


                        #EMT
                        echo('<div class="form-group">');
                        echo('<label for="EMT" >EMT</label>');
                        echo('<select class="form-control" id="EMT" name="EMT">');
                        echo('<option value="Yes" ' . isEMTDispSEL($row['username'], "Y") . '>Yes</option>');
                        echo('<option value="No" ' . isEMTDispSEL($row['username'], "N") . '>No</option>');
                        echo('</select>');
                        echo('</div>');
                        #OEMS ID
                        echo('<div class="form-group">');
                        echo('<label for="oems" >OEMS ID</label>');
                        echo('<input type="text" class="form-control" id="oems" name="oems" value="' . $row['oems'] . '">');
                        echo('</div>');

                        #SUBMIT
                        echo('<div class="btn-group" role="group" aria-label="Actions">');
                        echo('<button type="submit" class="btn btn-outline-danger">Update</button>');
                        echo('<a href="/admin" class="btn btn-outline-primary" role="button">Back</a>');
                        echo('</div>');
                    }

                    ?>
                </form>
            </div>
        </div>



<!--<div class="text-lg-center">OMID<img src="https://www.barcodesinc.com/generator/image.php?code=0395&style=197&type=C128B&width=115&height=50&xres=1&font=3" border="0"></div>
<div class="text-lg-center">OEMS<img src="https://www.barcodesinc.com/generator/image.php?code=&style=197&type=C128B&width=115&height=50&xres=1&font=3" border="0"></div>-->
    </div>
</div>
