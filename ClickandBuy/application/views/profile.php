<div class="jumbotron">
	<div style="width:200px; display:inline-block">
		<p><?php
			if (file_exists('data/'.$profile['username'].'.jpg')) 
				echo HTML::image('data/'.$profile['username'].'.jpg', array('width' => 100));
			else
				echo HTML::image('media/image/user.png', array('width' => 100));
		?></p>
		<p>Name : <?php echo $profile['first_name']; ?></p>
		<p>Level:
			<div style="position: relative; padding:1% 2%; overflow:hidden;" class="fakewindowcontain">
				<?php
					$profile['level'] = (int)(($profile['level 1']+(int)$profile['level 2']*2+(int)$profile['level 3']*3+(int)$profile['level 4']*4+(int)$profile['level 5']*5)/($profile['level 1']+$profile['level 2']+$profile['level 3']+$profile['level 4']+$profile['level 5']));
					for ($i = 1; $i <= $profile['level']; ++$i) {
						if(Cookie::get('username') != $profile['username']) echo '<a href="'.URL::base().'rate/'.$profile['username'].'/'.$i.'">';
						echo HTML::image('media/image/star_high.png', array('class' => 'star', 'width' => 25));
						if(Cookie::get('username') != $profile['username']) echo '</a>';
					}
					for ($i = $profile['level']+1; $i <= 5; ++$i) {
						if(Cookie::get('username') != $profile['username']) echo '<a href="'.URL::base().'rate/'.$profile['username'].'/'.$i.'">';
						echo HTML::image('media/image/star_low.png', array('class' => 'star', 'width' => 25));
						if(Cookie::get('username') != $profile['username']) echo '</a>';
					}
				?> 
			</div>
		</p>
		<?php if(Cookie::get('username') != $profile['username']) {?><a id="message-show" class="btn btn-primary btn-lg"> Send a message » </a> <?php }; ?>
		<?php echo Form::open(URL::site().'../message/'.$profile['username'], array('id' => 'message-form', 'enctype' => 'multipart/form-data')); ?>
			<p><textarea type="text" name="context"></textarea></p>
			<p><input type="submit" value="Send"/></p>
		<?php echo Form::close(); ?>
	</div>
	<div style="display:inline-block">
	</div>
</div>
