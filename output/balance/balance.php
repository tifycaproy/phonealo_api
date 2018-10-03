<?php include('theme/front/templates/default_header.php');?>

<div class="prices-block content " id="prices" style="background-image: url('<?=base_path;?>images/img.png'); background-size: cover; background-repeat: no-repeat;">
    
    <div class="container">
        <div class="row" style="margin: 0px !important">
            <div class="col-xs-12 col-sm-6"></div>
            <div class="col-xs-12 col-sm-6 " style="margin-top: 10%; background: rgba(255,255,255,.9); padding: 20px">
                <form id="form_recarga" method="post">
                    <div class="row">
                        <?php echo print_messages() ?>
                    </div>   
                    <div class="row">
                        <div class="py-xs-3">
                            <div class=" col-sm-offset-2 col-sm-8 col-xs-12" style="margin-top: 30px">
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
                                        <label class="sr-only" for="mobile">Teléfono</label>
                                        <div class="input-icon">
                                            <i class="fa fa-mobile-phone"></i>
                                            <input class="form-control input-an" id="mobile" name="mobile" placeholder="Móvil" type="tel" value="<?=$mobile ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-offset-2 col-sm-8 col-xs-12">
                                <div class="porlet-body">
                                    <h4>PIN</h4>
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail22">PIN</label>
                                        <div class="input-icon">
                                            <i class="fa fa-key"></i>
                                            <input class="form-control input-an" id="pin" name="pin" placeholder="PIN ####" type="password" >
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-offset-2 col-sm-8 col-xs-12">
                                <div class="porlet-body">
                                    <h4>&nbsp;</h4>
                                    <div class="form-group">
                                        <div class="col-md-12 pull-left">
                                            <button type="submit" class="btn blue input-an">Entrar</button>
                                            <button type="submit" name="remember" value="remember" class="btn yellow-crusta input-an-2">Recordar PIN</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing item END -->
                    <!-- Pricing item BEGIN -->
                    <!-- Pricing item END -->
                </form>
            </div>
        </div>
    </div>
    

     
</div>

<?php include('theme/front/templates/default_footer.php'); ?>

