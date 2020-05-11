function SubmitFormData() {
	var amount = $("#amount").val();
	var b_no = $("#b_no").val();
	var b_title = $("#b_title").val();
	var quantity = $("#quantity").val();
	
	

	$.post("billentry.php", { amount: amount, b_no: b_no, b_title: b_title, quantity: quantity},
	   function(data) {
		 $('#results').html(data);
		 $('#myForm')[0].reset();
		 
	
	   });
	   
	   
	   
	   
	  
	   
	   
}





