
<div class="container content p-3">
    <h2 class="text-center">Manage Booking</h2>
    <hr class="border border-info border-3 w-30 mx-auto">
    <div class="row">
        <div class="col-md-4 mt-5 jubotron bg-dark p-5">
            <ul class="sidebar">
                <li><a class="btn btn-block btn-success text-white" href="#"> Welcome : <?php echo ucfirst($_SESSION["fname"]); ?></a></li>
                <li class="mt-2"><a href="<?php echo $mainurl; ?>ManageProfile" class="link-info">Manage Profile</a></li>
                <!-- <li class="mt-2"><a href="#" class="link-info">Manage All User</a></li> -->
                <li class="mt-2"><a href="<?php echo $mainurl;?>BookTable" class="link-info">Booking Table</a></li>
                <li class="mt-2"><a href="<?php echo $mainurl;?>ManageBooking" class="link-info">Manage Booking <span class="badge badge-danger bg-danger"><?php echo $count[0]["total"];?></span></a></li>
                <li class="mt-2"><a href="<?php $mainurl; ?>ChangePassword" class="link-info">Change Password</a></li>
                <li class="mt-2"><a href="<?php echo $mainurl;?>?delete-account=<?php echo base64_encode($shwdata[0]["r_id"]);?>" onclick="return confirm('Are you sure to Delete Account?')" class="link-info">Delect Account</a></li>
                <li class="mt-2"><a href="<?php echo $mainurl;?>?logout-here" onclick="return confirm('Are you sure to logout as User?')" class="link-info">Logout!</a></li>
                </ul>
        </div>

        <div class="col-md-8">
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Bookday</th>
                    <th>DateTime</th>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
                <?php
                foreach($shwbooking as $data)
                {   
                ?>
                
                <tr>
                    <td><?php echo $data["id"];?></td>
                    <td><?php echo $data["bookday"];?></td>
                    <td><?php echo $data["datetime"];?></td>
                    <td><?php echo $data["firstname"];?></td>
                    <td><?php echo $data["lastname"];?></td>
                    <td><?php echo $data["email"];?></td>
                    <td><?php echo $data["phone"];?></td>
                    <td><div>
                    <a href="<?php echo $mainurl;?>?delete-table=<?php echo $shwbooking[0]["id"]; ?>" onclick="return confirm('Are you sure to Delete Table?')"><i class="bi bi-trash text-danger"></i></a>|
                    <a href="#"><i class="bi bi-pencil text-secondary"></i></a>
                    </div></td>
                </tr>
                <?php
                }
                ?>             
            </table>
        </div>
    </div>
</div>
