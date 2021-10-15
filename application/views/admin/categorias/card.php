<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!--Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div class="content-wrapper">
    <section class="content-header">
        Categotias
        <small>Edit</small>
        </h1>
    </section>
    <section class="content">
        <div class="box box-solid">
            <div class="box-body">

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Launch demo modal
                </button>

                <div class="row">
                    <?php if (!empty($products)) : ?>
                        <?php foreach ($products as $key => $pro) :  ?>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="<?php echo base_url(); ?>assets/img/1.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $pro->name; ?></h5>
                                        <p class="card-text"><?php echo $pro->description; ?></p>
                                    </div>
                                    <div class="card-footer ">
                                        <p class="card-text">Cantidad :<?php echo $pro->amount; ?></p>
                                        <p class="card-text">Precio :<?php echo $pro->price; ?></p>
                                    </div>

                                    <div class="card-footer">

                                        <a href="#" class="btn btn-dark btn-sm">Edit</a>
                                        <a href="#" class="btn btn-dark btn-sm">Add</a>
                                        <a href="#" class="btn btn-danger btn-sm " style="float: right;">Delet</a>


                                    </div>

                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</div>