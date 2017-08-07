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

	<!-- /section:basics/navbar.layout -->
	<div class="main-container" id="main-container">
		<!-- /section:basics/sidebar -->
		<div class="main-content">
			<div class="main-content-inner">
				<div class="page-content">
					<div class="row">
						<div class="col-xs-12">
						<ul class="breadcrumb">
							<li>
								<a href="#">公司信息</a>
							</li>
							<li class="active  avtive_bold"><a href="<?php echo U('Lead/uploa');?>">sku模板添加</a></li>
							<li class="active  avtive_bold">sku修改</li>
							<li class="active  avtive_bold">sku列表</li>
						</ul>	
						<!-- 检索  -->
						<form action="<?php echo U('Extension/index');?>" method="post" name="Form" id="Form">

						    <table border="0" cellspacing="0" cellpading="0" class="table-nav-search">
							   <tr>
                                 <td style="padding-right:16px;">品牌类型:</td>
								   <td style="padding-right:30px;">
								 	<select class="chosen-select form-control" name="parent_id" id="id" data-placeholder="请选择" style="vertical-align:top;width: 120px;">
									<option value="0">==请选择==</option>
									<?php if(is_array($brand)): foreach($brand as $key=>$val): ?><option value="<?php echo ($val['brand_id']); ?>"><?php echo ($val['brand_name']); ?></option><?php endforeach; endif; ?>
								  	</select>
								</td>
                                <td style="padding-right:16px;">SKU值:</td>
								<td>
									<div class="nav-search">
										<span class="input-icon">
											<input type="text" placeholder="输入SKU值" class="nav-search-input" id="nav-search-input" autocomplete="off" name="product_sku" value="<?php echo ($_POST['product_sku']); ?>" placeholder="这里输入关键词"/>
											<i class="ace-icon fa fa-search nav-search-icon"></i>
										</span>
									</div>
								</td>
                                <td style="padding-right:16px;">物料编号:</td>
								<td>
									<div class="nav-search">
										<span class="input-icon">
											<input type="text" placeholder="输入物料编号" class="nav-search-input" id="nav-search-input" autocomplete="off" name="product_number" value="<?php echo ($_POST['product_number']); ?>" placeholder="这里输入关键词"/>
											<i class="ace-icon fa fa-search nav-search-icon"></i>
										</span>
									</div>
								</td>
								<td style="padding-right:10px;">
									<a class="btn btn-light btn-xs" onclick="tosearch();"  title="检索">
										<i id="nav-search-icon" class="ace-icon fa fa-search bigger-110 nav-search-icon white">		
										</i>
									</a>
								</td>								
							</tr>
						</table>
				
						<table id="simple-table" class="table table-striped table-bordered table-hover" style="margin-top:5px;">	
							<thead>
								<tr>
									<th class="center" style="width:35px;">
									<label class="pos-rel"><input type="checkbox" class="ace" id="zcheckbox" /><span class="lbl"></span></label>
									</th>
									<!-- <th class="center">序号</th> -->
									<th class="center">产品ID</th>
									<th class="center">产品名称</th>
									<th class="center">产品详细</th>
									<th class="center">SKU值</th>
									<th class="center">物料编号</th>
									<th class="center">对应产品价格</th>
									<th class="center">操作</th>
									<th class="center">操作</th>
								</tr>
							</thead>					
							<tbody>
							<!-- 开始循环 -->	
									<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
											<td class='center'>
												<label class="pos-rel"><input type='checkbox' name='ids' value="<?php echo ($vo["companyinfo_id"]); ?>" class="ace" /><span class="lbl"></span></label>
											</td>
											<!-- <td class='center' style="width: 30px;">{}</td> -->
											<td class='center'><?php echo ($vo["product_id"]); ?></td>
											<td class='center'><?php echo ($vo["product_name"]); ?></td>
											<td class='center'><?php echo ($vo["product_minute"]); ?></td>
											<td class='center'><?php echo ($vo["product_sku"]); ?></td>
											<td class='center'><?php echo ($vo["product_number"]); ?></td>
											<td class='center'><?php echo ($vo["product_price"]); ?></td>
											<td class='center'>
												<a href="<?php echo U("Nva/index");?>?x_id=<?php echo ($vo['product_id']); ?>">产品详情</a>
												<a href="<?php echo U('Extension/upda');?>?p_id=<?php echo ($vo['product_id']); ?>" >修改</a>
												<a href="<?php echo U('Extension/dele');?>?s_id=<?php echo ($vo['product_id']); ?>" onclick='ch1()'>删除</a>
											</td>
											<td class="center">												
												<div class="hidden-sm hidden-xs btn-group">
													<a class="btn btn-xs btn-success" title="编辑" onclick="edit('<?php echo ($vo["companyinfo_id"]); ?>');">
														 <i class="ace-icon fa fa-pencil-square-o bigger-120" title="编辑"></i> 
													</a>	
												</div>
												<div class="hidden-md hidden-lg">
													<div class="inline pos-rel">
														 <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
															<i class="ace-icon fa fa-cog icon-only bigger-110"></i>
														</button>
														<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
															<li>
																<a style="cursor:pointer;" onclick="edit('<?php echo ($vo["companyinfo_id"]); ?>');" class="tooltip-success" data-rel="tooltip" title="修改">
																	<span class="green">
																		<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																	</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
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
								<td style="vertical-align:top;"><div class="pagination" style="float: right;padding-top: 0px;margin-top: 0px;">	
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
	</div>
		<script type="text/javascript">
			window.jQuery || document.write("<script src='/lenovo3c_new/lbyun/Public/Admin/static/ace/js/jquery.js'>"+"<"+"/script>");

			function ch1(){
                if(confirm("您确定要删除吗?")){
                  return true;
                }
                else{
                  return false;
                }
            }
		</script>
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/lenovo3c_new/lbyun/Public/Admin/static/ace/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>	
	<script src="/lenovo3c_new/lbyun/Public/Admin/static/module_option/js/layer.js"></script>
<!--layer弹出图层-->
	<script type="text/javascript" src="/lenovo3c_new/lbyun/Public/Admin/static/js/jquery.tips.js"></script>
	<script type="text/javascript">
		$(top.hangge());//关闭加载状态
		//检索
		function tosearch(){
			$("#Form").submit();
		}
		//修改
		function edit(Id){
			var url = "<?php echo U('Admin/Company/edit');?>?companyinfo_id="+Id;
			window.location.href= url;
		}
	</script>
</body>
</html>