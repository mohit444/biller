<h2>Orders</h2>

<?php
echo $this->Form->create('Bill');
echo $this->Form->input('Customer.Customer');
echo $this->Form->input('issuedate');

echo $this->Form->create('Order');
echo $this->Form->input('mob');
echo $this->Form->input('password');
echo $this->Form->input('role');
echo $this->Form->end('ADD');
?>