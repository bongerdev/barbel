<?php
$config = require __DIR__ . '/config.php';
# Honestly these are just example threads because I'm too lazy to put actual thread writing logic, plus this is a good test to see if thread rendering works.
# Had to rewrite the PHP into a foreach but I don't really mind, I can just stick comments up here to explain what I'm doing.
# From testing, the example threads are rendering, which is good, I now have to write thread.php and then debug that.
$threads = [
  1 => ['subject' => 'Barbel', 'replies' => 0],
  2 => ['subject' => 'Bonger', 'replies' => 0],
  3 => ['subject' => 'Test', 'replies' => 0],
];
?>
<!DOCTYPE html>
<html>
<head>
<title><?= htmlspecialchars($config['board_name']) ?></title> 
</head>
<body>
<h1><?= htmlspecialchars($config['board_name']) ?></h1> 
<h2><?= htmlspecialchars($config['board_news']) ?></h2>
<p><?= htmlspecialchars($config['board_text']) ?></p>
<hr>
<?php foreach ($threads as $id => $thread): ?>
<p><?= $id ?>: <a href="thread.php?id=<?= $id ?>"><?= htmlspecialchars($thread['subject']) ?></a> (<?= $thread['replies'] ?>)</p>
<?php endforeach; ?>
</body>
</html>
