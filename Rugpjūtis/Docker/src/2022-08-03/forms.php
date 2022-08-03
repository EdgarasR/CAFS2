<pre>
<?php

print_r($_SERVER['HTTP_USER_AGENT']);
echo "<br>";

print_r($_REQUEST['name']);
echo "<br>";

print_r(['_GET' => $_GET]);
print_r(['_POST' => $_POST]);

?>
</pre>