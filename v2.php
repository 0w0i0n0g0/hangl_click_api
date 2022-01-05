<?php
header('Content-type: image/svg+xml');

$clicks = 0;

function getclicks ($url) {
	global $clicks;
	$token = file_get_contents($url);
	
	//문자열 시작점 끝점 설정
	$start ='countries';
	$end ='}';

	//문자열 자르기
	$startnum = strpos($token, $start) + 12;
	$endnum = strpos($token, $end) - 1;
	$pre_numarray = substr($token, $startnum, $endnum - $startnum);

	//배열로 변환
	$numarray = explode( ',' , $pre_numarray);
	$numarray_number = count($numarray);
	$final_numarray = [];
	for($x=0; $x<$numarray_number; $x++)
	{
		$tmp_numarray = explode( ':' , $numarray[$x]);
		$final_numarray[$x] = $tmp_numarray[1];
		$tmp_numarray = [];
	}

	//클릭수 합 구하기
	for($y=0; $y<$numarray_number; $y++)
	{
		$clicks = $clicks + $final_numarray[$y];
	}
}

//활용 예시
//https://php.server.com/?url1=링크&url2=링크
$url1 = $_GET['url1'];
$url2 = $_GET['url2'];
$url3 = $_GET['url3'];

getclicks($url1);
getclicks($url2);
getclicks($url3);

//svg echo
echo '<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" style="display: inline;"><text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-size="3em">',$clicks,'</text></svg>';
?>