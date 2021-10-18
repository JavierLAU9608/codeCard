
        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
    var base_url = "<?php echo base_url();?>";

    $(".btn-view-product").on("click", function(){
        var product = $(this).val();
        //alert(product)
        var infoProduct = product.split("*");
        html="<p><strong>Usted quiere eliminar el producto:</strong>"+" "+infoProduct[1]+"</p>"    
        var id = infoProduct[0];   
        botton = `<button type="button" class="btn btn-secondary btn-send" data-dismiss="modal">No</button>
        <a type="button" class="btn btn-danger" href="`+base_url+`/welcome/delete/`+id+`">Yes</a>`    
        //   
         $("#exampleModal2 .modal-body").html(html);
         $("#exampleModal2 .modal-footer").html(botton);
         
         
    });
    $(".btn-edit-product").on("click",function(){
        var editPro = $(this).val();
        var viewPro = editPro.split("*");
        html=`<div class="row">
                    <div class="col-md-12">
                        <form action="`+base_url+`welcome/edit" method="post">

                        <input  type="text"  class="invisible" name="id" value="`+viewPro[0]+`" class="form-control">
                            <div class="form-group">
                                <label for="nombre">Name:</label>
                                <input type="text" value="`+viewPro[1]`" name="name" class="form-control" id="name" placeholder="`+viewPro[1]+`">
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea name="description" value="`+viewPro[2]+`"  placeholder="`+viewPro[2]+`" id="description" cols="10" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="price">Price:</label>
                                <input type="text" value="`+viewPro[4]+`"  placeholder="`+viewPro[4]+`" name="price" class="form-control" id="price">
                            </div>
                            <div class="form-group">
                                <label for="amount">Amount:</label>
                                <input type="text" value="`+viewPro[3]+`" name="amount" placeholder="`+viewPro[3]+`" class="form-control" id="amount">
                            </div>
                          
                        <div class="modal-footer" style="background-color: darkgrey;">
                            <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                        </form>

                    </div>
                </div>`
                $("#exampleModal-edit .modal-body").html(html);
    });
});
</script>

    </body> 
</html>