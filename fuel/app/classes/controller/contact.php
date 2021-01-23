<?php

use Fuel\Core\Response;

class Controller_Contact extends Controller_Template {

	public function action_index()
	{
		$val = Validation::forge();

		$val->add('myname', 'お名前')
			->add_rule('required');
		$val->add('email', 'メールアドレス')
			->add_rule('required')
			->add_rule('valid_email');

		if (Input::post('submit')) {
			if ($val->run() && Security::check_token()) {
				Session::set_flash('myname', Input::post('myname'));
				Session::set_flash('email', Input::post('email'));
				Session::set_flash('gender', Input::post('gender'));

				Response::redirect('contact/check');
			}
		}

		$this->template->title = 'お問い合わせ';
		$data['val'] = $val;
		$this->template->content = View::forge('contact/index', $data);
	}

	public function action_check()
	{
		$this->template->title = 'お問い合わせ：確認';

		if (Session::get_flash('myname') == '' or Session::get_flash('email') == '') {
			Response::redirect('contact/index');
		}

		$data['myname'] = Session::get_flash('myname');
		$data['email'] = Session::get_flash('email');
		$data['gender'] = Session::get_flash('gender');

		$this->template->content = View::forge('contact/check', $data);
	}
}