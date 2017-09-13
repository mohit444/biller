<?php echo $this->Html->script('jquery.min'); ?>
<!-- Include Bootstrap Datepicker -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

<div class="container">
    <div class="panel panel-default">    
        <div class="panel-heading">Invoice</div>
        <div class="panel-body">            
            <?php echo $this->Form->create('Bill',array('class'=> 'form-horizontal', 'inputDefaults'=>array('label'=>false)));?>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-3  control-label">To</label>
                        <div class="col-md-9">
                            <?php echo $this->Form->input('Customer.Customer', array('class'=>'form-control','size'=>4)); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-1 ">
                    <div class="form-group" >
                        <label class="col-md-3 control-label">Bill No.</label>                        
                        <div class="col-md-9">
                            <?php echo $this->Form->input('id', array('class'=>'form-control')); ?>                            
                        </div> 
                    </div>
                    <div class="form-group" >                        
                        <label class="col-md-3  control-label">Date</label>                        
                        <div class="col-md-9 date">
                            <div class="input-group input-append date" id="datePicker">
                                <?php echo $this->Form->input('billdate', array('class'=>'form-control','name'=>'date')); ?>   
                                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>  
                            </div>                       
                        </div>                        
                    </div>
                </div>
            </div> 
            <?php echo $this->Form->create('Order',array('class'=> 'form-horizontal', 'inputDefaults'=>array('label'=>false)));?>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="control-label">Prd Code</label>
                            <?php echo $this->Form->input('ordprcode', array('class'=>'form-control')); ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Title</label>
                            <?php echo $this->Form->input('ordtitle', array('class'=>'form-control')); ?>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="control-label">Unit Price</label>
                            <?php echo $this->Form->input('ordunitprice', array('class'=>'form-control')); ?>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label class="control-label">Qty</label>
                            <?php echo $this->Form->input('ordquantity', array('class'=>'form-control')); ?>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label class="control-label">Total</label>
                            <?php echo $this->Form->input('ordrowtotal', array('class'=>'form-control')); ?>
                        </div>
                    </div>  

                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="control-label">Action</label>
                            <div class="row">
                                <div class="col-md-4">
                                <?php echo $this->Form->submit('Delete',array('class'=> 'btn btn-danger')); ?>
                                </div>
                                <div class="col-md-6">
                                <?php echo $this->Form->submit('Add',array('class'=> 'btn btn-primary')); ?>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-md-10 col-md-offset-1">                    
                    <?php echo $this->Form->create('Bill',array('class'=> 'form-horizontal', 'inputDefaults'=>array('label'=>false)));?>
                    <div class="pull-right">                    
                        <div class="form-group">
                            <label class="col-md-5 control-label">SUM</label>
                            <div class="col-md-7">
                                <?php echo $this->Form->input('ordfulltotal', array('class'=>'form-control')); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-5 control-label">CGST</label>
                            <div class="col-md-7">
                                <?php echo $this->Form->input('cgst', array('class'=>'form-control','value'=>2.5)); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-5 control-label">SGST</label>
                            <div class="col-md-7">
                                <?php echo $this->Form->input('sgst', array('class'=>'form-control','value'=>2.5)); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-5 control-label">Grand Total</label>
                            <div class="col-md-7">
                                <?php echo $this->Form->input('grandtotal', array('class'=>'form-control')); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-5 control-label">Pay</label>
                            <div class="col-md-7">
                                <?php echo $this->Form->input('pay', array('class'=>'form-control')); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-5 control-label">Balance</label>
                            <div class="col-md-7">
                                <?php echo $this->Form->input('bal', array('class'=>'form-control')); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- ---- END ROWS -------- -->
            
                
                    
                
            
        </div>
        <div class="panel-footer clearfix">
            <div class="pull-right">
                <?php echo $this->Form->submit('Done',array('class'=> 'btn btn-default')); ?>
                <?php echo $this->Form->end();?>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
    $('#datePicker').datepicker({
        format:'dd/mm/yyyy',
        todayHighlight:true,
        autoclose:true
    });
    $('#datePicker').datepicker("setDate", "0");
});
</script>