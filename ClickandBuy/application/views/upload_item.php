<div class="jumbotron">
	<h1>Upload your item details</h1>
    <form id="upload-form" action="<?php echo URL::site('upload/upload_item') ?>" method="post" enctype="multipart/form-data">
        <select id="wishlist-select" >
            <option id="null-option"></option>
            <?php foreach ($wishlist_category as $_wishlist_category) { ?>
            <optgroup label="<?php echo $_wishlist_category ?>">
                <?php foreach ($wishlist[$_wishlist_category] as $_wishlist) { ?>
                    <option username=<?php echo $_wishlist["username"];?> category=<?php echo $_wishlist["category"];?> item=<?php echo $_wishlist["item"];?> price=<?php echo $_wishlist["price"];?>><?php echo $_wishlist["item"];?></option>
                <?php }?>
            </optgroup>
            <?php }?>
        </select> 
        <input id="title-item" type="text" class="form-control" placeholder="Title" name="title_item">
        <select id="category-select" name="category">
        <?php foreach ($category as $cat) { 
            echo '<option value="'.$cat["category"].'">'.$cat["category"].'</option>';
            }
            echo '<option value="'.'Create new category'.'">'.'Create new category'.'</option>';
        ?>
        </select>
        <input id="category" type="hidden" class="form-control" placeholder="Category" name="category">
        <input id="description" type="text" class="form-control" placeholder="Item Description" name="description">
		<input id="price" type="text" class="form-control" placeholder="Price" name="price">
        <p><input id="file" type="file" name="item" id="file" /></p>
        <p><input id="upload" type="submit" name="submit" value="Upload" /></p>
    </form>
    <form id="wishlist-form" action="<?php echo URL::site('wishlist').'/grant_wishlist' ?>" method="post" enctype="multipart/form-data">
        <input id="username-wish" type="hidden" class="form-control" placeholder="Category" name="username">
        <input id="item-wish" type="hidden" class="form-control" placeholder="Item Description" name="item">
        <p><input id="grant" type="submit" name="submit" value="Grant"/></p>
    </form>
</div>