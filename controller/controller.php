<?php
error_reporting(0);
require_once("model/model.php");
class controller extends model
{
    public function __construct()
    {
        parent::__construct();

        // register
        if(isset($_POST["reg"]))
        {
            $fname=$_POST["fname"];
            $lname=$_POST["lname"];
            $email=$_POST["email"];
            $pass=base64_encode($_POST["pass"]);
            $cpass=base64_encode($_POST["cpass"]);
            $phone=$_POST["phone"];
            $gen=$_POST["gender"];

            if($pass==$cpass)
            {

            $data=array("firstname"=>$fname,"lastname"=>$lname,"email"=>$email,"password"=>$pass,"mobile"=>$phone,"gender"=>$gen);

            $check=$this->insertdata('register',$data);
        
            if($check)
            {
                echo"<script>
                alert('Thanks for create your account with Us')
                window.location='./';
                </script>";
            }
            }
            else
            {
                echo"<script>
                alert('Your password does not matched try again')
                window.location='./';
                </script>";
            }
        }
        
       //fetch data
        $selectday=$this->selectalldata('bookday');

        // booktable
        if(isset($_POST["booktable"]))
        {
            $selectday=$_POST["day"];
            $date_time=$_POST["datetime"];
            $fname=$_POST["fname"];
            $lname=$_POST["lname"];
            $email=$_POST["email"];
            $phone=$_POST["phone"];
            
            $data=array("bookday"=>$selectday,"datetime"=>$date_time,"firstname"=>$fname,"lastname"=>$lname,"email"=>$email,"phone"=>$phone);
            $check=$this->insertdata('booktable',$data);
            if($check)
            {
                echo"<script>
                alert('your table is book')
                window.location='./';
                </script>";
            }
            else
            {
                echo"<script>
                alert('Your table is not book')
                window.location='./';
                </script>";
            }
        }
        // login
        if(isset($_POST["login"]))
        {
            $email=$_POST["email"];
            $pass=base64_encode($_POST["pass"]);

            $check=$this->loginuser('register',$email,$pass);
            if($check)
            {
                echo "<script>
                    alert('You are Logged in Successfully')
                    window.location='ManageProfile';
                    </script>";
            }
            else
            {
                echo "<script>
                alert('Your email and password are Incorrect try again')
                window.location='login';
                </script>";
            }

        }

        // manage profile
        if(isset($_SESSION["rid"]))
        {
            $rid=$_SESSION["rid"];
            $shwdata=$this->manageprofile('register','r_id',$rid);
        } 

        // managebooking
        
        $shwbooking=$this->managebooking('booktable');

        // update users
        if(isset($_POST["upd"]))
        {
            $id=$_SESSION["rid"];
            $fnm=$_POST["fname"];
            $lnm=$_POST["lname"];
            $email=$_POST["email"];
            $phone=$_POST["phone"];
            $gen=$_POST["gender"];
           
            $chk=$this->upddata('register',$fnm,$lnm,$email,$phone,$gen,'r_id',$id);
            if($chk)
            {
                echo "<script>
                alert('Thanks for  your account updated succefully with Us')
                window.location='ManageProfile';
                </script>";
            }

        }

        // count users
        $count =$this->count('booktable','id');

        // changepassword
        if(isset($_POST["change"]))
            {
                $id=$_SESSION["rid"];
                $opass=base64_encode($_POST["opass"]);
                $npass=base64_encode($_POST["npass"]);
                $cpass=base64_encode($_POST["cpass"]);

                $chk=$this->changepassword('register',$opass,$npass,$cpass,$id);
                if($chk)
                {
                    unset($_SESSION["rid"]);
                    unset($_SESSION["fname"]);
                    unset($_SESSION["email"]);

                    echo "<script>
                    alert('Your password successfully changed')
                    window.location='login';
                    </script>";
                }
                else
                {
                    echo "<script>
                    alert('old password,new password and confirm password does not matched try agian')
                    window.location='ChangePassword';
                    </script>";
                }
            }

        // forgetpassword
        if(isset($_POST["forget"]))
        {
            $email=$_POST["email"];
            $pass=$this->forgetpassword('register',$email,'password');
            if($pass)
            {
                echo "<script>
                    alert('Your Password is:'+'$pass')
                    window.location='login';
                    </script>";
            }
            else
            {
                echo "<script>
                    alert('Your email does not exist with us try another email')
                    window.location='login';
                    </script>";
            }
        }

        // delete data
        if(isset($_GET["delete-account"]))
        {
            $deleteid=base64_decode($_GET["delete-account"]);
            $id=array('r_id'=>$deleteid);
            $check=$this->deleteaccount('register',$id);

            if($check)
            {
                unset($_SESSION["rid"]);
                unset($_SESSION["fname"]);
                unset($_SESSION["email"]);

                echo "<script>
                alert('Your Profile Deleted Successfully')
                window.location='login';
                </script>";
                
            }
        }
        // delete order
        if(isset($_GET["delete-table"]))
            {
                $delete=$_GET["delete-table"];
                $id=array('id'=>$delete);
                $chk=$this->deleteaccount('booktable',$id);

                if($chk)
                {
                    echo"<script>
                    alert('Your Table Deleted Successfully')
                    window.location='ManageBooking';
                    </script>";
                }
            }

        // logout
        if(isset($_GET["logout-here"]))
        {
            $logout=$this->logout();
            if($logout)
            {
                echo "<script>
                alert('Your Are Logout successfully')
                window.location='login';
                </script>";
            }
        }


        // load your view here

        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("booktable.php");
                    require_once("register.php");
                    require_once("footer.php");
                    break;

                case '/login':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("login.php");
                    require_once("forgetpassword.php");
                    require_once("register.php");
                    require_once("footer.php");
                    break;

                case '/ManageProfile':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("manageprofile.php");
                    require_once("footer.php");
                    break;

                case '/BookTable':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("booktable.php");
                    require_once("footer.php");
                    break;

                case '/ChangePassword':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("changepassword.php");
                    require_once("footer.php");
                    break;
            
                case '/ManageBooking':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("managebooking.php");
                    require_once("footer.php");
                    break;
            
            }
        }
    }
}

$obj=new controller();

?>