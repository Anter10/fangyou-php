<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>访友网|后台管理</title>
<link href="__CPUBLIC__/css/bootstrap.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript">
			function reVerify(){
				document.getElementById('rev').src="__CPUBLIC__/verify/demo.php/"+Math.random();
			}
		</script>	
<style>
body{
		background:#122d5c;
	}
	
	#body{
		margin-top:50px;
	}
	.main{
		float:left;
		width:200px;
		margin-top:100px;
		margin-left:50px;
	}
	p{
		color:#FFF;
	}
	.seal{
		float:left;
		margin-top:200px;
		margin-left:400px;
		margin-right:100px;
	}
	.cut{
		float:left;
		margin-top:70px;
		margin-left:20;
	}
	h1 {
		color:#FFF;
	}
	#title{
		float:left;
		margin-left:200px;
		margin-top:200px;
	}
</style>
</head>

<body>
	<div id="body">
		
	
	 	<div class="seal" class="float_r">
	 		<img src="__CPUBLIC__/images/mylogo.png" />
	 		<h1>网后台登陆</h1>
	 	</div>
	 	<div class="cut">
	 		<img src="__CPUBLIC__/images/cut.png" />
	 	</div>
	    <div class="main">
	        <form method="post" action="__URL__/login/">
	            <label for="email_box"><p>用户名:</p></label><input id="email_box" type="text" class="input-medium" placeholder="Name" name="username" >
	            <label for="password_box"><p>密码:</p></label><input id="password_box" type="password" class="input-medium" placeholder="Password" name="password">
	            <label class="checkbox">
	                <input type="checkbox"> <p>记住我</p>
	            </label>
	            <input type="text" class="input-small" name="verify" placeholder="验证">&nbsp;<a href="#" onClick="reVerify()">看不清</a>
	            <p><img src="__CPUBLIC__/verify/demo.php" id="rev" /></p>
	            
	            <button type="submit" class="btn btn-primary btn-large" target="#">登陆</button>
	        </form>
	    </div>
	</div>	
</body>
</html>