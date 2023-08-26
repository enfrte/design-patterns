<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Directory Listing</title>
</head>
<body>
	<h1>Directory Listing</h1>
	<ul>
    
	<?php
		$directory = __DIR__.'/src'; // jump ahead
		$items = scandir($directory);
		$items = array_diff($items, array('..', '.')); // Remove parent and current directory entries
		
		foreach ($items as $item) {
			$path = $directory . '/' . $item;
			$linkPath = $_SERVER['REQUEST_URI'] . 'src/' . $item;
			if (is_dir($path)) {
				echo '<li><a href="' . $linkPath . '">' . $item . '</a></li>';
			}
		}
	?>

	</ul>
</body>
</html>