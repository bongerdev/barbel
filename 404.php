<?php
# Here we tell the browser that the http code is 404.
# I'll do this tomorrow, it's nearly midnight, I need to sleep.
#egg
# ^ No clue what I was thinking when I wrote this.
http_response_code(404);
?>
<!DOCTYPE html>
<html>
<head>
<title>Page not found</title>
</head>
<body>
<h1>Page not found, sorry.</h1>
<p>This thread (or page) doesn't exist. It might have been pruned, deleted or never existed at all.</p>
</body>
</html>
