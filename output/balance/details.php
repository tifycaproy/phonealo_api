<?php include('theme/front/templates/default_header.php');?>

<div class="prices-block content content-center" id="prices">
    <form id="form_recarga" method="post">
        <div class="container">
            <br><br>
            <div class="row">
                <?php echo print_messages() ?>
            </div>
            <h2 class="margin-bottom-30">Bienvenido<span style="color: #D90A2C"> <?=utf8_encode($usu->data['usu_name']) ?></span> </h2>

            <div class="row" style="text-align: center !important;margin-top: 10px;">
              <div class="col-md-12 col-sm-3 col-xs-12 content-center" style="width: 100%">
                <div class="porlet-body">
                    <h4><b>Registro de llamadas</b></h4>
         <!------Inicio de Código para filtro de datos------->   
                    <div class="row">
                        <form name="filtro" action="" method="GET">
                          <div class="col-lg-4">
                            <div class="input-group">
                               <input type="date" class="form-control" placeholder="Desde">
                               <span class="input-group-btn">
                                <input type="date" class="form-control" placeholder="Hasta">
                              </span>   
                               <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Filtrar</button>
                              </span>                       
                            </div>
                          </div>
                     </form>
                    </div>

        <!-------------->
                <div id="callhistory" style="text-align: left !important;">
                    <div id="payhistory"  style="text-align: left !important;height:105px; overflow-y: scroll;">
                        <?=$usu->tableCalls(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <br>
    <div class=" row"style="text-align: center !important;margin-top: 10px;"> 
     <div class="col-md-12 col-sm-3 col-xs-12 content-center" style="width: 100%">
        <div class="porlet-body">
            <h4><b>Registro de pagos - Saldo actual: <?=$balance['credit'].' '.$balance['currency'] ?></b></h4>

            <div id="payhistory"  style="text-align: left !important;height:95px; overflow-y: scroll;">

                <?=$usu->tablePayments(); ?>
            </div>
        </div>
    </div>
</div>

<!-- Pricing item END -->
<!-- Pricing item BEGIN -->
<!-- Pricing item END -->
</div>
</form>
</div>

<?php include('theme/front/templates/default_footer.php'); ?>

