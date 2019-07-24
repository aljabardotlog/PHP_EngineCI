@section('js_proses')
<script>
$('#submit').on('click',function(){
	var email = $("#inputEmail").val();
	var password = $("#inputPassword").val();
	if (email=='' || password=='') {
		jQuery("div#err_msg").show();
		jQuery("div#msg").html("Field Tidak Boleh Kosong");
	} else {
		$.ajax({
			type : "POST",
			url   : '{{ base_url() }}Login',
			data : {
					email : email, 
					password : password,
				},
            success: function(result){
                   if(result!=0){  
		            window.location.replace(result);  
		            }  
		            else  
		                jQuery("div#err_msg").show();  
		                jQuery("div#msg").html("Salah Email atau Password");    
                	}
            });
    }
    	return false;
});

</script>
@show