<?php include('header.php');
session_start();
?>

<div id="previousridewrapper">
<form action="previousRides.php" method="post">
        <input type="submit" value="MONTH" name="filter">
        <input type="submit" value="DATE" name="filter">
        <input type="submit" value="FARE" name="filter">
        <input type="submit" value="DISTANCE" name="filter">
</form>
</div>
<?php
include_once('user.php');
if(isset($_POST['filter']))
{
$previousrides=new user();
$sql=$previousrides->rideDetail($_SESSION['username'],$_POST['filter']);
}
else{
    $previousrides=new user();
$sql=$previousrides->rideDetail($_SESSION['username'],"");
}
?>