<div class="container">
    <div class="col-lg-6 col-md-6 col-sm-4 col-xm-4 col-lg-offset-3 col-md-offset-3 col-sm-offset-4 col-xm-offset-4">
        <div class="panel panel-info">
            <div class="panel-heading">Add Product [
                
                <?php echo $this->Html->link(__('<i class="fa fa-eye"></i> All Product'),array(
                                    'controller'=>'products','action'=>'index') ,array('escape'=>false) );
                ?>
                ]
            
            </div>
            <div class="panel-body">
                <?php echo $this->Form->create('Product', array('class'=> 'form-horizontal', 'inputDefaults'=>array('label'=>false) )); ?>
                <div class="form-group">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php echo $this->Form->input('title', array('class'=>'form-control','placeholder'=>'Product Title')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php echo $this->Form->input('prcode', array('class'=>'form-control','placeholder'=>'Product Short code')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php echo $this->Form->input('type', array('class'=>'form-control','options'=>array('w'=>'w','p'=>'p','l'=>'l'),'empty'=>'select (W , L , P)'));?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php echo $this->Form->input('price', array('class'=>'form-control','placeholder'=>'Unit price')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <?php echo $this->Form->submit('Submit',array('class'=>'btn btn-block btn-primary')); ?>
                        <?php echo $this->Form->end();?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <?php echo $this->Html->link('Cancel',array('controller'=>'products','action'=>'index'),array('class'=>'btn btn-block btn-danger')); ?>
                    </div>
                </div>                            
            </div>
        </div>
    </div>
</div>