<h1>ユーザー登録</h1>

<?= Form::open('user/create'); ?>
	<dl>
		<dt><?= Form::label('username', 'ユーザー名'); ?></dt>
		<dd><?= Form::input('username'); ?></dd>
		<dt><?= Form::label('password', 'パスワード'); ?></dt>
		<dd><?= Form::password('password'); ?></dd>
	</dl>
	<p><?= Form::submit('submit', '登録する'); ?></p>
<?= Form::close(); ?>