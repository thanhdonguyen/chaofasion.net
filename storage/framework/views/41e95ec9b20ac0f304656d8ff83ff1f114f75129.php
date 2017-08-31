<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo isset($title)?$title:null; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo $__env->yieldContent('description'); ?>">
<meta name="author" content="">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
<link href="<?php echo url('public/user/css/bootstrap.css'); ?>" rel="stylesheet">
<link href="<?php echo url('public/user/css/bootstrap-responsive.css'); ?>" rel="stylesheet">
<link href="<?php echo url('public/user/css/style.css'); ?>" rel="stylesheet">
<link href="<?php echo url('public/user/css/flexslider.css'); ?>" type="text/css" media="screen" rel="stylesheet"  />
<link href="<?php echo url('public/user/css/jquery.fancybox.css'); ?>" rel="stylesheet">
<link href="<?php echo url('public/user/css/cloud-zoom.css'); ?>" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- fav -->
<link rel="shortcut icon" href="<?php echo url('public/user/assets/ico/favicon.html'); ?>">
</head>
<body>
<!-- Header Start -->
<header>
  <?php echo $__env->make('user.blocks.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <div class="container">
  <?php echo $__env->make('user.blocks.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </div>
</header>
<!-- Header End -->

<div id="maincontainer">
  <!-- Slider Start-->

  <!-- Slider End-->
  <?php echo $__env->make('user.blocks.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!-- Section Start-->
  <?php echo $__env->make('user.blocks.otherddetails', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!-- Section End-->
  <!-- Featured Product-->


<!-- content-->
<?php echo $__env->yieldContent('content'); ?>
<!--end content-->


<!-- Footer -->
<?php echo $__env->make('user.blocks.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo url('public/user/js/jquery.js'); ?>"></script>
<script src="<?php echo url('public/user/js/bootstrap.js'); ?>"></script>
<script src="<?php echo url('public/user/js/respond.min.js'); ?>"></script>
<script src="<?php echo url('public/user/js/application.js'); ?>"></script>
<script src="<?php echo url('public/user/js/bootstrap-tooltip.js'); ?>"></script>
<script defer src="<?php echo url('public/user/js/jquery.fancybox.js'); ?>"></script>
<script defer src="<?php echo url('public/user/js/jquery.flexslider.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('public/user/js/jquery.tweet.js'); ?>"></script>
<script  src="<?php echo url('public/user/js/cloud-zoom.1.0.2.js'); ?>"></script>
<script  type="text/javascript" src="<?php echo url('public/user/js/jquery.validate.js'); ?>"></script>
<script type="text/javascript"  src="<?php echo url('public/user/js/jquery.carouFredSel-6.1.0-packed.js'); ?>"></script>
<script type="text/javascript"  src="<?php echo url('public/user/js/jquery.mousewheel.min.js'); ?>"></script>
<script type="text/javascript"  src="<?php echo url('public/user/js/jquery.touchSwipe.min.js'); ?>"></script>
<script type="text/javascript"  src="<?php echo url('public/user/js/jquery.ba-throttle-debounce.min.js'); ?>"></script>
<script defer src="<?php echo url('public/user/js/custom.js'); ?>"></script>
</body>
</html>