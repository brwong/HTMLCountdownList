<?php
	//$date = Array(2012,2,15,23,12,31,20);
	$string = "";
	$string .= file_get_contents("important.dates");

	$contents = explode("\n", $string);

	$dates = Array();

	foreach($contents as $line){
		$event = explode("\t", $line);
		if(isset($event[1])){
			$dates[$event[0]] = strtotime($event[1]);
			//echo date("Y-m-d H:i:s", strtotime($event[1]))."<br />";
		}
		unset($event);
	}

	asort($dates);

	echo json_encode($dates);
?>
