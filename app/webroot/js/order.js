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
}

function removeOrderRow(row = null) {
	if(row) {
		$("#row"+row).remove();
		//subAmount();
	} else {
		alert('error! Refresh the page again');
	}
}