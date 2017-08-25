<div class="container">
<?php 
    if( $this->Session->check('Auth.User') ) { ?>
        
        <ul class="list-inline">
        <li><?php echo $this->Html->link('Users', array('controller'=>'Users', 'action'=>'index') ); ?></li>     
        <li><?php echo $this->Html->link('Customers', array('controller'=>'customers', 'action'=>'index') ); ?></li>
        
        <li><?php echo $this->Html->link('Products', array('controller'=>'products', 'action'=>'index') ); ?></li>
       
        <li><?php echo $this->Html->link('Orders', array('controller'=>'orders', 'action'=>'index') ); ?></li>
        
        <li><?php echo $this->Html->link('Invoices', array('controller'=>'bills', 'action'=>'index') ); ?></li>
        								
        
        <li><?php echo $this->Html->link('Logout', array('controller'=>'users', 'action'=>'logout') );?></li>
        
        <li><?php echo $this->Session->read('Auth.User.name');?></li>
        </ul>
    <?php
    }
?>
</div>