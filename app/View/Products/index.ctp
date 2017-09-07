<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Products [
            
            <?php echo $this->Html->link(__('<i class="fa fa-plus"></i> Add Product'),array(
                                'controller'=>'products','action'=>'padd') ,array('escape'=>false) );
            ?>
            ]
        </div>
        <div class="panel-body">
        <div class="dataTable_wrapper">
			<?php if(!empty($products) ) { ?>
				<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
					<thead>
						<tr>
							<th data-sortable="false"></th>
							<th>ID</th>
							<th>Title</th>
							<th>PR code</th>
							<th>Type</th>
							<th>Price</th>
							<th>created</th>
							<th>Modified</th>						                    
						</tr>
					</thead>
					<tbody>
						<?php foreach( $products as $product ): ?>
						<tr>
							<td><div class="form-group">                            
								<?php echo $this->HTML->link('',array('controller'=>'products','action'=>'pedit',$product['Product']['id'] ),array('class'=>'fa fa-edit', 'title'=>'Edit'));?>
								
								<?php echo $this->Form->postLink('',array('controller' => 'products','action' => 'pdelete', $product['Product']['id']),array('confirm'=>'Are you sure You want to delete this Product','class'=>'fa fa-trash','rel'=>'tooltip','title'=>'Delete'));?>
								</div>
							</td>
							<td><?php echo $product['Product']['id'];?></td>
							<td><?php echo $product['Product']['title'];?></td>
							<td><?php echo $product['Product']['prcode'];?></td>
							<td><?php echo $product['Product']['type'];?></td>
							<td><?php echo $product['Product']['price'];?></td>
							<td><?php echo $product['Product']['created'];?></td>
							<td><?php echo $product['Product']['modified'];?></td>
							
						</tr>
						<?php endforeach;?>
					</tbody>
				</table>
			<?php }
				else{
					echo "No Product found! Add first";
				}
			?>
        </div>
        </div>
    </div>
</div>