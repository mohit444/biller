<h2>Customers</h2>
 
<!-- link to add new Customers page -->

    <?php echo $this->Html->link( '+ New Customer', array( 'action' => 'cadd' ) ); ?>

 
<table >
    <!-- table heading -->
    <tr style=''>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
		<th>Mobile</th>
		<th>Address</th>
		<th>created</th>
		<th>Modified</th>
        <th>Actions</th>
    </tr>
     
<?php 
    //loop to show all retrieved records
    foreach( $customers as $customer ){
     
        echo "<tr>";
            echo "<td>{$customer['Customer']['id']}</td>";
            echo "<td>{$customer['Customer']['name']}</td>";
            echo "<td>{$customer['Customer']['email']}</td>";
            echo "<td>{$customer['Customer']['mob']}</td>";
			echo "<td>{$customer['Customer']['address']}</td>";
            echo "<td>{$customer['Customer']['created']}</td>";
			echo "<td>{$customer['Customer']['modified']}</td>";
             
            //here are the links to edit and delete actions
            echo "<td class='actions'>";
                echo $this->Html->link( 'Edit', array('action' => 'cedit', $customer['Customer']['id']) );
                 
                echo $this->Form->postLink( 'Delete', array(
                        'action' => 'cdelete', 
                        $customer['Customer']['id']), array(
                            'confirm'=>'Are you sure you want to delete that user?' ) );
            echo "</td>";
        echo "</tr>";
    }
?>
     
</table>