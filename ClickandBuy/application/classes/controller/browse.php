<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Browse extends Controller_Application {
	
	public function action_index() {
		if ($this->request->method() == Request::POST)
			$category = $_POST['category'];
		else
			$category = $this->request->param('category');

		if ($category !== null)
			$items = Model_Item::get_all_item_by_category($category);
		else {
			$category = Model_Item::get_all_category();
			$items = Model_Item::get_all_item();
		}
		$this->template->content = View::factory('browse')
			->set('items', $items)
			->set('category', $category);
	}
}