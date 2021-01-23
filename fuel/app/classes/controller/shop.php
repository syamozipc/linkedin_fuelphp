<?php

class Controller_Shop extends Controller
{
	public function action_index()
	{
		$data['rows'] = Model_Item::find_by('price', '100', '>');

		return View::forge('shop/index', $data);
	}

	public function action_save()
	{
		$item = Model_Item::forge();
		$data['item_name'] = Input::post('item_name');
		$data['price'] = Input::post('price');
		$item->set($data);
		$item->save();

		echo 'saved';
	}

	public function action_delete()
	{
		$item = Model_Item::find_by_pk(4);
		$item->delete();
	}

	public function action_update()
	{
		$item = Model_Item::find_by_pk(1);
		$item['price'] = 115;
		$item->save();
	}

}