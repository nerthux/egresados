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

    <?= $this->Html->script('jquery-2.1.1') ?>
    <?= $this->Html->script('bootstrap.min') ?>
    <?= $this->Html->script('plugins/iCheck/icheck.min') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>


</head>


<body class="gray-bg">


    <div class="middle-box text-center animated fadeInDown">
        <h1>=D</h1>
        <h3 class="font-bold">Tu registro ha sido procesado con éxito..</h3>

        <div class="error-desc">
            Se ha enviado un correo electrónico de confirmación, por favor ingresa a tu cuenta de correo y da click al enlace de confirmación 
      para finalizar el proceso de registro. <br/>

      <a href="/users/register" class="btn btn-primary m-t">Iniciar Sesión</a>
       </div>
    </div>

</body>

</html>

