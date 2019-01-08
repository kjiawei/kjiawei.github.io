<?php
$file_name='http://localhost:80/RestServer/api/index_data.json';//http://localhost/RestServer/api/index_data.json
$file = file_get_contents($file_name);
echo $file;