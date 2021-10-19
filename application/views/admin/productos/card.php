<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Modal de confirmacion de eliminacion -->

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Notificacion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">


            </div>
        </div>
    </div>
</div>


<!--Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Products</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php if ($this->session->flashdata("error")) : ?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                    &times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                            </div>
                        <?php endif; ?>
                        <form action="<?php echo base_url(); ?>admin/productos_c/store" method="post">
                            <div class="form-group">
                                <label for="nombre">Name:</label>
                                <input type="text" name="name" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea name="description" id="description" cols="10" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="price">Price:</label>
                                <input type="text" name="price" class="form-control" id="price">
                            </div>
                            <div class="form-group">
                                <label for="amount">Amount:</label>
                                <input type="text" name="amount" class="form-control" id="amount">
                            </div>
                            <!--Upload 
                            <div class="form-group">
                                <input type="file" name="upload">
                            </div>
                        </form>
                         -->
                        <div class="modal-footer" style="background-color: darkgrey;">
                            <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                        </form>

                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>

    </div>
</div>
</div>

<div class="content-wrapper" style="margin-left: 10px; margin-right: -15px;">
    <section class="content-header">
        <br>
    </section>
    <section class="content">
        <div class="box box-solid">
            <div class="box-body">


                <div class="row">
                    <?php if (!empty($products)) : ?>
                        <?php foreach ($products as $key => $pro) :  ?>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="card" style="width: 17rem;">
                                    <img class="card-img-top" src="<?php echo base_url(); ?>assets/img/5.jpg" alt="Card image cap" style="height: 18rem;">
                                    <div class="card-body" style="height: 7rem;">
                                        <h5 class="card-title"><?php echo $pro->name; ?></h5>
                                        <p class="card-text"><?php echo $pro->description; ?></p>
                                    </div>
                                    <div class="card-footer" style="height: 3rem; ;">
                                        <p class="card-text" style="float: left;">Cantidad: <?php echo $pro->amount; ?></p>
                                        <p class="card-text" style="float: right;">Precio: <?php echo $pro->price; ?> $</p>

                                        <?php $dataPro = $pro->id . "*" . $pro->name . "*" . $pro->description . "*" .
                                            $pro->amount . "*" . $pro->price; ?>
                                    </div>

                                    <div class="card-footer" style="background-color:darkgray">

                                        <button type="button" value="<?php echo $dataPro ?>" class="btn btn-dark btn-sm btn-edit-product" data-toggle="modal" data-target="#exampleModal-edit">
                                            Edit
                                        </button>
                                        <a href="#" class="btn btn-dark btn-sm ">Add</a>
                                        <button type="button" value="<?php echo $dataPro ?>" class="btn btn-primary btn-danger btn-sm btn-view-product" data-toggle="modal" data-target="#exampleModal2" style="float: right; color: white;">
                                            Delete
                                        </button>


                                    </div>
                                </div>
                                </br>
                            </div>
                            
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                       
            </div>
        </div>
    </section>
</div>
<!--Modal de botton view-->
<div class="modal fade" id="exampleModal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Edit Products</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
            </div>
        </div>

    </div>
</div>