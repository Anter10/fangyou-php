<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>访友</title>

<link href="__CPUBLIC__/css/templatemo_style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" type="text/css" href="__CPUBLIC__/css/contentslider.css" />
<link href="__CPUBLIC__/css/bootstrap.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__CPUBLIC__/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="__CPUBLIC__/js/bootstrap-modal.js"></script>
<script type="text/javascript" src="__CPUBLIC__/js/contentslider.js"></script>

</head>
<body id="home">
<div id="templatemo_wrapper">
	<div id="templatmeo_header">
    	<div id="logo_header">
        	<img src="__CPUBLIC__/images/mylogo.png"/>
        </div>
        <div>
            <ul>
                <form action="search.html" method="get" target="_blank" id="search_header">
  					<input type="text" class="input-medium search-query">
  					<button type="submit" class="btn btn-primary btn-large" placeholder="Search">搜索</button>
				</form>
            </ul>    	
        </div> <!-- end of templatemo_menu -->
    </div> <!-- end of header -->
    
    <div id="templatemo_middle">
    	<div id="mid_slider" style="z-index:0;"><span></span>
        	<div id="slider1" class="sliderwrapper">

                <div class="contentdiv">
                    <img src="__CPUBLIC__/images/slider/show1.jpg" alt="Image 00" />
                </div>
    
                <div class="contentdiv">
                    <img src="__CPUBLIC__/images/slider/show2.jpg" alt="Image 01" />
                </div>            
                
                <div class="contentdiv">
                    <img src="__CPUBLIC__/images/slider/show3.jpg" alt="Image 02" />
                </div>
                
                <div class="contentdiv">
                    <img src="__CPUBLIC__/images/slider/show4.png" alt="Image 03" />
                </div>
            
            </div>
            
            <div id="paginate-slider1" class="pagination">
            
      </div>
            
            <script type="text/javascript">
            
	            featuredcontentslider.init({
	                id: "slider1",  //id of main slider DIV
	                contentsource: ["inline", ""],  //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
	                toc: "#increment",  //Valid values: "#increment", "markup", ["label1", "label2", etc]
	                nextprev: ["", ""],  //labels for "prev" and "next" links. Set to "" to hide.
	                revealtype: "click", //Behavior of pagination links to reveal the slides: "click" or "mouseover"
	                enablefade: [true, 0.4],  //[true/false, fadedegree]
	                autorotate: [true, 2000],  //[true/false, pausetime]
	                onChange: function(previndex, curindex){  //event handler fired whenever script changes slide
	                    //previndex holds index of last slide viewed b4 current (1=1st slide, 2nd=2nd etc)
	                    //curindex holds index of currently shown slide (1=1st slide, 2nd=2nd etc)
	                }
	            })
            
            </script>
        </div>
        <div id="mid_left">
            <div id="mid_title">My Corporation's Message</div>
           		<p>	朋友是我们站在窗前欣赏冬日飘零的雪花时手中捧着的一杯热茶；朋友是我们走在夏日大雨滂沱中时手里撑着的一把雨伞；朋友是春日来临时吹开我们心中冬的郁闷的那一丝春风；朋友是收获季节里我们陶醉在秋日私语中的那杯美酒。</p>
            
	  </div>
        <div class="cleaner"></div>
	</div> <!-- end of middle -->
    
    <div id="myModal" class="modal  fade" >
        <div class="modal-header">
          <a class="close" data-dismiss="modal" >&times;</a>
          <h3>注册中心</h3>
        </div>
        <div class="modal-body">
          <h4>填写注册信息</h4>
         
          <form id="registration" method="post" action="__URL__/register">
			  <label class="control-label" for="uname">用户名</label>
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input class="span2" id="uname" name="username" type="text" title="用户名">
                    </div><!--end of name box-->
			  <label class="control-label" for="e-mail">邮箱</label>
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-envelope"></i></span>
                        <input class="span2" id="e-mail" name="email" type="text" title="邮箱">
                    </div><!--end of e-mail box-->
              <label class="control-label" for="pwd">密码</label>
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-lock"></i></span>
                        <input class="span2" id="pwd" name="password" type="password" title="密码">
                    </div><!--end of pwd box-->
              <label class="control-label" for="repwd">确认密码</label>
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-warning-sign"></i></span>
                        <input class="span2" id="repwd" type="password" name="password" title="确认密码">
                    </div><!--end of repwd box-->
          <hr>
        </div>
        <div class="modal-footer">
          <a href="#" class="btn" data-dismiss="modal" >关闭</a>
          <input type="submit" name="submit" value="提交" class="btn btn-primary"/>
        </div>
    	</form>

    </div> <!--end of dialog-->
    
     <div id="templatemo_main">
        <div id="templatemo_content">
        
        	<div class="col_allw300">
            	<h3>朋友间需要注意的问题</h3>
                <ul class="templatemo_list">
               	  <li>倾听朋友的诉说</li>
                    <li>朋友也要分亲疏</li>
                    <li>在朋友最需要时到场 </li>    
                    <li>交际往来要有“度”</li>    
                    <li>不要将朋友理想化</li>  
                    <li>正确把握友情与爱情</li>   
                    <li>朋友之间也要说“不”</li>
                    <li>不要单纯追求功利性交往</li>
                    <li>给朋友留有自由的时空</li>
                    <li>求人情要适可而止，人们交朋友，自然离不开人情往来</li>
                </ul>
                <div class="cleaner"></div>
            </div>
			
		  <div class="col_allw300">
            	<h3>不同的国家相同的词语</h3>
                <p>
                	英语：Friend<br/>
                	俄语：друг<br/>
                    日语：友达（ともだち）<br/>
					韩语：친구（亲故）<br/>
					德语：Freund<br/>
					阿拉伯语：صديق<br/>
					荷兰语：vriend<br/>
					泰语：เพื่อน<br/>
					西班牙语：amigo（男性）,amiga（女性）,amigos（复数）<br/>
					意大利语：amico（男性）,amica（女性）<br/>
					法语：ami（男性）,amie（女性）,amis（男复数）,amies （女复数）<br/>
                </p>
				<div class="cleaner"></div>
          </div>
            
          <div class="col_allw300 col_last">
            	<h3>用户中心</h3>
                <div>
                    <form method="post" action="__URL__/login">
                        <label for="email_box">用户名:</label>
                        <input id="email_box" type="text" class="input-medium" placeholder="Name" name="username" />
                        <label for="password_box">密码:</label>
                        <input id="password_box" type="password" class="input-medium" placeholder="Password" name="password" />
                        <label class="checkbox">
                        	<input type="checkbox"> 记住我
                        </label>
                        <button type="submit" class="btn btn-primary btn-large" target="#">登陆</button>
                        <!--<input type="text" class="input-small" placeholder="验证">-->
                    </form>
                    <button data-toggle="modal" data-target="#myModal" href="#myModal" class="btn btn-primary btn-large">立即注册</button>
                </div>
          </div>
            <div class="cleaner"></div>
        </div> <!-- end of templatemo_content -->
    </div> <!-- end of templatemo_main -->
</div> <!-- end of wrapper -->
	<!-- Include Footer -->
	<div id="templatemo_footer_wrapper">
     <!-- end of templatemo_footer -->
     <div class="cleaner"></div>
</div>

<div id="templatemo_copyright_wrapper">
    <div id="templatemo_copyright">
    	
            Copyright © 2012 <a href="#">Network professional 102</a> | Designed by <a href="#">A310</a>
        
    </div> <!-- end of templatemo_footer -->
</div>

</body>
</html>