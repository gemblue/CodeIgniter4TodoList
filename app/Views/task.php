<?php $this->extend('layout') ?>

<?php $this->section('content') ?>
	
	<h1>Task List</h1>

	<form action="<?php echo site_url('task/insert')?>" method="post">
		<input name="title" type="text" placeholder="Write a task .."/>
		<button type="submit">Save</button>
	</form>

	<?php echo session('message');?>

	<ul>
		<?php foreach($task as $task) :?>
			<li>
				<?php if ($task['is_done']) :?>	
					<input type="checkbox" name="task" checked="checked" onclick="return window.location.href='task/uncheck/<?php echo $task['id']?>'"/>
					<strike><?php echo $task['title'];?></strike>
				<?php else :?>
					<input type="checkbox" name="task" onclick="return window.location.href='task/check/<?php echo $task['id']?>'"/>
					<?php echo $task['title'];?> 
				<?php endif; ?>

				<a href="<?php echo site_url('task/edit/' . $task['id'])?>">Edit</a> .
				<a href="<?php echo site_url('task/delete/' . $task['id'])?>">Delete</a>
			</li>
		<?php endforeach;?>
	</ul>

	<?php echo $pager->links() ?>

<?php $this->endSection() ?>