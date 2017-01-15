<h2 class="text-lg-center">Call Management</h2>
<?php

$ec = false;

if (isset($_GET['ec'])) {
    $ec = true;
}

#ALERTS

if (isset($_GET['nc'])) {
    echo('
        <div class="alert alert-success alert-dismissable fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Success!</strong> Added, <a class="alert-link" href="/CallCard?id=">Call Info + Link</a> successfully!
        </div>
    ');
} elseif (isset($_GET['ecd'])) {
    echo('
        <div class="alert alert-success alert-dismissable fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Success!</strong> Edited, <a class="alert-link" href="/CallCard?id=">Call Info + Link</a> successfully!
        </div>
    ');
}
?>
<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link<?php if ($ec==false) { echo(' active'); } ?>" data-toggle="tab" href="#new" role="tab">New Call</a>
    </li>
    <li class="nav-item">
        <a class="nav-link<?php if ($ec==true) { echo(' active'); } ?>" data-toggle="tab" href="#edit" role="tab">Edit Call</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#stats" role="tab">Overall Stats</a>
    </li>
</ul>

<div class="tab-content">
    <div class="tab-pane<?php if ($ec==false) { echo(' active'); } ?>" id="new" role="tabpanel">
        <?php include_once('lib/ModInclude/Squad/New.php'); ?>
    </div>
    <div class="tab-pane<?php if ($ec==true) { echo(' active'); } ?>" id="edit" role="tabpanel">
        <?php include_once('lib/ModInclude/Squad/Edit.php'); ?>
    </div>
    <div class="tab-pane" id="stats" role="tabpanel">
        <?php include_once('lib/ModInclude/Squad/Stats.php'); ?>
    </div>
</div>