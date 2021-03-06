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
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="/lenovo3c_new/lbyun/Public/Admin/static/ace/css/bootstrap.css" />
    <link rel="stylesheet" href="/lenovo3c_new/lbyun/Public/Admin/static/ace/css/font-awesome.css" />
    <!-- page specific plugin styles -->
    <!-- text fonts -->
    <link rel="stylesheet" href="/lenovo3c_new/lbyun/Public/Admin/static/ace/css/ace-fonts.css" />
    <!-- ace styles -->
    <link rel="stylesheet" href="/lenovo3c_new/lbyun/Public/Admin/static/ace/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/lenovo3c_new/lbyun/Public/Admin/static/ace/css/ace-part2.css" class="ace-main-stylesheet" />
    <![endif]-->
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/lenovo3c_new/lbyun/Public/Admin/static/ace/css/ace-ie.css" />
    <![endif]-->
    <!-- inline styles related to this page -->
    <!-- ace settings handler -->
    <script src="/lenovo3c_new/lbyun/Public/Admin/static/ace/js/ace-extra.js"></script>
    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries
    [if lte IE 8]> -->
    <script src="/lenovo3c_new/lbyun/Public/Admin/static/ace/js/html5shiv.js"></script>
    <script src="/lenovo3c_new/lbyun/Public/Admin/static/ace/js/respond.js"></script>
    <!--<![endif]-->

    <!-- 日期框 -->
    <link rel="stylesheet" href="/lenovo3c_new/lbyun/Public/Admin/static/ace/css/datepicker.css" />
    <!-- <link rel="stylesheet" href="/lenovo3c_new/lbyun/Public/Admin/static/ace/css/less/ace.css" /> -->
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
                            <li class="active  avtive_bold">待处理服务工单</li>
                            <li class="active  avtive_bold"><a href="<?php echo U('Work/over_list');?>">超时工单</a></li>
                            <li class="active  avtive_bold"><a href="<?php echo U('Work/finish_list');?>">已完成服务工单</a></li>
                        </ul>
                        <!-- 检索  -->
                        <form action="<?php echo U('Work/work_list');?>" method="post" name="Form" id="Form">

                            <table border="0" cellspacing="0" cellpading="0" class="table-nav-search">
                                <tr>
                                    <td style="padding-right:16px;">工单号:</td>
                                    <td>
                                        <div class="nav-search">
										<span class="input-icon">
											<input type="text" placeholder="工单号" class="nav-search-input" id="nav-search-input" autocomplete="off" name="tian_order" value="<?php echo ($_POST['tian_order']); ?>" />
											<i class="ace-icon fa fa-search nav-search-icon"></i>
										</span>
                                        </div>
                                    </td>
                                    <td style="padding-right:16px;">用户姓名:</td>
                                    <td>
                                        <div class="nav-search">
										<span class="input-icon">
											<input type="text" placeholder="用户姓名" class="nav-search-input" id="nav-search-input" autocomplete="off" name="tian_user" value="<?php echo ($_POST['tian_user']); ?>" />
										</span>
                                        </div>
                                    </td>
                                    <td style="padding-right:16px;">手机号:</td>
                                    <td>
                                        <div class="nav-search">
										<span class="input-icon">
											<input type="text" placeholder="手机号" class="nav-search-input" id="nav-search-input" autocomplete="off" name="tian_phone" value="<?php echo ($_POST['tian_phone']); ?>" />
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
                            <!-- 检索 -->
                            <table id="simple-table" class="table table-striped table-bordered table-hover" style="margin-top:5px;">
                                <thead>
                                <tr>
                                    <th class="center" style="width:66px;">
                                        <label class="pos-rel"><input type="checkbox" class="ace" id="zcheckbox" /><span class="lbl"></span></label>
                                    </th>
                                    <th class="center">工单ID</th>
                                    <th class="center">姓名</th>
                                    <th class="center">电话</th>
                                    <th class="center">状态</th>
                                    <th class="center">申请时间</th>
                                    <th class="center">操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!-- 开始循环 -->
                                <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
                                        <td class='center'>
                                            <label class="pos-rel"><input type='checkbox' name='ids' value="<?php echo ($vo["companyinfo_id"]); ?>" class="ace" /><span class="lbl"></span></label>
                                        </td>
                                        <td class='center'><?php echo ($vo["tian_id"]); ?></td>
                                        <td class='center'><?php echo ($vo["tian_user"]); ?></td>
                                        <td class='center'><?php echo ($vo["tian_phone"]); ?></td>
                                        <td class='center'>
                                            <?php if($vo['tian_way'] == '0'): echo "<font color='red'>"."未履约"."</font>";?>
                                                <?php elseif($vo['tian_way'] == '1'): ?>
                                                <?php  echo "<font color='green'>"."已履约"."</font>"; endif; ?>
                                        </td>
                                        <td class='center'><?php echo ($vo["tian_time"]); ?></td>                                    
                                        <td class='center'>
                                            <a href="<?php echo U('Renewal/upda_list');?>?x_id=<?php echo ($vo['product_id']); ?>">查看合同详情</a>&nbsp;&nbsp;<font color="black">|</font>&nbsp;&nbsp;
                                            <a href="<?php echo U('Renewal/look_list');?>?p_id=<?php echo ($vo['product_id']); ?>" >更新</a>
                                        </td>
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
                                </tbody>
                            </table>
                            <div class="page-header position-relative">
                                <table style="width:100%;">
                                    <tr>
                                        <td style="vertical-align:top;"></td>
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
</div>

<script type="text/javascript">
    window.jQuery || document.write("<script src='/lenovo3c_new/lbyun/Public/Admin/static/ace/js/jquery.js'>"+"<"+"/script>");
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

    $(top.hangge());//关闭加载状态
    //检索
    function tosearch(){
        $("#Form").submit();
    }

</script>
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='/lenovo3c_new/lbyun/Public/Admin/static/ace/js/jquery.mobile.custom.js'>"+"<"+"/script>");
</script>
<!-- 删除时确认窗口 -->
<script src="/lenovo3c_new/lbyun/Public/Admin/static/ace/js/bootbox.js"></script>
<!-- ace scripts -->
<script src="/lenovo3c_new/lbyun/Public/Admin/static/ace/js/ace/ace.js"></script>
<!-- 下拉框 -->
<script src="/lenovo3c_new/lbyun/Public/Admin/static/ace/js/chosen.jquery.js"></script>
<!-- 日期框 -->
<script src="/lenovo3c_new/lbyun/Public/Admin/static/ace/js/date-time/bootstrap-datepicker.js"></script>
<!--提示框-->
<script src="/lenovo3c_new/lbyun/Public/Admin/static/module_option/js/layer.js"></script>
<!--layer弹出图层-->
<script type="text/javascript" src="/lenovo3c_new/lbyun/Public/Admin/static/js/jquery.tips.js"></script>


</body>
</html>