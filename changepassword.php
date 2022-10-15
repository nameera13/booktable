<div class="container content p-3">
    <h2 class="text-center">Change Password</h2>
    <hr class="border border-info border-3 w-30 mx-auto">
    <div class="row">
        <div class="col-md-4 mt-5 jubotron bg-dark p-5">
            <ul class="sidebar">
                <li><a class="btn btn-block btn-success text-white" href="#"> Welcome : <?php echo ucfirst($_SESSION["fname"]); ?></a></li>
                <li class="mt-2"><a href="<?php echo $mainurl;?>ManageProfile" class="link-info">Manage Profile</a></li>
                <!-- <li class="mt-2"><a href="#" class="link-info">Manage All User</a></li> -->
                <li class="mt-2"><a href="<?php echo $mainurl;?>BookTable" class="link-info">Booking Table</a></li>
                <li class="mt-2"><a href="<?php echo $mainurl;?>ManageBooking" class="link-info">Manage Booking <span class="badge badge-danger bg-danger">0</span></a></li>
                <li class="mt-2"><a href="<?php echo $mainurl;?>ChangePassword" class="link-info">Change Password</a></li>
                <li class="mt-2"><a href="<?php echo $mainurl;?>?delete-account=<?php echo base64_encode($shwdata[0]["r_id"]);?>" onclick="return confirm('Are you sure to Delete Account?')" class="link-info">Delect Account</a></li>
                <li class="mt-2"><a href="<?php echo $mainurl;?>?logout-here" onclick="return confirm('Are you sure to logout as User?')" class="link-info">Logout!</a></li>
                </ul>
        </div>
        <div class="col-md-8">
        <div class="form-group">
            <form method="post" class="form-group" data-bvalidator-validate>
                <div class="form-group mt-5">
                    <input type="password" name="opass" placeholder="Enter Old Password" class="form-control" data-bvalidator="required" data-bvalidator-msg="Please Enter Old Password">
                </div>
                <div class="form-group mt-3">
                    <input type="password" name="npass" placeholder="Enter New Password" class="form-control" id="pass" data-bvalidator="passwordFormat,required" data-bvalidator-msg="Please Enter New Password Min 8 characters including a number, letters a-z, A-Z">
                </div>
                <div class="form-group mt-3">
                    <input type="password" name="cpass" placeholder="Enter Confirm Password" class="form-control" id="cpass" data-bvalidator="equal[pass],required" data-bvalidator-msg-equal="Please enter the same password again">
                </div>
                <div class="form-group mt-3">
                    <input type="submit" name="change" value="Change Password" class="btn btn-outline-success">
                </div>
            </form>
        </div>  
        </div>
    </div>
</div>