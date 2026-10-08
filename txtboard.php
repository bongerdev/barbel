<?php
$config = require __DIR__ . '/config.php';
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
<?php
# Finish this later
# Optionally, you can add a logo to be displayed under the board text if you wish, I might add that later in the config.php file.
?>
</body>
</html>
