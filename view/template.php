<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php print $title;?></title>
<?php $md5=md5_file('style.css');?>
<link rel="stylesheet" href="style.css?<?php print $md5;?>">
<link rel="shortcut icon" href="favicon.png">
</head>
<body>
	<div class="c">
		<div class="r">
			<div class="g3">&nbsp;</div>
			<div class="g6">
				<h1>Anderson Ismael</h1>	
				<h2><?php print $title;?></h2>
				<p><i><?php print $data;?></i></p>
				<?php print $content;?>
				<p class="center"><a href=".">Posts</a></p>
			</div>
			<div class="g3">&nbsp;</div>
		</div>
	</div>
</html>		
