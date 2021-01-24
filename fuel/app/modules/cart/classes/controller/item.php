<?php

namespace Cart;

class Controller_Item extends \Controller
{
	function action_index()
	{
		echo 'cart/item/index';
	}

	function action_newitem()
	{
		return 'JavaScript入門';
	}
}