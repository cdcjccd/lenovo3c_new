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
    <meta name="decorator" content="default">
<link rel="stylesheet" href="/lenovo3c_new/lbyun/Public/Admin/css1/ion.calendar.css">
<style>
.jq22 { margin-top: 100px;  text-align: center;}
.jq22 .date { width: 200px; padding: 5px; font-family: Arial, Helvetica, sans-serif;}
</style>
    </head>
    <body>
        
    <ul class="nav nav-tabs">
        <li class="active"><a href="http://114.247.140.53:8080/lenjoy/admin/business/account/form?id=">产品添加
        </a></li>
    </ul><br>

    <form id="inputForm" class="form-horizontal" action="<?php echo U('Product/product_add');?>" method="post" novalidate="novalidate">
        <input id="id" name="id" value="" type="hidden">
<script type="text/javascript">top.$.jBox.closeTip();</script>
        <div class="control-group">
            <label class="control-label">品牌类型:</label>
            <div class="controls">
                <select id="province" name="product_type" onchange="findCity(this)">
                    <option value="0" >==请选择==</option>
                    <option value="全包"><?php echo str_repeat("&nbsp;",6) ?>全包</option>
                    <option value="上门服务"><?php echo str_repeat("&nbsp;",6) ?>上门服务</option>
                    <option value="意外保"><?php echo str_repeat("&nbsp;",6) ?>意外保</option>
                    <option value="延保"><?php echo str_repeat("&nbsp;",6) ?>延保</option>
                    <option value="屏碎保"><?php echo str_repeat("&nbsp;",6) ?>屏碎保</option>
                    <option value="安装服务"><?php echo str_repeat("&nbsp;",6) ?>安装服务</option>
                    <option value="保内"><?php echo str_repeat("&nbsp;",6) ?>保内</option>
                    <option value="数据包"><?php echo str_repeat("&nbsp;",6) ?>数据包</option>
                </select>
            </div>
        </div>

         <div class="control-group">
            <label class="control-label">销售渠道:</label>
            <div class="controls">
                <select id="province" name="product_ditch" onchange="findCity(this)">
                    <option value="0" >==请选择==</option>
                    <option value="PC网"><?php echo str_repeat("&nbsp;",6) ?>PC网</option>
                    <option value="手机官网"><?php echo str_repeat("&nbsp;",6) ?>手机官网</option>
                    <option value="后台单个"><?php echo str_repeat("&nbsp;",6) ?>后台单个</option>
                    <option value="后台批量"><?php echo str_repeat("&nbsp;",6) ?>后台批量</option>
                    <option value="后台导入销售"><?php echo str_repeat("&nbsp;",6) ?>后台导入销售</option>
                    <option value="对接接口销售"><?php echo str_repeat("&nbsp;",6) ?>对接接口销售</option>
                </select>
            </div>
         </div>

        <div class="control-group">
            <label class="control-label">产品名称:</label>
            <div class="controls">
               <input id="name" name="product_name" class="required" maxlength="23" aria-required="true" type="text">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">保期期限:</label>
            <div class="controls">
               <!--<input id="loginMobile" name="product_life" class="required" maxlength="11" aria-required="true" type="text">                  -->
                <select name="product_life" id="">
                    <option value="0">3月</option>
                    <option value="1">一年</option>
                    <option value="2">两年</option>
                </select>
            </div>
        </div>
   
     <!--    <div class="control-group">
            <label class="control-label">产品详细:</label>
            <div class="controls">
               <input id="loginMobile" name="product_minute" class="required" maxlength="11" aria-required="true" type="text">                  
            </div>
        </div>
 -->
 
        <div class="control-group">
            <label class="control-label">SKU:</label>
            <div class="controls">
               <input id="sku" name="product_sku" class="required" maxlength="11" aria-required="true" type="text">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">物料编号:</label>
            <div class="controls">
               <input id="num" name="product_number" class="required" maxlength="11" aria-required="true" type="text">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">产品价格:</label>
            <div class="controls">
               <input id="price" name="product_price" class="required" maxlength="11" aria-required="true" type="text">
            </div>
        </div>


        <div class="control-group">
            <label class="control-label">产品状态:</label>
            <div class="controls">
               <input id="loginMobile" name="product_state" value="0" class="required" maxlength="11" aria-required="true" type="radio"> 是
                 <input id="loginMobile" name="product_state" value="1" checked="checked" class="required" maxlength="11" aria-required="true" type="radio">   否
            </div>
        </div>

          <div class="control-group">
            <label class="control-label">绑定订单:</label>
            <div class="controls">
               <input id="loginMobile" name="product_binding" value="0" class="required" maxlength="11" aria-required="true" type="radio"> 是
                 <input id="loginMobile" name="product_binding" value="1" checked="checked" class="required" maxlength="11" aria-required="true" type="radio">   否
            </div>
         </div>


        <div class="control-group">
            <label class="control-label">批量批发价格:</label>
            <div class="controls">
               <input id="pifaprice" name="volume_price" class="required" maxlength="11" aria-required="true" type="text">
            </div>
        </div>

        <div class="control-group">
              <label class="control-label">免赔期:</label>
            <div class="controls">
               <input id="mianpei" name="product_period" class="required" maxlength="11" aria-required="true" type="text">
            </div>
        </div>
       
      
        <div class="form-actions" >
          <input id="Submit" class="btn btn-primary" value="提交" type="button">
  <a href="<?php echo U('Product/index');?>"><input id="btnSubmit" class="btn btn-primary" value="返回" onclick="return search();" type="button"></a>

       </form>

</body>
<script src="/lenovo3c_new/lbyun/Public/Admin/js1/moment.min.js"></script>
<script src="/lenovo3c_new/lbyun/Public/Admin/js1/moment.zh-cn.js"></script>
<script src="/lenovo3c_new/lbyun/Public/Admin/js1/ion.calendar.min.js"></script>
<script>
$(function(){
    $('.date').each(function(){
        $(this).ionDatePicker({
            lang: 'zh-cn',
            format: 'YYYY-MM-DD'
        });
    });
});

$('#Submit').click(function () {
    if ($('#name').val() == ''){
        var error = "<font color='red'>*不能为空<font>";
        $('#name').after(error)
        return false;
    }else{
        $('#name').next().remove()
    }

    if ($('#sku').val() == ''){
        var error = "<font color='red'>*不能为空<font>";
        $('#sku').after(error)
        return false;
    }else{
        $('#sku').next().remove()
    }
    if ($('#num').val() == ''){
        var error = "<font color='red'>*不能为空<font>";
        $('#num').after(error)
        return false;
    }else{
        $('#num').next().remove()
    }
    if ($('#price').val() == ''){
        var error = "<font color='red'>*不能为空<font>";
        $('#price').after(error)
        return false;
    }else{
        $('#price').next().remove()
    }
    if ($('#pifaprice').val() == ''){
        var error = "<font color='red'>*不能为空<font>";
        $('#pifaprice').after(error)
        return false;
    }else{
        $('#pifaprice').next().remove()
    }
    if ($('#mianpei').val() == ''){
        var error = "<font color='red'>*不能为空<font>";
        $('#mianpei').after(error)
        return false;
    }else{
        $('#mianpei').next().remove()
    }

    $('#inputForm').submit();
})

</script>
</html>