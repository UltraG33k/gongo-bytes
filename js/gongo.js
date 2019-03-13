$(function() {
	
	/*
	 * KeyUp listener for the input field
	 */
	$("#gongo-in").on('keyup', function() {
		gongo($(this).val());
	});
	
	/*
	 * Change listener for the input field. In case someone is using the up-down arrows
	 */
	$("#gongo-in").on('change', function() {
		gongo($(this).val());
	});
	
	/*
	 * The actual Gongo function, an AJAX request to the server side
	 */
	function gongo(normal_int) {
		if(normal_int != "") {
			$("#gongo-out").val("Loading...");
			$.ajax({
				url: "./gongo/gongo.php",
				type: "POST",
				data: {number: normal_int},
				success: function(result) {
					var gongo_result = result * 1;
					$("#gongo-out").attr("type", "number");
					$("#gongo-out").val(gongo_result);
				}
			});
		} else {
			$("#gongo-out").attr("type", "text");
			$("#gongo-out").val("");
		}
	}
	
	weirdBackgroundChange = function() {
		var d = new Date();
		var h = d.getHours();
		var m = d.getMinutes();
		var s = d.getSeconds();
				
		hHour = Math.floor(255 % (h + 1));
		hMinutes = Math.floor(255 % (m + 1));
		hSeconds = Math.floor(255 % (s + 1));
		
		bodyColour = "rgb(" + hHour + ", " + hMinutes + ", " + hSeconds + ")";
		
		console.log(bodyColour);
		
		$("body").css("background-color", bodyColour);
		setTimeout(weirdBackgroundChange, 1000);
	};
	
	weirdBackgroundChange();
	
});