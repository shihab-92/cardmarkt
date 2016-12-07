$(document).ready(function (argument) {
	$(".form-cardagile form").validate({
		rules: {
			Password: "required",
			Confirm_Password: {
				equalTo: "#Password"
			}
		}
	});
});