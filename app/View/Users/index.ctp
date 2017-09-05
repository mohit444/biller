<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Users [
            
            <?php echo $this->Html->link(__('<i class="fa fa-plus"></i> Add user'),array(
                                'controller'=>'users','action'=>'uadd') ,array('escape'=>false) );
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
                        <th>Mobile</th>
                        <th>Type</th>
                        <th>created</th>
                        <th>Modified</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach( $users as $user ): ?>
                    <tr>
                        <td><div class="form-group">      
						
							<!-- Trigger the modal with a link -->	
                            <!--?php echo $this->HTML->link('',array('controller'=>'users','action' => 'uedit', $user['User']['id']),array('class'=>'fa fa-edit fa-fw','id'=>'uedit', 'title'=>'Edit'));?-->
                            <?php echo $this->HTML->link('',array(),array('class'=>'fa fa-edit','data-toggle'=>'modal','id'=>'uedit', 'title'=>'Edit'));?>                            
                            <?php echo $this->Form->postLink('',array('controller' => 'users','action' => 'udelete', $user['User']['id']),array('confirm'=>'Are you sure You want to delete this Product','class'=>'fa fa-trash','rel'=>'tooltip','title'=>'Delete'));?>
                            </div>
                        </td>
                        <td><?php echo $user['User']['id'];?></td>
                        <td><?php echo $user['User']['name'];?></td>
                        <td><?php echo $user['User']['mob'];?></td>
                        <td><?php echo $user['User']['role'];?></td>
                        <td><?php echo $user['User']['created'];?></td>
                        <td><?php echo $user['User']['modified'];?></td>
                        
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    
    $('#dataTables tbody tr td').find('a:first').click( function(){
        alert(($("#dataTables tbody tr").find("td:eq(1)").text()) );
    });   
});
</script>
