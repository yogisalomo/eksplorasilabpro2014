<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Verify extends Controller_Application 
{
	public function action_index()
    {
        $this->template->content = View::factory('verify');
    }
}