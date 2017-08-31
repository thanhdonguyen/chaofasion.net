<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- End Code tong hop -->
      <meta charset="utf-8">
      <meta name="viewport" id="viewport" content="user-scalable=no,width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0" />
      <title><?php echo isset($title)?$title:null; ?></title>
      <link rel="shortcut icon" href="<?php echo url('public/favicon.ico'); ?>" />
      <link rel="stylesheet" type="text/css" href="<?php echo url('public/kkshop/wp-content/themes/kkfashion/asset/css/bootstrap.min.css'); ?>" />
      <link rel="stylesheet" type="text/css" href="<?php echo url('public/kkshop/wp-content/themes/kkfashion/asset/css/bootstrap-theme.css'); ?>" />
      <link rel="stylesheet" type="text/css" href="<?php echo url('public/kkshop/wp-content/themes/kkfashion/asset/css/font-awesome.min.css'); ?>" />
      <link rel="stylesheet" href="<?php echo url('public/kkshop/wp-content/themes/kkfashion/asset/css/flexslider.css'); ?>" type="text/css" />
      <link rel="stylesheet" type="text/css" href="<?php echo url('public/kkshop/wp-content/themes/kkfashion/asset/css/style.css'); ?>" />
      <link rel="stylesheet" type="text/css" href="<?php echo url('public/kkshop/wp-content/themes/kkfashion/asset/css/jquery.mCustomScrollbar.css'); ?>" />
      <link rel="stylesheet" type="text/css" href="<?php echo url('public/kkshop/wp-content/themes/kkfashion/asset/css/responsive-phone.css'); ?>" />
      <link rel="stylesheet" type="text/css" href="<?php echo url('public/kkshop/wp-content/themes/kkfashion/asset/css/responsive-ipad.css'); ?>" />
      <link rel="stylesheet" type="text/css" href="<?php echo url('public/kkshop/wp-content/themes/kkfashion/asset/css/responsive-desktop.css'); ?>" />
      <link rel="stylesheet" type="text/css" href="<?php echo url('public/kkshop/wp-content/themes/kkfashion/asset/css/editor.css'); ?>" />
      <link rel="stylesheet" type="text/css" href="<?php echo url('public/kkshop/wp-content/themes/kkfashion/asset/css/owl.carousel.css'); ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo url('public/kkshop/wp-content/themes/kkfashion/asset/css/owl.theme.css'); ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo url('public/kkshop/wp-content/themes/kkfashion/asset/css/prism.css'); ?>">
      <script src="<?php echo url('public/kkshop/wp-content/themes/kkfashion/js/jquery-1.10.2.min.js'); ?>"></script>
      <script src="<?php echo url('public/kkshop/wp-content/themes/kkfashion/asset/js/jquery.min.js" type="text/javascript'); ?>"></script>
      <script src="<?php echo url('public/kkshop/wp-content/themes/kkfashion/js/jquery.blockUI.js'); ?>"></script>
      <style type="text/css">
         img.wp-smiley,
         img.emoji {
         display: inline !important;
         border: none !important;
         box-shadow: none !important;
         height: 1em !important;
         width: 1em !important;
         margin: 0 .07em !important;
         vertical-align: -0.1em !important;
         background: none !important;
         padding: 0 !important;
         }
      </style>
      <style type="text/css">
      </style>
	  <link rel='stylesheet' id='woocommerce_prettyPhoto_css-css'  href='<?php echo url('public/kkshop/wp-content/plugins/woocommerce/assets/css/prettyPhoto.css'); ?>' type='text/css' media='all' />
      <link rel='stylesheet' id='woocommerce-layout-css' href='<?php echo url('public/kkshop/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css'); ?>' type='text/css' media='all' />
      <link rel='stylesheet' id='woocommerce-smallscreen-css' href='<?php echo url('public/kkshop/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css'); ?>' type='text/css' media='only screen and (max-width: 768px)' />
      <link rel='stylesheet' id='woocommerce-general-css' href='<?php echo url('public/kkshop/wp-content/plugins/woocommerce/assets/css/woocommerce.css'); ?>' type='text/css' media='all' />
      <link rel='stylesheet' id='newsletter-subscription-css' href='<?php echo url('public/kkshop/wp-content/plugins/newsletter/subscription/style.css'); ?>' type='text/css' media='all' />
      <link rel='stylesheet' id='wp-paginate-css' href='<?php echo url('public/kkshop/wp-content/plugins/wp-paginate/css/wp-paginate.css'); ?>' type='text/css' media='screen' />
      <link rel='stylesheet' id='stThemeStyle-css' href='<?php echo url('public/kkshop/wp-content/themes/kkfashion/style.css'); ?>' type='text/css' media='all' />
      <script type='text/javascript' src='<?php echo url('public/kkshop/wp-includes/js/jquery/jquery.js'); ?>'></script>
      <script type='text/javascript' src='<?php echo url('public/kkshop/wp-includes/js/jquery/jquery-migrate.min.js'); ?>'></script>
      <meta name="generator" content="WordPress 4.4.10" />
      <meta name="generator" content="WooCommerce 2.4.12" />
      <meta name="NextGEN" version="2.2.3" />
      <meta name="generator" content="kkfashion 2.4" />
      <meta name="generator" content="themeExpert Framework Version 1.0" />
      <link rel="stylesheet" type="text/css" href="<?php echo url('public/kkshop/wp-content/themes/kkfashion/asset/css/custom.css'); ?>" />
      <style type="text/css">
         html {
         margin-top: 0 !important;
         }
         .woocommerce #respond input#submit,
         .woocommerce a.button,
         .woocommerce button.button,
         .woocommerce input.button {
         color: #FFF;
         background: #000;
         text-transform: uppercase;
         border-radius: 0;
         }
      </style>
      <style type="text/css">
         html {
         margin-top: 0 !important
         }
         body > img {
         display: none;
         }
         body > iframe {
         display: none;
         }
      </style>
      <style type="text/css">
      </style>
   </head>
   <body>
      <?php echo $__env->make('kkshop.blocks.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!-- /header -->
     
      <!-- /banner -->

      <!-- content -->
      <?php echo $__env->yieldContent('content'); ?>
      <!-- /content -->

      <!-- footer -->
      <?php echo $__env->make('kkshop.blocks.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!--  /footer -->
      <!-- LAST VIEWS -->
      <!-- END LAST VIEWS -->
      <script src="<?php echo url('public/kkshop/wp-content/themes/kkfashion/asset/js/bootstrap.min.js" type="text/javascript'); ?>"></script>
      <script src="<?php echo url('public/kkshop/wp-content/themes/kkfashion/asset/js/jquery.flexslider.js'); ?>"></script>
      <script src="<?php echo url('public/kkshop/wp-content/themes/kkfashion/asset/js/owl.carousel.min.js'); ?>"></script>
      <script src="<?php echo url('public/kkshop/wp-content/themes/kkfashion/asset/js/prism.js'); ?>"></script>
      <script src="<?php echo url('public/kkshop/wp-content/themes/kkfashion/asset/js/jquery.newsTicker.js'); ?>"></script>
      <script src="<?php echo url('public/kkshop/wp-content/themes/kkfashion/asset/js/jquery.mCustomScrollbar.concat.min.js'); ?>" type="text/javascript"></script>
      <script src="<?php echo url('public/kkshop/wp-content/themes/kkfashion/js/custom.js'); ?>"></script>
      <!--Back To Top-->
      <script type="text/javascript">
         $(function() {
             $('body').append('<div id="top"><img class="backtop" src="<?php echo url('public/kkshop/wp-content/themes/kkfashion/asset/img/to-top.png'); ?>"></div>');
             $(window).scroll(function() {
                 var $toa_do = $(window).scrollTop();
                 //alert($toa_do);
                 if ($toa_do == 0) {
                     $('#top').fadeOut();
                 } else {
                     $('#top').fadeIn()
                 };
             });
             $('#top').click(function() {
                 $('html,body').animate({
                     scrollTop: 0
                 }, 500);
             });
         });
      </script>
      <script type="text/javascript">
(function(d,s,id){var z=d.createElement(s);z.type="text/javascript";z.id=id;z.async=true;z.src="//static.zotabox.com/c/8/c8b996b6c0391b0cad1cf36e7839afb5/widgets.js";var sz=d.getElementsByTagName(s)[0];sz.parentNode.insertBefore(z,sz)}(document,"script","zb-embed-code"));
</script>
      <!--End Back To Top-->
      <!-- ngg_resource_manager_marker -->
      <script type='text/javascript' src='<?php echo url('public/kkshop/wp-content/themes/kkfashion/js/woo/add-to-cart-variation.js'); ?>'></script>
      <script type='text/javascript' src='<?php echo url('public/kkshop/wp-content/themes/kkfashion/js/woo/order-custom.js'); ?>'></script>
      <script type='text/javascript' src='<?php echo url('public/kkshop/wp-content/themes/kkfashion/js/woo/order.js'); ?>'></script>
      <script type='text/javascript' src='<?php echo url('public/kkshop/wp-content/themes/kkfashion/js/woo/return.js'); ?>'></script>
      <script type='text/javascript' src='<?php echo url('public/kkshop/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js'); ?>'></script>
	  
	  <script type='text/javascript' src='<?php echo url('public/kkshop/wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min.js'); ?>'></script>
	<script type='text/javascript' src='<?php echo url('public/kkshop/wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.init.min.js'); ?>'></script>
	  
      <script type='text/javascript' src='<?php echo url('public/kkshop/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js'); ?>'></script>
      <script type='text/javascript' src='<?php echo url('public/kkshop/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js'); ?>'></script>
      <script type='text/javascript' src='<?php echo url('public/kkshop/wp-content/plugins/woocommerce/assets/js/jquery-cookie/jquery.cookie.min.js'); ?>'></script>
      <script type='text/javascript' src='<?php echo url('public/kkshop/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js'); ?>'></script>
      <script type='text/javascript' src='<?php echo url('public/kkshop/wp-content/plugins/newsletter/subscription/validate.js'); ?>'></script>
      <script type='text/javascript' src='<?php echo url('public/kkshop/wp-includes/js/wp-embed.min.js'); ?>'></script>
      <div style="text-align: center;"><a href="https://www.w3-edge.com/products/" rel="external">Optimization WordPress Plugins &amp; Solutions by W3 EDGE</a>
      </div>
   </body>
</html>
<!-- Served from: kkfashion.vn @ 2017-05-27 13:55:25 by W3 Total Cache -->