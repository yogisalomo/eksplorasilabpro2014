<!-- Main component for a primary marketing message or call to action -->
<div class="jumbotron">
	<h1>List of Items</h1>
	<?php if (is_array($category)) { ?>
		<?php if ($category != null) { ?>
		<?php echo Form::open(URL::site().'../browse/', array('id' => 'signup', 'enctype' => 'multipart/form-data')); ?>
		<select id="category-select" name="category">
        <?php foreach ($category as $cat) { 
            echo '<option value="'.$cat["category"].'">'.$cat["category"].'</option>';
        }?>
        </select>
        <p><input id="upload" type="submit" name="submit" id="submit" value="Browse" /></p>
		<?php echo Form::close(); ?>
		<?php }?>
	<?php } ?>
	<?php foreach ($items as $item) { ?>
			Title : <?php echo $item['title_item']; ?><br/>
			Description : <?php echo $item['description']; ?><br/>
			<a href='<?php echo URL::base().'profile/'.$item['username'].'/'.$item['timestamp']; ?>'>
				<?php echo HTML::image('data/'.$item['username'].'_'.Inflector::underscore($item['timestamp']).'.jpg', array('width' => 100)); ?>
			</a><br/>
			Username : <?php echo HTML::anchor('/profile/'.$item['username'], $item['username']); ?><br/>
			<hr/>
	<?php } ?>
</div>
