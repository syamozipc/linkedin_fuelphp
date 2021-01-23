<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Post name', 'post_name', array('class'=>'control-label')); ?>

				<?php echo Form::input('post_name', Input::post('post_name', isset($post) ? $post->post_name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Post name')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>