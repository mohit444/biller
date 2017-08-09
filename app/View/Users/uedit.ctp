<h1>Edit User</h1>

    <?php echo $this->Html->link( 'List Users', array( 'controller'=>'users','action' => 'index' ) ); ?>

<?php
echo $this->Form->create('User');
echo $this->Form->input('name');
echo $this->Form->input('mob');
echo $this->Form->input('password');
echo $this->Form->input('role');
echo $this->Form->end('Update');
?>