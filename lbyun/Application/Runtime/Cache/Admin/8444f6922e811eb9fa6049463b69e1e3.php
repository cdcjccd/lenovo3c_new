<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="overflow-x:hidden;overflow-y:auto;"><head>
		<title>
		用户添加更新 - Powered By Enjoy3C</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Cache-Control" content="no-store"><meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<meta name="author" content="http://ljz0721cx.iteye.com/">
<meta http-equiv="X-UA-Compatible" content="IE=7,IE=9,IE=10">
	<script src="/lenovo3C/Public/admin/static/userlist/jquery-1.js" type="text/javascript"></script>
	<script src="/lenovo3C/Public/admin/static/userlist/jquery.js" type="text/javascript"></script>
	<script src="/lenovo3C/Public/admin/static/userlist/jquery-ui-1.js" type="text/javascript"></script>
	<script src="/lenovo3C/Public/admin/static/userlist/jquery-migrate-1.js" type="text/javascript"></script>
	<link href="/lenovo3C/Public/admin/static/userlist/jquery.css" type="text/css" rel="stylesheet">
	<script src="/lenovo3C/Public/admin/static/userlist/jquery_002.js" type="text/javascript"></script>
	<script src="/lenovo3C/Public/admin/static/userlist/jquery_006.js" type="text/javascript"></script>
	<link href="/lenovo3C/Public/admin/static/userlist/bootstrap.css" type="text/css" rel="stylesheet">
	<script src="/lenovo3C/Public/admin/static/userlist/bootstrap.js" type="text/javascript"></script>
	<!--[if lte IE 6]><link href="/lenovo3C/Public/admin/static/userlist/bootstrap-ie6.min.css" type="text/css" rel="stylesheet" />
<script src="/lenovo3C/Public/admin/static/userlist/bootstrap-ie.min.js" type="text/javascript"></script><![endif]-->
	<script src="/lenovo3C/Public/admin/static/userlist/WdatePicker.js" type="text/javascript"></script><link href="/lenovo3C/Public/admin/static/userlist/WdatePicker.css" rel="stylesheet" type="text/css">
	<script src="/lenovo3C/Public/admin/static/userlist/jquery_003.js"></script>
	<script src="/lenovo3C/Public/admin/static/userlist/mustache.js" type="text/javascript"></script>
	<link href="/lenovo3C/Public/admin/static/userlist/lenjoy.css" type="text/css" rel="stylesheet">
	<script src="/lenovo3C/Public/admin/static/userlist/lenjoy.js" type="text/javascript"></script>

		<!--  需要添加百度统计分析-->

