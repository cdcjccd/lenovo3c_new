<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="overflow-x:hidden;overflow-y:auto;"><head>
		<title>
		即将审核的订单 - Powered By Enjoy3C</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Cache-Control" content="no-store"><meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<meta name="author" content="http://ljz0721cx.iteye.com/">
<meta http-equiv="X-UA-Compatible" content="IE=7,IE=9,IE=10">
	<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/jquery-1.js" type="text/javascript"></script>

	<link href="/lenovo3c_new/lbyun/Public/Admin/static/userlist/bootstrap.css" type="text/css" rel="stylesheet" />
	<!--<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/bootstrap.js" type="text/javascript"></script>-->
	<!--[if lte IE 6]><!--<link href="/lenjoy/static/bootstrap/bsie/css/bootstrap-ie6.min.css" type="text/css" rel="stylesheet" />-->
	<script src="/lenjoy/static/bootstrap/bsie/js/bootstrap-ie.min.js" type="text/javascript"></script><![endif]-->

	<!--<link href="/lenovo3c_new/lbyun/Public/Admin/static/userlist/lenjoy.css" type="text/css" rel="stylesheet" />-->
	<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/lenjoy.js" type="text/javascript"></script>

	<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/My97DatePicker/WdatePicker.js"></script>


	<style>
		th{
			color: #ffffff;
			background: rgb(68,142,205);
		}
	</style>
		<!--  需要添加百度统计分析-->
		

<meta name="decorator" content="default">
<script type="text/javascript">
	function page(n, s) {
		$("#pageNo").val(n);
		$("#pageSize").val(s);
		$("#searchForm").submit();
		return false;
	}
</script>

	</head>
	<body>
		
	<div id="warning" style="display: none" class="alert alert-warning" aria-hidden="true">
		<a class="closed close" href="#">×</a> <strong>提示！</strong>
	</div>
	<ul class="nav nav-tabs">
		
			<li class="active"><a href="http://114.247.140.53:8080/lenjoy#tOrder/willAuditOverTimeOrder">超时数据</a></li>
		
	</ul>
	<form id="searchForm" class="breadcrumb form-search" action="/lenjoy#tOrder/willAuditOverTimeOrder" method="post">
		<input id="pageNo" name="pageNo" value="1" type="hidden">
		<input id="pageSize" name="pageSize" value="20" type="hidden">
		<div style="margin-top: 8px;">
			<input name="search" maxlength="50" placeholder="订单号，手机号，IMEI号" class="input-medium" type="text"> 
			&nbsp;<input id="btnSubmit" class="btn btn-primary" value="查询" onclick="return page();" type="submit">
		</div>
	</form>
	


  











	


<script type="text/javascript">top.$.jBox.closeTip();</script>



	<table id="contentTable" class="table table-striped table-bordered table-condensed">
		<thead>
			<tr>
				<!-- <th>产品</th> -->
				<th>订单号</th>
				<th>IMEI号</th>
				<th>购买人</th>
				<th>购买方式</th>
				<th>订单来源</th>
				<th>订单状态</th>
				<th>下单时间</th>
				
					<th>操作</th>
				
			</tr>
		</thead>
		<tbody>
		<tr>

			<td>201707087110180651977246270</td>
			<td>864728030115498</td>
			<td>丁海兵</td>
			<td>激活码购买</td>
			<td>批量</td>
			<td>审核期</td>
			<td>2017-07-08 03:26:08</td>
			<!-- 需要审核，需要审核文件的审核方法 -->


			<td><a href="/lenjoy#tOrder/showAuditOrder?oid=2141218&operateType=1">审核订单</a></td>



			<!-- 需要审核，但不需要审核文件的审核方法 -->

		</tr>
	</tbody></table>
	<!--<div class="pagination"><ul>-->
<!--<li class="disabled"><a href="javascript:">« 上一页</a></li>-->
<!--<li class="active"><a href="javascript:">1</a></li>-->
<!--<li class="disabled"><a href="javascript:">下一页 »</a></li>-->
<!--<li class="disabled controls"><a href="javascript:">当前 <input value="1" onkeypress="var e=window.event||this;var c=e.keyCode||e.which;if(c==13)page(this.value,20);" onclick="this.select();" type="text"> / <input value="20" onkeypress="var e=window.event||this;var c=e.keyCode||e.which;if(c==13)page(1,this.value);" onclick="this.select();" type="text"> 条，共 0 条</a></li><li>-->
<!--</li></ul>-->
<div style="clear:both;"></div></div>

	
</body></html>