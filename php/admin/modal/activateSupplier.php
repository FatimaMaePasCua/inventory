<!-- Modal content-->
<div class="modal-content">
    <div class="modal-header">
        <h3 class="modal-title text-center">ACTIVATE SUPPLIER?</h3>
    </div>
    <div class="modal-body">
        <?php
        $a = $_GET['num'];

        echo "<a href=" . '../php/admin/activateSupplier.php?n=' . $a . " " ." class='btn btn-primary pull-left'>Activate</a>";
        ?>

        <a href="../admin/supplier.php" class='btn btn-primary pull-right'>Cancel</a>
    </div>
    <div class="modal-footer">

    </div>

</div>