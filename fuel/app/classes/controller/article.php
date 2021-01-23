<?php

class Controller_Article extends Controller_Template
{

	public function action_index()
	{
		$data['rows'] = Model_Article::find('all');
		$this->template->title = 'Article &raquo; Index';
		$this->template->content = View::forge('article/index', $data);
	}

}
