<!-- BEGIN PRE-FOOTER -->

 <div class="" style="background: #192430; ">
        <div class="container " style=" padding: 60px 30px">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-sm-6" style="font-size: 1.5rem; color: white">
                    2018 © Phonealo - ALL Rights Reserved.
                    <br>
                    B-Duc Mircea Cel Batran H5, Targoviste, Romania
                    <br>
                    <b>Telefono: </b>+34 607333715
                    <br>

                </div>
                <div class="col-xs-12  col-md-5 col-md-offset-1 col-sm-6" style="margin-top: 20px">
                    <div class="row d-flex text-center justify-content-center justify-content-sm-end ">
                        <div class="col-xs-1 col-sm-1">
                            <a target="blank_" href="https://www.instagram.com/phonealo_app/" title="Instagram">
                                <img src="https://www.phonealo.com/assets/ig_circle.svg" alt="" style="width: 100%">
                            </a>
                        </div>
                        <div class="col-xs-1 col-sm-1">
                            <a target="blank_" href="https://www.facebook.com/Phonealo-642900916095975/?modal=admin_todo_tour" title="Facebook">
                                <img src="https://www.phonealo.com/assets/fb_circle.svg" alt="" style="width: 100%">
                            </a>
                        </div>
                        <div class="col-xs-1 col-sm-1">
                            <a target="blank_" href="#">
                                <img src="https://www.phonealo.com/assets/tw_circle.svg" alt="@Phonealo1" style="width: 100%">
                            </a>
                        </div>
                        <div class="col-xs-1 col-sm-1">
                            <a target="blank_" href="skype:phonealo app">
                                <img src="https://www.phonealo.com/assets/sk_circle.svg" alt="" style="width: 100%">
                            </a>
                        </div>
                         <div class="col-xs-1 col-sm-1">
                            <a target="blank_" href="https://t.me/phonealo">
                                <img src="https://www.phonealo.com/assets/tg_circle.png" alt="" style="width: 100%"  class="">
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
          
            <script language="JavaScript" type="text/javascript">
                 TrustLogo("<?=base_path;?>images/comodo_secure_seal_76x26_transp.png", "CL1", "none");
               </script>
            <a href="https://www.positivessl.com/" id="comodoTL"></a>
        </div>

    </div>
<!-- END PRE-FOOTER -->
<!-- <div class="footer">
    <div class="container">
        <div class="row"> -->
            <!-- BEGIN COPYRIGHT -->
            <!-- <div class="col-md-6 col-sm-6">
                <div class="copyright"><?php echo date('Y'); ?> © 2018 © Phonealo - ALL Rights Reserved. </div>
            </div> -->
            <!-- END COPYRIGHT -->
            <!-- BEGIN SOCIAL ICONS -->
           <!--  <div class="col-md-6 col-sm-6 pull-right">
                <ul class="social-icons">
                    <li><a class="rss" data-original-title="rss" href="javascript:void(0);"></a></li>
                    <li><a class="facebook" data-original-title="facebook" href="javascript:void(0);"></a></li>
                    <li><a class="twitter" data-original-title="twitter" href="javascript:void(0);"></a></li>
                    <li><a class="googleplus" data-original-title="googleplus" href="javascript:void(0);"></a></li>
                    <li><a class="linkedin" data-original-title="linkedin" href="javascript:void(0);"></a></li>
                    <li><a class="youtube" data-original-title="youtube" href="javascript:void(0);"></a></li>
                    <li><a class="vimeo" data-original-title="vimeo" href="javascript:void(0);"></a></li>
                    <li><a class="skype" data-original-title="skype" href="javascript:void(0);"></a></li>
                </ul>
            </div> -->
            <!-- END SOCIAL ICONS -->
        <!-- </div>
    </div>
</div>  -->
<!-- END FOOTER -->
<a href="#promo-block" class="go2top scroll"><i class="fa fa-arrow-up"></i></a>
<!--[if lt IE 9]>
<script src="<?=base_path;?>theme/front/assets/global/plugins/respond.min.js"></script>
<![endif]-->
<!-- Load JavaScripts at the bottom, because it will reduce page load time -->
<!-- Core plugins BEGIN (For ALL pages) -->
<script src="<?=base_path;?>theme/front/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?=base_path;?>theme/front/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?=base_path;?>theme/front/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- Core plugins END (For ALL pages) -->
<!-- BEGIN RevolutionSlider -->
<script src="<?=base_path;?>theme/front/assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
<script src="<?=base_path;?>theme/front/assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
<script src="<?=base_path;?>theme/front/assets/frontend/onepage/scripts/revo-ini.js" type="text/javascript"></script>
<!-- END RevolutionSlider -->
<!-- Core plugins BEGIN (required only for current page) -->
<script src="<?=base_path;?>theme/front/assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
<script src="<?=base_path;?>theme/front/assets/global/plugins/jquery.easing.js"></script>
<script src="<?=base_path;?>theme/front/assets/global/plugins/jquery.parallax.js"></script>
<script src="<?=base_path;?>theme/front/assets/global/plugins/jquery.scrollTo.min.js"></script>
<script src="<?=base_path;?>theme/front/assets/frontend/onepage/scripts/jquery.nav.js"></script>
<!-- Core plugins END (required only for current page) -->
<!-- Global js BEGIN -->
<script src="<?=base_path;?>theme/front/assets/frontend/onepage/scripts/layout.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        Layout.init();
    });
    var base_path = '<?php echo base_path; ?>';
</script>
<?php if (isset($js_page)): ?>
    <?php print_js_pluggins($js_page); ?>
<?php endif; ?>

<!-- Global js END -->

</body>
</html>