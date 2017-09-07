<div class="container">
    <div class="col-lg-6 col-md-6 col-sm-4 col-xm-4 col-lg-offset-3 col-md-offset-3 col-sm-offset-4 col-xm-offset-4">
        <div class="panel panel-info">
            <div class="panel-heading">Add Customer [
                
                <?php echo $this->Html->link(__('<i class="fa fa-eye"></i> All Customer'),array(
                                    'controller'=>'customers','action'=>'index') ,array('escape'=>false) );
                ?>
                ]
            
            </div>
            <div class="panel-body">
                <?php echo $this->Form->create('Customer', array('class'=> 'form-horizontal', 'inputDefaults'=>array('label'=>false) )); ?>
                <div class="form-group">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php echo $this->Form->input('name', array('class'=>'form-control','placeholder'=>'Customer name')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php echo $this->Form->input('email', array('class'=>'form-control','placeholder'=>'Email ID')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php echo $this->Form->input('mob', array('class'=>'form-control','placeholder'=>'10 digit number')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php echo $this->Form->input('address', array('class'=>'form-control','placeholder'=>'Address'));?>
                    </div>
                </div>                
                <div class="form-group">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <?php echo $this->Form->submit('Submit',array('class'=>'btn btn-block btn-primary')); ?>
                        <?php echo $this->Form->end();?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <?php echo $this->Html->link('Cancel',array('controller'=>'customers','action'=>'index'),array('class'=>'btn btn-block btn-danger')); ?>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
</div>