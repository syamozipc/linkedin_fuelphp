<?php

class Controller_Admin extends Controller_Template
{
	public function before()
	{
		if (!Auth::check()) {
			Response::redirect('user/login');
		}
	}

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		// $this->template->title = 'Admin &raquo; Index';
		return View::forge('admin/index', $data);
	}

	public function action_view()
	{
		$data["subnav"] = array('view'=> 'active' );
		// $this->template->title = 'Admin &raquo; View';
		return View::forge('admin/view', $data);
	}

}
