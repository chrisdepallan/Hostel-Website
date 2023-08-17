<!DOCTYPE html>
<html>
<head>
	<title>Messages</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#load-messages").on("click", function(){
				var userId = $(this).data("userid");
				arr = userId.split(" ");
				
				$.ajax({
					url: "get-messages.php",
					method: "GET",
					data: {sender: arr[0], receiver: arr[1]},
					success: function(data){
						$("#message-container").html(data);
					}
				});
			});
		});
	</script>
</head>
<body>
	<div id="message-container">
		<!-- Messages will be displayed here -->
	</div>
	<button id="load-messages"  data-userid="5 3">  Load Messages</button>
</body>
</html>
