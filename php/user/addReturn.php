<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/10/2018
 * Time: 6:54 PM
 */

require '../db.php';
session_start();
$userID = $_SESSION['user'];

$da = $_POST['d'];

$office = $_POST['office'];

$s = "SELECT officeID FROM offices WHERE officeName LIKE '%" . $office ."%'";
$o = $conn->query($s);
$ooz = $o->fetch_row();



$item = $_POST['des'];
$s = "SELECT items.itemID,inventory.currentQuantity FROM items JOIN inventory ON items.itemID = inventory.itemID WHERE items.description LIKE '%". $item ."%'";
$c = $conn->query($s);
$cc = $c->fetch_row();



$ress = $_POST['res'];
$quantity = $_POST['quantity'];
$status = $_POST['status'];



if ($c) {
    $sql = "INSERT INTO returns(itemID,officeID,itemQuantity,reason,status,accountID,returnDate)
        VALUES('$cc[0]','$ooz[0]','$quantity','$ress','$status','$userID','$da')";


    $conn->query($sql);


    if ($status === "usable") {
        $id = mysqli_insert_id($conn);
        $b = $quantity + $cc[1];

        $sql = "UPDATE inventory SET currentQuantity = '$b' WHERE itemID = '$cc[0]'";
        $conn->query($sql);

        $sql = "SELECT inventoryID FROM inventory WHERE itemID = '$cc[0]'";
        $oo = $conn->query($sql);
        $j = $oo->fetch_row();


        $sql = "INSERT into itemrecords(itemID,inventoryID,recordDate,startingQuantity,returnsQuantity,currentQuantity,status,officeID) 
                VALUES('$cc[0]','$j[0]','$da','$cc[1]','$quantity','$b','increased','$ooz[0]')";
        $conn->query($sql);


        $sql = "INSERT INTO history(accountID,returnID,activity,actDate,type,itemID)
              VALUES ('$userID','$id','accepted return','$da','returns','$cc[0]')";
        $conn->query($sql);


    }





    header('Location:../../user/returns.php');


} else {
    $m = "Error! Contact Administrator!";

    echo "<script type='text/javascript'>
        
            alert('$m');
            window.location.replace('../../user/returns.php');
        </script>";
}

