<?php 

class Response{

public static function xml(){
	header("Content-Type:text/xml");
	$xml = "<?xml version='1.0' encoding='UTF-8'?>\n";
	$xml.= "<root>\n";
	$xml.= "<code>200</code>\n";
	$xml.= "<message>数据返回成功</message>\n";
	$xml.= "<data>\n";
	$xml.= "<id>1</id>\n";
	$xml.= "<name>xiaomai</name>\n";
	$xml.= "</data>\n";
	$xml.= "</root>\n";
	
	echo $xml;
}

}

Response::xml();

?>