<html>
	<head>
		<title><?php echo $page;?></title>
	</head>
	<body>
		<h1><?php echo $page;?></h1>
		<p><?php echo $content;?></p>
		<p><?php echo HTML::anchor(Route::url('wiki-edit', array('page' => $page)), 'Edit')?></p>	
	</body>

</html>