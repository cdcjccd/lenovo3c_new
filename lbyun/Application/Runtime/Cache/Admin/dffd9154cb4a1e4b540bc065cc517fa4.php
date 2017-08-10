<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
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
							<li class="active  avtive_bold">激活码查询</li>
						</ul>	
				<form action="<?php echo U('Codes/index');?>" method="post" name="Form" id="Form">
						<table border="0" cellspacing="0" cellpading="0" class="table-nav-search">
							<tr>
                                <td style="padding-right:16px;">激活码查询:</td>
								  <td>
									<div class="nav-search">
										<span class="input-icon">
											<input type="text" placeholder="输入激活码" class="nav-search-input" id="nav-search-input" autocomplete="off" name="order_code" value="<?php echo ($asd["order_code"]); ?>"/>
											<i class="ace-icon fa fa-search nav-search-icon"></i>
										</span>
									</div>
								 </td>
								<td style="padding-right:10px;"><a class="btn btn-light btn-xs" onclick="tosearch();"  title="检索"><i id="nav-search-icon" class="ace-icon fa fa-search bigger-110 nav-search-icon white"></i></a></td>
							</tr>
						</table>
						<!-- 检索  -->
						<table id="simple-table" class="table table-striped table-bordered table-hover" style="margin-top:5px;">	
							<thead>
								<tr>
								
									<th class="center">卡片类型</th>
									<th class="center">产品</th>
									<th class="center">激活号</th>
									<th class="center">有效期</th>
									<th class="center">是否有效</th>
									<th class="center">购买者</th>
									<th class="center">订单号</th>
									<th class="center">激活码状态</th>
								</tr>
							</thead>						
							<tbody>
							<!-- 开始循环 -->	
										<tr>
								            <td class='center'>
								            	<?php if($date['order_card_type'] == '0'): echo "<font color='red'>"."虚体卡"."</font>";?>
											 	<?php elseif($date['order_card_type'] == '1'): ?>
                                               	<?php  echo "<font color='green'>"."实体卡"."</font>"; endif; ?>
										    </td>
											<td class='center'><?php echo ($date["product_name"]); ?></td>
											<td class='center'><?php echo ($date["order_code"]); ?></td>
											<td class='center'><?php echo ($date["end_time"]); ?></td>
											<td class='center'>
											    <?php if(date("Y-m-d H-i-s",time())<$date['end_time']){ echo "有效"; }elseif(date("Y-m-d H-i-s",time())<$date['end_time']){ echo "无效"; }?>
											</td>
											<td class='center'><?php echo ($date["order_creater"]); ?></td>
											<td class='center'><?php echo ($date["order_number"]); ?></td>
											<td class='center'>
                                                <?php if(date("Y-m-d H-i-s",time())<$date['end_time']){ echo "可使用"; }elseif(date("Y-m-d H-i-s",time())<$date['end_time']){ echo "禁用"; }?>
											 
											</td> 
											</td>
										</tr>
							</tbody>
						</table>
						<div class="page-header position-relative">
						<table style="width:100%;">
							<tr>
							<td style="vertical-align:top;"></td>
							<td style="vertical-align:top;"><div class="pagination" style="float: right;padding-top: 0px;margin-top: 0px;">	
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
	<script type="text/javascript">
        window.jQuery || document.write("<script src='/lenovo3c_new/lbyun/Public/Admin/static/ace/js/jquery.js'>"+"<"+"/script>");
	</script>
	<script type="text/javascript">
        if('ontouchstart' in document.documentElement) document.write("<script src='/lenovo3c_new/lbyun/Public/Admin/static/ace/js/jquery.mobile.custom.js'>"+"<"+"/script>");
	</script>
	<script type="text/javascript">
        // 一键选中
        function selectAll(){
           var check=document.getElementsByName('checkboxes[]');
          for(var i=0; i<check.length;i++){

          if(check[i].checked==true){

            check[i].checked=false;

          }else{
            check[i].checked=true;
          }  
        }
        }
		function tosearch(){
			$("#Form").submit();
		}
	
	</script>
</body>
</html>