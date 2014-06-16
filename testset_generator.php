<?php
$file_size = "./file_size.csv";
$file_src = "./txt_src.txt";


$fsize = fopen($file_size, "r");
$i = 0;

while(!feof($fsize))
{
	$size = round(fgets($fsize) * 32);
	if($size == 0)
	{
		break;
	}
//	echo $size."\n";
	$cmd = "dd if=".$file_src." of=cpabe_".$i.".txt bs=32 count=".$size;
	echo $cmd."\n";
	system($cmd);	
	$i++;
}


?>
