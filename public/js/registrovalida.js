

	$(document).ready(function() {
	    $(".btn-submit").click(function(e){
	    	e.preventDefault();


	    	var _token = $("input[name='_token']").val();
	    	var first_name = $("input[name='first_name']").val();
	    	var last_name = $("input[name='last_name']").val();
	    	var email = $("input[name='email']").val();
	    	var address = $("textarea[name='address']").val();


	        $.ajax({
	            url: "/my-form",
	            type:'POST',
	            data: {_token:_token, first_name:first_name, last_name:last_name, email:email, address:address},
	            success: function(data) {
	                if($.isEmptyObject(data.error)){
	                	alert(data.success);
	                }else{
	                	printErrorMsg(data.error);
	                }
	            }
	        });


	    });


	    function printErrorMsg (msg) {
			$(".print-error-msg").find("ul").html('');
			$(".print-error-msg").css('display','block');
			$.each( msg, function( key, value ) {
				$(".print-error-msg").find("ul").append('<li>'+value+'</li>');
			});
		}
	});
