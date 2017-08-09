<h2>Users</h2>
 
<!-- link to add new users page -->

    <?php echo $this->Html->link( '+ New Product', array( 'action' => 'padd' ) ); ?>

 
<table >
    <!-- table heading -->
    <tr style=''>
        <th>ID</th>
        <th>Title</th>
        <th>PR code</th>
		<th>Type</th>
		<th>Price</th>
		<th>created</th>
		<th>Modified</th>
        <th>Actions</th>
    </tr>
     
<?php 
    //loop to show all retrieved records
    foreach( $products as $product ){
     
        echo "<tr>";
            echo "<td>{$product['Product']['id']}</td>";
            echo "<td>{$product['Product']['title']}</td>";
            echo "<td>{$product['Product']['prcode']}</td>";
            echo "<td>{$product['Product']['type']}</td>";
			echo "<td>{$product['Product']['price']}</td>";
            echo "<td>{$product['Product']['created']}</td>";
			echo "<td>{$product['Product']['modified']}</td>";
             
            //here are the links to edit and delete actions
            echo "<td class='actions'>";
                echo $this->Html->link( 'Edit', array('action' => 'pedit', $product['Product']['id']) );
                 
                echo $this->Form->postLink( 'Delete', array('controller' => 'products','action' => 'pdelete', $product['Product']['id']), array('confirm'=>'Are you sure you want to delete that product?' ) );
            echo "</td>";
        echo "</tr>";
    }
?>
     
</table>