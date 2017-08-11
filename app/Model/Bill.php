<?php
class Bill extends AppModel{
	
	public $belongsTo = array('Customer');
	public $hasMany = array('Order');
}
?>