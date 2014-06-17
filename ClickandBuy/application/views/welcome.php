<!-- Main component for a primary marketing message or call to action -->
<div class="jumbotron">
	<?php
		$to = "opelhoward@gmail.com";
		$subject = "Test mail";
		$message = "Hello! This is a simple email message.";
		$from = "someonelse@example.com";
		$headers = "From:" . $from;
		echo mail($to,$subject,$message,$headers);
	?>
	<h1>Welcome</h1>
	<p>Andarias Silvanus - 13512022</p>
	<p>Willy - 13512070</p>
</div>