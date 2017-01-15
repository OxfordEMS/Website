<h2 class="text-lg-center">Administration Panel</h2>
<?php

$na = false;
$ca = false;

if (isset($_GET['na'])) {
    $na=true;
} elseif (isset($_GET['ca'])) {
    $ca = true;
}

#ALERTS

if (isset($_GET['ud'])) {
    echo('
        <div class="alert alert-success alert-dismissable fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Success!</strong> Member, <a class="alert-link" href="/EditMember?id=' . getUserID($_GET['ud']) . '">' . $_GET['ud'] . '</a> successfully updated!
        </div>
    ');
} elseif (isset($_GET['nnp'])) {
    echo('
        <div class="alert alert-success alert-dismissable fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Success!</strong> Post, <b>' . $_GET['nnp'] . '</b> successfully added!
        </div>
    ');
} elseif (isset($_GET['ctc'])) {
    echo('
        <div class="alert alert-success alert-dismissable fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Success!</strong> Closed contact form successfully.
        </div>
    ');
}
?>
<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link<?php if ($na==false&&$ca==false) { echo(' active'); } ?>" data-toggle="tab" href="#members" role="tab">Members</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php if ($na==true&&$ca==false) { echo(' active'); } ?>" data-toggle="tab" href="#news" role="tab">News</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#events" role="tab">Events</a>
    </li>
    <li class="nav-item">
        <a class="nav-link<?php if ($na==false&&$ca==true) { echo(' active'); } ?>" data-toggle="tab" href="#contact" role="tab">Contact Us</a>
    </li>
</ul>

<div class="tab-content">
    <div class="tab-pane<?php if ($na==false&&$ca==false) { echo(' active'); } ?>" id="members" role="tabpanel">
        <?php include_once('lib/ModInclude/Admin/Members.php'); ?>
    </div>
    <div class="tab-pane<?php if ($na==true&&$ca==false) { echo(' active'); } ?>" id="news" role="tabpanel">
        <?php include_once('lib/ModInclude/Admin/News.php'); ?>
    </div>
    <div class="tab-pane" id="events" role="tabpanel">3</div>
    <div class="tab-pane<?php if ($na==false&&$ca==true) { echo(' active'); } ?>" id="contact" role="tabpanel">
        <?php include_once('lib/ModInclude/Admin/Contact.php'); ?>
    </div>
</div>