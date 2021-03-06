<div class="container-fluid">

    <!-- Exportable Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2 class="text-center">
                        SSMI
                    </h2>
                </div>
                <div class="row">
                        <div class="col-md-3">
                            <label>From</label>
                            <input required id="from" type="date" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label>To</label>
                            <input required id="to" type="date" class="form-control">
                        </div>

                        <div class="col-md-2">
                            <label></label>
                            <input id="filter" type="submit" class="btn btn-success btn-sm form-control" value="Search">
                            <?php
                            $a = $_GET['num'];
                            echo "<input id = 'id' type='hidden' value ='" .$a . "'>";
                            ?>
                        </div>

                </div>
                <hr>
                <div class="modal-header">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Office</label>
                            <?php
                            require '../../db.php';
                            $a = $_GET['num'];

                            $sql = "SELECT officeName FROM offices WHERE officeID = '$a'";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<input type='text' disabled='' value='$r[0]' class='form-control'>";
                            ?>
                        </div>
                        <div class="col-md-2 pull-right">
                            <label>Responsibility</label>
                            <?php
                            require '../../db.php';
                            $a = $_GET['num'];

                            $sql = "SELECT rcCode FROM offices WHERE officeID = '$a'";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<input type='text' disabled='' value='$r[0]' class='form-control'>";
                            ?>
                        </div>
                        <div class="col-md-2 pull-right">
                            <label>Reorder Point</label>
                            <?php
                            require '../../db.php';
                            $a = $_GET['num'];

                            $sql = "SELECT fppCode FROM offices WHERE officeID = '$a'";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<input type='text' disabled='' value='$r[0]' class='form-control'>";
                            ?>
                        </div>
                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table id="ehe" class="table table-bordered table-striped table-hover dataTable js-exportable">

                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>RIS</th>
                                <th>Category</th>
                                <th>Item</th>
                                <th>Quantity Issued</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            require '../../db.php';

                            $a = $_GET['num'];

                            $sql = "SELECT issuance.issuanceDate AS a,risNo,items.categoryNo AS b,items.description AS c,itemissuance.quantityIssued AS d FROM issuance
                                      JOIN itemissuance ON issuance.issuanceId = itemissuance.issuanceID JOIN items ON itemissuance.itemID = items.itemID WHERE issuance.officeID = '$a'";

                            $res = $conn->query($sql);
                            if ($res) {
                                while ($row = $res->fetch_assoc()) {
                                    echo "<tr>" .
                                        "<td>" . $row['a'] . "</td>" .
                                        "<td>" . $row['risNo'] . "</td>" .
                                        "<td>" . $row['b'] . "</td>" .
                                        "<td>" . $row['c'] . "</td>" .
                                        "<td>" . $row['d'] . "</td>" .

                                        "</tr>";
                                }
                            }

                            ?>
                            <tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Exportable Table -->
</div>
<div class="modal-footer text-center">
    <a href="../admin/ssmi.php" class="btn btn-danger pull-right">CLOSE</a>
</div>


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

<script>
    $(document).ready(function () {
        $('#filter').click(function () {
            $from = $('#from').val();
            $to = $('#to').val();
            $id = $('#id').val();
            $.ajax({
                url: 'filterSSMI.php',
                data: {from: $from,to: $to,id:$id },
                dataType: 'JSON',
                success: function () {
                    window.location.replace('ssmiFilter.php');

                }

            });


        });

    });


</script>