<div class="container">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12  col-lg-offset-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">Please Sign in</div>
            <div class="panel-body">
                <?php echo $this->Form->create('User', array('class'=> 'form-horizontal', 'inputDefaults'=>array('label'=>false) )); ?>
                <div class="form-group">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php echo $this->Form->input('name', array('class'=>'form-control','placeholder'=>'User name')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php echo $this->Form->input('password', array('class'=>'form-control','placeholder'=>'Password'));?>
                    </div>
                </div>
                
            </div>
            <div class="panel-footer clearfix">
                <div class="pull-right">
                    <?php echo $this->Form->submit('Login',array('class'=>'btn btn-default')); ?>  
                </div>                 
            </div>
            <?php echo $this->Form->end();?>
        </div>
    </div>
</div>