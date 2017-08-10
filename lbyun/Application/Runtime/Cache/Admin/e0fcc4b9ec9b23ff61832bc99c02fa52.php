<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="overflow-x:hidden;overflow-y:auto;"><head>
	<title>
		区域管理 - Powered By Enjoy3C</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="Cache-Control" content="no-store"><meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Expires" content="0">
	<meta name="author" content="http://ljz0721cx.iteye.com/">
	<meta http-equiv="X-UA-Compatible" content="IE=7,IE=9,IE=10">
	<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/jquery-1.js" type="text/javascript"></script>
	<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/jquery.js" type="text/javascript"></script>
	<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/jquery-ui-1.js" type="text/javascript"></script>
	<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/jquery-migrate-1.js" type="text/javascript"></script>
	<link href="/lenovo3c_new/lbyun/Public/Admin/static/userlist/jquery.css" type="text/css" rel="stylesheet">
	<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/jquery_002.js" type="text/javascript"></script>
	<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/jquery_006.js" type="text/javascript"></script>
	<link href="/lenovo3c_new/lbyun/Public/Admin/static/userlist/bootstrap.css" type="text/css" rel="stylesheet">
	<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/bootstrap.js" type="text/javascript"></script>
	<!--[if lte IE 6]><link href="/lenjoy/static/bootstrap/bsie/css/bootstrap-ie6.min.css" type="text/css" rel="stylesheet" />
<script src="/lenjoy/static/bootstrap/bsie/js/bootstrap-ie.min.js" type="text/javascript"></script><![endif]-->
	<!-- <script src="WdatePicker.js" type="text/javascript"></script><link href="WdatePicker.css" rel="stylesheet" type="text/css"> -->
	<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/jquery_003.js"></script>
	<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/mustache.js" type="text/javascript"></script>
	<link href="/lenovo3c_new/lbyun/Public/Admin/static/userlist/lenjoy.css" type="text/css" rel="stylesheet">
	<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/lenjoy.js" type="text/javascript"></script>

	<!--  需要添加百度统计分析-->

	<meta name="decorator" content="default">
	<script type="text/javascript">
        $(document).ready(function() {

            $("#code").change(function(){
                $("#codeMess").remove();
                var code = $("#code").val();
                $.getJSON("/lenjoy/Admin/sys/area/getAreaByCode",{"code":code}, function(codeList){
                    if(codeList.length>0){
                        var mess = "["+codeList[0]+"]编码已存在!";
                        $("#code_class").append('<font id="codeMess" color="red"><strong>'+mess+'</strong></font>');
                        $("#code").val(null);
                    }
                });
            });

            $("#name").focus();
            $("#inputForm").validate({
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
	<li><a href="<?php echo U('Admin/Area/areaList');?>">区域列表</a></li>
	<li class="active"><a href="#">区域查看</a></li>
</ul><br>
<form id="inputForm" class="form-horizontal" action="#" method="post" novalidate="novalidate">
	<input id="id" name="id" value="<?php echo ($data['id']); ?>" type="hidden">




	<!-- <script type="text/javascript">top.$.jBox.closeTip();</script> -->





	<div class="control-group">
		<label class="control-label">上级区域:</label>
		<div class="controls">


			<div class="input-append">
				<input id="areaId" name="parent.id" class="required" value="1" aria-required="true" type="hidden">
				<input id="areaName" name="parent.name" readonly="readonly" value="<?php echo ($data['parent_name']); ?>" maxlength="50" class="required" style="" aria-required="true" type="text"><a id="areaButton" href="javascript:" class="btn " style="_padding-top:6px;">&nbsp;<i class="icon-search"></i>&nbsp;</a>&nbsp;&nbsp;
			</div>
			<script type="text/javascript">
                $("#areaButton").click(function(){
                    // 是否限制选择，如果限制，设置为disabled
                    if ("" == "disabled"){
                        return true;
                    }
                    // 正常打开
                    top.$.jBox.open("iframe:/lenjoy/Admin/tag/treeselect?url="+
                        encodeURIComponent("/sys/area/treeData")+"&module=&checked=&extId=3&selectIds="
                        +$("#areaId").val(), "选择区域", 300, 420, {
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
                                $("#areaId").val(ids);
                                $("#areaName").val(names);
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
		<label class="control-label">区域名称:</label>
		<div class="controls">
			<input id="name" name="name" class="required valid" value="<?php echo ($data['name']); ?>" maxlength="50" aria-required="true" aria-invalid="false" type="text">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">区域编码:</label>
		<div class="controls" id="code_class">
			<input id="code" name="code" class="required" value="<?php echo ($data['code']); ?>" maxlength="50" aria-required="true" type="text">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">区域类型:</label>
		<div class="controls">
			<select id="type" name="type">

				<?php switch($data["type"]): case "1": ?><option value="1">国家</option><?php break;?>


					<?php case "2": ?><option value="2" selected="selected">省份、直辖市</option><?php break;?>


					<?php case "3": ?><option value="3">地市</option><?php break;?>


					<?php case "4": ?><option value="4">区县</option><?php break; endswitch;?>

			</select>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">备注:</label>
		<div class="controls">
			<textarea id="remarks" name="remarks" maxlength="200" class="input-xlarge" rows="3"><?php echo ($data['remarks']); ?></textarea>
		</div>
	</div>
	<div class="form-actions">

		<input id="btnCancel" class="btn" value="返 回" onclick="history.go(-1)" type="button">
	</div>
</form>


</body></html>