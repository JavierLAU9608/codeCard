<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
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
                          <?php if($this->session->flashdata("error")):?>
                          <div class="alert alert-danger alert-dismissible" > 
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                              &times;</button>
                              <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error");?></p>
                          </div>
                        <?php endif;?>
                            <form action="<?php echo base_url();?>welcome/store" method="post">
                            <div class="form-goup">
                              <label for="nombre">Name:</label>
                              <input type="text" name="name" class="form-control" id="name" >
                              </div>   
                              <div class="form-goup">
                              <label for="description">Description:</label>
                              <textarea name="description" id="description" cols="10" rows="5" class="form-control"></textarea>
                              </div>  
                              <div class="form-goup">
                              <label for="price">Price:</label>
                              <input type="text" name="price" class="form-control" id="price">
                              </div>  
                              <div class="form-goup">
                              <label for="amount">Amount:</label>
                              <input type="text" name="amount" class="form-control" id="amount" >
                              </div>  
                             
                              <div class="modal-footer">
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

<div class="content-wrapper">
    <section class="content-header">
        <h1>
        Products
        </h1>
    </section>
    <section class="content">
        <div class="box box-solid">
            <div class="box-body">

                <button type="button" 
                        class="btn btn-primary" 
                        data-toggle="modal" 
                        data-target="#exampleModal"
                        style="float: right">
                 Add Products
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
                                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal2" style="float: right;"
                                        <?php $pro->id;?>>
                                        Delet
                                        </button>
                                        <!-- Modal de confirmacion de eliminacion -->
                                        <!-- Modal -->
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
                                                    Sr you really delete this products 
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                    <a type="button" class="btn btn-danger" href="<?php echo base_url(); ?>welcome/delete<?php
                                                                                                        echo $pro->id;?>">Yes</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal -->
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