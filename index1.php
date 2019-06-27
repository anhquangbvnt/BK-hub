<?php

/*
* Bài tập vòng lặp
*/


//  Tìm giá trị tại vị trị giữa của mảng?
//  $array = array(1 ,3 ,4, 5, 9);
// Kết quả: tìm được số 4, có index = 2
// Hướng dẫn: Tìm độ dài mảng, sau đó tìm giá trị vị trí trung bình
// -----
// $array = array(1,3,4,5,9 );

// $a = count($array);
// $b = $a/2 + 0.5 ;
// echo "$b";    
// var_dump($array[$b]); // in ra màn hình 

function ktra($array){
	$length = count($array);
	$du = $length%2;
	if ($du == 1) {
		$index = $du + 1 ;
		$output = $array[$index];
	}
	return $output;
}
$array = array(1,3,4,5,9 );
echo function ktra($array;
//-----
/*
* Tìm giá trị cuối cùng của mảng
* $array = array(1, 3, 5, 7, 5);
* Kết quả: tìm được số 5
* Hướng dẫn: tìm độ dài của mảng, dựa vào độ dài tìm giá trị cuối cùng của mảng
*/
// $array = array(1, 3, 5, 7, 5);
// $L = count($array);
// var_dump($array[$L-1]);

// -----

/*
* Bài tập Hàm - Functions
*/

/*
* Viết hàm tính tổng giá trị trong mảng (tất cả giá trị là số tự nhiên)
*/
// $array = array(4, 3, 0, 7, 1);
// $s = array_sum($array);
// echo "$s";

/*
* Viết hàm kiểm tra số nguyên tố
* Vì dụ: function checkPrime($number) {
	// code here
	echo $number is prime.
}
