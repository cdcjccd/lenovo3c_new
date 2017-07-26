<?php if (!defined('THINK_PATH')) exit();?>




<!DOCTYPE html>
<html lang="en">
<head>
<!-- 下拉框 -->
<link rel="stylesheet" href="/Public/Admin/static/ace/css/chosen.css" />
<!-- jsp文件头和头部 -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>联保云</title>
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="/Public/Admin/static/ace/css/bootstrap.css" />
		<link rel="stylesheet" href="/Public/Admin/static/ace/css/font-awesome.css" />
		<!-- page specific plugin styles -->
		<!-- text fonts -->
		<link rel="stylesheet" href="/Public/Admin/static/ace/css/ace-fonts.css" />
		<!-- ace styles -->
		<link rel="stylesheet" href="/Public/Admin/static/ace/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />
		<!--[if lte IE 9]>
			<link rel="stylesheet" href="/Public/Admin/static/ace/css/ace-part2.css" class="ace-main-stylesheet" />
		<![endif]-->
		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="/Public/Admin/static/ace/css/ace-ie.css" />
		<![endif]-->
		<!-- inline styles related to this page -->
		<!-- ace settings handler -->
		<script src="/Public/Admin/static/ace/js/ace-extra.js"></script>
		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
		<!--[if lte IE 8]>
		<script src="/Public/Admin/static/ace/js/html5shiv.js"></script>
		<script src="/Public/Admin/static/ace/js/respond.js"></script>
		<![endif]-->

<!-- 日期框 -->
<link rel="stylesheet" href="/Public/Admin/static/ace/css/datepicker.css" />
<link rel="stylesheet" href="/Public/Admin/static/ace/css/less/ace.css" />
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
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">首页</a>
							</li>

							<li>
								<a href="#">我公司的信息</a>
							</li>
							<li class="active  avtive_bold">填写编辑公司信息</li>
						</ul>	
						<!-- 检索  -->
						<form action="companyinfo/list.do" method="post" name="Form" id="Form">
						<table border="0" cellspacing="0" cellpading="0" class="table-nav-search">
							<tr>
								<td>
									<div class="nav-search">
										<span class="input-icon">
											<input type="text" placeholder="这里输入关键词" class="nav-search-input" id="nav-search-input" autocomplete="off" name="keywords" value="" placeholder="这里输入关键词"/>
											<i class="ace-icon fa fa-search nav-search-icon"></i>
										</span>
									</div>
								</td>
								<td>
									<span>开始时间：</span>
									<input class="span10 date-picker start-date" name="lastStart" id="lastStart"  value="" type="text" data-date-format="yyyy-mm-dd" readonly="readonly" placeholder="开始日期" title="开始日期"/>
								</td>
								<td>
									<span>结束时间：</span>
									<input class="span10 date-picker start-date" name="lastEnd" name="lastEnd"  value="" type="text" data-date-format="yyyy-mm-dd" readonly="readonly" placeholder="结束日期" title="结束日期"/>
								</td>
								<td style="padding-right:10px;">
								 	<select class="chosen-select form-control" name="name" id="id" data-placeholder="请选择" style="vertical-align:top;width: 120px;">
									<option value=""></option>
									<option value="">全部</option>
									<option value="">1</option>
									<option value="">2</option>
								  	</select>
								</td>
								
								<td style="padding-right:10px;"><a class="btn btn-light btn-xs" onclick="tosearch();"  title="检索"><i id="nav-search-icon" class="ace-icon fa fa-search bigger-110 nav-search-icon white"></i></a></td>
								<td><a class="btn btn-light btn-xs" onclick="toExcel();" title="导出到EXCEL"><i id="nav-search-icon" class="ace-icon fa fa-download bigger-110 nav-search-icon white"></i></a></td>
							</tr>
						</table>
						<!-- 检索  -->
					
						<table id="simple-table" class="table table-striped table-bordered table-hover" style="margin-top:5px;">	
							<thead>
								<tr>
									<th class="center" style="width:35px;">
									<label class="pos-rel"><input type="checkbox" class="ace" id="zcheckbox" /><span class="lbl"></span></label>
									</th>
									<th class="center">序号</th>
									<th class="center">公司序号</th>
									<th class="center">公司名称</th>
								
									<th class="center">公司营业执照号</th>
									<th class="center">认证状态</th>
									<th class="center">服务级别</th>
									<th class="center">操作</th>
								</tr>
							</thead>
													
							<tbody>
							<!-- 开始循环 -->	
							
								
									<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
											<td class='center'>
												<label class="pos-rel"><input type='checkbox' name='ids' value="<?php echo ($vo["companyinfo_id"]); ?>" class="ace" /><span class="lbl"></span></label>
											</td>
											<td class='center' style="width: 30px;"><?php echo ($key + 1); ?></td>
											
											<td class='center'><?php echo ($vo["company_num"]); ?></td>
											<td class='center'><?php echo ($vo["company_name"]); ?></td>
											<td class='center'><?php echo ($vo["cert"]); ?></td>
											
											
											 <td class='center'><a href="javascript:success_com()"><?php echo ($vo["company_authentication"]); ?>(查看)</a></td>
											
											
											
											<td class='center'><?php echo ($vo["service_level"]); ?></td>
											<td class="center">
												
												
												<div class="hidden-sm hidden-xs btn-group">
													<!--<a onclick="edit('85dcd90b1e284724af55742c0e9e6076');">编辑</a>-->
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
								<td style="vertical-align:top;"><div class="pagination" style="float: right;padding-top: 0px;margin-top: 0px;">	<!-- <ul class="pagination pull-right no-margin">
									<li><a>共<font color=red>5</font>条</a></li>
									<li><input type="number" value="" id="toGoPage" style="width:50px;text-align:center;float:left" placeholder="页码"/></li>
									<li style="cursor:pointer;"><a onclick="toTZ();"  class="btn btn-mini btn-success">跳转</a></li>
									<li><a>首页</a></li>
									<li><a>上页</a></li>
								<li class="active"><a><font color='white'>1</font></a></li>
									<li><a>下页</a></li>
									<li><a>尾页</a></li>
									<li><a>共1页</a></li>
									<li><select title='显示条数' style="width:55px;float:left;margin-top:1px;" onchange="changeCount(this.value)">
									<option value='10'>10</option>
									<option value='10'>10</option>
									<option value='20'>20</option>
									<option value='30'>30</option>
									<option value='40'>40</option>
									<option value='50'>50</option>
									<option value='60'>60</option>
									<option value='70'>70</option>
									<option value='80'>80</option>
									<option value='90'>90</option>
									<option value='99'>99</option>
									</select>
									</li>
								</ul> -->
								<?php echo ($show); ?>
