<?php
session_start();
if(!isset($_SESSION['username'])){
    $m="Please Login First";

    echo "<script type='text/javascript'>
    alert('$m');
    window.location.replace(indeindex.php  </script>";
}
if($_SESSION['type'] == "user"){
    session_destroy();
    $m="Unauthorized Access";
    echo "<script type='text/javascript'>
    alert('$m');
    window.location.replace('../index.index.php  </script>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>PPMP</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

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
                        <li class="active">
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
                        <a href="iar.php">
                            <i class="material-icons">event_note</i>
                            <span>Delivered Items</span>
                        </a>
                    </li>
                    <li>
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
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Items</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="items.php"><strong>Category 1</strong></a>
                            </li>
                            <li>
                                <a href="two.php"><strong>Category 2</strong></a>
                            </li>
                            <li>
                                <a href="three.php"><strong>Category 3</strong></a>
                            </li>
                            <li>
                                <a href="four.php"><strong>Category 4</strong></a>
                            </li>
                            <li>
                                <a href="five.php"><strong>Category 5</strong></a>
                            </li>

                        </ul>
                        </li>
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
                </li>f
                    
                </ul>
            </div>
            <!-- #Menu -->
            
        </aside>
        <!-- #END# Left Sidebar -->
    </section>
   <div class="modal col-lg-12" id="add_ppmp" data-backdrop="static">
            <div class="modal-dialog" style="width:90%;">
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
                            <h2 class="text-center">PPMP</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
				
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                            <th>Categogy</th>
                            <th>Items</th>
                            <th>Unit</th>
                            <th>Total quantity</th>
                            
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                        $conn = new mysqli("localhost","root","","inventory");
                                        if(!$conn){
                                            echo "Error Connecting to database !" . $conn->error;
                                        }

                                        $sql = "SELECT * FROM issuance";
                                        $res = $conn->query($sql);

                                        if($res){
                                            while($row = $res->fetch_assoc()){
                                                echo "<tr>"
                                                    . "<td>" . $row['division'] ."</td>"
                                                    . "<td>" . $row['office'] ."</td>"
                                                    . "<td>" . $row['responsibility'] ."</td>"
                                                    . "<td>" . $row['dateT'] ."</td>"
                                                    . "<td>" . $row['typeT'] ."</td>"
                                                    . "<td>" . $row['status'] ."</td>"
                                                    . "<td>" . $row['status'] ."</td>"
                                                    . "<td>" . $row['status'] ."</td>"
                                                    . "<td>" . "<a href=" .'../php/admin/editPpmp.php?num=' .$row['id'] . "  " . " class='material-icons' data-toggle='modal' data-target='#edit_account'>mode_edit</a>" . "  ||  " . "<a href=" .'../php/admin/deletePpmp.php?num=' .$row['id'] . " " . " class='material-icons' data-toggle='modal' data-target='#del_account'>delete</a>" . "</td>";
                                                echo "</tr>";
                                            }

                                        }

                                    ?>
                                    </tbody>
                                </table>

                                <a href="../php/admin/addPPMP.php" class="btn btn-primary pull-right" data-toggle="modal" data-target="#add_ppmp">Add PPMP</a>
                </div>
            </div>
        </div>
                            </div>
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

    <!-- Slimscroll Plugin Js -->
    <script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>
</body>

</html>