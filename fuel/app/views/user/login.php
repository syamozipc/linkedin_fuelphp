<h1>ログイン</h1>

<?= Form::open('user/login'); ?>
	<dl>
		<dt><?= Form::label('username', 'ユーザー名'); ?></dt>
		<dd><?= Form::input('username'); ?></dd>
		<dt><?= Form::label('password', 'パスワード'); ?></dt>
		<dd><?= Form::password('password'); ?></dd>
	</dl>
	<p><?= Form::submit('submit', 'ログイン'); ?></p>
<?= Form::close(); ?>