<?php
if(count($argv)  < 4 || count($argv) > 5) {
	echo "arg wrong!";
	die();
}
$file = $argv[1];
$seek = $argv[2];
$read = $argv[3];

$fp = fopen($file,"r");
fseek($fp,$seek);
$data = fread($fp,$read);
$hex_data = bin2hex($data);
echo "Hex: \n";
echo "  =============================\n";
echo "  01 02 03 04 05 06 07 08 09 10\n";
echo "  -----------------------------\n";
echo '  '.strtoupper(chunk_split(chunk_split($hex_data,2,' '),30,"\n  "));
echo "=============================\n";

if(count($argv) === 5){
	$arr = explode(',',$argv[4]);
	foreach($arr as $v){
		echo $v."\n";
		switch($v){
			case "int":
				echo '  '.hexdec($hex_data);
				break;
			case "string":
				echo '  '.$data;
				break;
			default:
				echo "[!! WARN: THIS TYPE IS NOT EXIST!]";
				break;
		}
		echo "\n";
	}
}
fclose($fp);
