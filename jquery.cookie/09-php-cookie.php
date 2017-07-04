<?php 
	//1. 获取cookie中的内容
	echo $_COOKIE["name"];

	//2. 往cookie中存数据
	setcookie("age", "18");

	//设置cookie其实就是给响应头添加了
	//Set-Cookie: key=value;key=value;

	//浏览器在接收到响应之后，会检查响应头中的Set-cookie内容，再进行相应的cookie操作！
 ?>