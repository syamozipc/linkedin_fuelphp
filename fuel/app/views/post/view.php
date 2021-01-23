<h2>Viewing <span class='muted'>#<?php echo $post->id; ?></span></h2>

<p>
	<strong>Post name:</strong>
	<?php echo $post->post_name; ?></p>

<?php echo Html::anchor('post/edit/'.$post->id, 'Edit'); ?> |
<?php echo Html::anchor('post', 'Back'); ?>