$("form").submit(function (e) {
	var postData = $(this).serializeArray();
	
	$.ajax({
		type:"POST",
		url: "/api/Subscription/subscribe",
		data: postData,
		dataType: "json",
		success: function(data, textStatus) {
			$pass = data.success;
			$result = data.result;
			$redirect = data.redirect;
			console.log(data);
			if($pass == 1) {
				if($redirect == 1) {
					window.location = '/newsletter/subscribed';
				}
			}
			else {
				$("#email-group").addClass("has-error");
				$("#email-warning").html($result);
			}
		},
	});
	e.preventDefault();
})

$("#iEmail").click(function(){
	$("#email-group").removeClass("has-error");
	$("#email-warning").html('');
});