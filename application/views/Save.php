<html>
	<head>
		<title><?php echo $page;?></title>
	</head>
	<body>
		<?php echo Form::open(Route::url('wiki-save', array('page' => $page)));?>
			<p><?php echo 'Edit page: '.$page; ?></p>
			<p><?php echo Form::textarea('content', $content); ?></p>
			<p><?php echo Form::hidden('page', $page); ?></p>
			<p><?php echo Form::submit('', 'Save')?></p>
		<?php echo Form::close();?>
	</body>
</html>