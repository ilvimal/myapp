<?php
$title = "home page";
include 'header.php';
?>

<div class="alert alert-warning" >
    Please be aware, this website is used for only testing purposed
</div>

<div class="clearfix"></div>
<div class="row">
<div class="col-sm-4 col-sm-offset-4">
<form class="form-horizontal">
    <div class="form-group">
        <label for="ramesh" class="col-sm-2 control-label">Email address</label>
        <div class="col-sm-10">
            <input type="email" required="true" class="form-control" id="ramesh" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
            <input type="password" required="true" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Remember me
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-info">Submit</button>
        </div>
    </div>
</form>
</div>
</div>

<div class="row">
    <div class="col-lg-4 text-center" id="thisismydiv">1</div>
    <div class="col-lg-4 text-center">2</div>
    <div class="col-lg-4 text-center">3</div>
</div>


<?php
include 'footer.php';
?>      
