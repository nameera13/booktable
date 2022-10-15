<div class="container content p-3">
    <h2 class="text-center">Manage Your Profile</h2>
    <hr class="border border-info border-3 w-30 mx-auto">
    <div class="row">
        <div class="col-md-4 mt-5 jubotron bg-dark p-5">
            <ul class="sidebar">
                <li><a class="btn btn-block btn-success text-white" href="#"> Welcome : <?php echo ucfirst($_SESSION["fname"]); ?></a></li>
                <li class="mt-2"><a href="<?php echo $mainurl; ?>ManageProfile" class="link-info">Manage Profile</a></li>
                <!-- <li class="mt-2"><a href="#" class="link-info">Manage All User</a></li> -->
                <li class="mt-2"><a href="<?php echo $mainurl;?>BookTable" class="link-info">Booking Table</a></li>
                <li class="mt-2"><a href="<?php echo $mainurl;?>ManageBooking" class="link-info">Manage Booking <span class="badge badge-danger bg-danger">0</span></a></li>
                <li class="mt-2"><a href="<?php echo $mainurl; ?>ChangePassword" class="link-info">Change Password</a></li>
                <li class="mt-2"><a href="<?php echo $mainurl;?>?delete-account=<?php echo base64_encode($shwdata[0]["r_id"]);?>" onclick="return confirm('Are you sure to Delete Account?')" class="link-info">Delect Account</a></li>
                <li class="mt-2"><a href="<?php echo $mainurl;?>?logout-here" onclick="return confirm('Are you sure to logout as User?')" class="link-info">Logout!</a></li>
                </ul>
        </div>
        <div class="col-md-8">
        <div class="form-group">
            <form method="post" class="form-group" data-bvalidator-validate>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group mt-5">
                        <input type="text" name="fname" value="<?php echo $shwdata[0]["firstname"];?>" class="form-control" data-bvalidator="alpha,required" data-bvalidator-msg="Please Enter FirstName">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group mt-5">
                        <input type="text" name="lname" value="<?php echo $shwdata[0]["lastname"];?>" class="form-control" data-bvalidator="alpha,required" data-bvalidator-msg="Please Enter LastName">
                    </div>
                    </div>
                </div>
                <div class="form-group mt-4">
                    <input type="email" name="email" value="<?php echo $shwdata[0]["email"];?>" class="form-control" data-bvalidator="required">
                </div>
                <div class="form-group mt-4">
                    <input type="number" name="phone" value="<?php echo $shwdata[0]["mobile"];?>" class="form-control"  data-bvalidator="number,minlen[10],maxlen[10],required"  data-bvalidator-msg="Please Enter valid Mobile Number">
                </div>

                <div class="form-group mt-4">
                    <input type="radio" name="gender" value="male"
                    <?php
                    if($shwdata[0]["gender"])
                    {
                        echo "checked='checked'";
                    }
                    ?> data-bvalidator="required" data-bvalidator-msg="Select radio">male

                    <input type="radio" name="gender" value="female" 
                    <?php
                    if($shwdata[0]["gender"])
                    {
                        echo "checked='checked'";
                    }
                    ?>>female
                </div>
                <div class="form-group mt-4">
                    <input type="submit" name="upd" value="Update Profile!" class="btn btn-outline-success">
                    <input type="reset" value="Reset" class="btn btn-outline-danger">
                </div>
            </form>
        </div>  
        </div>
    </div>
</div>