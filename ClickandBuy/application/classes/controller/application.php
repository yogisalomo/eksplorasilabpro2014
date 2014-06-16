<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Application extends Controller_Template {
	
	public function before() {
		parent::before();

		View::set_global('site_name', Kohana::$config->load('site')->get('name'));
		$this->template->content = '$this->template->content not assigned';
		$this->template->styles = array();
		$this->template->scripts = array();
	}
}