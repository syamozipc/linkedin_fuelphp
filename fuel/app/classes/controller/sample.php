<?php

class Controller_Sample extends Controller_Template
{
	public function action_index()
	{
		$data['news'] = View::forge('parts/news');
		$data['news']->set('header', '大統領就任');
		$data['name'] = '斎藤';
		$this->template->title = 'お問い合わせ';
		$this->template->content = View::forge('sample/index', $data);
	}

	public function action_check()
	{
		$this->template->title = 'お問い合わせ';
		$this->template->content = View::forge('sample/check');
	}

	public function action_thanks()
	{
		$this->template->title = 'お問い合わせ';
		$this->template->content = View::forge('sample/thanks');	}
}