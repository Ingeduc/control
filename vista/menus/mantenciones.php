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
          <i class="fa fa-calendar fa-5x"></i>
          <h4>Mantenciones Preventivas</h4>
        </a>
      </div>                 
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="div-square">
        <a href="blank.html" >
          <i class="fa fa-check-square fa-5x"></i>
          <h4>Mantenciones Correctivas</h4>
        </a>
      </div>
    </div>
  </div>
  <!-- /. ROW  --> 
  <div class="row text-center pad-top">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <button class="btn btn-default btn-lg ir_a" href='vista/menus/inicio.php'>Volver</button>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
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