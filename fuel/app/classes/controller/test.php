<?php

class Controller_Test extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Test &raquo; Index';
		$this->template->content = View::forge('test/index', $data);
	}

	public function action_view()
	{
		$data["subnav"] = array('view'=> 'active' );
		$this->template->title = 'Test &raquo; View';
		$this->template->content = View::forge('test/view', $data);
	}

}
