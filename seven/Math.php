<?php
function GetUglyNumber_Solution($index = 1){

	if($index % 2 == 0 ){
		GetUglyNumber_Solution($index / 2);
		die;
	}
	if($index %3 == 0){
		GetUglyNumber_Solution($index / 3);
		die;
	}
	if($index %5 == 0){
		GetUglyNumber_Solution($index / 5);
		die;
	}
	if($index == 1){

		echo 'shi';
		die;
	}
	
	echo 'bushi';
}
$res = GetUglyNumber_Solution(2);

?>