<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Modal de confirmacion de eliminacion -->

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Notificacion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Sr you really delete this products <?php echo $secc->name?>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <a type="button" class="btn btn-danger" href="">Yes</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->