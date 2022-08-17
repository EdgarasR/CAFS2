<?php

echo 'Hello 1' . "<br>\n";

ob_start();

echo 'Hello 2' . "<br>\n";
echo 'Hello 3' . "<br>\n";

$out1 = ob_get_contents();

echo 'Hello 4' . "<br>\n";
echo 'Hello 5' . "<br>\n";

$out2 = ob_get_contents();

echo 'Hello 6' . "<br>\n";
echo 'Hello 7' . "<br>\n";

$out3 = ob_get_contents();

ob_end_clean();

// echo $out1;
// echo $out2;
echo $out3;