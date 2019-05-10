<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Anderson Ismael</title>
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
			<?php
			require 'inc/slug.php';
			$posts=glob('posts/*.txt');
			if(is_array($posts) && count($posts)>=1){
				print '<h2>Posts</h2>';
				print '<ul>';
				foreach($posts as $post){
					$arr=explode('posts/',$post);
					$arr=explode('.txt',$arr[1]);
					$slug=$arr[0];
					$title=slug($slug,false);
					$href="$slug.html";
					print "<li><a href='$href'>$title</a></li>";
				}	
				print '</ul>';
			}
			?>
			</div>
			<div class="g3">&nbsp;</div>
		</div>
	</div>
</body>
</html>
