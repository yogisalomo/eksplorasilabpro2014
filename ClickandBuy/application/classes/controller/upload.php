<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Upload extends Controller_Application {

    // display item
    public function action_index() {
        $wishlist_category = array();
        $wishlist = array();
        foreach (Model_User::get_all_wishlist_category() as $_wishlist_category) {
            $wishlist_category[] = $_wishlist_category["category"];
            $wishlist[$_wishlist_category["category"]] = Model_User::get_wishlist_by_category($_wishlist_category["category"]);
        }

        $category_option = Model_Item::get_all_category();
        $this->template->scripts[] = 'category';
        $this->template->scripts[] = 'wishlist-granting';
        $this->template->content = View::factory('upload_item')
            ->set('wishlist_category', $wishlist_category)
            ->set('wishlist', $wishlist)
            ->set('category', $category_option);
    }
    // upload item
    public function action_upload_item() {
        $time = time();
        if (! Model_Item::is_available(Cookie::get('username'), $time)) {
            $view = View::factory('upload_item');
            if (
                ! Upload::valid($_FILES['item']) OR
                ! Upload::not_empty($_FILES['item']) OR
                ! Upload::type($_FILES['item'], array('jpg', 'jpeg', 'png', 'gif'))) {
                $view->error = 'There was a problem while uploading the image. Make sure it is uploaded and must be JPG/PNG/GIF file.';
            }
            else {
                Upload::save($_FILES['item'], Cookie::get('username').'_'.$time.'.jpg', 'data/', 0777);
                Model_Item::add_item(Cookie::get('username'), $time, $_POST);
            }
        }
        $this->request->redirect($_SERVER['HTTP_REFERER']); 
    }
    // upload comment
    public function action_upload_comment() {
        Model_Item::add_comment($_POST['username'], $_POST['timestamp'], Cookie::get('username'), $_POST['comment']);
        $this->request->redirect($_SERVER['HTTP_REFERER']); 
    }
}