$(document).ready(function(){	
	$("#contactForm").submit(function(event){
		$('#page-1').show();
         $('#rd_bk').hide();
		submitForm();
		return false;
	});

	function submitForm(){
	 $.ajax({
		type: "POST",
		url: "<?php echo site_url('welcome/mailsubmit'); ?>",
		cache:false,
		data: {bar: $("#email").val()},
		success: function(response){
			$("#contact").html(response)
			$("#staticBackdrop").modal('hide');
		},
		error: function(error){
			console.log(error);
		}
	});
}

});