<?php

class OpenshiftMediawikiIpFixHooks {
	public static function onGetIP( &$ip ) { 
if($_SERVER['HTTP_X_FORWARDED_FOR']){
	$ip= $_SERVER['HTTP_X_FORWARDED_FOR'];
}

	}
}
