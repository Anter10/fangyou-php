<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="__CPUBLIC__/admin/style.css" rel="stylesheet" type="text/css">
	<link href="__CPUBLIC__/Css/bootstrap.css" rel="stylesheet" type="text/css">
	<title>Cbox内容管理</title>
</head>
<body id="contentBody">
	<div id="content_top">照片管理</div>
	<div id="content">		
		<table class="table table-striped table-bordered table-condensed">
			<form action="__URL__/update/" method="post" accept-charset="utf-8" enctype="multipart/form-data" >
				<input type="hidden" name="id" value="<?php echo ($row["id"]); ?>"/>
				<tr>
					<td>标题 <font color="Red">*</font></td>
					<td><input type="text" name="name" value="<?php echo ($row["name"]); ?>" /></td>
				</tr>
				<tr>
					<td>所有人 <font color="Red">*</font></td>
					<td><input type="text" name="member_id" value="<?php echo ($row["member_id"]); ?>" /></td>
				</tr>				
				<tr>
					<td>描述 <font color="Red">*</font></td>
					<td>
						<textarea name="description"><?php echo ($row["description"]); ?></textarea>						
					</td>
				</tr>

				<tr>
					<td>上传</td>
					<td>
						<input type="file" name="photo" value="__CPHOTO__/<?php echo ($row["member_id"]); ?>/<?php echo ($row["name"]); ?>">
					</td>
				</tr>
	
				<tr>
					<td>&nbsp;</td>
					<td>
						<input type="submit" name="submit" value="提交" class="btn btn-primary" /> &nbsp;
						<input type="reset" name="reset" value="重置" class="btn btn-inverse" /> 
					</td>
				</tr>																						
			</form>
		</table>
	</div>
</body>
</html>