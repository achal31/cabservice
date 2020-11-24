<?php 
include_once('function.php');
$userdata=new DB_con();
if (isset($_POST['register'])) {
  $name=$_POST['user_name'];
  $fullname=$_POST['fullname'];
  $number=$_POST['number'];
  $password=$_POST['password'];
  $repassword=$_POST['repassword'];
  $date=date("Y/m/d");
  if ($password==$repassword) {
    $sql=$userdata->registration($name,$fullname,$date,$number,$password);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="style.css">
</head>
<body id="registerpage">
<div id="wrapper">
<img src="Screenshot.png" height="70">
    <h2 id="registerheading">New User</h2>
    <form id="register" method="post" action="register.php">
            <select class="detail" name="title" required >
            <option value="" disabled selected>Title</option>
            <option value="Mr">Mr</option>
            <option value="Mrs">Mrs</option>
            </select>
        
            <p></p>
            <input type="text" name="user_name" placeholder="Enter a username" class="detail"  required> 
        
            <p></p>
            <input type="text" name="fullname" placeholder="Enter your full name" class="detail" id="fullname" required>
        
            <p></p>
            <input type="text" name="number" placeholder="Enter 10 Digit Phone Number" class="detail" id="phone" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" pattern="[1-9]{1}[0-9]{9}" required >
            
            <p></p>
            <input type="password" name="password" placeholder="Password" class="detail" id="password" pattern=".{8,}" required>
            
            <p></p>
            <input type="password" name="repassword" placeholder="Confirm Password" class="detail" id="repassword" required>
            
            <p></p>
            <input type="checkbox" onclick="myFunction()">Show Password
            
            <p></p>
            <input type="submit" name="register" value="Register" id="detailbutton">   
            <a href="login.php" class="linkbutton">Already Have An Account</a> 
           
</form>
</div>
<script>
  function InvalidMsg(textbox) { 
    if(textbox.id=='phone')
  {
  if (textbox.value === '') { 
      textbox.setCustomValidity 
            ('Entering an Phone Number is necessary!'); 
  } else if (textbox.validity.patternMismatch) { 
      textbox.setCustomValidity 
            ('Please enter an Phone Number address which is valid!'); 
  } else { 
      textbox.setCustomValidity(''); 
  } 
}

} 
  
    function myFunction(id) {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }

var y = document.getElementById("repassword");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}

</script>
</body>
</html>