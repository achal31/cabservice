<?php include('header.php');
if(isset($_POST['Save']))
{
    if($_POST['save']=='change Password')
    {
        
    }
    if($_POST['save']=='change Number')
    {
        
    }
    if($_POST['save']=='change Username')
    {
        
    }
}
?>
<div id="usersettings"> 
    <ul id="setting">
    <span>SELECT AN OPTION</span>
        <li class="changes"><button id="btnpass">Change Password</button></li>
        <li class="changes"><button id="btnnum">Mobile Number</button></li>
        <li class="changes"><button id="btnname">Name</button></li>
    </ul>

    <div id="changepassword">
        <form action="userSettings.php"> 
        <input placeholder="Enter Current Passsword" name="currentpass">
        <p></p>
        <input placeholder="Enter New Passsword" name="newpass">
        <p></p>
        <input placeholder="Please Confirm Passsword" name="confpass">
        <p></p>
        <input type="submit" value="change Password" name="Save">
        </form>
    </div>

    <div id="changenumber">
        <form action="userSettings.php">
        <input placeholder="Enter Current Number" name="currentnum">
        <p></p>
        <input placeholder="Enter New Number" name="newnum">
        <p></p>
        <input placeholder="Please Confirm Number" name="confnum">
        <p></p>
        <input type="submit" value="change Number" name="Save">
        </form>
    </div>

    <div id="changename">
    <form action="userSettings.php">
        <input placeholder="Enter Current username" name="currentname">
        <p></p>
        <input placeholder="Enter New username" name="newname">
        <p></p>
        <input placeholder="Please Confirm Name" name="confname">
        <p></p>
        <input type="submit" value="change Username" name="Save">
        </form>
    </div>
</div>