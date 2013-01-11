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
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $cakeDescription ?>
        <?php echo $title_for_layout; ?>
    </title>

    <meta name="description" content="">
    <meta name="keywords" content="">
    <?php
      	echo $this->Html->meta('icon');
        echo $this->Html->css('site');
        echo $this->Html->css('menulink');
    		echo $this->fetch('meta');
    		echo $this->fetch('css');

    ?>

</head>
<body>
<div id="geral">
    <div id="topo">
      <?php echo $this->element('topo')?>
    </div>
    <div id="coluna1">
      <?php echo $this->element('menu')?>
    </div>
    <div id="centro">
      <?php echo $this->fetch('content'); ?>
    </div>
    <div id="rodape">
      <?php echo $this->element('rodape', array('conteudo'=>'Evento fict&iacute;cio. Foi desenvolvido com Framework CakePHP'))?>
    </div>
</div>
</body>
</html>
