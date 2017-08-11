<?php
class Customer extends AppModel{
	
	public $hasMany = Array('Bill');
}
?>