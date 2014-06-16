<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Settings extends Controller_Application {

    // display setting
    public function action_index() {
        $this->template->content = View::factory('update_profile')->set('data', Model_User::get_data(Cookie::get('username')));
    }

    // upload setting
    public function action_upload_settings() {
        $view = View::factory('update_profile');
        $error = 'NONE';
        if ($_POST['reenter_password'] !== $_POST['password'])
            $error = 'The passwords don\'t match';

        if (($this->request->method() == Request::POST) && ($error === 'NONE')) {
            if ($_POST['password'] !== "")
                Model_User::update_password(Cookie::get('username'), $_POST['password']);
            if ($_POST['first_name'] !== "")
                Model_User::update_first_name(Cookie::get('username'), $_POST['first_name']);
            if ($_POST['surname'] !== "")
                Model_User::update_surname(Cookie::get('username'), $_POST['surname']);
            if ($_POST['address'] !== "")
                Model_User::update_address(Cookie::get('username'), $_POST['address']);

            if (
                ! Upload::valid($_FILES['avatar']) OR
                ! Upload::not_empty($_FILES['avatar']) OR
                ! Upload::type($_FILES['avatar'], array('jpg', 'jpeg', 'png', 'gif'))) {
                $view->error = 'There was a problem while uploading the image. Make sure it is uploaded and must be JPG/PNG/GIF file.';
            }
            else {
                Upload::save($_FILES['avatar'], Cookie::get('username').'.jpg', 'data/', 0777);
            }
        }
        $this->template->content = View::factory('update_profile')
            ->set('data', Model_User::get_data(Cookie::get('username')))
            ->set('error', $error);
    }
}