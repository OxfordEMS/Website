<h1 class="text-lg-center">Contact Us</h1>
<hr>
<div class="row">
    <div class="col-md-4">
        <h2 class="text-lg-center">Street Address</h2>
        <h5 class="text-lg-center">76 Academy Street Oxford, NJ 07863</h5>
    </div>
    <div class="col-md-4">
        <h2 class="text-lg-center">Mailing Address</h2>
        <h5 class="text-lg-center">76 Academy Street Oxford, NJ 07863</h5>
    </div>
    <div class="col-md-4">
        <h2 class="text-lg-center">Email & Phone</h2>
        <h5 class="text-lg-center">Email: <small>contact@39rescue.cf</small></h5>
        <h5 class="text-lg-center">Phone: <small>(908) 453-2567</small></h5>
        <h5 class="text-lg-center">Fax: <small>(908) 453-2770</small></h5>
    </div>
</div>

<form action="lib/Actions/POST/Contact.php" enctype="multipart/form-data" method="post">
    <div class="form-group row">
        <label for="name" class="col-sm-1 col-form-label"><b>Name</b><sup class="text-danger">*</sup></label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-1 col-form-label"><b>Email</b><sup class="text-danger">*</sup></label>
        <div class="col-sm-5">
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="phone" class="col-sm-1 col-form-label"><b>Phone</b></label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="phone" name="phone">
        </div>
    </div>
    <div class="form-group row">
        <label for="message" class="col-sm-1 col-form-label"><b>Message</b><sup class="text-danger">*</sup></label>
        <div class="col-sm-7">
            <textarea class="form-control" id="message" name="message" rows="9" required></textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
