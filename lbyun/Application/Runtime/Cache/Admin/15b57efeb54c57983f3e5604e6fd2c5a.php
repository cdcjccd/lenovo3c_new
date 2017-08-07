<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <!-- 下拉框 -->
    <!-- <link rel="stylesheet" href="/lenovo3c_new/lbyun/Public/Admin/static/ace/css/chosen.css" /> -->
    <!-- jsp文件头和头部 -->
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> -->
    <meta charset="utf-8" />
    <title>联保云</title>
    <meta name="description" content="" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /> -->
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
    <style>
        .center{
            text-align:center;
        }
    </style>
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
                                <!-- <i class="ace-icon fa fa-home home-icon"></i> -->
                                商家列表
                            </li>
                            <li>
                                <!-- <i class="ace-icon fa fa-home home-icon"></i> -->
                                <a href="<?php echo U('Admin/Business/businessAdd');?>">商家添加</a>
                            </li>
                            <!-- <li class="active  avtive_bold">填写编辑公司信息</li> -->
                        </ul>
                        <!-- 检索  -->
                        <form action="<?php echo U('Admin/Business/businessList');?>" method="get" name="Form" id="Form">
                            <table border="0" cellspacing="0" cellpading="0" class="table-nav-search">
                                <tr>
                                    <!-- <td>
                                        <div class="nav-search">
                                            <span class="input-icon">
                                                <input type="text" placeholder="这里输入关键词" class="nav-search-input" id="nav-search-input" autocomplete="off" name="keywords" value="" placeholder="这里输入关键词"/>
                                                <i class="ace-icon fa fa-search nav-search-icon"></i>
                                            </span>
                                        </div>
                                    </td> -->
                                    <!--<td>-->
                                    <!--<label>注册来源：</label>-->
                                    <!--<select id="registerFrom" name="registerFrom" class="input-medium required">-->
                                    <!--<option value="" selected="selected">&#45;&#45;&#45;&#45;请选择&#45;&#45;&#45;&#45;</option>-->
                                    <!--<option value="0">官网</option><option value="1">后台代客激活</option><option value="2">第三方</option><option value="3">系统管理员</option>-->
                                    <!--</select>-->
                                    <!--</td>-->
                                    <td>
                                        <span>商家名称：</span>
                                        <input name="busName" id="lastStart"  value="" type="text"  />
                                    </td>
                                    <td>
                                        <span>渠道编码：</span>

                                        <input  name="channelCode"  value="" type="text"  />

                                    </td>

                                    <!-- <td style="padding-right:10px;">
                                         <select class="chosen-select form-control" name="name" id="id" data-placeholder="请选择" style="vertical-align:top;width: 120px;">
                                        <option value=""></option>
                                        <option value="">全部</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                          </select>
                                    </td> -->

                                    <td style="padding-right:10px;"><a class="btn btn-light btn-xs" onclick="tosearch();"  title="检索"><i id="nav-search-icon" class="ace-icon fa fa-search bigger-110 nav-search-icon white"></i></a></td>


                                    <td >
                                        <!-- <input type="submit" value='搜索'> -->
                                    </td>
                                    <!-- <td><a class="btn btn-light btn-xs" onclick="toExcel();" title="导出到EXCEL"><i id="nav-search-icon" class="ace-icon fa fa-download bigger-110 nav-search-icon white"></i></a></td> -->
                                </tr>
                            </table>
                        </form>
                        <!-- 检索  -->
                        <script>
                            function tosearch(){

                                $("#Form").submit();
                            }
                        </script>

                        <table id="simple-table" class="table table-striped table-bordered table-hover" style="margin-top:5px;">
                            <thead>
                            <tr>
                                <!-- <th class="center" style="width:35px;">
                                <label class="pos-rel"><input type="checkbox" class="ace" id="zcheckbox" /><span class="lbl"></span></label>
                                </th> -->
                                <!--<th class="center">序号</th>-->
                                <th class='center'>商家民称</th>
                                <th class='center'>渠道编码</th>
                                <th class='center'>经销商级别</th>
                                <th class='center'>归属区域</th>
                                <th class='center'>通路</th>

                                <!--<th class='center'>用户状态</th>-->
                                <!-- <th class="center">操作</th> -->
                            </tr>
                            </thead>

                            <tbody>
                            <!-- 开始循环 -->


                            <?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
                                    <td class='center'><a href="#"><?php echo ($v['busname']); ?></a></td>
                                    <td class='center'><?php echo ($v['channelcode']); ?></td>
                                    <td class='center'>
                                        <?php
 if($v['dealerlev'] == 1){echo '一级';} if($v['dealerlev'] == 2){echo '二级';} if($v['dealerlev'] == 3){echo '三级';} if($v['dealerlev'] == 4){echo '四级';} ?>
                                    </td>
                                    <td class='center'><?php echo ($v['area']); ?></td>
                                    <td class='center'><?php echo ($v['route']); ?></td>
                                </tr><?php endforeach; endif; ?>


                            <!-- 循环结束 -->
                            </tbody>
                        </table>
                        <div class="page-header position-relative">

                            <table style="width:100%;">
                                <tr>
                                    <td style="vertical-align:top;">

                                        <?php echo ($page); ?>

                                    </td>
                                    <td style="vertical-align:top;"><div class="pagination" style="float: right;padding-top: 0px;margin-top: 0px;">



                                    </div></td>
                                </tr>
                            </table>

                        </div>


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
    window.jQuery || document.write("<script src='/lenovo3c_new/lbyun/Public/Admin/static/ace/js/jquery.js'>"+"<"+"/script>");
</script>
<!-- <![endif]-->
<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='http://www.lbyun.com:80//lenovo3c_new/lbyun/Public/Admin/static/ace/js/jquery1x.js'>"+"<"+"/script>");

</script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='/lenovo3c_new/lbyun/Public/Admin/static/ace/js/jquery.mobile.custom.js'>"+"<"+"/script>");
</script>
<!-- <script src="/lenovo3c_new/lbyun/Public/Admin/static/ace/js/bootstrap.js"></script> -->
<!-- 删除时确认窗口 -->
<!-- <script src="/lenovo3c_new/lbyun/Public/Admin/static/ace/js/bootbox.js"></script> -->
<!-- ace scripts -->
<!-- <script src="/lenovo3c_new/lbyun/Public/Admin/static/ace/js/ace/ace.js"></script> -->
<!-- 下拉框 -->
<!-- <script src="/lenovo3c_new/lbyun/Public/Admin/static/ace/js/chosen.jquery.js"></script> -->
<!-- 日期框 -->
<!-- <script src="/lenovo3c_new/lbyun/Public/Admin/static/ace/js/date-time/bootstrap-datepicker.js"></script> -->
<!--提示框-->
<!--layer弹出图层-->

<!-- <script src="/lenovo3c_new/lbyun/Public/Admin/static/module_option/js/layer.js"></script> -->
<!--layer弹出图层-->
<!-- <script type="text/javascript" src="/lenovo3c_new/lbyun/Public/Admin/static/js/jquery.tips.js"></script> -->
<!-- <script type="text/javascript">
    // $(top.hangge());//关闭加载状态
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

    }

    function success_com(){

    }



    //修改
    function edit(Id){

        var url = "<?php echo U('Admin/Company/edit');?>?companyinfo_id="+Id;

        window.location.href= url;

    }

    //批量操作
    function makeAll(msg){

    };

    //导出excel
    /*function toExcel(){
        window.location.href='http://www.lbyun.com:80/companyinfo/excel.do';
    }*/
</script> -->


</body>
</html>