<div class="jumbotron">
	<div id="error">
		<?php if (isset($errors)) foreach ($errors as $error) {
				echo '<div class="ui-state-error ui-corner-all" style="text-align: center; width: 500px; margin-left: auto; margin-right: auto;">'.$error.'</div>';
			}
		?>
	</div>
	<h1>Sign Up</h1>
	<?php echo Form::open(URL::site().'../form/sign_up', array('id' => 'signup', 'enctype' => 'multipart/form-data')); ?>
		<input type="text" class="form-control" placeholder="Username" name="username">
		<input id="password" type="password" class="form-control" placeholder="Password" name="password">
		<input id="repassword" type="password" class="form-control" placeholder="Reenter Password" name="reenter_password">
		<input type="text" class="form-control" placeholder="Email" name="email">
		<input type="text" class="form-control" placeholder="First Name" name="first_name">
		<input type="text" class="form-control" placeholder="Surname" name="surname">
		<input type="text" class="form-control" placeholder="Address, City, Country" name="address">
		<p>
			By clicking Sign Up, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.
		</p>
		<button type="submit" class="btn btn-warning">Sign Up</button>
	<?php echo Form::close(); ?>
</div>