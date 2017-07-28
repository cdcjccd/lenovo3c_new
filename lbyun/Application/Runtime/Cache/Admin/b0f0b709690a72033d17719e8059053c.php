<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
 <head> 
  <!-- jsp文件头和头部 --> 
  <meta charset="utf-8" /> 
  <title>联保云</title> 
  <meta name="description" content="" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /> 
  <link rel="stylesheet" href="/lenovo3c_new/lbyun/Public/Admin/ace/css/bootstrap.css" /> 
  <link rel="stylesheet" href="/lenovo3c_new/lbyun/Public/Admin/ace/css/font-awesome.css" />  
  <link rel="stylesheet" href="/lenovo3c_new/lbyun/Public/Admin/ace/css/ace-fonts.css" /> 
  <link rel="stylesheet" href="/lenovo3c_new/lbyun/Public/Admin/ace/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />  
  <script src="/lenovo3c_new/lbyun/Public/Admin/ace/js/ace-extra.js"></script> 
  <style type="text/css">
	.commitopacity{position:absolute; width:100%; height:100px; background:#7f7f7f; filter:alpha(opacity=50); -moz-opacity:0.8; -khtml-opacity: 0.5; opacity: 0.5; top:0px; z-index:99999;}
	</style> 
  <!-- 即时通讯 --> 
  <link rel="stylesheet" type="text/css" href="/lenovo3c_new/lbyun/Public/Admin/plugins/websocketInstantMsg/ext4/resources/css/ext-all.css" /> 
  <link rel="stylesheet" type="text/css" href="/lenovo3c_new/lbyun/Public/Admin/plugins/websocketInstantMsg/css/websocket.css" /> 
  <script type="text/javascript" src="/lenovo3c_new/lbyun/Public/Admin/plugins/websocketInstantMsg/ext4/ext-all-debug.js"></script> 
  <script type="text/javascript" src="/lenovo3c_new/lbyun/Public/Admin/plugins/websocketInstantMsg/websocket.js"></script> 
 </head> 
 <body class="no-skin"> 
  <div id="navbar" class="navbar navbar-default"> 
   <script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed');}catch(e){}
			</script> 
   <div class="navbar-container" id="navbar-container"> 
    <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar"> <span class="sr-only">Toggle sidebar</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> 
    <div class="navbar-header pull-left"> 
     <a class="navbar-brand"> 
      <img src="/lenovo3c_new/lbyun/Public/Admin/ace/images/logo.png" /> </a>
    </div> 

    <div class="navbar-buttons navbar-header pull-right" role="navigation"> 
     <ul class="nav ace-nav"> 
 
      <li class="light-blue"> <a data-toggle="dropdown" class="dropdown-toggle" href="#"> 
        <span class="user-info" id="user_info"><font >你好,<?php echo ($_SESSION['user_name']); ?></font></span> <i class="ace-icon fa fa-caret-down"></i> </a> 
       <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close"> 
        <li> <a onclick="editPhoto();" style="cursor:pointer;"><i class="ace-icon glyphicon glyphicon-picture"></i>修改头像</a>
         <!-- editUserH()在 WebRoot\static\js\myjs\head.js中 --> </li> 
        <li> <a onclick="editUserH();" style="cursor:pointer;"><i class="ace-icon fa fa-user"></i>修改资料</a>
         <!-- editUserH()在 WebRoot\static\js\myjs\head.js中 --> </li> 
        <li id="systemset"> <a onclick="editSys();" style="cursor:pointer;"><i class="ace-icon fa fa-cog"></i>系统设置</a>
         <!-- editSys()在 WebRoot\static\js\myjs\head.js中 --> </li> 
        <li class="divider"></li> 
        <li> <a href="<?php echo U('Login/login_out');?>" onclick="logout()"><i class="ace-icon fa fa-power-off"></i>退出登录</a> </li> 
       </ul> </li> 
      <!-- /section:basics/navbar.user_menu --> 
     </ul> 
    </div> 
    <!-- /section:basics/navbar.dropdown --> 
   </div>
   <!-- /.navbar-container --> 
  </div> 
  <div id="fhsmsobj">
   <!-- 站内信声音消息提示 -->
  </div> 
  <script src="/lenovo3c_new/lbyun/Public/Admin/static/login/js/jquery-1.11.1.js"></script> 
  <script type="text/javascript">
       
	  function logout(){	
		    var loginname = $.cookie('loginname');
		    alert(loginname);		 
	 } 
      </script> 
  <div id="websocket_button"></div>
  <!-- 少了此处，聊天窗口就无法关闭 --> 
  <!-- /section:basics/navbar.layout --> 
  <div class="main-container" id="main-container"> 
   <script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script> 
   <div id="sidebar" class="sidebar        responsive"> 
    <script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script> 
    <ul class="nav nav-list"> 
     <!-- <li class="">
						<a href="<?php echo U('Index/main');?>">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text">管理中心首页</span>
						</a>
						<b class="arrow"></b>
					</li> --> 
     <ul class="nav nav-list"> 
      <!-- <li class="">
						<a href="#">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text">控制台首页 </span>
						</a>

						<b class="arrow"></b>
					</li> --> 
      <!-- 复制模块代码_______商家/用户管理 -->
      <li class="open">
       <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa  fa-tags"></i>
        <span class="menu-text">商家/用户管理 </span>
        <b class="arrow fa fa-angle-down"></b>
       </a>
       <b class="arrow"></b>
       <ul class="submenu">
        <li class="open">
         <a href="#" class="dropdown-toggle">
          <i class="menu-icon fa fa-caret-right"></i>
          商家/用户
          <b class="arrow fa fa-angle-down"></b>
         </a>
         <b class="arrow"></b>


         <ul class="submenu" style="display:block;">
          <li class="">
           <a href="<?php echo U('Admin/Tonglu/tongluList');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            通路管理
           </a>

           <b class="arrow"></b>
          </li>

          <li class="">
           <a href="<?php echo U('Admin/Role/roleList');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            角色管理
           </a>

           <b class="arrow"></b>
          </li>

          <li class="">
           <a href="<?php echo U('Admin/Area/areaList');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            区域管理
           </a>

           <b class="arrow"></b>
          </li>

          <li class="">
           <a href="<?php echo U('Admin/UserManage/userList');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            用户管理
           </a>

           <b class="arrow"></b>
          </li>

          <li class="">
           <a href="<?php echo U('Admin/Business/index');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            商家管理
           </a>

           <b class="arrow"></b>
          </li>

         </ul>
        </li>
       </ul>
      </li>
      <!-- 模块代码结束 --> 
      <!-- 复制模块代码 _______后台管理--> 
      <li class=""> <a href="#" class="dropdown-toggle">
        <!--  --> <i class="menu-icon fa  fa-tags"></i> <span class="menu-text">后台管理 </span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b> 
       <ul class="submenu"> 
        <li class=""> <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-caret-right"></i> 服务管理 <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b> 
         <ul class="submenu"> 
          <li class=""> <a href="<?php echo U('Product/index');?>" target="mainFrame"> <i class="menu-icon fa fa-caret-right"></i> 所有产品 </a> <b class="arrow"></b> </li> 
          <li class=""> <a href="<?php echo U('Extension/index');?>" target="mainFrame"> <i class="menu-icon fa fa-caret-right"></i> Sku管理 </a> <b class="arrow"></b> </li> 
         </ul> </li> 
        <li class=""> <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-caret-right"></i> 硬件管理 <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b> 
         <ul class="submenu"> 
          <li class=""> <a href="<?php echo U('Background/brand_show');?>" target="mainFrame"> <i class="menu-icon fa fa-caret-right"></i> 品牌管理 </a> <b class="arrow"></b> </li> 
          <li class=""> <a href="<?php echo U('Model/model_add');?>" target="mainFrame"> <i class="menu-icon fa fa-caret-right"></i> 型号管理 </a> <b class="arrow"></b> </li> 
         </ul> </li> 
       </ul> </li> 
      <!-- 模块代码结束 --> 
      <!-- 复制模块代码 ________数据统计-->
      <li class="">
       <a href="#" class="dropdown-toggle"><!--  -->
        <i class="menu-icon fa  fa-tags"></i>
        <span class="menu-text">数据统计 </span>
        <b class="arrow fa fa-angle-down"></b>
       </a>

       <b class="arrow"></b>
       <ul class="submenu">

        <li class="">
         <a href="#" class="dropdown-toggle">
          <i class="menu-icon fa fa-caret-right"></i>
          销售分析
          <b class="arrow fa fa-angle-down"></b>
         </a>
         <b class="arrow"></b>
         <ul class="submenu">
          <li class="">
           <a href="<?php echo U('Admin/SaleAnalyze/route');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            通路分析
           </a>

           <b class="arrow"></b>
          </li>

          <li class="">
           <a href="<?php echo U('Admin/SaleAnalyze/product');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            产品分析
           </a>

           <b class="arrow"></b>
          </li>

          <li class="">
           <a href="<?php echo U('Admin/SaleAnalyze/area');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            区域分析
           </a>

           <b class="arrow"></b>
          </li>

          <li class="">
           <a href="<?php echo U('Admin/SaleAnalyze/business');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            商家分析
           </a>

           <b class="arrow"></b>
          </li>
          <li class="">
           <a href="<?php echo U('Admin/SaleAnalyze/saleExport');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            销售数据导出
           </a>

           <b class="arrow"></b>
          </li>
         </ul>
        </li>

        <li class="">
         <a href="#" class="dropdown-toggle">
          <i class="menu-icon fa fa-caret-right"></i>
          注册分析
          <b class="arrow fa fa-angle-down"></b>
         </a>
         <b class="arrow"></b>
         <ul class="submenu">
          <li class="">
           <a href="<?php echo U('Admin/RegisterAnalyze/route');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            通路分析
           </a>

           <b class="arrow"></b>
          </li>

          <li class="">
           <a href="<?php echo U('Admin/RegisterAnalyze/product');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            产品分析
           </a>

           <b class="arrow"></b>
          </li>

          <li class="">
           <a href="<?php echo U('Admin/RegisterAnalyze/brand');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            品牌分析
           </a>

           <b class="arrow"></b>
          </li>

          <li class="">
           <a href="<?php echo U('Admin/RegisterAnalyze/area');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            区域分析
           </a>

           <b class="arrow"></b>
          </li>
          <li class="">
           <a href="<?php echo U('Admin/RegisterAnalyze/business');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            商家分析
           </a>

           <b class="arrow"></b>
          </li>
          <li class="">
           <a href="probleminformation/list.do"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            注册数据导出
           </a>

           <b class="arrow"></b>
          </li>
          <li class="">
           <a href="<?php echo U('Admin/registerAnalyze/dataExport');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            注册数据导出优化
           </a>

           <b class="arrow"></b>
          </li>
          <li class="">
           <a href="<?php echo U('Admin/registerAnalyze/registerStatistics');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            注册统计
           </a>

           <b class="arrow"></b>
          </li>
          <li class="">
           <a href="<?php echo U('Admin/RegisterAnalyze/keyStoreSales');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            重点门店销量
           </a>

           <b class="arrow"></b>
          </li>
          <li class="">
           <a href="probleminformation/list.do"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            按批次导出
           </a>

           <b class="arrow"></b>
          </li>
         </ul>
        </li>

        <li class="">
         <a href="#" class="dropdown-toggle">
          <i class="menu-icon fa fa-caret-right"></i>
          出险分析
          <b class="arrow fa fa-angle-down"></b>
         </a>
         <b class="arrow"></b>
         <ul class="submenu">
          <li class="">
           <a href="<?php echo ('Admin/InsuranceOutAnalyze/route');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            通路分析
           </a>

           <b class="arrow"></b>
          </li>

          <li class="">
           <a href="<?php echo U('Admin/InsuranceOutAnalyze/product');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            产品分析
           </a>

           <b class="arrow"></b>
          </li>

          <li class="">
           <a href="<?php echo U('Admin/InsuranceOutAnalyze/brand');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            品牌分析
           </a>

           <b class="arrow"></b>
          </li>
          <li class="">
           <a href="<?php echo U('Admin/InsuranceOutAnalyze/area');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            区域分析
           </a>

           <b class="arrow"></b>
          </li>

          <li class="">
           <a href="<?php echo U('Admin/InsuranceOutAnalyze/registerInsOut');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            注册出险率分析
           </a>

           <b class="arrow"></b>
          </li>
          <li class="">
           <a href="<?php echo U('Admin/InsuranceOutAnalyze/insDataExport');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            出险数据导出
           </a>

           <b class="arrow"></b>
          </li>
          <li class="">
           <a href="probleminformation/list.do"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            平均出险率
           </a>

           <b class="arrow"></b>
          </li>
         </ul>
        </li>

        <li class="">
         <a href="#" class="dropdown-toggle">
          <i class="menu-icon fa fa-caret-right"></i>
          满期出险率分析
          <b class="arrow fa fa-angle-down"></b>
         </a>
         <b class="arrow"></b>
         <ul class="submenu">
          <li class="">
           <a href="<?php echo U('Admin/ExpireInsuranceOut/route');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            通路分析
           </a>

           <b class="arrow"></b>
          </li>

          <li class="">
           <a href="<?php echo U('Admin/ExpireInsuranceOut/product');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            产品分析
           </a>

           <b class="arrow"></b>
          </li>

          <li class="">
           <a href="<?php echo ('Admin/ExpireInsuranceOut/brand');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            品牌分析
           </a>

           <b class="arrow"></b>
          </li>

          <li class="">
           <a href="<?php echo U('Admin/ExpireInsuranceOut/area');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            区域分析
           </a>

           <b class="arrow"></b>
          </li>
          <li class="">
           <a href="<?php echo U('Admin/ExpireInsuranceOut/seller');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            商家分析
           </a>

           <b class="arrow"></b>
          </li>
         </ul>
        </li>

        <li class="">
         <a href="#" class="dropdown-toggle">
          <i class="menu-icon fa fa-caret-right"></i>
          核保监控面板
          <b class="arrow fa fa-angle-down"></b>
         </a>
         <b class="arrow"></b>
         <ul class="submenu">
          <li class="">
           <a href="<?php echo U('Admin/AuditInsMonitor/realTimeMonitor');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            实时监控
           </a>

           <b class="arrow"></b>
          </li>

          <li class="">
           <a href="<?php echo U('Admin/AuditInsMonitor/monthlyStatistics');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            月度统计
           </a>

           <b class="arrow"></b>
          </li>

          <li class="">
           <a href="<?php echo U('Admin/AuditInsMonitor/overTimeOrder');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            超时订单
           </a>

           <b class="arrow"></b>
          </li>

          <li class="">
           <a href="<?php echo U('Admin/AuditInsMonitor/peopleEfficiency');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            人员效率
           </a>

           <b class="arrow"></b>
          </li>

          <li class="">
           <a href="<?php echo U('Admin/AuditInsMonitor/customQuery');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            自定义查询
           </a>

           <b class="arrow"></b>
          </li>
         </ul>
        </li>
       </ul>
      </li>
      <!-- 模块代码结束 --> 
      <!-- 复制模块代码 ________终端用户管理-->
      <li class="">
       <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa  fa-tags"></i>
        <span class="menu-text">终端用户管理 </span>
        <b class="arrow fa fa-angle-down"></b>
       </a>
       <b class="arrow"></b>
       <ul class="submenu">
        <li class="">
         <a href="#" class="dropdown-toggle">
          <i class="menu-icon fa fa-caret-right"></i>
          在线用户管理
          <b class="arrow fa fa-angle-down"></b>
         </a>
         <b class="arrow"></b>
         <ul class="submenu">
          <li class="">
           <a href="<?php echo U('Admin/User/blackList');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            黑名单管理
           </a>
           <a href="<?php echo U('Admin/User/userList');?>"  target="mainFrame">
            <i class="menu-icon fa fa-caret-right"></i>
            用户管理
           </a>
           <b class="arrow"></b>
          </li>
         </ul>
        </li>
       </ul>
      </li>
      <!-- 模块代码结束 --> 
      <!-- 复制模块代码 ________销售注册管理--> 
      <li class=""> <a href="#" class="dropdown-toggle">
        <!--  --> <i class="menu-icon fa  fa-tags"></i> <span class="menu-text">销售/注册管理 </span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b> 
       <ul class="submenu"> 
        <li class=""> <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-caret-right"></i> 注册管理 <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b> 
         <ul class="submenu"> 
          <li class=""> <a href="<?php echo U('Lnstru/index');?>" target="mainFrame"> <i class="menu-icon fa fa-caret-right"></i> 代客激活 </a> <b class="arrow"></b> </li> 
          <li class=""> <a href="<?php echo U('Batch/index');?>" target="mainFrame"> <i class="menu-icon fa fa-caret-right"></i> 批量激活 </a> <b class="arrow"></b> </li> 
          <li class=""> 
            <a href="<?php echo U('Import/index');?>" target="mainFrame"> <i class="menu-icon fa fa-caret-right"></i> 批量导入 </a> 
            <b class="arrow"></b> 
          </li> 
          <li class=""> <a href="<?php echo U('Activated/activated_acl');?>" target="mainFrame"> <i class="menu-icon fa fa-caret-right"></i> 
          已激活列表 </a> <b class="arrow"></b> </li> 
          <li class=""> <a href="<?php echo U('Codes/index');?>" target="mainFrame"> <i class="menu-icon fa fa-caret-right"></i> 激活码查询 </a> <b class="arrow"></b> </li> 
          <li class=""> <a href="<?php echo U('Blot/index_add');?>" target="mainFrame"> <i class="menu-icon fa fa-caret-right"></i> 批次码查询 </a> <b class="arrow"></b> </li> 
          <!-- <li class=""> <a href="instructions/list" target="mainFrame"> <i class="menu-icon fa fa-caret-right"></i> 未生效订单 </a> <b class="arrow"></b> </li>  -->
         <!--  <li class=""> <a href="instructions/list" target="mainFrame"> <i class="menu-icon fa fa-caret-right"></i> 待完善订单 </a> <b class="arrow"></b> </li>  -->
          <li class=""> <a href="instructions/list" target="mainFrame"> <i class="menu-icon fa fa-caret-right"></i> 投保订单更新 </a> <b class="arrow"></b> </li> 
         </ul> </li> 
        <li class=""> <a class="dropdown-toggle"> <i class="menu-icon fa fa-caret-right"></i> 销售管理 <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b> 
         <ul class="submenu"> 
          <li class=""> <a href="<?php echo U('Market/index');?>" target="mainFrame"> <i class="menu-icon fa fa-caret-right"></i> 我的订单 </a> <b class="arrow"></b> </li> 
          <li class=""> <a href="<?php echo U('Good/index');?>" target="mainFrame"> <i class="menu-icon fa fa-caret-right"></i> 确定收货 </a> <b class="arrow"></b> </li> 
         </ul> </li> 
        <li class=""> <a href="warranty_card/list.do" class="dropdown-toggle"> <i class="menu-icon fa fa-caret-right"></i> 审核管理 <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b> 
         <ul class="submenu"> 
          <li class=""> <a href="<?php echo U('Audit/authstr_list');?>" target="mainFrame"> <i class="menu-icon fa fa-caret-right"></i> 待审核订单 </a> <b class="arrow"></b> </li> 
         </ul> </li> 
        <li class=""> <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-caret-right"></i> 天猫服务 <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b> 
         <ul class="submenu"> 
          <li class=""> <a href="<?php echo U('Tian/tian_list');?>" target="mainFrame"> <i class="menu-icon fa fa-caret-right"></i> 天猫合同单 </a> <b class="arrow"></b> </li> 
          <li class=""> <a href="<?php echo U('Work/work_list');?>" target="mainFrame"> <i class="menu-icon fa fa-caret-right"></i> 天猫工单 </a> <b class="arrow"></b> </li> 
         </ul> </li> 
        <li class=""> <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-caret-right"></i> 出险管理 <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b> </li> 
       </ul> </li> 
      <!-- 模块代码结束 --> 
     </ul>
     <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse"> 
      <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i> 
     </div> 
     <script type="text/javascript" src="/lenovo3c_new/lbyun/Public/Admin/static/js/jquery-1.7.2.js"></script> 
     <script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
			
				    var name='希澈科技';
				    $(document).ready(function(){
				    	
				    	if (name!='' && name=='ylb') {
							
				    		$("#work").show();
						}else if(name!='' && name=='Lby'){
							
							$("#work").show();
							
						}
				    	
				    	});	
				</script> 
    </ul>
   </div> 
   <div class="main-content"> 
    <div class="main-content-inner"> 
     <!-- /section:basics/content.breadcrumbs --> 
     <div class="page-content"> 
      <!-- #section:settings.box --> 
      <div class="ace-settings-container" id="ace-settings-container"> 
       <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn"> 
        <i class="ace-icon fa fa-cog bigger-130"></i> 
       </div> 
       <div class="ace-settings-box clearfix" id="ace-settings-box"> 
        <div class="pull-left width-50"> 
         <!-- #section:settings.skins --> 
         <div class="ace-settings-item"> 
          <div class="pull-left"> 
           <select id="skin-colorpicker" class="hide"> <option data-skin="no-skin" value="#438EB9">#438EB9</option> <option data-skin="skin-1" value="#222A2D">#222A2D</option> <option data-skin="skin-2" value="#C6487E">#C6487E</option> <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option> </select> 
          </div> 
          <span>&nbsp; 选择皮肤</span> 
         </div> 
         <!-- #section:settings.breadcrumbs --> 
         <div class="ace-settings-item"> 
          <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" /> 
          <label class="lbl" for="ace-settings-breadcrumbs">固定面包屑</label> 
         </div> 
         <!-- #section:settings.container --> 
         <div class="ace-settings-item"> 
          <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" /> 
          <label class="lbl" for="ace-settings-add-container"> 居中风格 </label> 
         </div> 
         <!-- /section:settings.container --> 
        </div>
        <!-- /.pull-left --> 
        <div class="pull-left width-50"> 
         <!-- #section:basics/sidebar.options --> 
         <div class="ace-settings-item"> 
          <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" /> 
          <label class="lbl" for="ace-settings-hover">折叠菜单</label> 
         </div> 
         <div class="ace-settings-item"> 
          <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" /> 
          <label class="lbl" for="ace-settings-compact">压缩菜单</label> 
         </div> 
         <div class="ace-settings-item"> 
          <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" /> 
          <label class="lbl" for="ace-settings-highlight">弹出风格</label> 
         </div> 
         <!-- /section:basics/sidebar.options --> 
        </div>
        <!-- /.pull-left --> 
       </div>
       <!-- /.ace-settings-box --> 
      </div>
      <div class="row"> 
       <div id="jzts" style="display:none; width:100%; position:fixed; z-index:99999999;"> 
        <div class="commitopacity" id="bkbgjz"></div> 
        <div style="padding-left: 70%;padding-top: 1px;"> 
         <div style="float: left;margin-top: 3px;">
          <img src="/lenovo3c_new/lbyun/Public/Admin/static/images/loadingi.gif" /> 
         </div> 
         <div style="margin-top: 6px;">
          <h4 class="lighter block red">&nbsp;加载中 ...</h4>
         </div> 
        </div> 
       </div> 
       <div> 
        <iframe name="mainFrame" id="mainFrame" frameborder="0" src="<?php echo U('Admin/Tonglu/tongluList');?>" style="margin:0 auto;width:100%;height:50%;"></iframe>
       </div> 
      </div>
      <!-- /.row --> 
     </div>
     <!-- /.page-content --> 
    </div> 
   </div>
   <!-- /.main-content --> 
  </div>
  <script type="text/javascript">
			window.jQuery || document.write("<script src='/lenovo3c_new/lbyun/Public/Admin/ace/js/jquery.js'>"+"<"+"/script>");
		</script> 
  <script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/lenovo3c_new/lbyun/Public/Admin/ace/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>
  <script>

      $('li>a').click(function(){$(this).css('color','#4c8fbd').parent().siblings().find('a').css('color','#757575')})

  </script>
  <script src="/lenovo3c_new/lbyun/Public/Admin/ace/js/bootstrap.js"></script> 
  <script src="/lenovo3c_new/lbyun/Public/Admin/ace/js/ace/ace.js"></script> 
  <script src="/lenovo3c_new/lbyun/Public/Admin/ace/js/ace/ace.sidebar.js"></script> 
  <script type="text/javascript" src="/lenovo3c_new/lbyun/Public/Admin/static/js/myjs/index.js"></script> 
  <script type="text/javascript" src="/lenovo3c_new/lbyun/Public/Admin/static/js/jquery.tips.js"></script>  
 </body>
</html>