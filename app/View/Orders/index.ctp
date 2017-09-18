<?php echo $this->Html->script('jquery.min'); ?>
<!-- Include Bootstrap Datepicker -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

<div class="container">
    <div class="panel panel-default">    
        <div class="panel-heading"><i class="fa fa-plus fa-fw"></i>Add Order</div>
        <div class="panel-body">            
            <?php echo $this->Form->create('Bill',array('class'=> 'form-horizontal', 'inputDefaults'=>array('label'=>false)));?>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-3  control-label">Customer</label>
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
            <table class="table" id="">
                <thead>
                    <tr>			  			
                        <th style="width:15%;">Pr code</th>
                        <th style="width:35%;">Title</th>
                        <th style="width:15%;">Price</th>
                        <th style="width:10%;">Quantity</th>			  			
                        <th style="width:15%;">Total</th>			  			
                        <th style="width:10%;"></th>
                    </tr>
                </thead>
                <tbody>
		
                    <tr>			  				
                        <td style="padding-left:5px;">                    
                            <?php echo $this->Form->input('ordprcode', array('class'=>'form-control')); ?>                            
                        </td>

                        <td style="padding-left:5px;">			  					                                
                            <?php echo $this->Form->input('ordtitle', array('class'=>'form-control')); ?>
                        </td>

                        <td style="padding-left:5px;">                            
                            <?php echo $this->Form->input('ordunitprice', array('class'=>'form-control')); ?>                            
                        </td>

                        <td style="padding-left:5px;">	                                                        
                            <?php echo $this->Form->input('ordquantity', array('class'=>'form-control')); ?>	                                                    
                        </td>

                        <td style="padding-left:5px;">			  					
                            <?php echo $this->Form->input('ordrowtotal', array('class'=>'form-control')); ?>	  					
                        </td>

                        <td>
                            <?php echo $this->Form->button('<i class="fa fa-trash"></i>',array('class'=>'btn btn default','type'=>'button'));?>
                            <!--button class="btn btn-default removeProductRowBtn" type="button" id="removeProductRowBtn" onclick=""><i class="glyphicon glyphicon-trash"></i></button-->
                        </td>
                    </tr>
                </tbody>			  	
            </table>   
            <div class="row top-margin">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-4  control-label">Sub Total</label>
                        <div class="col-md-8">
                            <?php echo $this->Form->input('subamount', array('class'=>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4  control-label">CGST</label>
                        <div class="col-md-8">
                            <?php echo $this->Form->input('cgst', array('class'=>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4  control-label">SGST</label>
                        <div class="col-md-8">
                            <?php echo $this->Form->input('sgst', array('class'=>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4  control-label">Total Amount</label>
                        <div class="col-md-8">
                            <?php echo $this->Form->input('totalamount', array('class'=>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4  control-label">Discount</label>
                        <div class="col-md-8">
                            <?php echo $this->Form->input('discount', array('class'=>'form-control')); ?>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-4  control-label">Grand Total</label>
                        <div class="col-md-8">
                            <?php echo $this->Form->input('grandtotal', array('class'=>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4  control-label">Paid Amount</label>
                        <div class="col-md-8">
                            <?php echo $this->Form->input('paidamount', array('class'=>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4  control-label">Due</label>
                        <div class="col-md-8">
                            <?php echo $this->Form->input('dueamount', array('class'=>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4  control-label">Payment Mode</label>
                        <div class="col-md-8">
                            <?php echo $this->Form->input('paymentmode', array('class'=>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4  control-label">Payment Status</label>
                        <div class="col-md-8">
                            <?php echo $this->Form->input('paymentstatus', array('class'=>'form-control')); ?>
                        </div>
                    </div>
                </div>
            </div>         
        </div>

        <div class="panel-footer clearfix">
            <div class="pull-left">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-6">
                        <?php echo $this->Form->button('Add Row',array('class'=> 'btn btn-default','type'=>'button')); ?>
                        </div>
                        <div class="col-md-6">
                        <?php echo $this->Form->button('Reset',array('class'=> 'btn btn-default','type'=>'button')); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pull-right">
                <?php echo $this->Form->submit('Save',array('class'=> 'btn btn-default')); ?>
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