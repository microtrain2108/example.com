<?php
$who = 'World';
$content = <<<EOT
<h1>Hello {$who}</h1>
<p>Welcome to my web site.</p>
EOT;
?>
<html>
  <head></head>
  <body><?php echo $content; ?></body>
</html>
