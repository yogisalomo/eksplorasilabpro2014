<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Wishlist extends Controller_Application {

    // display wishlist
    public function action_index() {
        $category_option = Model_Item::get_all_category();
        $category_option['0'][] = 'Create new category';
        $this->template->scripts[] = 'category';
        $this->template->content = View::factory('upload_wishlist')
            ->set('wishlist_items', Model_User::get_wishlist_by_username(Cookie::get('username')))
            ->set('category', $category_option['0']);
    }
    // upload wishlist
    public function action_upload_wishlist() {
        Model_User::add_wish_list(Cookie::get('username'), $_POST['category'], $_POST['item'], $_POST['price']);
        $this->request->redirect($_SERVER['HTTP_REFERER']); 
    }
    // grating wishlist
    public function action_grant_wishlist() {
        Model_User::add_message(Cookie::get('username'), $_POST['username'], 
            'Your price for '.$_POST['item'].'. suits me. When can we meet?');
        $this->request->redirect('message/'.$_POST['username']);
    }
}