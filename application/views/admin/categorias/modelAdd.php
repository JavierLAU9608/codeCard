<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="container">
    <button class="btn btn-success" data-toggle="modal" data-target="#ventanaModal">
        Ventana Modal
    </button>
    <div class="modal" id="ventanaModal" tabindex="-1" role="dialog" aria-labelledby="tituloVentana" aria-hidden="true ">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="tituloVentana">Titulo de la ventana modal</h5>
                    <button class="close" data-dismiss="modal" aria-label="cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-success">
                        <h6><strong>Tus datos se han guardado con exito</strong></h6>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-waring" type="button" data-dismiss="modal">
                        Cerrar
                    </button>
                    <button class="btn btn-success" type="button">
                        Aceptar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>