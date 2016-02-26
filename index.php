<!DOCTYPE html>
<html>
<head>
	<title>save scroll state</title>
	<style type="text/css" media="screen">
		.single-post{
			padding: 20px;
			margin: 20px 0;
			width: 300px;
			height: 400px;
			background-color: red;
			border: 1px dashed grey;
		}
		.container{
			padding: 20px;
			border: 1px dashed grey;
		}
	</style>
</head>
<body>
	<div class="container">
		<?php $count = 0; ?>
		<div class="single-post">
			<h1><a href="post.html">#page-1: post <?php echo ++$count; ?></a></h1>
		</div>
		<div class="single-post">
			<h1><a href="post.html">#page-1: post <?php echo ++$count; ?></a></h1>
		</div>
		<div class="single-post">
			<h1><a href="post.html">#page-1: post <?php echo ++$count; ?></a></h1>
		</div>
		<div class="single-post">
			<h1><a href="post.html">#page-1: post <?php echo ++$count; ?></a></h1>
		</div>
		<div class="single-post">
			<h1><a href="post.html">#page-1: post <?php echo ++$count; ?></a></h1>
		</div>
		<div class="single-post">
			<h1><a href="post.html">#page-1: post <?php echo ++$count; ?></a></h1>
		</div>
		<div class="single-post">
			<h1><a href="post.html">#page-1: post <?php echo ++$count; ?></a></h1>
		</div>
	</div>
</body>
</html>