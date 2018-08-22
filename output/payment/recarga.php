<?php include('theme/front/templates/default_header.php');?>

<div class="prices-block content " id="prices" style="background-image: url('<?=base_path;?>images/img.png'); background-size: cover; background-repeat: no-repeat;">
    
    <div class="container">
        <div class="row" style="margin: 0px !important">
            <div class="col-xs-12 col-sm-6"></div>
            <div class="col-xs-12 col-sm-6" style="margin-top: 10%; background: rgba(255,255,255,.9); padding: 20px">
                <form id="form_recarga" method="post">
                 
                        <div class="row">
                            <?php echo print_messages() ?>
                        </div>
                        <!-- <img width="20%" class="margin-bottom-50" src="<?=base_path;?>images/logo.png" alt="Phonealo LLamadas baratas y de calidad"> -->
                    
                         <span class="col-sm-offset-2 col-sm-8 col-xs-12" style="margin-top: 30px">
                            Selecciona el país desde donde te has registrado y el número de móvil donde tienes instalada la aplicación que quieres recargar <br><br>
                        </span>
                       
                        <div class="row">
                            <div class="py-xs-3">
                            <div class="col-sm-offset-2 col-sm-8 col-xs-12">
                                <div class="porlet-body">
                                    <h4>País</h4>
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail22">Email address</label>
                                        <div class="input-icon">
                                            <i class="fa fa-mobile-phone"></i>
                                            <select class="form-control input-an" name="country">
                                                <?=dropDownPaisCliente($country); ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-offset-2 col-sm-8 col-xs-12">
                                <div class="porlet-body">
                                    <h4>Teléfono</h4>
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail22">Email address</label>
                                        <div class="input-icon">
                                            <i class="fa fa-mobile-phone"></i>
                                            <input class="form-control input-an" id="mobile" name="mobile" placeholder="Móvil" type="tel" value="<?=$mobile ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-offset-2 col-sm-8 col-xs-12">
                                <div class="porlet-body">
                                    <h4>Importe</h4>
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail22">Importe</label>
                                        <div class="input-icon">
                                            <i class="fa fa-money"></i>
                                            <select class="form-control input-an" name="amount">
                                                <?=dropDownImportesRecarga($amount) ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-offset-2 col-sm-8 col-xs-12">

                                <div class="porlet-body">
                                    <h4>&nbsp;</h4>
                                    <div class="form-group">
                                        <div class="col-md-12" style="text-align: center;">
                                            <button type="submit" class="btn blue input-an">Recarga y Phonealo</button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        </div>
                       
                       
                        <!-- <div class="row">
                            <br><br>
                            <h2 class="margin-bottom-50"><strong>¿ Aún no tienes nuestra APP ?</h2>
                                <!-- Pricing item BEGIN -->
                           <!--  <a href="<?=base_path;?>getNow" target="_blank">
                                <img src="<?=base_path;?>images/ic_launcher.png" width="135px" alt="Call53 LLamadas baratas y de calidad">
                            </a>
                            <a class="btn btn-default" href="<?=base_path?>getNow" target="_blank">Descárgala aquí</a>
                        </div> -->
                            <!-- Pricing item END -->
                            <!-- Pricing item BEGIN -->
                            <!-- Pricing item END -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    

     
</div>

<?php include('theme/front/templates/default_footer.php'); ?>

