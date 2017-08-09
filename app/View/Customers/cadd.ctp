<h2>Add Customer</h2>

    <?php echo $this->Html->link( 'List Customers', array( 'controller'=>'Customers','action' => 'index' ) ); ?>

<?php
echo $this->Form->create('Customer');
echo $this->Form->input('name');
echo $this->Form->input('email');
echo $this->Form->input('mob');
echo $this->Form->input('address');
echo $this->Form->end('ADD');
?>