<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo $mainurl; ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ContactUs</a>
        </li>
        
        <?php
          if(!isset($_SESSION["rid"]))
          {
        ?>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Account
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo $mainurl;?>login">Login</a></li>

            <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#reg">Register</a></li>
          </ul>
        </li>
        <?php
          }
          else
          {
        ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome:<b class="text-success"><?php echo ucfirst($_SESSION["fname"]);?></b>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo $mainurl;?>ManageProfile">Manage Profile</a></li>
            <!-- <li><a class="dropdown-item" href="#">Manage All Users</a></li> -->
            <li><a class="dropdown-item" href="<?php echo $mainurl;?>BookTable">Booking Table</a></li>
            <li><a class="dropdown-item" href="<?php echo $mainurl;?>ManageBooking">Manage Booking<span class="badge badge-danger bg-danger"><?php echo $count[0]["total"];?></span></a></li>
            <!-- <li><a class="dropdown-item" href="#">Change Booking</a></li> -->
            <li><a class="dropdown-item" href="<?php echo $mainurl;?>ChangePassword">Change Paasword</a></li>
            <li><a class="dropdown-item" href="<?php echo $mainurl;?>?delete-account=<?php echo base64_encode($shwdata[0]["r_id"]);?>" onclick="return confirm('Are you sure to Delete Account?')"" onclick="return confirm('Are you sure to Delete Account?')">Delect Account</a></li>
            <li><a class="dropdown-item" href="<?php echo $mainurl;?>?logout-here" onclick="return confirm('Are you sure to logout as User?')">Logout!</a></li>
          </ul>
        </li>
        
        <?php
          }
        ?>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    