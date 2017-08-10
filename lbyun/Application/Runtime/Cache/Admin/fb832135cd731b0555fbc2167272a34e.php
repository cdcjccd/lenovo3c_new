<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<!-- 下拉框 -->
<link rel="stylesheet" href="/lenovo3c_new/lbyun/Public/Admin/static/ace/css/chosen.css" />
<!-- jsp文件头和头部 -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>联保云</title>
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<link rel="stylesheet" href="/lenovo3c_new/lbyun/Public/Admin/static/ace/css/bootstrap.css" />
		<link rel="stylesheet" href="/lenovo3c_new/lbyun/Public/Admin/static/ace/css/font-awesome.css" />
		<link rel="stylesheet" href="/lenovo3c_new/lbyun/Public/Admin/static/ace/css/ace-fonts.css" />
		<link rel="stylesheet" href="/lenovo3c_new/lbyun/Public/Admin/static/ace/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />
		<script src="/lenovo3c_new/lbyun/Public/Admin/static/ace/js/ace-extra.js"></script>
		<script src="/lenovo3c_new/lbyun/Public/Admin/static/ace/js/html5shiv.js"></script>
		<script src="/lenovo3c_new/lbyun/Public/Admin/static/ace/js/respond.js"></script>
</head>
<body class="no-skin">
	<div class="main-container" id="main-container">
		<div class="main-content">
			<div class="main-content-inner">
				<div class="page-content">
					<div class="row">
						<div class="col-xs-12">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">首页</a>
							</li>
							<li>
								<a href="#">我公司的信息</a>
							</li>
							<li class="active  avtive_bold">我的订单</li>
						</ul>	
						<!-- 检索  -->
						<form action="<?php echo U(Market/index);?>" method="GET" name="Form" id="Form">
						   <table border="0" cellspacing="0" cellpading="0" class="table-nav-search">
							<tr>
							<!-- 	<td>
									<span>下单时间:</span>
									<input class="span10 date-picker start-date" name="lastEnd" name="lastEnd"  value="" type="text" data-date-format="yyyy-mm-dd" readonly="readonly" placeholder="结束日期" title="结束日期"/>
								</td> -->
                                <td>
									<div class="nav-search">
										<span class="input-icon">订单号</span>
											<input type="text" placeholder="这里输入关键词" class="nav-search-input" id="nav-search-input" autocomplete="off" name="order_number" value="<?php echo ($asd['order_number']); ?>" placeholder="这里输入关键词"/>
									</div>
								</td>
								<td>
									<div class="nav-search">
										<span class="input-icon">收货人手机号</span>
											<input type="text" placeholder="这里输入手机号"class="nav-search-input" id="nav-search-input" autocomplete="off" name="order_phone" value="<?php echo ($asd['order_phone']); ?>" placeholder="这里输入手机号"/>										
									</div>
								</td>

								<td>
									<div class="nav-search">
										<span class="input-icon">收货人姓名:</span>
											<input type="text" placeholder="这里输入购买人"class="nav-search-input" id="nav-search-input" autocomplete="off" name="order_creater" value="<?php echo ($asd['order_creater']); ?>" placeholder="这里输入购买人"/>
									</div>
								</td>

								<td style="padding-right:10px;"><a class="btn btn-light btn-xs" onclick="tosearch();"  title="查询"><i id="nav-search-icon" class="ace-icon fa fa-search bigger-110 nav-search-icon white"></i></a></td> 
							</tr>
						</table>
						<!-- 检索  -->
						<table id="simple-table" class="table table-striped table-bordered table-hover" style="margin-top:5px;">	
							<thead>
								<tr>
									<th class="center">产品类型</th>
									<th class="center">产品名称</th>
									<th class="center">订单号</th>
									<th class="center">购买数量</th>
									<th class="center">下单时间</th>
									<th class="center">生效时间</th>
									<th class="center">收取状态</th>
									<th class="center">订单状态</th>
								</tr>
							</thead>						
							<tbody>
							<!-- 开始循环 -->	
									<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>					
											<td class='center'><?php echo ($vo["product_types"]); ?></td>
											<td class='center'><?php echo ($vo["product_name"]); ?></td>
											<td class='center'><?php echo ($vo["order_number"]); ?></td>
											<td class='center'><?php echo ($vo["order_count"]); ?></td>
											<td class='center'><?php echo ($vo["end_time"]); ?></td>
											<td class='center'><?php echo ($vo["create_time"]); ?></td>
											<td class='center'>
												<?php if($vo['order_collect'] == '0'): echo "<font color='green'>"."已发货"."</font>";?>
											 	<?php elseif($vo['order_collect'] == '1'): ?>
                                               	<?php  echo "<font color='blue'>"."发货中"."</font>";?>
                                               	<?php elseif($vo['order_collect'] == '2'): ?>
                                               	<?php  echo "<font color='red'>"."已收货"."</font>"; endif; ?>
											</td>
											<td class='center'>
											    <?php if($vo['order_collect'] == '0'): echo "<font color='red'>"."未完成"."</font>";?>
											 	<?php elseif($vo['order_collect'] == '1'): ?>
                                               	<?php  echo "<font color='red'>"."未完成"."</font>";?>
                                               	<?php elseif($vo['order_collect'] == '2'): ?>
                                               	<?php  echo "<font color='blue'>"."完成"."</font>"; endif; ?>
											</td>
										</tr><?php endforeach; endif; ?>
							<!-- 循环结束 -->
							</tbody>
						</table>
						<div class="page-header position-relative">
						
						<table style="width:100%;">
							<tr>
								<td style="vertical-align:top;">	
								</td>
								<td style="vertical-align:top;">
						   <div class="pagination" style="float: right;padding-top: 0px;margin-top: 0px;">	
								<?php echo ($page); ?>
                           </div>
                          </td>
                        </tr>
                    </table>	
                  </div>
               </form>
			  </div>
			</div>
		</div>
   </div>
</div>
	<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
		<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
		</a>
	  </div>
	<script src="/lenovo3c_new/lbyun/Public/Admin/static/module_option/js/layer.js"></script>
    <!--layer弹出图层-->
	<script type="text/javascript" src="/lenovo3c_new/lbyun/Public/Admin/static/js/jquery.tips.js"></script>
	<script type="text/javascript">

	  window.jQuery || document.write("<script src='/lenovo3c_new/lbyun/Public/Admin/static/ace/js/jquery.js'>"+"<"+"/script>");
		//检索
		function tosearch(){
		
			$("#Form").submit();
		}		
	</script>
</body>
</html>