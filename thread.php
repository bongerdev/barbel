<?php
# Import the config for title and nothing else really.
$config = require __DIR__ . '/config.php';
# Defining threads again, checking if they exist, obviously they're examples still.
$threads = [
  1 => ['subject' => 'Barbel', 'replies' => 0],
  2 => ['subject' => 'Bonger', 'replies' => 0],
  3 => ['subject' => 'Test', 'replies' => 0],
];

$id = (int) ($_GET['id'] ?? 0);
# Check if the thread exists.
if(!isset($thread[$id])) {
  echo "No such thread exists.";
  exit;
}

$thread = $threads[$id];
?>
<!DOCTYPE html>
<html>
<head>
<title><?= htmlspecialchars($config['board_name']) ?></title>
</head>
<body> <!-- I fucking hate how the github editor autoassumes you're closing an already closed element. -->
<h1>Threads:</h1>
<div></div>
<h1><?= htmlspecialchars($thread['name']) ?></h1>
<p><?= $thread['replies'] ?></p>
<a href="txtboard.php">Back to main page</a>
</body>
</html>
