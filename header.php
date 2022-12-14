<?php

    $mainurl="http://localhost/task/";
    $baseurl="http://localhost/task/asset/";


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- all static stylesheet -->
    <link rel='stylesheet' type='text/css' media='screen' href="<?php echo $baseurl; ?>css/bootstrap.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href="<?php echo $baseurl; ?>css/bootstrap-grid.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href="<?php echo $baseurl; ?>css/style.css">
    <!-- <link rel='stylesheet' type='text/css' media='screen' href="<?php echo $baseurl; ?>css/gray.css"> -->
    <link rel='stylesheet' type='text/css' media='screen' href="<?php echo $baseurl; ?>css/bslikert.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- all static js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="<?php echo $baseurl;?>js/bootstrap.min.js"></script>
    <script src="<?php echo $baseurl;?>js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo $baseurl;?>js/jquery.min.js"></script>
    <script src="<?php echo $baseurl;?>js/jquery.bvalidator.min.js"></script>
    <script src="<?php echo $baseurl;?>js/default.min.js"></script>
    <!-- <script src="<?php echo $baseurl;?>js/gray.js"></script> -->
    <script src="<?php echo $baseurl;?>js/bslikert.js"></script>
     
    <script>

        $(document).ready(function(){
            $("#frm").bValidator();
        })

        function passwordFormat(password){
		    regex = new RegExp(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/); // number, a-z, A-Z, min 8 chars
		    if(regex.test(password))
			    return true;
		        return false;
        }

    </script>
    <!-- <style type="text/css">
        
        #frm
        {
            margin: 0 0.5rem;
            /* animation: pulse infinite;  */
            animation: pulse; 
            animation-duration:3s;
        }
    </style> -->

</head>
<body>
    <!-- header start here -->
    
    <div class="container-fluid bg-dark p-3 text-white">
        <div class="row">
            <div class="col-md-5">call us: (+91)9054284508</div>
            <div class="col-md-7">
                <h4 align="right">Like us On:
                <i class="bi bi-facebook"></i>
                <i class="bi bi-twitter"></i>
                <i class="bi bi-instagram"></i>
                <i class="bi bi-google"></i>
                <i class="bi bi-linkedin"></i>
                </h4>  
            </div>
        </div>
    </div>
    
</body>
</html>