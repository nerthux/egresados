<!DOCTYPE html>
<html lang="en">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Seguimiento de Egresados ITT - Unete a la comunidad</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/the-big-picture.css" rel="stylesheet">
    <link href="/css/header.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
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
    <div class="full">
      <!-- Page Content -->
      <div class="container">
        <div class="row breath">
          <?= $this->fetch('content') ?>
        </div>
        <!-- /.row -->
      </div>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="/js/jquery-2.1.1.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>

</body>

</html>
