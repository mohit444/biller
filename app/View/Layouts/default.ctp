<?php

$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<?php echo $this->Html->charset(); ?>
	<title>
		Biller
	</title>
	
	<?php
		echo $this->Html->meta('icon');
		#echo $this->Html->meta('favicon.ico','/img/title_icon.ico',array('type'=>'icon'));
		echo $this->Html->css(array('bootstrap.min','custom'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<?php echo $this->element('header');?>
		<?php echo $this->element('nav');?>
		
		<div id="content">
			
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		
		<?php echo $this->element('footer');?>
	</div>
	<!--?php echo $this->element('sql_dump'); ? -->
	
	<?php echo $this->Html->script('jquery.min'); ?>
	<?php echo $this->Html->script('bootstrap.min'); ?>
</body>
</html>
