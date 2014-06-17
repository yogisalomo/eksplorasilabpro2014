<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo URL::site(); ?>">Click and Buy</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="<?php echo URL::base();?>">Home</a></li>
				<?php if (Cookie::get('username')): ?>
					<li><a href="<?php echo URL::base();?>profile/">Profile</a></li>
					<li><a href="<?php echo URL::base();?>upload/">Upload Item</a></li>
				<?php endif;?>
				<li><a href="<?php echo URL::base();?>browse/">Browse</a></li>
			</ul>
			<?php if (Cookie::get('username')): ?>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo Cookie::get('username'); ?><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo URL::base()."wishlist";?>">Wishlist</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">Account</li>
							<li><a href="<?php echo URL::base();?>settings">Settings</a></li>
							<li><a href="<?php echo URL::base();?>message">Private Message</a></li>
							<li><a href="<?php echo URL::base();?>form/sign_out">Sign Out</a></li>
						</ul>
					</li>
				</ul>
			<?php else :?>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo URL::base();?>form/sign_up">Sign Up</a></li>
				</ul>
				<?php echo Form::open(URL::site().'../form/sign_in', array(
					'id' => 'login_form',
					'enctype' => 'multipart/form-data',
					'class' => 'navbar-form navbar-right' 
					)); ?>
					<input type="text" class="form-control" placeholder="Username" name="username">
					<input type="password" class="form-control" placeholder="Password" name="password">
					<button type="submit" class="btn btn-primary">Login</button>
				</form>
			<?php endif; ?>
		</div><!--/.nav-collapse -->
	</div>
</div>