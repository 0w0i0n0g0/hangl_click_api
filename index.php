<?php
header('Content-type: image/svg+xml');

$clicks = 0;

function getclicks ($url) {
	global $clicks;
    global $num;
	$token = file_get_contents($url);
	
	//문자열 시작점 끝점 설정
	$start ='h5';
	$end ='클릭';

	//문자열 자르기
	$startpos = strpos($token, $start) + 38;
	$endpos = strpos($token, $end) - 89;
	$num = substr($token, $startpos, $endpos - $startpos);
    $clicks = $clicks + (int)$num;
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