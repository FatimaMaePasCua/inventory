<!-- Modal content-->
<div class="modal-content">
    <div class="modal-header">
        <h3 class="modal-title text-center">APPROVE ISSUANCE?</h3>
    </div>
    <div class="modal-body">
        <?php
        $a = $_GET['num'];

        echo "<a href=" . '../php/admin/appPIssuance.php?n=' . $a . " " ." class='btn btn-primary pull-left'>Approve</a>";
        ?>

        <a href="../admin/pendingIssuance.php" class='btn btn-primary pull-right'>Cancel</a>
    </div>
    <div class="modal-footer">

    </div>

</div>