<h2>Orders</h2>

<?php
echo $this->Form->create('Bill');
echo $this->Form->input('Customer.Customer');
echo $this->Form->input('created');

echo $this->Form->create('Order'); ?>

<div>
    <?php
    echo $this->Form->input('ordprcode');
    echo $this->Form->input('ordtitle');
    echo $this->Form->input('ordunitprice');
    echo $this->Form->input('ordquantity');
    echo $this->Form->input('ordrowtotal');?>
</div>
<?php
    echo $this->Form->end('ADD');
?>
