<?php
namespace Godylan\Wellrequest;
//
class Fast{
	public function get($url){
		//初始化  
	$curl = curl_init();  
	//设置抓取的url  
	curl_setopt($curl, CURLOPT_URL, $url);  
	//设置获取的信息以文件流的形式返回，而不是直接输出。  
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  
	//执行命令  
	$res = curl_exec($curl);   
	//关闭URL请求  
	curl_close($curl);  
	//显示获得的数据  
	return $res;  
	}
	
	public function post($url,$data){
		//初始化  
		$curl = curl_init();  
		//设置抓取的url  
		curl_setopt($curl, CURLOPT_URL, $url);   
		//设置获取的信息以文件流的形式返回，而不是直接输出。  
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  
		//设置post方式提交  
		curl_setopt($curl, CURLOPT_POST, 1);  
		//设置post数据  
		$post_data = $data;  
		//post提交的数据  
		curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);  
		//执行命令  
		$res = curl_exec($curl);  
		//关闭URL请求  
		curl_close($curl);  
		//显示获得的数据  
		return $res;  
	}
}