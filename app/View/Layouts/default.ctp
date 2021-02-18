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
		echo $this->Html->css('cake.generic.css');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

	 <div class="topnav">
	  <a class="active" href="/">

	  	<?php
		  	echo $this->Html->image(
		  		'Logo.png',
		  		array(
		  			'alt' => 'CakePHP', 
		  			'border' => '0',
		  			'data-src' => 'holder.js/100%x100',
		  			'height' => 50
		  		)
		  	);
	  	?>

	  </a>

	  <a href="/about">About</a>


	  <?php

	  	if(AuthComponent::user())
	  	{
	  		echo '<a href="/users/logout">Logout</a>';
	  		echo '<a href="/surveys">Surveys</a>';
	  	}else
	  	{
	  		echo '<a href="/users/register">Register</a>';
	  		echo '<a href="/users/login">Login</a>';
	  	}
	  	

	  ?>
	  
	  	  
	</div> 

</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php?></h1>
		</div>
		<div id="content">

			<?php echo $this->Flash->render(); ?>
			<?php echo $this->fetch('content'); ?>

		</div>
		<div id="footer">
			
			<p>
				
			</p>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
