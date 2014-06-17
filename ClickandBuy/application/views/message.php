<div class="jumbotron">
	<h2><center>Private Message Inbox</center></h2>
	<center>
		<?php foreach ($messages as $message) { ?>
			<p><?php echo $message['context']; ?></p>
			<p><?php echo $message['sender']; ?>
			<?php if (!isset($username)) { echo 'to '.$message['recipient'];} ?></p>
			<p><?php echo Date::fuzzy_span($message['timestamp']); ?></p>
		<hr>
		<?php } ?>
		<?php if (isset($username)) { echo Form::open(URL::site().'../message/'.$username, array('id' => 'message-form', 'enctype' => 'multipart/form-data')); ?>
			<p><textarea type="text" name="context"></textarea></p>
			<p><input type="submit" value="Send"/></p>
		<?php echo Form::close(); } ?>
	</center>
</div>