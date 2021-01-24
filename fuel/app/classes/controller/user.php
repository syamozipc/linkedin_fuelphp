<?php

class Controller_User extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'User &raquo; Index';
		$this->template->content = View::forge('user/index', $data);
	}

	public function action_create()
	{
		if (Input::method() == 'POST') {
			$auth = Auth::instance();
			$auth->create_user(Input::post('username'), Input::post('password'), 'test@example.com');
			Response::redirect('user/index');
		}
		$this->template->title = 'User &raquo; Create';
		$this->template->content = View::forge('user/create');
	}

	public function action_login()
	{
		if (Input::method() == 'POST') {
			if (Auth::login(Input::post('username'), Input::post('password'))) {
				Response::redirect('admin/index');
			}
		}
		$data["subnav"] = array('login'=> 'active' );
		$this->template->title = 'User &raquo; Login';
		$this->template->content = View::forge('user/login', $data);
	}

	public function action_logout()
	{
		Auth::logout();
		Response::redirect('user/login');
	}

}
