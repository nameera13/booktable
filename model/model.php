<?php

class model
{
    public $conn="";
    public function __construct()
    {
        session_start();
        try
        {
            $this->conn=mysqli_connect("localhost","root","","task");
        }
        catch(Exception $e)
        {
            die(mysqli_error($this->conn,$e));
        }
    }
    
    // create a member function for insert data(register)

    public function insertdata($table,$data)
    {
        $k=array_keys($data);
        $kk=implode(",",$k);
        $v=array_values($data);
        $vv=implode("','",$v);

        $insert="insert into $table($kk) values('$vv')";
        $exe=mysqli_query($this->conn,$insert);
        return $exe;
    }

    // create a member function for login user
    public function loginuser($table,$email,$pass)
    {
        $select="select * from $table where email='$email' and password='$pass'";
        $exe=mysqli_query($this->conn,$select);
        $fetch=mysqli_fetch_array($exe);
        $no_rows=mysqli_num_rows($exe);

        if($no_rows==1)
        {
            $_SESSION["rid"]=$fetch["r_id"];
            $_SESSION["fname"]=$fetch["firstname"];
            $_SESSION["email"]=$fetch["email"];
            return true;
        }   
        else
        {
            return false;
        }
    }

    public function selectalldata($table)
    {
        $select="select * from $table";
        $exe=mysqli_query($this->conn,$select);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }

    //create member function for booktable

    public function booktable($table,$data)
    {
        $k=array_keys($data);
        $kk=implode(",",$k);
        $v=array_values($data);
        $vv=implode("','",$v);  

        $insert="insert into $table($kk) values('$vv')";
        $exe=mysqli_query($this->conn,$insert);
        return $exe;
    }

    

    //create a member function for manageprofile
    public function manageprofile($table,$column,$rid)
    {
        $select="select * from $table where $column='$rid'";
        $exe=mysqli_query($this->conn,$select);
        $fetch=mysqli_fetch_array($exe);
        $arr[]=$fetch;
        return $arr;        
    }

    // create a member function for managebooking
    public function managebooking($table)
    {
        $select="select * from $table";
        $exe=mysqli_query($this->conn,$select);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
            return $arr;
    }
    //create a member function for update users
    public function upddata($table,$fnm,$lnm,$email,$phone,$gen,$column,$id)
    {
       
        $upd="update $table set firstname='$fnm',lastname='$lnm',email='$email',mobile='$phone',gender='$gen' where $column='$id'";
        $exe=mysqli_query($this->conn,$upd);
        return $exe;
    }

    // create a member function for count all Table
    public function count($table,$column)
    {
        $sel="select count($column) as total from $table";
        $exe=mysqli_query($this->conn,$sel);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }

    // create a member function for ForgetPassword
    public function forgetpassword($table,$email,$column)
    {
        $select="select $column from $table where email='$email' ";
        $exe=mysqli_query($this->conn,$select);
        $fetch=mysqli_fetch_array($exe);
        $num_rows=mysqli_num_rows($exe);

        if($num_rows==1)
        {
            $pass=base64_decode($fetch["password"]);
            return $pass;
        }
        else
        {
            return false;
        }
    }

    // create a member function for changepassword

    public function changepassword($table,$opass,$npass,$cpass,$id)
    {
        $select="select * from $table where r_id='$id'";
        $exe=mysqli_query($this->conn,$select);
        $fetch=mysqli_fetch_array($exe);
        $pass=$fetch["password"];

        if($opass==$pass&&$npass==$cpass)
        {
            $upd="Update $table set password='$npass' where r_id='$id'";
            $exe=mysqli_query($this->conn,$upd);
            return $exe;
        }
        else 
        {
            return false;
         }
    }
    //create a member function for delete all data
    public function deleteaccount($table,$id)
    {
        $col=array_keys($id);
        $col1=implode(",",$col);
        $val=array_values($id);
        $val1=implode("','",$val);
        $delete="delete from $table where $col1='$val1'";
        $exe=mysqli_query($this->conn,$delete);
        return $exe;
    }
    
    // create a member function for logout
    public function logout()
    {
        unset($_SESSION["rid"]);
        unset($_SESSION["fname"]);
        unset($_SESSION["email"]);
        session_destroy();
        return true;
    }
}

?>