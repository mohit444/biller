<div class="container">
<!--?php echo $this->Flash->render('auth'); ?-->
    <div class="col-lg-3 col-md-4 col-sm-8 col-xs-8 pull-right">
        <?php echo $this->Form->create('User', array('class'=> 'form-horizontal', 'inputDefaults'=>array('label'=>false) )); ?>   
        <div class="formtitle">Please Login </div>

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
        
        <?php echo $this->Form->submit('Login',array('class'=>'btn btn-primary')); ?>
            
        <?php echo $this->Form->end();?>
    </div>
</div>  