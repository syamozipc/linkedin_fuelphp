<?= Form::open('contact/index'); ?>
	<?= Form::label('お名前', 'myname'); ?>
	<?= Form::input('myname'); ?>
	<?php if ($val->error('myname')): ?>
		<p class='error'><?= $val->error('myname'); ?></p>
	<?php endif; ?>

	<?= Form::label('メールアドレス', 'email'); ?>
	<?= Form::input('email'); ?>
	<?php if ($val->error('email')): ?>
		<p class='error'><?= $val->error('email'); ?></p>
	<?php endif; ?>

	<?= Form::label('性別', 'gender'); ?>
	<?= Form::radio('gender', '男性', array(
											'id' => 'form_gender_male',
											'checked' => 'checked',
											)); ?>
	<?= Form::label('男性', 'gender_male'); ?>,
	<?= Form::radio('gender', '女性', array('id' => 'form_gender_female')); ?>
	<?= Form::label('女性', 'gender_female'); ?>,

	<?= Form::submit('submit', '送信する'); ?>
	<?= Form::hidden(Config::get('security.csrf_token_key'), Security::fetch_token()); ?>
	<!-- csrfは下記のやり方でも可能 -->
	<?php /* echo Form::csrf(); */ ?>
<?= Form::close(); ?>