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
	function search() {
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
		<li class="active"><a href="http://114.247.140.53:8080/lenjoy#tOrder/auditUserListOrder">用户审核信息</a></li>
	</ul>
	<form id="searchForm" class="breadcrumb form-search" action="/lenjoy#tOrder/auditUserListOrder" method="post">

		<div style="margin-top: 8px;">
			<label>开始时间：</label> 
			<input name="createDate" maxlength="50" id="d12" onclick="WdatePicker()" placeholder=" 审核时间" class="required Wdate span2" type="text"> 
		    <label>结束时间：</label>
			<input name="endDate" maxlength="50" id="d12" onclick="WdatePicker()" placeholder="审核时间" class="required Wdate span2" type="text"> &nbsp;
			<input id="btnSubmit" class="btn btn-primary" value="查询" onclick="return search();" type="submit">
		</div>
	</form>
	


  











	


<script type="text/javascript">top.$.jBox.closeTip();</script>



	<table id="contentTable" class="table table-striped table-bordered table-condensed">
		<thead>
			<tr>
				<th>工号</th>
				<th>姓名</th>
				<th>订单数量</th>
				<th>平均审核时间</th>
				<th>审核数量占比</th>
			</tr>
		</thead>
		<tbody>
			
				<tr>
					<td>14229</td>
					<td>温嘉玮-北京</td>
					<td>14</td>
					<td>9时14分4秒</td>
					<td>38.89%</td>
				</tr>
			
				<tr>
					<td>14252</td>
					<td>杜海争-北京</td>
					<td>22</td>
					<td>6时47分4秒</td>
					<td>61.11%</td>
				</tr>
			
			
		</tbody>
	</table>

	
</body></html>