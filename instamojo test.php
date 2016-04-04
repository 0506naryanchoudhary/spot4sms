<?php
$filename = "/tmp/webhook_data.txt";
foreach($_POST as $key => $value)
{
    file_put_contents($filename, "$key: $value\n", FILE_APPEND);
}
file_put_contents($filename, "----------\n", FILE_APPEND);
?>
