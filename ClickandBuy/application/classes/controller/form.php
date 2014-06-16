<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Form extends Controller_Application {

	public function action_sign_up() {
		$this->template->scripts[] = 'sign_up';
		$this->template->content = View::factory('sign_up')->bind('errors', $errors);
		if ($this->request->method() == Request::POST) {
			$errors = array();
			if ($_POST['reenter_password'] == $_POST['password']) {
				if (Model_User::is_available($_POST['username']))
					$errors[] = 'Username Available';
				else {
					Model_User::sign_up($_POST);
					if (Model_User::verification_step($_POST['email'],$_POST['username'],$_POST['password']))
						$errors[] = 'A verification email has been sent to your email';
					else
						$errors[] = 'Please check again your email';
					//Cookie::set('username', Model_User::sign_in($_POST['username'], $_POST['password']));
					//$this->template->content = View::factory('welcome');
				}
			}
			else
				$errors[] = 'The passwords are not same';
		}
	}
	// sign in
	public function action_sign_in() {
		Cookie::set('username', Model_User::sign_in($_POST['username'], $_POST['password']));
		$this->request->redirect($_SERVER['HTTP_REFERER']);
	}
	// sign out
	public function action_sign_out() {
		Cookie::delete('username');
		$this->request->redirect($_SERVER['HTTP_REFERER']);
	}
} // End Welcome