<script type="text/javascript">
function nextPage(page){ top.jzts();	if(true && document.forms[0]){
		var url = document.forms[0].getAttribute("action");
		if(url.indexOf('?')>-1){url += "&currentPage=";}
		else{url += "?currentPage=";}
		url = url + page + "&showCount=10";
		document.forms[0].action = url;
		document.forms[0].submit();
	}else{
		var url = document.location+'';
		if(url.indexOf('?')>-1){
			if(url.indexOf('currentPage')>-1){
				var reg = /currentPage=\d*/g;
				url = url.replace(reg,'currentPage=');
			}else{
				url += "&currentPage=";
			}
		}else{url += "?currentPage=";}
		url = url + page + "&showCount=10";
		document.location = url;
	}
}
function changeCount(value){ top.jzts();	if(true && document.forms[0]){
		var url = document.forms[0].getAttribute("action");
		if(url.indexOf('?')>-1){url += "&currentPage=";}
		else{url += "?currentPage=";}
		url = url + "1&showCount="+value;
		document.forms[0].action = url;
		document.forms[0].submit();
	}else{
		var url = document.location+'';
		if(url.indexOf('?')>-1){
			if(url.indexOf('currentPage')>-1){
				var reg = /currentPage=\d*/g;
				url = url.replace(reg,'currentPage=');
			}else{
				url += "1&currentPage=";
			}
		}else{url += "?currentPage=";}
		url = url + "&showCount="+value;
		document.location = url;
	}
}
function toTZ(){var toPaggeVlue = document.getElementById("toGoPage").value;if(toPaggeVlue == ''){document.getElementById("toGoPage").value=1;return;}if(isNaN(Number(toPaggeVlue))){document.getElementById("toGoPage").value=1;return;}nextPage(toPaggeVlue);}
</script>
</div></td>
							</tr>
						</table>
						
						</div>
						</form>
					
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.page-content -->
			</div>
		</div>
		<!-- /.main-content -->

		<!-- 返回顶部 -->
		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
			<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
		</a>

	</div>
	<!-- /.main-container -->

	<!-- basic scripts -->
	<!-- 页面底部js¨ -->
			
		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='/Public/Admin/static/ace/js/jquery.js'>"+"<"+"/script>");
		</script>
		<!-- <![endif]-->
		<!--[if IE]>
		<script type="text/javascript">
		 window.jQuery || document.write("<script src='http://www.lbyun.com:80//Public/Admin/static/ace/js/jquery1x.js'>"+"<"+"/script>");
		</script>
		<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/Public/Admin/static/ace/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>
		<script src="/Public/Admin/static/ace/js/bootstrap.js"></script>
	<!-- 删除时确认窗口 -->
	<script src="/Public/Admin/static/ace/js/bootbox.js"></script>
	<!-- ace scripts -->
	<script src="/Public/Admin/static/ace/js/ace/ace.js"></script>
	<!-- 下拉框 -->
	<script src="/Public/Admin/static/ace/js/chosen.jquery.js"></script>
	<!-- 日期框 -->
	<script src="/Public/Admin/static/ace/js/date-time/bootstrap-datepicker.js"></script>
	<!--提示框-->
		<!--layer弹出图层-->
	
	<script src="/Public/Admin/static/module_option/js/layer.js"></script>
