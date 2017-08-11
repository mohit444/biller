<h1>Product</h1>

    <?php echo $this->Html->link( 'List Product', array( 'controller'=>'products','action' => 'index' ) ); ?>

<?php
echo $this->Form->create('Product');
echo $this->Form->input('title');
echo $this->Form->input('prcode');
echo $this->Form->input('type');
echo $this->Form->input('price');
echo $this->Form->end('Update');
?>