<?php 
$cakeDescription = 'Sistema seguimiento de egresados ITT';
$steps_verifications = 3;
$steps_verifications_user = 0;
if($this->request->session()->read('Auth.User.email_verified'))
    $steps_verifications_user +=1;

if($this->request->session()->read('Auth.User.sms_verified'))
    $steps_verifications_user +=1;

if( strlen($this->request->session()->read('Auth.User.mobile_phone_number')) == 10)
      $steps_verifications_user +=1;

 $total_percent = round((($steps_verifications_user/$steps_verifications)*100));
?>

<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>

    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('font-awesome/css/font-awesome.css') ?>

    <!-- Toastr style -->
    <?= $this->Html->css('plugins/toastr/toastr.min.css') ?>

    <!-- Gritter -->
    <?= $this->Html->css('plugins/gritter/jquery.gritter.css') ?>

    <?= $this->Html->css('animate.css') ?>
    <?= $this->Html->css('style.css') ?>

    <!-- Mainly scripts -->
    <?= $this->Html->script('jquery-2.1.1') ?>
    <?= $this->Html->script('bootstrap.min') ?>
    <?= $this->Html->script('plugins/metisMenu/jquery.metisMenu') ?>
    <?= $this->Html->script('plugins/slimscroll/jquery.slimscroll.min') ?>

   <!-- Toastr -->
    <?= $this->Html->script('plugins/toastr/toastr.min') ?>

    <!-- Custom and plugin javascript -->
    <?= $this->Html->script('inspinia.js') ?>
    <?= $this->Html->script('plugins/pace/pace.min') ?>

    <!-- jQuery UI -->
    <?= $this->Html->script('plugins/jquery-ui/jquery-ui.min') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
     <link href="/css/header.css" rel="stylesheet">
</head>

<body>
    <div style="background-color: #fff">
        <div class="container container-header" >
        <div id="headeritt" class="row" >
          <div class="logo-tnm col-md-4 col-sd-4 col-xs-3" >
             <a href="http://tectijuana.edu.mx"><img src="/img/header-sep.png"></a>
          </div>
           <div class="text-tnm header-users text-center col-md-5 col-sd-6 col-xs-4">
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
    </div>
    
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header" style="background-size:cover">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="/img/profile_small.png" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"> <?= h($this->request->session()->read('Auth.User.first_name')).' '. h($this->request->session()->read('Auth.User.last_name'))  ?></strong>
                             </span> <span class="text-muted text-xs block"><?= $this->request->session()->read('Auth.User.role') ?> <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="/users/profile">Profile</a></li>
                                <li class="divider"></li>
                                <li><a href="/users/logout">Logout</a></li>
                            </ul>
                        </div>
                        <br>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="<?= $total_percent ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?= $total_percent ?>%">
                                <span ><?= $steps_verifications_user . " de " . $steps_verifications . " " . $total_percent ?>% Complete</span>
                          </div>
                        </div>

                        <?php if ($this->request->session()->read('Auth.User.email_verified')): ?>
                          <div class="text-white"><i class="fa fa-check-circle" aria-hidden="true" style="color: #2c892c"></i> Email verificado </div>
                        <?php else: ?>
                          <div ><i class="fa fa-check-circle" aria-hidden="true"></i> Email verificado </div>
                        <?php endif; ?>


                        <?php if (strlen($this->request->session()->read('Auth.User.mobile_phone_number')) == 10): ?>
                          <div class="text-white"><i class="fa fa-check-circle" aria-hidden="true" style="color: #2c892c"></i> Celular registrado </div>
                        <?php else: ?>
                          <div class=""><i class="fa fa-check-circle" aria-hidden="true"></i>Celular registrado 
                                      <?= $this->Html->link(_('Agregar'), '/users/profile', ['role' => 'button', 'class' => "verify"]) ?></div>
                        <?php endif; ?>

                        <?php if ($this->request->session()->read('Auth.User.sms_verified')): ?>
                            <div class="text-white"><i class="fa fa-check-circle" aria-hidden="true" style="color: #2c892c"></i> Celular verificado </div>
                        <?php else: ?>
                          <div class=""><i class="fa fa-check-circle" aria-hidden="true"></i> Celular verificado 
                                      <?= $this->Html->link(_('Verificar'), '/users/sendSmsValidation', ['role' => 'button', 'class' => "verify"]) ?> </div>
                        <?php endif; ?>
                        <div class="logo-element">
                            ITT
                        </div>
                    </li>
                    <li class="active">
                        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Encuestas</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><?= $this->Html->link(__('Mis Encuentas'), ['controller' => 'Forms', 'action' => 'myForms']) ?></li>
                        </ul>
                    </li>

<?php  if ( $this->request->session()->read('Auth.User.role') === 'admin'): ?>
			<li >
                        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Control Panel</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><?= $this->Html->link(__('Dashboard'), ['controller' => 'Users', 'action' => 'index']) ?></li>
                        </ul>
                    </li>
<?php endif; ?>

               </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Bienvenido al sistema de seguimiento de egresados ITT..</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">0</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 0 messages
                                    <span class="pull-right text-muted small">0 minutes ago</span>
                                </div>
                            </a>
                        </li>
                   </ul>
                </li>


                <li>
                    <a href="/users/logout">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
                <div class="row  border-bottom white-bg dashboard-header">
		        <?= $this->fetch('content') ?>
		</div>
                <div class="footer">
                    <div class="pull-right">
                        Consulta nuestro aviso de privacidad
                    </div>
                    <div>
                        <strong>Instituto Tecnológico de Tijuana 2016</strong>
                    </div>
                </div>
            </div>
        </div>

        </div>


        </div>
    </div>


</body>
</html>
