<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/11/2018
 * Time: 6:56 PM
 */
require '../db.php';
$id = $_GET['ii'];

$sql = "SELECT firstName,lastName,userName,password,userType FROM accounts WHERE accountID = '$id'";
$res = $conn->query($sql);
$r = $res->fetch_row();

//Original User Info
$Ofirst = $r[0];
$Olast = $r[1];
$Ouser = $r[2];
$Opass = $r[3];
$Otype = $r[4];


//Data From Edit Profile
$type = $_POST['type'];
if(empty($userType)){
    $type = $Otype;
}
$pass = $_POST['pass'];
if(empty($pass)){
    $pass = $Opass;
}
$user = $_POST['username'];
if(empty($user)){
    $user = $Ouser;
}
$first = $_POST['firstName'];
if(empty($first)){
    $first = $Ofirst;
}
$last = $_POST['lastName'];
if(empty($last)){
    $last = $Olast;
}
$d = date('Y:n:j');

$sql = "UPDATE accounts SET firstName = '$first',lastName = '$last',userName = '$user',userType = '$type',password = '$pass' 
      WHERE accountID = '$id'";

if($conn->query($sql)){

        $sql = "INSERT INTO accountslogs(logs,dateT) VALUES('Admin has Updateddd account of $user','$d')";
        $conn->query($sql);

            header('Location:../../admin/accounts.php');

}else{
    $m = "Error! Contact Administrator!";

    echo "<script type='text/javascript'>
            alert('$m');
            window.location.replace('../../admin/accounts.php');
        </script>";
}