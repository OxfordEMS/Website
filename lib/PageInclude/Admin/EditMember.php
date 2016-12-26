<?php
$id = $_GET['id'];
$us = getUserFromID($id);
?>
<h2 class="text-lg-center">Member Information - <small><b>OMID: </b>0395<?php echo $id; ?></small></h2>
<div class="text-lg-center">OMID<img src="https://www.barcodesinc.com/generator/image.php?code=0395<?php echo $id; ?>&style=197&type=C128B&width=115&height=50&xres=1&font=3" border="0"></div>
<div class="text-lg-center">OEMS<img src="https://www.barcodesinc.com/generator/image.php?code=<?php echo getOEMS($id); ?>&style=197&type=C128B&width=115&height=50&xres=1&font=3" border="0"></div>
<form action="lib/Actions/POST/UpdateMember.php" enctype="multipart/form-data" method="post">
<?php

    $con = mysql_connect(HOST, USER, PASS);
    mysql_select_db(DB, $con);

    $res = mysql_query("SELECT * FROM e39.members WHERE id = '$id'");

    while ($row = mysql_fetch_array($res)) {
        #FIRST NAME
        echo('<input type="hidden" name="id" value="' . $row['id'] . '">');
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
        #EMAIL
        echo('<div class="form-group">');
            echo('<label for="email" >E-Mail</label>');
            echo('<input type="email" class="form-control" id="email" name="email" value="' . $row['email'] . '">');
        echo('</div>');
        #DOB
        echo('<div class="form-group">');
            echo('<label for="DOB" >DOB</label>');
            echo('<input type="text" class="form-control" id="DOB" name="DOB" value="' . $row['dob'] . '">');
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
        #RANK
        echo('<div class="form-group">');
            echo('<label for="rank" >Position</label>');
            echo('<select class="form-control" id="rank" name="rank">');
                echo('<optgroup label="Officer">');
                    echo('<option>Capitan</option>');
                    echo('<option>Asst. Capitan</option>');
                echo('</optgroup>');
                echo('<optgroup label="Corprate">');
                    echo('<option>President</option>');
                    echo('<option>Vice President</option>');
                    echo('<option>Secretary</option>');
                    echo('<option>Treasurer</option>');
                echo('</optgroup>');
                echo('<optgroup label="General">');
                    echo('<option>Member</option>');
                    echo('<option>Junior</option>');
                    echo('<option>Cadet</option>');
                    echo('<option>Charter</option>');
                    echo('<option>Life</option>');
                echo('</optgroup>');
            echo('</select>');
        echo('<small id="rank" class="form-text text-danger">Make sure this is set properly</small>');
        echo('</div>');
        #EMT
        echo('<div class="form-group">');
            echo('<label for="EMT" >EMT</label>');
            echo('<select class="form-control" id="EMT" name="EMT">');
                echo('<option>No</option>');
                echo('<option>Yes</option>');
            echo('</select>');
        echo('<small id="EMT" class="form-text text-danger">Make sure this is set properly</small>');
        echo('</div>');
        #TEAM TYPE
        echo('<div class="form-group">');
            echo('<label for="tType" >Team</label>');
            echo('<select class="form-control" id="tType" name="tType">');
                echo('<option>Squad</option>');
                echo('<option>Support</option>');
            echo('</select>');
            echo('<small id="tType" class="form-text text-danger">Make sure this is set properly</small>');
        echo('</div>');
        echo('<div class="btn-group" role="group" aria-label="Actions">');
            echo('<button type="submit" class="btn btn-outline-danger">Update</button>');
            echo('<a href="/admin" class="btn btn-outline-primary" role="button">Back</a>');
        echo('</div>');
    }
?>
</form>
