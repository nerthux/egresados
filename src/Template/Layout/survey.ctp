<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<html lang="en">
<!--<![endif]-->
<head>

<!-- Basic Page Needs -->
<meta charset="utf-8">
<title>Seguimiento de Egresados</title>
<meta name="description" content="">
<meta name="author" content="Ansonika">

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS -->

<?= $this->Html->css('bootstrap.min.css') ?>
<?= $this->Html->css('style2.css') ?>
<?= $this->Html->css('font-awesome/css/font-awesome.css') ?>
<?= $this->Html->css('socialize-bookmarks.css') ?>
<?= $this->Html->css('style2.css') ?>
<?= $this->Html->css('fancybox/source/jquery.fancybox.css?v=2.1.4') ?>
<?= $this->Html->css('socialize-bookmarks.css') ?>
<?= $this->Html->css('check_radio/skins/square/aero.css') ?>
<?= $this->Html->css('jquery.switch.css') ?>
<?= $this->Html->css('owl.carousel.css') ?>
<?= $this->Html->css('owl.theme.css') ?>

<!-- Google web font -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Jquery -->

<?= $this->Html->script('jquery-2.2.0.min') ?>
<?= $this->Html->script('jquery-ui-1.8.22.min') ?>
<?= $this->Html->script('jquery.wizard') ?>
<?= $this->Html->script('jquery.icheck') ?>
<?= $this->Html->script('jquery.wizard') ?>
<?= $this->Html->script('modernizr.custom.17475') ?>
<?= $this->Html->script('respond.min') ?>

<?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>

</head>
<body>

  <header>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-xs-3" id="logo"><a href="#">Seguimiento Egresados ITT</a></div>
      </div><!-- End row -->
    </div><!-- End container -->
  </header> <!-- End header -->

  <?= $this->fetch('content') ?>

<footer>
  <section class="container">
    <div class="row">
    </div>
  </section>
</footer>

<!-- OTHER JS --> 
<script src="/js/jquery.validate.js"></script>
<script src="/js/jquery.placeholder.js"></script>
<script src="/js/jquery.tweet.min.js"></script>
<script src="/js/jquery.bxslider.min.js"></script>
<script src="/js/jquery.switch.min.js"></script>
<script src="/js/quantity-bt.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/retina.js"></script>
<script src="/js/functions.js"></script>

<!-- FANCYBOX -->
<script  src="/js/fancybox/source/jquery.fancybox.pack.js?v=2.1.4" type="text/javascript"></script> 
<script src="/js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5" type="text/javascript"></script> 
<script src="/js/fancy_func.js" type="text/javascript"></script> 

</body>
</html>
