<ul class="nav nav-pills">
	<li class='<?php echo Arr::get($subnav, "index" ); ?>'><?php echo Html::anchor('admin/index','Index');?></li>
	<li class='<?php echo Arr::get($subnav, "view" ); ?>'><?php echo Html::anchor('admin/view','View');?></li>

</ul>
<p>Index</p>
<p>メンバー限定ページです。</p>

<p><?= Html::anchor('user/logout', 'ログアウト'); ?></p>