<meta name="decorator" content="default">
<script type="text/javascript">
	jQuery.validator.addMethod("checkPassword", function(value, element) { 
		//var checkPasswordReg =/^[0-9a-zA-Z$#@^&]{6,20}$/;
		var checkPasswordReg = /^((.*?\d.*?[a-z].*?[A-Z].*?|.*?\d.*?[A-Z].*?[a-z].*?|.*?[a-z].*?\d.*?[A-Z].*?|.*?[a-z].*?[A-Z].*?\d.*?|.*?[A-Z].*?\d.*?[a-z].*?|.*?[A-Z].*?[a-z].*?\d.*?)|(.*?\d.*?[`~!@#$^&*%_.,\/、{}：].*?[A-Z].*?|.*?\d.*?[A-Z].*?[`~!@#$^&*%_.,\/、{}：].*?|.*?[`~!@#$^&*%_.,\/、{}：].*?\d.*?[A-Z].*?|.*?[`~!@#$^&*%_.,\/、{}：].*?[A-Z].*?\d.*?|.*?[A-Z].*?[`~!@#$^&*%_.,\/、{}：].*?\d.*?|.*?[A-Z].*?\d.*?[`~!@#$^&*%_.,\/、{}：].*?)|(.*?\d.*?[`~!@#$^&*%_.,\/、{}：].*?[a-z].*?|.*?\d.*?[a-z].*?[`~!@#$^&*%_.,\/、{}：].*?|.*?[`~!@#$^&*%_.,\/、{}：].*?\d.*?[a-z].*?|.*?[`~!@#$^&*%_.,\/、{}：].*?[a-z].*?\d.*?|.*?[a-z].*?[`~!@#$^&*%_.,\/、{}：].*?\d.*?|.*?[a-z].*?\d.*?[`~!@#$^&*%_.,\/、{}：].*?)|(.*?[`~!@#$^&*%_.,\/、{}：].*?[a-z].*?[A-Z].*?|.*?[`~!@#$^&*%_.,\/、{}：].*?[A-Z].*?[a-z].*?|.*?[a-z].*?[`~!@#$^&*%_.,\/、{}：].*?[A-Z].*?|.*?[a-z].*?[A-Z].*?[`~!@#$^&*%_.,\/、{}：].*?|.*?[A-Z].*?[`~!@#$^&*%_.,\/、{}：].*?[a-z].*?|.*?[A-Z].*?[a-z].*?[`~!@#$^&*%_.,\/、{}：].*?))$/
		var pLength = value.length;
		return this.optional(element) || (pLength>7 && pLength<21 && checkPasswordReg.test(value)); 
	}, "8到20位，必须包含英文大写字母，英文小写字母，数字，符号中的至少3项");
	$.validator.addMethod("checkUserType",function(value,element){
		if(value !=''){return true}
	},"请选择用户类型");
	$(document).ready(function() {
		$("#loginName").focus();
		$("#inputForm").validate({
			rules: {
				newPassword:{checkPassword:true},
				confirmNewPassword:{checkPassword:true},
				email:true,
				mobile:{mobile:true},
				loginName: {remote: "/lenjoy/admin/sys/user/checkLoginName?oldLoginName=" + encodeURIComponent('13889155678')},
				userType:{checkUserType:true}
			},
			messages: {
				loginName: {remote: "用户登录名已存在"},
				confirmNewPassword: {equalTo: "输入与上面相同的密码"}
			},
			submitHandler: function(form){
				loading('正在提交，请稍等...');
				form.submit();
			},
			errorContainer: "#messageBox",
			errorPlacement: function(error, element) {
				$("#messageBox").text("输入有误，请先更正。");
				if (element.is(":checkbox")||element.is(":radio")||element.parent().is(".input-append")){
					error.appendTo(element.parent().parent());
				} else {
					error.insertAfter(element);
				}
			}
		});
	});
</script>

	</head>

	<body>
		
	<ul class="nav nav-tabs">
		<li><a href="<?php echo U('Admin/UserManage/userList');?>">用户列表</a></li>
		<li class="active">
			<a href="#">用户</a>
		</li>
	</ul><br>
	
	<form id="inputForm" class="form-horizontal" action="" method="post" novalidate="novalidate">
		<input id="id" name="id" value="<?php echo ($user["id"]); ?>" type="hidden">
		


  











	


<script type="text/javascript">top.$.jBox.closeTip();</script>



		
	
		<div class="control-group">
			<label class="control-label">归属公司:</label>
			<div class="controls">
                



<div class="input-append">
	<input id="companyId" name="company.id" class="required" value="<?php echo ($user["company_id"]); ?>" aria-required="true" type="hidden">
	<input id="companyName" name="company.name" readonly="readonly" value="<?php echo ($user["Business"]["busname"]); ?>" maxlength="50" class="required" style="" aria-required="true" type="text"><a id="companyButton" href="javascript:" class="btn " style="_padding-top:6px;">&nbsp;<i class="icon-search"></i>&nbsp;</a>&nbsp;&nbsp;
</div>
<script type="text/javascript">
	$("#companyButton").click(function(){
		// 是否限制选择，如果限制，设置为disabled
		if ("" == "disabled"){
			return true;
		}
		// 正常打开	
		top.$.jBox.open("iframe:/lenjoy/admin/tag/treeselect?url="+
				encodeURIComponent("/sys/office/treeData?type=1")+"&module=&checked=&extId=&selectIds="
				+$("#companyId").val(), "选择公司", 300, 420, {
			buttons:{"确定":"ok", "关闭":true}, submit:function(v, h, f){
				if (v=="ok"){
					var tree = h.find("iframe")[0].contentWindow.tree;//h.find("iframe").contents();
					var ids = [], names = [], nodes = [];
					if ("" == "true"){
						nodes = tree.getCheckedNodes(true);
					}else{
						nodes = tree.getSelectedNodes();
					}
					for(var i=0; i<nodes.length; i++) 
					$("#companyId").val(ids);
					$("#companyName").val(names);
				}//
			}, loaded:function(h){
				$(".jbox-content", top.document).css("overflow-y","hidden");
			}
		});
	});
</script>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label">登录名:</label>
			<div class="controls">
				<input id="oldLoginName" name="oldLoginName" value="13889155678" type="hidden">
				<input id="loginName" name="loginName" class="required userName valid" readonly="readonly" value="<?php echo ($user["login_name"]); ?>" maxlength="50" aria-required="true" aria-invalid="false" type="text">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">工号:</label>
			<div class="controls">
				<input id="no" name="no" class="required" value="<?php echo ($user["no"]); ?>" maxlength="50" aria-required="true" type="text">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">姓名:</label>
			<div class="controls">
				<input id="name" name="name" class="required" value="<?php echo ($user["name"]); ?>" maxlength="50" aria-required="true" type="text">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">密码:</label>
			<div class="controls">
				<input id="newPassword" name="newPassword" value="" maxlength="20" minlength="8" class="" type="password">
				<span class="help-inline">若不修改密码，请留空。</span>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">确认密码:</label>
			<div class="controls">
				<input id="confirmNewPassword" name="confirmNewPassword" value="" maxlength="20" minlength="8" equalto="#newPassword" type="password">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">邮箱:</label>
			<div class="controls">
				<input id="email" name="email" class="email required" value="<?php echo ($user["email"]); ?>" maxlength="100" aria-required="true" type="email">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">电话:</label>
			<div class="controls">
				<input id="phone" name="phone" maxlength="100" value="<?php echo ($user["phone"]); ?>" type="text">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">手机:</label>
			<div class="controls">
				<input id="mobile" name="mobile" class="requried" value="<?php echo ($user["mobile"]); ?>" maxlength="100" type="text">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">备注:</label>
			<div class="controls">
				<textarea id="remarks" name="remarks" maxlength="200" class="input-xlarge" rows="3"><?php echo ($user["remarks"]); ?></textarea>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">用户类型:</label>
			<div class="controls">
				<select id="userType" name="userType" aria-invalid="false" class="valid">
					<option value="">请选择</option>
					<?php if($user["user_type"] == 1): ?><option value="1" selected="selected">系统管理</option>

						<?php else: ?><option value="2" selected="selected">大区经理</option><?php endif; ?>

				</select>
			</div>
		</div>
		

			<div class="control-group">
				<label class="control-label">拥有角色:</label>
				<div class="controls">
					
						<label>销售人员</label>
					
				</div>
			</div>
			
			<!--  当角色与机构关联起来后，登录用户拥有管理员，负责人角色可以分配除自己以外的同级机构人员角色和下级人员的角色-->
		
		
		
			<div class="control-group">
				<label class="control-label">创建时间:</label>
				<div class="controls">
					<label class="lbl"><?php echo ($user["create_date"]); ?></label>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">最后登陆:</label>
				<div class="controls">
					<label class="lbl"><?php echo ($user["login_ip"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;时间：<?php echo ($user["login_date"]); ?></label>
				</div>
			</div>
		
		<div class="form-actions">
			<input id="baocun" class="btn" type="button" value="保存" >
			<input id="btnCancel" class="btn" value="返 回" onclick="history.go(-1)" type="button">
		</div>
	</form>
	<script type="text/javascript" >
		$('#baocun').click(function(){
		    if (confirm('是否保存修改')){
				$.ajax({
					type : 'post',
					url  : "<?php echo U('Admin/Usermanage/userSave');?>",
					data : $('#inputForm').serialize(),
					success : function(res){

					}
				})
			}
		})
	</script>
	
</body></html>