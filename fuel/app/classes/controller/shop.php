<?php

class Controller_Shop extends Controller
{
	public function action_index()
	{
		//bootstrapで本番用DB、データも準備済み

		//dbとconfigでprofiling設定
		Profiler::mark(__Method__.'開始');

		$count = count(Model_Item::find());
		$config = array(
			'pagination_url' => '/shop/index',
			'per_page' => 2,
			'total_items' => $count
		);

		$pagination = Pagination::forge('name', $config);

		$sql = 'SELECT * FROM items LIMIT '.$pagination->per_page.' OFFSET '.$pagination->offset;

		$data['rows'] = DB::query($sql)->execute();

		Profiler::mark(__Method__.'DB完了');

		$data['pagination'] = $pagination;

		Profiler::mark(__Method__.'index完了');

		return View::forge('shop/index', $data, false);
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