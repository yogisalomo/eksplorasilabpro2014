<div class="jumbotron">
	<?php echo Form::open(URL::site().'../wishlist/upload_wishlist', array(
		'id' => 'upload_wishlist',
		'enctype' => 'multipart/form-data',
	)); ?>
		<h1>Wishlist</h1>
		<input type="text" class="form-control" placeholder="Wishlist Item" name="item">
        <select id="category-select" name="category">
        <?php foreach ($category as $cat) { 
            echo '<option value="'.$cat.'">'.$cat.'</option>';
        }?>
        </select>
        <input id="category" type="hidden" class="form-control" placeholder="Category" name="category">
		<input type="text" class="form-control" placeholder="Price" name="price">
		<button type="submit" class="btn btn-warning">Wish It !</button>
	<?php echo Form::close(); ?>
	<?php
		foreach ($wishlist_items as $item) {
			echo $item['category'].'<br/>';
			echo $item['item'].'<br/>';
			echo $item['price'].'<br/>';
		}
	?>
</div>