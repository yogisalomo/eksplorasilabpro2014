<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Verify extends Controller_Application {
	public function action_index() {
		$this->template->content = View::factory('verify')
			->bind('heading', $heading)
			->bind('paragraph', $paragraph);
		$heading = 'Invalid Page !';
		$paragraph = 'The url is either invalid or you already have activated your account.';
		if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])) {
		    $search = Model_User::is_available_by_email_and_hash($_GET['email'], $_GET['hash']);   
		    if ($search) {
		        // We have a match, activate the account
		        $search = Model_User::active(Model_User::get_data_by_email($_GET['email'])['username']);
		        $heading = 'Thank you';
		        $paragraph = 'Your account has been activated, you can now login';
		    }
		}
    }
}