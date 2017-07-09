<?php include 'paths.php';

$amount = file_get_contents(paths::$counterPath);
$amount++;
$open = fopen(paths::$counterPath, 'w');
fwrite($open, $amount);
fclose($open);

$temp = paths::$downloadPath;
header("Location: $temp");