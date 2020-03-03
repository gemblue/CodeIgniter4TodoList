<?php $this->extend('layout') ?>

<?php $this->section('content') ?>

	<h1>Task List</h1>

	<form action="<?php echo site_url('task/update')?>" method="post">
		<input name="id" type="hidden" value="<?php echo $task['id']?>"/>
		<input name="title" type="text" value="<?php echo $task['title']?>"/>
		<button type="submit">Save</button>
	</form>

	<br/>

	<a href="<?php echo site_url('task')?>">Cancel</a>

<?php $this->endSection() ?>