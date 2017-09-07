<div class="container">
    <div class="col-lg-6 col-md-6 col-sm-4 col-xm-4 col-lg-offset-3 col-md-offset-3 col-sm-offset-4 col-xm-offset-4">
        <div class="panel panel-info">
            <div class="panel-heading">Edit user data [
                
                <?php echo $this->Html->link(__('<i class="fa fa-eye"></i> All Users'),array(
                                    'controller'=>'users','action'=>'index') ,array('escape'=>false) );
                ?>
                ]
            
            </div>
            <div class="panel-body">
                <?php echo $this->Form->create('User', array('class'=> 'form-horizontal', 'inputDefaults'=>array('label'=>false) )); ?>
                <div class="form-group">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php echo $this->Form->input('name', array('class'=>'form-control','placeholder'=>'User name')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php echo $this->Form->input('mob', array('class'=>'form-control','placeholder'=>'10 digit number')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php echo $this->Form->input('password', array('class'=>'form-control','placeholder'=>'Password'));?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php echo $this->Form->input('role', array('class'=>'form-control','placeholder'=>'admin or gen')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <?php echo $this->Form->submit('Update',array('class'=>'btn btn-block btn-primary')); ?>
                        <?php echo $this->Form->end();?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <?php echo $this->Html->link('Cancel',array('controller'=>'users','action'=>'index'),array('class'=>'btn btn-block btn-danger')); ?>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
</div>