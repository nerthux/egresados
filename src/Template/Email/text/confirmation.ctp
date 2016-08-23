<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
Hola <?= $first_name ?> :

Muchas gracias por realizar su proceso de registro, por favor, ingresa a la siguiente url para validar tu email:
<?= $email_validation_code ?>

Recuerda que tus datos de conexión son muy importantes, no los olvides para seguir accesando al sistema,
te dejamos este atento recordatorio de tu nombre de usuario para que después puedas consultarlo.

Usuario:  <?=  $user_name ?>
