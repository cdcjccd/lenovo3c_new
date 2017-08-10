<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="overflow-x:hidden;overflow-y:auto;"><head>
		<title>
		所有订单统计 - Powered By Enjoy3C</title>
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



	<!--<link rel="stylesheet" href="/lenovo3c_new/lbyun/Public/Admin/static/ace/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />-->

	<!--  需要添加百度统计分析-->
	<style>
		body{
			background: #ffffff;
		}
		input{
			border-radius:5px;
		}
		th{
			background: rgb(68,142,205);
		}
	</style>

<meta name="decorator" content="default">


	</head>
	<body>
		
	<div id="warning" style="display: none" class="alert alert-warning" aria-hidden="true">
		<a class="closed close" href="#">×</a> <strong>提示！</strong>非保险期的订单不能出险!
	</div>

	<form id="searchForm" class="breadcrumb form-search" action="/#/business/export/exportRegisterDownLoad" method="post">
		<input id="pageNo" name="pageNo" value="1" type="hidden">
		<input id="pageSize" name="pageSize" value="20" type="hidden">
		<input id="orderBy" name="orderBy" value="" type="hidden">
		<input id="orderType" name="orderType" value="0" type="hidden">

		<div>
			
			
			<label>&nbsp;通&nbsp;路&nbsp;：</label>	
			<select id="routeName" name="routeName" onchange="findProductType();">
				<option value="" selected="selected">全部</option>
				 
					<option value="京东">京东</option>
				 
					<option value="m5">m5</option>
				 
					<option value="苏宁">苏宁</option>
				 
					<option value="淘宝">淘宝</option>
				 
					<option value="天猫通路">天猫通路</option>
				 
					<option value="深圳平安">深圳平安</option>
				 
					<option value="北京平安">北京平安</option>
				 
					<option value="北京联通">北京联通</option>
				 
					<option value="北京移动">北京移动</option>
				 
					<option value="m3">m3</option>
				 
					<option value="官网">官网</option>
				 
					<option value="测试">测试</option>
				 
					<option value="中国移动">中国移动</option>
				 
					<option value="京东电销">京东电销</option>
				 
					<option value="浙江移动">浙江移动</option>
				 	
			</select> 
			<label>产品类型：</label>
			<select id="productType" name="productType" class="required input-medium" onchange="findProductListByPType();">
				<option value="" selected="selected">全部</option>
				
			</select>
			<label>&nbsp;产品名称：&nbsp;</label>
			<select id="productId" name="productId" class="required input-medium">
				<option value="" selected="selected">全部</option>
			</select>	
		</div>
			
		<br>
		<div>	
			<label>注册时间段：</label>
			<input id="d12" name="startTime"  onclick="WdatePicker()" placeholder="开始" class="required Wdate span2" value="" maxlength="50" type="text">&nbsp;-&nbsp;<input id="d13" name="endTime" onclick="WdatePicker()" placeholder="结束时间" class="required Wdate span2" value="" maxlength="50" type="text">
			<input id="btnSubmit" class="btn btn-primary" value="查询" onclick="return page();" type="submit">

				<input id="btnSubmit2" class="btn btn-info submitbutton " value="导出激活" data-loading-text="休息一下..."  type="button">
			
		</div>
	</form>

	<script>
		$('#color').change(function(){$('#btnSubmit').css('font-color',$(this).val())})
	</script>



















	<table id="contentTable" class="table table-striped table-bordered table-condensed">
		<thead>
			<tr>
				
				<th>产品</th>
				<th>订单号</th>
				<th>激活人</th>
				<th>购买方式</th>
				<th>订单类型</th>
				<th>订单状态</th>
				<th>审核状态</th>
				<th>下单时间</th>
				
					<th>操作</th>
				
			</tr>
		</thead>
		<tbody>
			
				<tr>
					
					<td>屏碎保2.0（12个月）白金版</td>
					<td>201707056532274067172725192</td>
					<td>石总</td>
					<td>激活码购买</td>
					<td>批量</td>
					<td>免赔期</td>
					<td>审核完成</td>
					<td>2017-07-05</td>
					
						<td><a href="<?php echo U('Admin/RegisterAnalyze/exportView');?>">查看详细</a></td>
					
				</tr>
			
				<tr>
					
					<td>屏碎保2.0（12个月）白金版</td>
					<td>201707056941564510249604657</td>
					<td>石总</td>
					<td>激活码购买</td>
					<td>批量</td>
					<td>审核期</td>
					<td>审核中</td>
					<td>2017-07-05</td>
					
						<td><a href="http://114.247.140.53:8080/#/business/userActivateOrder/view?id=2138433">查看详细</a></td>
					
				</tr>
			
				<tr>
					
					<td>屏碎保2.0（12个月）白金版</td>
					<td>201707054775463639697326248</td>
					<td>石总</td>
					<td>激活码购买</td>
					<td>批量</td>
					<td>审核期</td>
					<td>审核中</td>
					<td>2017-07-05</td>
					
						<td><a href="http://114.247.140.53:8080/#/business/userActivateOrder/view?id=2138431">查看详细</a></td>
					
				</tr>
			
				<tr>
					
					<td>屏碎保2.0（12个月）白金版</td>
					<td>201707059216505807786775246</td>
					<td>石总</td>
					<td>激活码购买</td>
					<td>批量</td>
					<td>免赔期</td>
					<td>审核完成</td>
					<td>2017-07-05</td>
					
						<td><a href="http://114.247.140.53:8080/#/business/userActivateOrder/view?id=2138430">查看详细</a></td>
					
				</tr>
			
				<tr>
					
					<td>PA平安好家意外保</td>
					<td>201707059082040909745450433</td>
					<td>深圳平安</td>
					<td>非激活码购买</td>
					<td>绑定</td>
					<td>免赔期</td>
					<td>审核完成</td>
					<td>2017-07-05</td>
					
						<td><a href="http://114.247.140.53:8080/#/business/userActivateOrder/view?id=2138429">查看详细</a></td>
					
				</tr>
			
				<tr>
					
					<td>PA平安好家意外保</td>
					<td>201707056622823180797347196</td>
					<td>深圳平安</td>
					<td>非激活码购买</td>
					<td>绑定</td>
					<td>免赔期</td>
					<td>审核完成</td>
					<td>2017-07-05</td>
					
						<td><a href="http://114.247.140.53:8080/#/business/userActivateOrder/view?id=2138428">查看详细</a></td>
					
				</tr>
			
		</tbody>
	</table>
	<div class="pagination">
		<!--分页-->
<div style="clear:both;"></div></div>

	
</body></html>