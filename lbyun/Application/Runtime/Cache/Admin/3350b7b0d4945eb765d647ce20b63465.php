<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="overflow-x:hidden;overflow-y:auto;"><head>
    <title>
        合同单的详细信息 - Beijing - Lbyun</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Cache-Control" content="no-store"><meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta name="author" content="http://ljz0721cx.iteye.com/">
    <meta http-equiv="X-UA-Compatible" content="IE=7,IE=9,IE=10">
    <script src="/yjc/lby/Public/Admin/static/userlist/jquery-1.js" type="text/javascript"></script>
    <script src="/yjc/lby/Public/Admin/static/userlist/jquery.js" type="text/javascript"></script>
    <script src="/yjc/lby/Public/Admin/static/userlist/jquery-ui-1.js" type="text/javascript"></script>
    <script src="/yjc/lby/Public/Admin/static/userlist/jquery-migrate-1.js" type="text/javascript"></script>
    <link href="/yjc/lby/Public/Admin/static/userlist/jquery.css" type="text/css" rel="stylesheet">
    <script src="/yjc/lby/Public/Admin/static/userlist/jquery_002.js" type="text/javascript"></script>
    <script src="/yjc/lby/Public/Admin/static/userlist/jquery_006.js" type="text/javascript"></script>
    <link href="/yjc/lby/Public/Admin/static/userlist/bootstrap.css" type="text/css" rel="stylesheet">
    <script src="/yjc/lby/Public/Admin/static/userlist/bootstrap.js" type="text/javascript"></script>
    <script src="/yjc/lby/Public/Admin/static/userlist/WdatePicker.js" type="text/javascript"></script><link href="WdatePicker.css" rel="stylesheet" type="text/css">
    <script src="/yjc/lby/Public/Admin/static/userlist/jquery_003.js"></script>
    <script src="/yjc/lby/Public/Admin/static/userlist/mustache.js" type="text/javascript"></script>
    <link href="/yjc/lby/Public/Admin/static/userlist/lenjoy.css" type="text/css" rel="stylesheet">
    <script src="/yjc/lby/Public/Admin/static/userlist/lenjoy.js" type="text/javascript"></script>
    <meta name="decorator" content="default">
    
</head>
<body>

<ul class="nav nav-tabs">
    <li class="active"><a>合同单详情</a></li>
</ul>
<br>
<div>
    <table class="table table-bordered table-striped zdy">
        <tbody><tr>
            <th colspan="6" style="color: #0088cc">基本信息</th>
        </tr>
        <tr>
            <th>订单编号:</th>
            <td><?php echo ($king["tian_order"]); ?></td>
            <th>交易订单编号:</th>
            <td><?php echo ($king["tian_order"]); ?></td>
            <th>服务订单编号:</th>
            <td><?php echo ($king["tian_order"]); ?></td>
        </tr>
        <tr>
            <th>产品类型:</th>
            <td><?php echo ($king["product_type"]); ?></td>
            <th>服务次数:</th>
            <td>1</td>
            <th>服务方式:</th>
            <td>
                <?php if($king['tian_way'] == '0'): echo "<font color='red'>"."未履约"."</font>";?>
                    <?php elseif($king['tian_way'] == '1'): ?>
                    <?php  echo "<font color='green'>"."已履约"."</font>"; endif; ?>
            </td>
        </tr>
        <tr>
            <th>购买时间:</th>
            <td><?php echo ($king["tian_time"]); ?>
            </td>
            <th>生效时间:</th>
            <td><strong><?php echo ($king["tian_come_time"]); ?></strong>
            </td>
            <th>截止时间:</th>
            <td><strong><?php echo ($king["tian_come_time"]); ?>目前没有计算保质期时间</strong>
            </td>
        </tr>
        <tr>
            <th colspan="6" style="color: #0088cc">商品信息</th>
        </tr>
        <tr>
            <th>商品名称:</th>
            <td style=" word-wrap: break-word; word-break: normal;"><?php echo ($king["product_name"]); ?></td>
            <th>商品价格:</th>
            <td><?php echo ($king["product_price"]); ?>元</td>
            <th></th>
            <td></td>
        </tr>
        <tr>
            <th>品牌:</th>
            <td><?php echo ($king["brand_name"]); ?></td>
            <th>型号:</th>
            <td><?php echo ($king["model_name"]); ?></td>
            <th>IMEI号:</th>
            <td></td>
        </tr>
        <tr>
            <th colspan="6" style="color: #0088cc">用户信息</th>
        </tr>
        <tr>
            <th>姓名:</th>
            <td><?php echo ($king["tian_user"]); ?></td>
            <th>电话:</th>
            <td><?php echo ($king["tian_phone"]); ?></td>
            <th>地址:</th>
            <td><?php echo ($king["user_address"]); ?></td>
        </tr><tr>
        </tr><tr>
            <th colspan="6" style="color: #0088cc">卖家信息</th>
        </tr>
        <tr>
            <th>商家名称:</th>
            <td><?php echo ($king["busname"]); ?></td>
            <th>店铺:</th>
            <td><?php echo ($king["busname"]); ?></td>
            <th>电话:</th>
            <td>025-66996699</td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>