<!--layer弹出图层-->
	<script type="text/javascript" src="/Public/Admin/static/js/jquery.tips.js"></script>
	<script type="text/javascript">
		$(top.hangge());//关闭加载状态
		//检索
		function tosearch(){
			top.jzts();
			$("#Form").submit();
		}
		$(function() {
		
			//日期框
			$('.date-picker').datepicker({
				autoclose: true,
				todayHighlight: true
			});
			
			//下拉框
			if(!ace.vars['touch']) {
				$('.chosen-select').chosen({allow_single_deselect:true}); 
				$(window)
				.off('resize.chosen')
				.on('resize.chosen', function() {
					$('.chosen-select').each(function() {
						 var $this = $(this);
						 $this.next().css({'width': $this.parent().width()});
					});
				}).trigger('resize.chosen');
				$(document).on('settings.ace.chosen', function(e, event_name, event_val) {
					if(event_name != 'sidebar_collapsed') return;
					$('.chosen-select').each(function() {
						 var $this = $(this);
						 $this.next().css({'width': $this.parent().width()});
					});
				});
				$('#chosen-multiple-style .btn').on('click', function(e){
					var target = $(this).find('input[type=radio]');
					var which = parseInt(target.val());
					if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
					 else $('#form-field-select-4').removeClass('tag-input-style');
				});
			}
			
			
			//复选框全选控制
			var active_class = 'active';
			$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
				var th_checked = this.checked;//checkbox inside "TH" table header
				$(this).closest('table').find('tbody > tr').each(function(){
					var row = this;
					if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
					else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
				});
			});
		});
		//新增
		function add(){
			 top.jzts();
			 var diag = new top.Dialog();
			 diag.Drag=true;
			 diag.Title ="添加";
			 diag.URL = 'http://www.lbyun.com:80/companyinfo/goAdd.do';
			 diag.Width = 800;
			 diag.Height = 1000;
			 diag.Modal = true;				//有无遮罩窗口
			 diag. ShowMaxButton = true;	//最大化按钮
		     diag.ShowMinButton = true;		//最小化按钮
			 diag.CancelEvent = function(){ //关闭事件
				
				diag.close();
				location.reload();
				
			 };
		    diag.OKEvent = function(){
		       diag.close();
		       location.reload();
		    };
			 diag.show();
		}
		
		function success_com(){
			

			  layer.open({
				  type: 2,
				  title: false,
				  closeBtn: 1, //不显示关闭按钮
				  shade: [0],
				  area: ['800px', '700px'],
				  offset: 'cb', //中间弹出，rb右下角弹出，lb左下角弹出
				  /*time: 2000,//2秒后自动关闭*/ 
				 /* anim: 2,*/
				 title: '自定义修改',
				  maxmin:true, //开启最大化最小化按钮
				  content: ['companyinfo/gosuccess.do', 'no'], //iframe的url，no代表不显滚动条
				 
		          
				});
			
		}


		
		//修改
		function edit(Id){
			
			 top.jzts();
			 var diag = new top.Dialog();
			 diag.Drag=true;
			 diag.Title ="编辑";
			 diag.URL = 'http://www.lby.com/lby/Admin/Company/edit?COMPANYINFO_ID='+Id;
			 diag.Width = 600;
			 diag.Height =800;
			 diag.Modal = true;				//有无遮罩窗口
			 diag. ShowMaxButton = true;	//最大化按钮
		     diag.ShowMinButton = true;		//最小化按钮 
			 diag.CancelEvent = function(){ //关闭事件
				 if(diag.innerFrame.contentWindow.document.getElementById('zhongxin').style.display == 'none'){
					 nextPage(1);
				}
				diag.close();
			 };
			 diag.show();
		}
		
		//批量操作
		function makeAll(msg){
			bootbox.confirm(msg, function(result) {
				if(result) {
					var str = '';
					for(var i=0;i < document.getElementsByName('ids').length;i++){
					  if(document.getElementsByName('ids')[i].checked){
					  	if(str=='') str += document.getElementsByName('ids')[i].value;
					  	else str += ',' + document.getElementsByName('ids')[i].value;
					  }
					}
					if(str==''){
						bootbox.dialog({
							message: "<span class='bigger-110'>您没有选择任何内容!</span>",
							buttons: 			
							{ "button":{ "label":"确定", "className":"btn-sm btn-success"}}
						});
						$("#zcheckbox").tips({
							side:1,
				            msg:'点这里全选',
				            bg:'#AE81FF',
				            time:8
				        });
						return;
					}else{
						if(msg == '确定要删除选中的数据吗?'){
							top.jzts();
							$.ajax({
								type: "POST",
								url: 'http://www.lbyun.com:80/companyinfo/deleteAll.do?tm='+new Date().getTime(),
						    	data: {DATA_IDS:str},
								dataType:'json',
								//beforeSend: validateData,
								cache: false,
								success: function(data){
									 $.each(data.list, function(i, list){
											nextPage(1);
									 });
								}
							});
						}
					}
				}
			});
		};
		
		//导出excel
		/*function toExcel(){
			window.location.href='http://www.lbyun.com:80/companyinfo/excel.do';
		}*/
	</script>


</body>
</html>