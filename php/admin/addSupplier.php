<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/13/2018
 * Time: 5:17 PM
 */
require '../db.php';

$n = $_POST['name'];
$tin = $_POST['tinNumber'];
$cN = $_POST['contactNumber'];



$sql = "INSERT INTO suppliers(supplierName,tinNumber,number) 
VALUES('$n','$tin','$cN')";

if($conn->query($sql)){
    header("Location:../../admin/supplier.php");
}else{
    $m = "Error Adding Supplier! Please contact administrator!" ;

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../../admin/supplier.php');
            </script>
            ";
}
