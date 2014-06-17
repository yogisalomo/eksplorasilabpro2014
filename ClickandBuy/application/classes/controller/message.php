<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Message extends Controller_Application {

	// display main page
	public function action_index() {
		$username = $this->request->param('username');
		if ($username !== null) {
			if ($this->request->method() == Request::POST)
				Model_User::add_message(Cookie::get('username'), $username, $_POST['context']);
			$messages = Model_User::get_message2(Cookie::get('username'), $username);
		}
		else
			$messages = Model_User::get_message(Cookie::get('username'));

    	$this->template->content = View::factory('message')
    		->set('username', $username)
    		->set('messages', Model_User::get_message(Cookie::get('username')));
	}
}