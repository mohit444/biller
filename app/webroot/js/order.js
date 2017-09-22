function addRow(){
    $('#addRowBtn').button('loading');

    var tableLength = $("#orderTable tbody tr").length;
    var tableLastRow;
	var arrayNumber;
    var count;
    
    if(tableLength > 0){
        tableLastRow = $("#orderTable tbody tr:last").attr('id');
        //alert("tableLastRow = "+tableLastRow);
        arrayNumber = $("#orderTable tbody tr:last").attr('class');
        count = tableLastRow.substring(3);
        count = Number(count) + 1;
        arrayNumber = Number(arrayNumber) + 1;
    }
    else{
        count = 1;
        arrayNumber = 0;
    }
    
    $('#addRowBtn').button('reset');
    "<?php echo $this->Form->create('Order',array('class'=> 'form-horizontal', 'inputDefaults'=>array('label'=>false)));?>";
    var tr = '<tr id="row'+count+'" class="'+arrayNumber+'">'+
                '<td style="padding-left:5px;">'+               
                    "<?php echo $this->Form->input('ordprcode', array('class'=>'form-control')); ?>"+          
                '</td>'+
                '<td style="padding-left:5px;">'+
                    '<?php echo $this->Form->input("ordtitle", array("class"=>"form-control")); ?>'+
                '</td>'+
                '<td style="padding-left:5px;">'  +                       
                     '<?php echo $this->Form->input("ordunitprice", array("class"=>"form-control"));?>' +
                                            
                '</td>'+
                '<td style="padding-left:5px;">'+	                                                        
                    '<?php echo $this->Form->input("ordquantity", array("class"=>"form-control")); ?>'+	  
                    '<input type="number" class="form-control" />'+                                                  
                '</td>'+
                '<td style="padding-left:5px;">'+			  					
                    '<?php echo $this->Form->input("ordrowtotal", array("class"=>"form-control")); ?>'+	  					
                '</td>'+
                
    '</tr>';
    "<?php echo $this->Form->end();?>";
    if(tableLength > 0) {							
        $("#orderTable tbody tr:last").after(tr);
    } else {				
        $("#orderTable tbody").append(tr);
    }
} // addRow

function removeOrderRow(row = null) {
	if(row) {
		$("#row"+row).remove();
		//subAmount();
	} else {
		alert('error! Refresh the page again');
	}
}