<?php $cakeDescription = 'Sistema seguimiento de egresados ITT'; ?>

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
    <?= $this->Html->script('jquery-2.2.0.min') ?>
    <?= $this->Html->script('bootstrap.min') ?>
    <?= $this->Html->script('plugins/metisMenu/jquery.metisMenu') ?>
    <?= $this->Html->script('plugins/slimscroll/jquery.slimscroll.min') ?>

    <!-- Custom and plugin javascript -->
    <?= $this->Html->script('inspinia.js') ?>
    <?= $this->Html->script('plugins/pace/pace.min') ?>

    <!-- jQuery UI -->
    <?= $this->Html->script('plugins/jquery-ui/jquery-ui.min') ?>

    <!-- Toastr -->
    <?= $this->Html->script('plugins/toastr/toastr.min') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="/img/profile_small.png" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"> <?= h($this->request->session()->read('Auth.User.first_name')).' '. h($this->request->session()->read('Auth.User.last_name'))  ?></strong>
                             </span> <span class="text-muted text-xs block"><?= $this->request->session()->read('Auth.User.role') ?> <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>
                                <li><a href="/users/logout">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            ITT
                        </div>
                    </li>
                    <li class="active">
                        <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Usuarios</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
                            <li><?= $this->Html->link(__('Create User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
                        </ul>
                    </li>
                   <li>
                        <a href="#"><i class="fa fa-graduation-cap"></i> <span class="nav-label">Generaciones</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><?= $this->Html->link(__('List Generations'), ['controller' => 'Generations', 'action' => 'index']) ?></li>
                            <li><?= $this->Html->link(__('Create Generation'), ['controller' => 'Generations', 'action' => 'add']) ?></li>
                        </ul>
                    </li>
                   <li>
                        <a href="#"><i class="fa fa-university"></i> <span class="nav-label">Carreras</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><?= $this->Html->link(__('List Careers'), ['controller' => 'Careers', 'action' => 'index']) ?></li>
                            <li><?= $this->Html->link(__('Create Career'), ['controller' => 'Careers', 'action' => 'add']) ?></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Encuestas</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><?= $this->Html->link(__('List Forms'), ['controller' => 'Forms', 'action' => 'index']) ?></li>
                            <li><?= $this->Html->link(__('Create Form'), ['controller' => 'Forms', 'action' => 'add']) ?></li>
                        </ul>
                    </li>

                   <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Reportes</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="graph_flot.html">Flot Charts</a></li>
                            <li><a href="graph_morris.html">Morris.js Charts</a></li>
                            <li><a href="graph_rickshaw.html">Rickshaw Charts</a></li>
                            <li><a href="graph_chartjs.html">Chart.js</a></li>
                            <li><a href="graph_chartist.html">Chartist</a></li>
                            <li><a href="c3.html">c3 charts</a></li>
                            <li><a href="graph_peity.html">Peity Charts</a></li>
                            <li><a href="graph_sparkline.html">Sparkline Charts</a></li>
                        </ul>
                    </li>
                   <li class="special_link">
                        <a href="package.html"><i class="fa fa-database"></i> <span class="nav-label">Package</span></a>
                    </li>
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
