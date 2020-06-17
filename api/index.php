<?php

$json = file_get_contents('php://input');
$dataArray = json_decode($json, true);
$op = $dataArray['op'];
$log = date("d-m-Y H:i:s") . "  " . $op ;
$file = fopen("log.txt", "a");
fwrite($file, $log . PHP_EOL);
fclose($file);

if ($op=="readOCR") {
    echo "{\"status\": \"ok\",\"nombre\": \"Manuel\", \"apellidos\": \"Garre\", \"documento\": \"12345678Z\", \"fecha\": \"1988-07-31\", \"sexo\": \"hombre\" }";        
}
else if ($op=="statusDocument"){
    echo "{\"status\": \"ok\" }";
}
else if ($op=="readFingerprint"){
    echo "{\"value\": \"ok\" }";
}
else if ($op=="readPhoto"){
    echo "{\"status\": \"ok\" }";
}
else if ($op=="registry"){
    echo "{\"status\": \"ok\" }";
}
else{
    echo "{\"status\": \"error\" }";      
}
?>
