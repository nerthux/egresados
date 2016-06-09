<!DOCTYPE html>
<html>

<?php $this->layout = false; ?>


<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?= $this->fetch('title') ?>
    </title>

    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('font-awesome/css/font-awesome.css') ?>
    <?= $this->Html->css('plugins/iCheck/custom.css') ?>
    <?= $this->Html->css('animate.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('the-big-picture.css') ?>

    <?= $this->Html->script('jquery-2.1.1') ?>
    <?= $this->Html->script('bootstrap.min') ?>
    <?= $this->Html->script('plugins/iCheck/icheck.min') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>


</head>


<body class="gray-bg">
    <div class="container">
    <div class="row" >
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
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
                <form id="sigin"  class="navbar-form navbar-right" method="post" accept-charset="utf-8" role="form" action="/users/login">

                <div style="display:none;">
                  <input type="hidden" name="_method" class="form-control" value="POST">
                </div>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="username" type="text" class="form-control" name="username" value="" placeholder="Usuario">                                        
                </div>

                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input id="password" type="password" class="form-control" name="password" value="" placeholder="Contraseña">                                        
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
              </form>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
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
        <!-- /.container -->
    </nav>    <!-- Page Content -->

    <div class="middle-box text-center animated fadeInDown">
        <h1>=D</h1>
        <h3 class="font-bold">Tu registro ha sido procesado con éxito..</h3>

        <div class="error-desc">
          <p> Se ha enviado un correo electrónico de confirmación, por favor ingresa a tu cuenta de correo y da click al enlace de confirmación 
              para finalizar el proceso de registro. A partir de este momento ya puedes ingresar al sistema con el usuario y contraseña que elegiste 
          </p>
       </div>
    </div>

</body>

</html>

