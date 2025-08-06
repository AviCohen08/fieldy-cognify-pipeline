<?php
// Log incoming webhook data
$data = file_get_contents('php://input');
$timestamp = date('Y-m-d H:i:s');
file_put_contents('fieldy-data.log', "[$timestamp] $data\n", FILE_APPEND);
echo "OK";
?>
