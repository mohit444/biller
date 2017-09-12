<?php echo $this->Html->script('jquery.min'); ?>
<div class="container-fluid">
    <div class="panel panel-default">    
        <div class="panel-heading">Invoice</div>
        <div class="panel-body">            
            <?php echo $this->Form->create('Bill',array('class'=> 'form-horizontal', 'inputDefaults'=>array('label'=>false)));?>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-3  control-label">To</label>
                        <div class="col-md-9">
                            <?php echo $this->Form->input('Customer.Customer', array('class'=>'form-control','size'=>3)); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group" >                        
                        <label class="col-md-2  control-label">Date</label>                        
                        <div class="col-md-10">
                            <?php echo $this->Form->input('created', array('class'=>'form-control',
                            'div' => array('class' => 'form-inline'))); ?>                            
                        </div>                        
                    </div>
                </div>
            </div> 
            <?php echo $this->Form->create('Order',array('class'=> 'form-horizontal', 'inputDefaults'=>array('label'=>false)));?>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="form-inline">
                                <?php echo $this->Form->input('ordprcode', array('class'=>'form-control')); ?>
                                <?php echo $this->Form->input('ordtitle', array('class'=>'form-control')); ?>
                                <?php echo $this->Form->input('ordunitprice', array('class'=>'form-control')); ?>
                                <?php echo $this->Form->input('ordquantity', array('class'=>'form-control')); ?>
                                <?php echo $this->Form->input('ordrowtotal', array('class'=>'form-control')); ?>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-footer clearfix">
            <div class="pull-right">
                <?php echo $this->Form->submit('Done',array('class'=> 'btn btn-default')); ?>
                <?php echo $this->Form->end();?>
            </div>
        </div>
    </div>
</div>