<?
function GTEMPfirstcreat($GTEMPapp){
	$a=$GTEMPapp;
		echo "第一次加载文件...";
	if(mkdir($p=$a)){
	echo '<br>初始化'.$a.'目录成功...';
	file_put_contents($p.'/index.html','');
	}else{ 
	die($a.'目录创建失败!');}

	if(mkdir($p=$a.'/controller')) {
	echo "<br>初始化controller目录成功...";
	copy('./gtemp/function/index_demo.php',$p.'/index.php');
	file_put_contents($p.'/index.html','');
	}else{
	die($a.'/controller目录创建失败!');}

	if(mkdir($p=$a.'/view')){
	echo "<br>初始化view目录成功...";
	file_put_contents($p.'/index.htm','<!--初始文件成功-->');
	file_put_contents($p.'/index.html','');
	}else{ die($a.'/view目录创建失败!');}
	if(mkdir($p=$a.'/model')) {
	echo "<br>初始化model目录成功..." ;
	file_put_contents($p.'/index.html','');
	}else{ die($a.'/mdel目录创建失败!');}	
	exit('初始化文件成功,开始部署您的MVC框架代码吧');
}
?>