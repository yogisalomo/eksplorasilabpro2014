<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Profile extends Controller_Application {

	// display main page
	public function action_index() 
	{
		$username = $this->request->param('username');
		if ($username == null)
			$username = Cookie::get('username');

		$profile = Model_User::get_data($username);
		if ($profile !== null) 
		{
			$timestamp = (int) $this->request->param('timestamp');
			if ($timestamp != null)
				$this->template->content = View::factory('item')
					->set('items', Model_Item::get_info($username, $timestamp))
					->set('comments', Model_Item::get_comment($username, $timestamp));
			else 
			{
				$this->template->scripts[] = 'profile';
				if ($username !== Cookie::get('username'))
					$this->template->scripts[] = 'star';
				$this->template->content = View::factory('profile')
					->set('profile', $profile);
			}
		}
		else
			$this->template->content = 'where r u going?';
	}
}