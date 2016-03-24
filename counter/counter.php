<?php







function set_count($file_name = 'counter.txt'){
	if (file_exists($file_name)){
		//read th value

		$count = (int) file_get_contents($file_name)+1;
		file_put_contents($file_name,$count);

}	else{
	//create it 
	$handle=fopen($file_name,'w+');
	$count = 1;
	fwrite($handle,$count);
	fclose($handle);
}
 return $count;

}
echo set_count();