<?php
session_start();
if(!isset($_SESSION['username'])){
    $m="Please Login First";

    echo "<script type='text/javascript'>
    alert('$m');
    window.location.replace(index.php);
    </script>";
}
if($_SESSION['type'] == "user"){
    session_destroy();
    $m="Unauthorized Access";
    echo "<script type='text/javascript'>
    alert('$m');
    window.location.replace('../index.html');
    </script>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Returns</title>

    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="../css/icons2.css" rel="stylesheet" type="text/css">
    <link href="../css/icons.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">



    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-blue">
<!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="dashboard.php"><h4>General Services Office</h4></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                </li>
                    <li>
                        <a class="navbar-brand" href="dashboard.php">
                            <h4>
                                <?php
                                    echo strtoupper($_SESSION['username']);
                                ?>
                            </h4>
                        </a>
                        <!-- Example single danger button -->
                        <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="material-icons">format_align_justify</i>
                    </a>
                    <ul class="dropdown-menu">

                        <li>
                            <a href="../php/logout.php">
                                <h4>Logout</h4>
                            </a>
                        </li>


                    </ul>
                        

                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    
                    <li>
                        <a href="dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="ppmp.php">
                            <i class="material-icons">event_note</i>
                            <span>PPMP</span>
                        </a>
                    </li>
                    <li>
                        <a href="issuance.php">
                            <i class="material-icons">store_mall_directory</i>
                            <span>Issuance</span>
                        </a>
                    </li>
                    <li>
                        <a href="delivery.php">
                            <i class="material-icons">event_note</i>
                            <span>Delivered Items</span>
                        </a>
                    </li>
                    <li>
                        <li class="active">
                        <a href="returns.php">
                            <i class="material-icons">event_note</i>
                            <span>Returns</span>
                        </a>
                    </li>
                    <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">assignment</i>
                        <span>Inventory</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="items2.php"><strong>Category 1</strong></a>
                        </li>
                        <li>
                            <a href="two2.php"><strong>Category 2</strong></a>
                        </li>
                        <li>
                            <a href="three2.php"><strong>Category 3</strong></a>
                        </li>
                        <li>
                            <a href="four2.php"><strong>Category 4</strong></a>
                        </li>
                        <li>
                            <a href="five2.php"><strong>Category 5</strong></a>
                        </li>
                    </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Reports</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="raos.php"><strong>RAOS</strong></a>
                            </li>
                            <li>
                                <a href="rosi.php"><strong>ROSI</strong></a>
                            </li>
                            <li>
                                <a href="ssmi.php"><strong>SSMI</strong></a>
                            </li>
                            <li>
                                <a href="stockcard.php"><strong>STOCK CARD</strong></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">settings</i>
                            <span>Manage</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="accounts.php">
                                    <i class="material-icons">people</i>
                                    <span>Accounts</span>
                                </a>
                            </li>
                            <li>
                                <a href="supplier.php">
                                    <i class="material-icons">local_shipping</i>
                                    <span>Suppliers</span>
                                </a>
                            </li>
                            <li>
                                <a href="offices.php">
                                    <i class="material-icons">location_city</i>
                                    <span>Offices</span>
                                </a>
                            </li>
                        </ul>
                        </li>
                        <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">settings</i>
                            <span>Other Transaction</span>
                        </a>
                        <ul class="ml-menu">
                        <li>
                        <a href="reorder.php">
                            <i class="material-icons">error</i>
                            <span>Re-order</span>
                        </a>
                    </li>
                    <li>
                        <a href="toexpire.php">
                            <i class="material-icons">assignment</i>
                            <span>To-Expire</span>
                        </a>
                    </li>
                    <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">view_list</i>
                        <span>Logs</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="logsIssuance.php"><strong>Issuances</strong></a>
                        </li>
                        <li>
                            <a href="accountsLogs.php"><strong>Accounts</strong></a>
                        </li>
                        <li>
                            <a href="itemsLogs.php"><strong>Items</strong></a>
                        </li>
                        <li>
                            <a href="supplierLogs.php"><strong>Suppliers</strong></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>


            </div>
            <!-- #Menu -->

        </aside>
        <!-- #END# Left Sidebar -->

    </section>

<!-- Modal for Add Returns -->
<div class="modal col-lg-12" id="add_return" data-backdrop="static">
    <div class="modal-dialog" style="width:99%;">
        <div class="modal-content">
        </div>
    </div>
</div>

<!-- Modal for Edit Account -->
<div class="modal col-lg-12" id="edit_account" data-backdrop="static">
    <div class="modal-dialog" style="width:80%;">
        <div class="modal-content">
        </div>
    </div>
</div>

<!-- Modal for Delete Account -->
<div class="modal col-lg-12" id="del_account" data-backdrop="static">
    <div class="modal-dialog" style="width:20%;">
        <div class="modal-content">
        </div>
    </div>
</div>


<section class="content">
    <div class="container-fluid">
        <div class="block-header">
        </div>
        <!-- Basic Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2 class="text-center">Returns</h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th style="width: 30%">Office</th>
                                <th>Item</th>
                                <th>Quantity</th>
                                <th>Reason</th>
                                <th>Status</th>
                                <th>Settings</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            require '../php/db.php';
                            $sql = "SELECT offices.officeName AS a,items.description AS b,returns.itemQuantity AS c,
                                    returns.reason AS d,returns.status AS e,returns.returnID AS idd
                                    FROM returns JOIN items ON returns.itemID = items.id JOIN offices ON returns.officeID = offices.officeID";
                            $res = $conn->query($sql);

                            if($res){
                                while ($row = $res->fetch_assoc()){
                                    echo  "<tr>";
                                    echo "<td>" . $row['a'] . "</td>";
                                    echo "<td>" . $row['b'] . "</td>";
                                    echo "<td>" . $row['c'] . "</td>";
                                    echo "<td>" . $row['d'] . "</td>";
                                    echo "<td>" . $row['e'] . "</td>";
                                    echo "<td>" . "<a href=" .'../php/admin/modal/editReturns.php?num=' .$row['idd'] . "  " . " class='material-icons' data-toggle='modal' data-target='#edit_account'>mode_edit</a>" . "  ||  " . "<a href=" .'../php/admin/modal/deleteReturns.php?num=' .$row['idd'] . " " . " class='material-icons' data-toggle='modal' data-target='#del_account'>delete</a>" . "</td>";
                                    echo "</tr>";
                                }
                            }

                            ?>
                            </tbody>
                        </table>
                        <a href="../php/admin/modal/addReturn.php" class="btn btn-primary pull-right" data-toggle="modal" data-target="#add_return">Add Return</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Table -->
</section>

<!-- Jquery Core Js -->
<script src="../plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="../plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>


<!-- Waves Effect Plugin Js -->
<script src="../plugins/node-waves/waves.js"></script>

<!-- Custom Js -->
<script src="../js/admin.js"></script>


<script src="../js/custom.js"></script>
</body>

</html>
