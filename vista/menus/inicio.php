<div id="page-inner" align="center">
  <div class="row">
    <div class="col-lg-12">
     <h2>BIENVENIDO!</h2>   
    </div>
  </div>              
  <!-- /. ROW  --> 
  <div class="row text-center pad-top">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="div-square">
        <a href="blank.html" >
          <i class="fa fa-users fa-5x"></i>
          <h4>Usuarios</h4>
        </a>
      </div>                 
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="div-square">
        <a href="blank.html" >
          <i class="fa fa-arrow-left fa-5x"></i>
          <h4>Compras</h4>
        </a>
      </div>
    </div>
  </div>
  <!-- /. ROW  --> 
  <div class="row text-center pad-top">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="div-square">
        <a href="blank.html" >
          <i class="fa fa-arrow-right fa-5x"></i>
          <h4>Ventas</h4>
        </a>
      </div>   
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="div-square">
        <a href="vista/menus/mantenciones.php" class="ir_a">
          <i class="fa fa-cogs fa-5x"></i>
          <h4>Mantenciones</h4>
        </a>
      </div>
    </div>
  </div>
  <!-- /. ROW  -->  
</div>
<!-- /. PAGE INNER  -->
<script>
  $(document).ready(function(){
    $(".ir_a").click(function(event){
      event.preventDefault();
      $("#page-wrapper").load($(this).attr('href'));
    });
  });
</script>
