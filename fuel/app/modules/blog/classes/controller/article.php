<?php

namespace Blog;

class Controller_Article extends \Controller
{
	function action_view()
	{
		$data['newitem'] = \Request::forge('cart/item/newitem')->execute();
		return \View::forge('blog/view', $data);
	}
}