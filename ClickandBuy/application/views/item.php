<div class="jumbotron">
	<h1><?php foreach ($items as $item) { echo $item['title_item']."<br/>"; ?></h1>
	<?php echo "Description : ".$item['description']; ?> <br/>
	<?php echo "Harga : Rp ".$item['price']; ?> <br/>
	<?php echo HTML::image('data/'.$item['username'].'_'.Inflector::underscore($item['timestamp']).'.jpg', array('width' => 100)); ?><br/>
	<hr/>
	<?php echo date('Y-m-d H:i:s', $item['timestamp']);  ?> 
	<?php } ?> 
		<?php foreach ($comments as $comment) { ?> 
			<hr />
			From : <?php echo $comment['commentator']; ?> <br/>
			<?php echo $comment['comment']; ?> <br/>
			Date : <?php echo date('Y-m-d H:i:s', $comment['comment_timestamp']); ?> 
		<?php } ?>
    <form id="upload-form" action="<?php echo URL::site('upload/upload_comment') ?>" method="post" enctype="multipart/form-data">
		<input type="text" class="form-control" placeholder="Comment" name="comment">
		<input type="submit" name="submit" id="submit" value="Send!" />
		<input type="hidden" value="<?php echo $item['username']; ?>" name="username">
		<input type="hidden" value="<?php echo $item['timestamp']; ?>" name="timestamp">
    </form>
</div>