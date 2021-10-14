<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="content-wrapper">
    <section class="content-header">
        Categotias
        <small>Edit</small>
        </h1>
    </section>
    <section class="content">
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="#" class="btn btn-primary btn-flat">
                            <span class="fa fa-plus">Add products</span></a>
                    </div>
                </div>
                <div class="row">
                    <?php if (!empty($products)) : ?>
                        <?php foreach ($products as $key => $pro) :  ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="<?php echo base_url(); ?>assets/img/1.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $pro->name; ?></h5>
                                        <p class="card-text"><?php echo $pro->description; ?></p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
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