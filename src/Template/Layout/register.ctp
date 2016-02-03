<?php $cakeDescription = 'Sistema seguimiento de egresados ITT'; ?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?= $cakeDescription ?>:
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

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">ITT</h1>
            </div>

               <h3>Seguimiento de Egresados ITT</h3>
	
    	    <?= $this->Flash->render() ?>

            <?= $this->fetch('content') ?>
    </div>

    <!-- iCheck -->
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>
