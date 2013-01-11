<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
if (Configure::read('debug') == 0):
  throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
?>
<?php echo $this->Html->css('boxes'); ?>

<div id="div-centro">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sodales velit quis orci pretium vel porttitor libero consectetur. Aliquam erat volutpat. Nunc interdum ullamcorper urna quis mattis. Nunc viverra aliquet tellus ut mattis. Morbi in nisl felis, sed fermentum purus. Maecenas sit amet purus et turpis porta adipiscing. Nullam tempor viverra augue venenatis ornare. Fusce commodo felis eu lectus ultrices tempor. Etiam vehicula pulvinar vehicula. Fusce ullamcorper faucibus orci, eget tempor sapien consectetur quis. Nulla mattis libero eget dui vulputate posuere quis eget risus.<br><br>
  Phasellus euismod, nisl a sagittis dignissim, quam risus iaculis urna, vitae faucibus quam odio ut arcu. Quisque ipsum sapien, facilisis et suscipit a, volutpat id magna. Vivamus vitae egestas nulla. Morbi eget magna a nunc faucibus dictum vel vel eros. Duis nunc est, varius a lobortis dapibus, pharetra sed felis. Suspendisse potenti.
</div>
