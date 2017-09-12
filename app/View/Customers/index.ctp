<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">Customers [
            
            <?php echo $this->Html->link(__('<i class="fa fa-plus"></i> Add Customer'),array(
                                'controller'=>'customers','action'=>'cadd') ,array('escape'=>false) );
            ?>
            ]
        </div>
        <div class="panel-body">
        <div class="dataTable_wrapper">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
                <thead>
                    <tr>
                        <th data-sortable="false"></th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Address</th>
                        <th>created</th>
                        <th>Modified</th>                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach( $customers as $customer ): ?>
                    <tr>
                        <td><div class="form-group">                            
                            <?php echo $this->HTML->link('',array('controller'=>'customers','action'=>'cedit',$customer['Customer']['id'] ),array('class'=>'fa fa-edit', 'title'=>'Edit'));?>
                            
                            <?php echo $this->Form->postLink('',array('controller' => 'customers','action' => 'cdelete', $customer['Customer']['id']),array('confirm'=>'Are you sure You want to delete this Product','class'=>'fa fa-trash','rel'=>'tooltip','title'=>'Delete'));?>
                            </div>
                        </td>
                        <td><?php echo $customer['Customer']['id'];?></td>
                        <td><?php echo $customer['Customer']['name'];?></td>
                        <td><?php echo $customer['Customer']['email'];?></td>
                        <td><?php echo $customer['Customer']['mob'];?></td>
                        <td><?php echo $customer['Customer']['address'];?></td>
                        <td><?php echo $customer['Customer']['created'];?></td>
                        <td><?php echo $customer['Customer']['modified'];?></td>
                        
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>