<div class="jumbotron">
	<?php if (isset($error)) { 
		if ($error === "NONE") {?>
		<div class="alert alert-warning">
			Change(s) ha(s/ve) been saved.
		</div>
	<?php } else { ?>
		<div id="error">
			<?php echo $error; ?>
		</div>
	<?php }} ?>
	<h1>Upload your avatar</h1>
    <form id="upload-form" action="<?php echo URL::site('settings/upload_settings') ?>" method="post" enctype="multipart/form-data">
    	<?php
			if (file_exists('data/'.$data['username'].'.jpg')) 
				echo HTML::image('data/'.$data['username'].'.jpg', array('width' => 100));
			else
				echo HTML::image('media/image/user.png', array('width' => 100));
		?>
        <p>Username : <?php echo $data['username']; ?></p>
		<p>Password : <input type="password" class="form-control" placeholder="<?php echo "Password"?>" name="password"></p>
		<p>Re-Password : <input type="password" class="form-control" placeholder="<?php echo "Reenter Password"?>" name="reenter_password"></p>
		<p>Reputation Level : 
		<?php
			$data['level'] = (int)(($data['level 1']+(int)$data['level 2']*2+(int)$data['level 3']*3+(int)$data['level 4']*4+(int)$data['level 5']*5)/($data['level 1']+$data['level 2']+$data['level 3']+$data['level 4']+$data['level 5']));		
			for ($i = 1; $i <= $data['level']; ++$i)
				echo HTML::image('media/image/star_high.png', array('class' => 'star', 'width' => 25));
			for ($i = $data['level']+1; $i <= 5; ++$i)
				echo HTML::image('media/image/star_low.png', array('class' => 'star', 'width' => 25));
		?></p>
		<input type="text" class="form-control" placeholder="<?php echo $data['first_name']?>" name="first_name">
		<input type="text" class="form-control" placeholder="<?php echo $data['surname']?>" name="surname">
		<input type="text" class="form-control" placeholder="<?php echo $data['address']?>" name="address">
        <p><input type="file" name="avatar" id="avatar" /></p>
        <p><button type="submit" name="submit" id="submit" value="Change" />Change</button></p>
    </form>
</div>