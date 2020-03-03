<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task List</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

	<style>
		.container{
			margin:auto;
			border:1px solid #444;
			width:300px;
			margin-top:10%;
			padding:30px;
		}

		ul li{
			list-style: none;
		}

		ul li a{
			font-size:10px;
		}

		.pagination li {
			display:inline;
		}
		
	</style>
</head>
<body>
<div class="container">
	
	<?php $this->renderSection('content') ?>
	
</div>

</body>
</html>