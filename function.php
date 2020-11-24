<?php
session_start();

define('DB_SERVER', 'localhost'); // Your hostname
define('DB_USER', 'root'); // Databse username
define('DB_PASS', ''); // Database Password
define('DB_NAME', 'cabservice'); // Database name
class DB_con
{

    function __construct()
    {
        $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        $this->dbh = $conn;
        // Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }

    public function registration($name, $fullname, $date, $number, $password)
    {
        $checkusername = mysqli_query($this->dbh, "SELECT * FROM tbl_user WHERE `user_name`='$name'");
        $result=$checkusername->num_rows;
        if ($result==0)
        {
            $insertdetail=mysqli_query($this->dbh,"insert into tbl_user(`user_name`, `name`, `dateofsignup`, `mobile`, `isblock`, `password`, `is_admin`) values('$name','$fullname','$date','$number','0','$password','1')");
            if ($insertdetail)
            {
                echo "<script>alert('Registration successfull.');</script>";
                echo "<script>window.location.href='login.php'</script>";
            }
            else
            {
                echo "<script>alert('Error');</script>";
            }
        }
        else
        {
            echo "<script>alert('User name Already exist');</script>";
        }
    }

    public function signin($name, $pasword)
    {
        $signindetail = mysqli_query($this->dbh, "SELECT * FROM tbl_user where user_name='$name' and Password='$pasword'");
        if ($signindetail == true)
        {
            $userdata = mysqli_fetch_array($signindetail);
            {
                $username = $userdata['user_name'];
                $userstatus = $userdata['isblock'];
                $checkadmin = $userdata['is_admin'];
                if ($checkadmin == 0)
                {
                    echo "<script>window.location.href='adminpanel.html'</script>";
                }
                else
                {
                    if ($userstatus == 1)
                    {
                        $_SESSION['username'] = $username;
                        echo "<script>window.location.href='index.php'</script>";
                    }
                    else
                    {
                        echo "<script>alert('Please Wait For Admin To Provide Access');</script>";
                    }
                }
            }

        }
    }

}

?>