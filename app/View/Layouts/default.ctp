<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

	<div class="w3-bar w3-white w3-border-bottom w3-xlarge">
  		<a href="/" class="w3-bar-item w3-button w3-text-black w3-hover-black"><b><i class="fa fa-map-marker w3-margin-right"></i> Greg Surveys  </b></a>
  		<a href="#" class="w3-bar-item w3-button w3-right w3-hover-red w3-text-grey"><i class="fa fa-search"></i></a>
  		<a href="/register" class="w3-bar-item w3-button w3-text-black w3-hover-black" style="float:right;"><b><i class="fa fa-map-marker w3-margin-left"></i> Sign Up </b></a>
  		<a href="/login" class="w3-bar-item w3-button w3-text-black w3-hover-black" style="float:right;"><b><i class="fa fa-map-marker w3-margin-left"></i> Login </b></a>
  		
	</div>

	<div id="w3-bar w3-white w3-border-bottom w3-xlarge" >
		
		<div id="content">
			<?php echo $this->Flash->render(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		
	</div>
	<?php //echo $this->element('sql_dump'); ?>


	<footer class="w3-padding-32 w3-black w3-center w3-margin-top">
  <h5>Note</h5>
  <div class="w3-xlarge w3-padding-16">
    
    <h5>This website is purely for educational purposes. Please do not use real login credentials or emails. </h6>
  </div>
</footer>

</body>
</html>
