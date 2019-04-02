<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<nav>
  
  <ul>

    <li><a href="views/about.view.php">About Page</a></li>

    <li><a href="views/contact.view.php">Contact Page</a></li> 

  </ul>

</nav>

<ul>

	<?php foreach($tasks as $task) : ?>

		<li>

			<?php if($task->completed) : ?>
				<strike><?= $task->description; ?></strike>

			<?php else : ?>
				<?= $task->description; ?>

			<?php endif; ?>

		</li>

	<?php endforeach; ?>

</ul>
</body>
</html>
