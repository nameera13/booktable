<div class="container content p-3">
    <div class="row">
        <div class="col-md-5 mt-5">
            <img src="<?php  echo $baseurl;?>images/login.gif" alt="" class="image-fluid" style="width:100%; height: 350px; imporatnt!">
        </div>
        <div class="col-md-7 mt-5">
            <div class="form-group">
                <h3 class="text-center">Login</h3>
                <hr class="border border-info border-2 w-25 mx-auto">
                <form action="" method="post" data-bvalidator-validate>
                    <div class="form-group mt-5">
                        <input type="email" name="email" class="form-control" placeholder="Email" data-bvalidator="required" >
                    </div>
                    <div class="form-group mt-4">
                        <input type="password" name="pass" class="form-control" placeholder="Password" data-bvalidator="required" data-bvalidator-msg="Please enter your password" >
                    </div>
                    <div class="form-group mt-3">
                        <input type="submit" name="login" value="Login" class="btn btn-outline-success">
                        <b><a href="#" class="link-info" data-bs-toggle="modal" data-bs-target="#forget">ForgetPassword?</a></b>
                    </div>
                    <div class="form-group mt-3">
                        <b>Don't have an Account? <a href="#" data-bs-toggle="modal" data-bs-target="#reg" class="btn btn-outline-secondary">Create an Account</a></b>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>