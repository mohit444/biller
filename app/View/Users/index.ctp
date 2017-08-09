<h2>Users</h2>
 
<!-- link to add new users page -->

    <?php echo $this->Html->link( '+ New User', array( 'action' => 'uadd' ) ); ?>

 
<table >
    <!-- table heading -->
    <tr style=''>
        <th>ID</th>
        <th>Name</th>
        <th>Mobile</th>
		<th>Type</th>
		<th>created</th>
		<th>Modified</th>
        <th>Actions</th>
    </tr>
     
<?php 
    //loop to show all retrieved records
    foreach( $users as $user ){
     
        echo "<tr>";
            echo "<td>{$user['User']['id']}</td>";
            echo "<td>{$user['User']['name']}</td>";
            echo "<td>{$user['User']['mob']}</td>";
            echo "<td>{$user['User']['role']}</td>";
            echo "<td>{$user['User']['created']}</td>";
			echo "<td>{$user['User']['modified']}</td>";
             
            //here are the links to edit and delete actions
            echo "<td class='actions'>";
                echo $this->Html->link( 'Edit', array('action' => 'uedit', $user['User']['id']) );
                 
                echo $this->Form->postLink( 'Delete', array('controller' => 'users','action' => 'udelete', $user['User']['id']), array('confirm'=>'Are you sure you want to delete that user?' ) );
            echo "</td>";
        echo "</tr>";
    }
?>
     
</table>