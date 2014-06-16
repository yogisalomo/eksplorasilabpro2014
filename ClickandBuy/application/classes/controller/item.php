<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Item extends Controller_Application {
	
	public function action_index() {
		$username = $this->request->param('id');
		if ($username != null)
			$this->template->content = View::factory('profile')
				->set('profile', Model_User::get_data($username));
	}
}