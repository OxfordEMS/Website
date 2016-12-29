<?php
$id = getUserID($user);
$us = getUserFromID($id);
?>
<h2 class="text-lg-center">Edit Profile</h2>

<?php
if (isset($_GET['up'])) {
    echo('
        <div class="alert alert-success alert-dismissable fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Success!</strong> You have successfully updated your profile!
        </div>
    ');
}
?>



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
                <a class="nav-link" data-toggle="tab" role="tab" href="#ceri">Certifications</a>
            </li>
        </ul>
    </div>
    <div class="col-md-9">
        <div class="tab-content">
            <!--PERSONAL INFORMATION-->
            <div class="tab-pane active" id="pi" role="tabpanel">
                <form action="lib/Actions/POST/UpdateProfilePI.php" enctype="multipart/form-data" method="post">
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
                        #DOB
                        echo('<div class="form-group">');
                        echo('<label for="DOB" >DOB</label>');
                        echo('<input type="text" class="form-control" id="DOB" name="DOB" value="' . $row['dob'] . '">');
                        echo('</div>');

                        #SUBMIT
                        echo('<button type="submit" class="btn btn-outline-primary">Update</button>');
                    }

                    ?>
                </form>
            </div>
            <!--CONTACT INFORMATION-->
            <div class="tab-pane" id="ci" role="tabpanel">
                <form action="lib/Actions/POST/UpdateProfileCI.php" enctype="multipart/form-data" method="post">
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
            <!--CERTIFICATIONS--><!--TODO Finish certifications module, transfer certs to certification module-->
            <div class="tab-pane" id="ceri" role="tabpanel">
                <form action="lib/Actions/POST/UpdateProfileCERTI.php" enctype="multipart/form-data" method="post">
                    <?php

                    $con = mysql_connect(HOST, USER, PASS);
                    mysql_select_db(DB, $con);

                    $res = mysql_query("SELECT * FROM e39.members WHERE id = '$id'");

                    while ($row = mysql_fetch_array($res)) {

                        #CERTIFICATIONS
                        echo('<input type="hidden" name="id" value="' . $row['id'] . '">');


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
