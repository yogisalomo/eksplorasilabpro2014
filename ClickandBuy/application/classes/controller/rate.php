<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Rate extends Controller_Application {

	public function action_index() {
		$username = $this->request->param('username');
		$level = $this->request->param('level');
		Model_User::update_level($username, $level, ((int) Model_User::get_level($username, $level)[0]['level '.$level])+1);
		$this->request->redirect($_SERVER['HTTP_REFERER']);
	}
} // End Welcome
