<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="overflow-x:hidden;overflow-y:auto;"><head>
        <title>
        在线用户管理 - Powered By Enjoy3C</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Cache-Control" content="no-store"><meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<meta name="author" content="http://ljz0721cx.iteye.com/">
<meta http-equiv="X-UA-Compatible" content="IE=7,IE=9,IE=10">
<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/jquery-1.js" type="text/javascript"></script>
<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/jquery.js" type="text/javascript"></script>
<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/jquery-ui-1.js" type="text/javascript"></script>
<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/jquery-migrate-1.js" type="text/javascript"></script>
<link href="/lenovo3c_new/lbyun/Public/Admin/static/userlist/jquery.css" type="text/css" rel="stylesheet">
<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/jquery_002.js" type="text/javascript"></script>
<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/j/lenovo3c_new/lbyun/Public/Admin/static/userlist/query_006.js" type="text/javascript"></script>
<link href="/lenovo3c_new/lbyun/Public/Admin/static/userlist/bootstrap.css" type="text/css" rel="stylesheet">
<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/bootstrap.js" type="text/javascript"></script>
<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/WdatePicker.js" type="text/javascript"></script><link href="WdatePicker.css" rel="stylesheet" type="text/css">
<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/jquery_003.js"></script>
<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/mustache.js" type="text/javascript"></script>
<link href="/lenovo3c_new/lbyun/Public/Admin/static/userlist/lenjoy.css" type="text/css" rel="stylesheet">
<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/lenjoy.js" type="text/javascript"></script>

    <script src="/lenovo3c_new/lbyun/Public/Admin/layer/layer.js" type="text/javascript"></script>

    <meta name="decorator" content="default">
    </head>
    <body>   
    <ul class="nav nav-tabs">
        <li class="active"><a href="http://114.247.140.53:8080/lenjoy/admin/business/account/form?id=">用户激活码输入
        </a></li>
    </ul><br>

    <form id="inputForm" class="form-horizontal" action="<?php echo U('Lnstru/register_add');?>" method="post" novalidate="novalidate">  
<script type="text/javascript">top.$.jBox.closeTip();</script>
         <div class="control-group">
            <label class="control-label">激活码输入:</label>
            <div class="controls">
               <input id="code" name="act_val" class="required" maxlength="11" aria-required="true" type="text">
            </div>
        </div>
        <div class="form-actions">
          <input id="btnSubmit" class="btn btn-primary" value="下一步"  type="button">
    </form> 
</body>
<script type="text/javascript">
    $('#btnSubmit').click(function(){
        if ($('#code').val() == '') {
            layer.tips('激活码不能为空。', '#code', {
                tips: [2, '#3595CC'],
                time: 2000
            });
        }
        $('#inputForm').submit()
    })
</script>
</html>