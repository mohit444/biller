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
		#echo $this->Html->meta('icon');
		echo $this->Html->meta('favicon.ico','img/titleicon.png',array('type'=>'icon'));
		echo $this->Html->css(array('bootstrap.min','font-awesome.min','dataTables.responsive','dataTables.bootstrap.min','dataTables','custom'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<?php echo $this->element('header');?>
		
		<div id="content">
			
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
	<!--?php echo $this->element('sql_dump'); ? -->
	
	<?php echo $this->Html->script('jquery.min'); ?>
	<?php echo $this->Html->script('bootstrap.min'); ?>
	<?php echo $this->Html->script("jquery.dataTables.min.js"); ?>
	<?php echo $this->Html->script("dataTables.responsive");?>
	<?php echo $this->Html->script("dataTables.bootstrap.min.js");?>
	<script>
	$(document).ready(function(){
		$('#dataTables').DataTable({
			responsive : true,
			'order' : [[ 1 , 'desc']]
		});
	});
</script>
</body>
</html>
