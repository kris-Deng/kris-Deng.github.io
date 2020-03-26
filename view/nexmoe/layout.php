<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
	<title><?php e(config('site_name'));?> - 私人云盘</title>
	<link rel="shortcut icon" href="//www.onepan.ml/view/nexmoe/theme/favicon.ico">
	<link rel="stylesheet" href="//cdnjs.loli.net/ajax/libs/mdui/0.4.1/css/mdui.css">
	<link rel="stylesheet" href="//www.onepan.ml/view/nexmoe/theme/style.css">
	<script src="//cdnjs.loli.net/ajax/libs/mdui/0.4.1/js/mdui.min.js"></script>

  

	 <!--设置背景图片 api为https://s0.xinger.ink/fj/fjurl.php 风景图
        https://api.btstu.cn/sjbz/?lx=meizi
        https://api.neweb.top/bing.php?type=rand
        https://api.neweb.top/bing.php?type=future
        https://api.neweb.top/bing.php
	<style>
	body{background: url(https://cn.bing.com/th?id=OHR.WallaceMonument_ZH-CN4008495741_1920x1080.jpg&rf=LaDigue_1920x1080.jpg&pid=hp);
	    width:100%;
        height:100%;
	    background-repeat: no-repeat;
	    background-attachment: fixed;
	    -moz-background-size: cover;    /*背景图片拉伸以铺满全屏*/
        -ms-background-size: cover;
        -webkit-background-size: cover;
	    background-size: cover;
	}
	</style>
  -->
  
<!-- 社会主义核心价值观开始 -->
<style>
    .text-popup {
        animation: textPopup 1s;
        color: #FF0000;
        user-select: none;
        white-space: nowrap;
        position: absolute;
        z-index: 99;
    }
    @keyframes textPopup {
        0%, 100% {
            opacity: 0;
        }
        5% {
            opacity: 1;
        }
        100% {
            transform: translateY(-50px);    
        }
    }
</style>
<script>
(function (arr, options) {
    if (!arr || !arr.length) {
        return;    
    }
    let index = 0;
    document.documentElement.addEventListener('click', function (event) {
        let x = event.pageX, y = event.pageY;
        let eleText = document.createElement('span');
        eleText.className = 'text-popup';
        this.appendChild(eleText);
        if (arr[index]) {
            eleText.innerHTML = arr[index];
        } else {
            index = 0;
            eleText.innerHTML = arr[0];
        }
        // 动画结束后删除自己
        eleText.addEventListener('animationend', function () {
            eleText.parentNode.removeChild(eleText);
        });
        // 位置
        eleText.style.left = (x - eleText.clientWidth / 2) + 'px';
        eleText.style.top = (y - eleText.clientHeight) + 'px';
        // index递增
        index++;
    });    
})(['富强', '民主', '文明', '和谐', '自由', '平等', '公正', '法治', '爱国', '敬业', '诚信', '友善']);
</script>
<!-- 社会主义核心价值观结束 -->

	
</head>

<body class="mdui-theme-primary-blue-grey mdui-theme-accent-blue">
	<header class="nav">
	<div class="navSize">
			<a href="/"><img class="avatar" src="//q.qlogo.cn/g?b=qq&nk=873406026&s=100"/></a>
			<div class="navRight">
				<ul class="navul">
				    <li class="navli"><a href="//www.onepan.ml/资料/">资料</a></li>
					<li class="navli"><a href="/login">后台</a></li>
				</ul>
				<div class="icon"></div>
			</div>
		</div>
	</header>
	<div class="mdui-container">
	    <div class="mdui-container-fluid">
	    <div class="mdui-toolbar nexmoe-item">
			<a href="/"><?php e(config('site_name'));?></a>
			<?php foreach((array)$navs as $n=>$l):?>
			<i class="mdui-icon material-icons mdui-icon-dark" style="margin:0;">chevron_right</i>
			<a href="<?php e($l);?>"><?php e($n);?></a>
			<?php endforeach;?>
			<!--<a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">refresh</i></a>-->
		</div>
		</div>
    	<?php view::section('content');?>
  	</div>
</body>
  <br />
  <center>
<div id="show_time">  
<script>  
//这里代码多了几行，但是不会延迟显示，速度比较好，格式可以自定义，是理想的时间显示
setInterval("fun(show_time)",1);
function fun(timeID){ 
var date = new Date();  //创建对象  
var y = date.getFullYear();     //获取年份  
var m =date.getMonth()+1;   //获取月份  返回0-11  
var d = date.getDate(); // 获取日  
var w = date.getDay();   //获取星期几  返回0-6   (0=星期天) 
var ww = ' 星期'+'日一二三四五六'.charAt(new Date().getDay()) ;//星期几
var h = date.getHours();  //时
var minute = date.getMinutes()  //分
var s = date.getSeconds(); //秒
if(m<10){
m = "0"+m;
}
if(d<10){
d = "0"+d;
}
if(h<10){
h = "0"+h;
}
 
 
if(minute<10){
minute = "0"+minute;
}
 
 
if(s<10){
s = "0"+s;
}
 
 
document.getElementById(timeID.id).innerHTML =  y+"年"+m+"月"+d+"日"+" "+h+":"+minute+":"+s+"  "+ww;

  }
</script>  
</div>
</center>
 <br />
  
 <center> Site powered by <a href="https://www.onepan.ml/">OnePan</a> & <a href="https://github.com/donwa/oneindex">OneIndex</a> .Theme designed by <a href="https://yun.zhebk.cn/WebProject/OneIndex模板/">zhebk</a> 
  </center>
</html>