
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
});
</script>

    </body> 
</html>