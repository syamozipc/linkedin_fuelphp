<?= Form::open('contact/check'); ?>
	お名前：<?= $myname; ?>
	メールアドレス：<?= $email; ?>
	性別：<?= $gender; ?>

	<?= Form::submit('submit', '送信する'); ?>
<?= Form::close(); ?>