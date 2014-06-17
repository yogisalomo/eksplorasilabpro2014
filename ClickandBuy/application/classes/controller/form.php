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
					$_POST['hash'] = md5(rand(0,1000)); 
					if (Model_User::verification_step($_POST['email'],$_POST['hash'])) {
						$errors[] = 'A verification email has been sent to your email';
						Model_User::sign_up($_POST);
					}
					else
						$errors[] = 'Please check your email again';
					// Cookie::set('username', Model_User::sign_in($_POST['username'], $_POST['password']));
					// $this->template->content = View::factory('welcome');
				}
			}
			else
				$errors[] = 'The passwords don\'t match';
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
