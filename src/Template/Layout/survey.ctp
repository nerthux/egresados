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
<?= $this->Html->css('header.css') ?>
<?= $this->Html->css('the-big-picture.css') ?>

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
<?= $this->fetch('script') ?>
</head>
<body>
    <div class="container">
    <div id="headeritt" class="row" >
      <div class="logo-tnm col-md-4 col-sd-4 col-xs-3" >
         <a href="http://tectijuana.edu.mx"><img src="/img/header-sep.png"></a>
      </div>
       <div class="text-tnm text-center col-md-5 col-sd-6 col-xs-4">
         <h3>Tecnológico Nacional de México</h3>
        <h4>Instituto Tecnológico de Tijuana</h4>
      </div>
      <div class="logo-itt text-center col-md-2 col-sd-2">
        <a href="http://tectijuana.edu.mx">
           <img src="/img/logo_ITT1.png" title="Instituto Tecnológico de Tijuana" alt="Instituto Tecnológico de Tijuana">
        </a>
      </div><!--logo-->
    </div>
    </div>
     <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <!-- /.container -->
      <div class="pull-right">
        <?= $this->request->session()->read('Auth.User.first_name').' '. $this->request->session()->read('Auth.User.last_name') ?>
      </div>
    </nav>
     <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Egresados ITT</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li>
                  <a href="#">Aviso de Privacidad</a>
                </li>
               <li>
                  <a href="#">Contacto</a>
                </li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
  <div class="container">
    <?= $this->fetch('content') ?>
  <div>
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
