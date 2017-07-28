<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="overflow-x:hidden;overflow-y:auto;">
<head>
	<title>
		通路销售统计 - Powered By Enjoy3C</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Cache-Control" content="no-store" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
	<meta name="author" content="http://ljz0721cx.iteye.com/" />
	<meta http-equiv="X-UA-Compatible" content="IE=7,IE=9,IE=10" />
	<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/jquery-1.js" type="text/javascript"></script>
	<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/jquery.js" type="text/javascript"></script>
	<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/jquery-ui-1.js" type="text/javascript"></script>
	<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/jquery-migrate-1.js" type="text/javascript"></script>
	<link href="/lenovo3c_new/lbyun/Public/Admin/static/userlist/jquery.css" type="text/css" rel="stylesheet" />
	<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/jquery_002.js" type="text/javascript"></script>
	<!--<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/jquery_004.js" type="text/javascript"></script>-->
	<link href="/lenovo3c_new/lbyun/Public/Admin/static/userlist/bootstrap.css" type="text/css" rel="stylesheet" />
	<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/bootstrap.js" type="text/javascript"></script>
	<!--[if lte IE 6]><link href="/lenjoy/static/bootstrap/bsie/css/bootstrap-ie6.min.css" type="text/css" rel="stylesheet" />
	<script src="/lenjoy/static/bootstrap/bsie/js/bootstrap-ie.min.js" type="text/javascript"></script><![endif]-->
	<!--<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/WdatePicker.js" type="text/javascript"></script>-->
	<!--<link href="/lenovo3c_new/lbyun/Public/Admin/static/userlist/WdatePicker.css" rel="stylesheet" type="text/css" />-->
	<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/jquery_003.js"></script>
	<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/mustache.js" type="text/javascript"></script>
	<link href="/lenovo3c_new/lbyun/Public/Admin/static/userlist/lenjoy.css" type="text/css" rel="stylesheet" />
	<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/lenjoy.js" type="text/javascript"></script>
	<!--  需要添加百度统计分析-->
	<meta name="decorator" content="default" />

	<!--<link rel="stylesheet" href="style.css" type="text/css">-->
	<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/My97DatePicker/WdatePicker.js"></script>
	<!--<script src="/lenovo3c_new/lbyun/Public/Admin/amcharts/amcharts.js" type="text/javascript"></script>-->
	<!--<script src="/lenovo3c_new/lbyun/Public/Admin/amcharts/pie.js" type="text/javascript"></script>-->

	<script src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/echarts/echarts.js"></script>
	<!--<script data-require-id="echarts/chart/pie" src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/pie.js" async=""></script><script data-require-id="echarts/chart/bar" src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/bar.js" async=""></script><script data-require-id="echarts/chart/funnel" src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/funnel.js" async=""></script><script data-require-id="echarts/chart/line" src="/lenovo3c_new/lbyun/Public/Admin/static/userlist/line.js" async=""></script></head>-->
</head>


<body>
<div class="container-fluid">
	<ul class="nav nav-tabs">
		<li class="active"><a href="">商家分析</a></li>
	</ul>
	<div id="warning" style="display: none" class="alert alert-warning" aria-hidden="true">
		<a class="closed close" href="#">&times;</a>
		<strong>提示！</strong>开始时间和结束时间都必须选择,只允许查询时间间隔不超过30天的数据!
	</div>

	<form id="searchForm" class="breadcrumb form-search" action="#" method="post">
		<div>
			<label>开始时间：</label>
			<input type="text" id="startDate" name="startDate" class="required Wdate span2" maxlength="50" onClick="WdatePicker()">
			<!--<input id="startDate" name="startDate" onclick="WdatePicker()" placeholder="开始时间" class="required Wdate span2" maxlength="50" type="text" />-->
			<label>结束时间：</label>
			<input type="text" id="endDate" name="endDate" class="required Wdate span2" maxlength="50" onClick="WdatePicker()">&nbsp;&nbsp;&nbsp;

			<!--<input id="endDate" name="endDate" onclick="WdatePicker()" placeholder="结束时间" class="required Wdate span2" maxlength="50" type="text" /> &nbsp;-->
			<input id="btnSubmit" class="btn btn-primary" value="查询"  onclick="reSearch();return false;" type="submit" />
			<!--<input type="button" value="tijiao" id="haha">-->
			<!--<testarea id="test"></testarea>-->
		</div>
	</form>

	<input id="day" name="day" value="7" type="hidden" />
	<div class="row-fluid">
		<div class="span12">
			<ul class="breadcrumb">
				<li>销售商家占比分析</li>
			</ul>
			<div style="width: 100%; float: left;">
				<!-- <input type="button" id='te'  class='btn' name="" value="最近两天"> -->
				<a  class="btn btn7" dirc="product" id="se7">最近7天</a>&nbsp;&nbsp;
				<a  class="btn btn30" dirc="product" id="se30">最近30天</a>
			</div>

			<!--<div id="chartdiv" style="width: 700px; height: 500px; float: left;">-->
			<div id="test" style="width: 650px; height: 500px; float: left; margin-top: 10px;">

			</div>
			<div class="row-fluid" >

				<div class="span4" style="float: right;">
					<table class="table table-bordered">
						<thead>
						<tr>
							<th>通路</th>
							<th>销量</th>
						</tr>
						</thead>
						<tbody id="salename">
						<tr>
							<td>京东</td>
							<td>4372</td>
						</tr>
						<tr>
							<td>深圳平安</td>
							<td>153</td>
						</tr>
						<tr>
							<td>天猫通路</td>
							<td>0</td>
						</tr>
						<tr>
							<td>浙江移动</td>
							<td>0</td>
						</tr>
						<tr>
							<td>京东电销</td>
							<td>0</td>
						</tr>
						<tr>
							<td>中国移动</td>
							<td>0</td>
						</tr>
						<tr>
							<td>电销及银行通路</td>
							<td>0</td>
						</tr>
						<tr>
							<td>官网</td>
							<td>0</td>
						</tr>
						<tr>
							<td>测试</td>
							<td>0</td>
						</tr>
						<tr>
							<td>北京平安</td>
							<td>0</td>
						</tr>
						<tr>
							<td>北京联通</td>
							<td>0</td>
						</tr>
						<tr>
							<td>北京移动</td>
							<td>0</td>
						</tr>
						<tr>
							<td>淘宝</td>
							<td>0</td>
						</tr>
						<tr>
							<td>m3</td>
							<td>0</td>
						</tr>
						<tr>
							<td>苏宁</td>
							<td>0</td>
						</tr>
						<tr>
							<td>m5</td>
							<td>0</td>
						</tr>
						<tr>
							<td>京东集采</td>
							<td>0</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<ul class="breadcrumb">
				<li>销售商家趋势分析</li>
			</ul>
			<div class="row-fluid">
				<div class="span4">
					<div style="width: 100%; float: left;">
						<!-- <input type="button" id='te'  class='btn' name="" value="最近两天"> -->
						<a  class='btn btn7' dirc="line" id="line7" >最近7天</a>&nbsp;&nbsp;
						<a  class='btn btn30' dirc="line" id="line30" >最近30天</a>
					</div>
				</div>
				<div class="span4"></div>
				<div class="span4">
					<div>
						<input class="input-medium" checked="checked" id="allname" type="checkbox" />全部通路&nbsp;&nbsp;&nbsp;&nbsp;
						<select class="input-medium" id="nameName" name="roteName">
							<option value="" selected="selected">请选择通路</option>
							<!--<option value="1">京东</option>-->

							</select>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<!--<div id="mainbar" style="height: 300px; -moz-user-select: none; background-color: transparent;" _echarts_instance_="1497941075063">-->
				<div id="mainbar" style="width: 1200px; height: 500px; margin-top: 10px;">

				<!--<div style="position: relative; overflow: hidden; width: 1863px; height: 300px;">-->
						<!--<div style="position: absolute; left: 0px; top: 0px; width: 1863px; height: 300px; -moz-user-select: none;" data-zr-dom-id="bg"></div>-->
						<!--<canvas style="position: absolute; left: 0px; top: 0px; width: 1863px; height: 300px; -moz-user-select: none;" width="1863" height="300" data-zr-dom-id="0"></canvas>-->
						<!--<canvas style="position: absolute; left: 0px; top: 0px; width: 1863px; height: 300px; -moz-user-select: none;" width="1863" height="300" data-zr-dom-id="1"></canvas>-->
						<!--<canvas style="position: absolute; left: 0px; top: 0px; width: 1863px; height: 300px; -moz-user-select: none;" width="1863" height="300" data-zr-dom-id="_zrender_hover_"></canvas>-->
					<!--</div>-->
				</div>
			</div>
			<div class="row-fluid">
				<table class="table table-bordered">
					<thead id="trendAnalysisTitle">
					<tr></tr>
					<tr>
						<td>时间</td>
						<td>京东</td>
						<td>m5</td>
						<td>苏宁</td>
						<td>m3</td>
						<td>淘宝</td>
						<td>北京移动</td>
						<td>北京联通</td>
						<td>北京平安</td>
						<td>测试</td>
						<td>官网</td>
						<td>电销及银行通路</td>
						<td>深圳平安</td>
						<td>中国移动</td>
						<td>京东电销</td>
						<td>浙江移动</td>
						<td>天猫通路</td>
						<td>京东集采</td>
						<td>总计</td>
					</tr>
					</thead>
					<tbody id="trendAnalysisData">
					<tr></tr>
					<tr>
						<td>2017-06-14</td>
						<td>4372</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>23</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>4395</td>
					</tr>
					<tr></tr>

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">


    /**
     *  按日期查询
     */
    function reSearch(){
        var startDate = new Date($('#startDate').val());
        var endDate = new Date($('#endDate').val());
        var time = (endDate.getTime() - startDate.getTime()) / 86400;
        if ( time < 8000 || time > 30000) {
            alert('查询最少七天以上30天以下的数据');
        }else {
            var day = $('#startDate').val() + ' 至 ' + $('#endDate').val();
//            $('.required').val('');
            $('.btn').removeAttr('disabled')
//			alert( $('#searchForm').serialize() )
            $.ajax({
                type: 'post',
                url: "<?php echo U('Admin/SaleAnalyze/business');?>",
                data: $('#searchForm').serialize(),
                success: function(xhr){
//                    alert(res)
                    var name = new Array();
                    for ( var i = 0 ; i < xhr.length ; i++) {
                        name[i] = xhr[i].name;
                    }
                    pie (xhr , name , day);
                    pieHtml(xhr);
                }
            })
        }
    }


    /**
     *  默认显示 7天数据
     */
    $(document).ready(function(){
        $('.btn7').attr({
            'disabled':'disabled'
        })
        var day = '7天';
        var url1 = "<?php echo U('Admin/SaleAnalyze/business');?>?day=7";
        pie_ajax(url1,day);
        var url2 = "<?php echo U('Admin/SaleAnalyze/businessLine');?>?day=7";
        line_ajax(url2)
        //柱状图右边的通路下拉框
//        $.ajax({
//            url : "<?php echo U('Admin/SaleAnalyze/columnarRouteList');?>" ,
//            success : function(routName) {
//                var name = '';
//                for (var i = 0 ; i < routName.length ; i++) {
//                    name += "<option value="+routName[i].id+">"+routName[i].name+"</option>"
//                }
//                $('#nameName').html("<option value='' selected='selected'>请选择通路</option>"+name)
//            }
//        })
    });

    /**
     *	柱状图通路选择
     */
    $('#nameName').change(function(){
		var index = $(this).val();
//		index = 1;
		$("table:eq(1)").find('tr').each(function () {
            $(this).find('.company').eq(index).show().siblings('.company').hide();
        });
        $('#allname').removeAttr('checked')
    });


	$('#allname').click(function () {
        $('#allname').attr('checked','checked');
        $("table:eq(1)").find('tr').find('.company').show();
        $('#nameName').children().eq(0).attr('selected','selected')
    });


    /**
     *  7天显示数据
     */
    $('.btn7').click(function(){
        $(this).attr({
            'disabled':'disabled'
        })
        $(this).siblings().removeAttr('disabled')
//        $('#nameName').children(':first').prop('selected',true)
        var day =  '7天';
        if ($(this).attr('dirc') == 'product') {
            var url = "<?php echo U('Admin/SaleAnalyze/business');?>?day=7"
            pie_ajax(url,day);
        }
        if ($(this).attr('dirc') == 'line') {
//            var routeName = '';
//            var columnarUrl = '';
            var columnarUrl = "<?php echo U('Admin/SaleAnalyze/businessLine');?>?day=7"
//            if ($('#nameName').val() != '') {
//                routeName = $('#nameName').val()
//                columnarUrl = "<?php echo U('Admin/SaleAnalyze/columnar');?>?day=7"+'&route='+routeName
//			}
            line_ajax(columnarUrl);
        }
    })


    /**
     *	30天数据
     */
    $('.btn30').click(function(){
        $(this).attr({
            'disabled':'disabled'
        })
        $(this).siblings().removeAttr('disabled')
        var day = 30 + '天';
        if ($(this).attr('dirc') == 'product') {
            var url = "<?php echo U('Admin/SaleAnalyze/business');?>?day=30"
            pie_ajax(url,day);
        }
        if ($(this).attr('dirc') == 'line') {
            var url = "<?php echo U('Admin/SaleAnalyze/businessLine');?>?day=30"
            line_ajax(url);
        }
    })


    /**
     *  扇形图ajax方法 ,带条件查询数据
     */
    function pie_ajax(url,day)
    {
        $.ajax({
            url: url,
            success: function(xhr){
                var name = new Array()
                for( var i = 0 ; i < xhr.length ; i++ ){
//                    arr[i] = { "name":xhr[i].name , "value":xhr[i].value}
                    name[i] = xhr[i].name
                }

                pie(xhr,name,day)
                pieHtml(xhr);
//				columnar(xhr.time)
            }
        })
    }


    function line_ajax (url)
    {
        $.ajax({
            url: url,
            dataType:'json',
            success: function(data){
//                alert(data)
//			    var info = data.info
//				alert(info.length);
//                if (data.data.length) {
                var name = [];
//                    for(var i = 1 ; i <= data.info.length ;i++) {
////                        name[i] = data.info[i].name
//						alert(data.info[i].name)
//                    }
                $.each(data.info,function(index,value){
                    name.push(value.name)
                });
//                    columnar(data , name )
//                    columnarHtml(data)
//                }else{
//				alert(['最高气温','最低气温'])
                columnar(data ,name);
                columnarHtml(data , name);
                selectList(name);
//                }

            }
        })
    }

    /**
     * pie 图显示
     * @param xhr  后台数据
     * @param name	后天数据名称
     */
    function pie(xhr,name,day){
        var obj = document.getElementById('test')
        var myChart = echarts.init(obj);
        option = {
            title : {
                text: '产品销售分析' + day ,
                subtext: '',
                x:'center'
            },
            tooltip : {
                trigger: 'item',
                formatter: "{a} <br/>{b} : {c} ({d}%)"
            },
            legend: {
                orient: 'vertical',
                left: 'left',
                data: name
//                data: ['直接访问','邮件营销','联盟广告','视频广告','搜索引擎']
            },
            series : [
                {
//                    name: '访问来源',
                    type: 'pie',
                    radius: '55%',
                    center: ['50%', '60%'],
                    data: xhr,
//                    data:[
//                        {value:335, name:'直接访问'},
//                        {value:310, name:'邮件营销'},
//                        {value:234, name:'联盟广告'},
//                        {value:135, name:'视频广告'},
//                        {value:1548, name:'搜索引擎'}
//                    ],
                    itemStyle: {
                        emphasis: {
                            shadowBlur: 10,
                            shadowOffsetX: 0,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    }
                }
            ]
        };
        myChart.setOption(option);
    }

    /**
     * 	替换扇形图右侧数据
     */
    function pieHtml(info) {
        var str = '';
        for (var i=0 ; i < info.length ; i++) {
            str +=  "<tr><td>"+info[i].name+"</td><td>"+info[i].value+"</td></tr>";
        }
        $('#salename').html(str);
    }

    function columnar(data , name){
//        alert(name)
//		console.log(data.info)
        var div= document.getElementById('mainbar')
        var myChart = echarts.init(div);
        myChart.title = '堆叠条形图';
//alert(xhr)
        option = {
            title: {
                text: '',
//                subtext: '纯属虚构'
            },
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data: name
//                data:['最高气温','最低气温']
            },
            toolbox: {
                show: true,
                feature: {
                    dataZoom: {
                        yAxisIndex: 'none'
                    },
                    dataView: {readOnly: false},
                    magicType: {type: ['line', 'bar']},
                    restore: {},
                    saveAsImage: {}
                }
            },
            xAxis:  {
                type: 'category',
                boundaryGap: false,
                data: data.day
//                data: ['周一','周二','周三','周四','周五','周六','周日']
            },
            yAxis: {
                type: 'value',
                axisLabel: {
                    formatter: '{value}'
//                    formatter: '{value} °C'
                }
            },
            series:data.info
//            series: [
//                {
//                    name:'最高气温',
//                    type:'line',
//                    data:[11, 11, 15, 13, 12, 13, 10],
//                    markPoint: {
//                        data: [
//                            {type: 'max', name: '最大值'},
//                            {type: 'min', name: '最小值'}
//                        ]
//                    },
//                    markLine: {
//                        data: [
//                            {type: 'average', name: '平均值'}
//                        ]
//                    }
//                },
//                {
//                    name:'最低气温',
//                    type:'line',
//                    data:[100, 300, 222, 511, 332, 212, 320],
//                    markPoint: {
//                        data: [
//                            {name: '周最低', value: -2, xAxis: 1, yAxis: -1.5}
//                        ]
//                    },
//                    markLine: {
//                        data: [
//                            {type: 'average', name: '平均值'},
//                            [{
//                                symbol: 'none',
//                                x: '90%',
//                                yAxis: 'max'
//                            }, {
//                                symbol: 'circle',
//                                label: {
//                                    normal: {
//                                        position: 'start',
//                                        formatter: '最大值'
//                                    }
//                                },
//                                type: 'max',
//                                name: '最高点'
//                            }]
//                        ]
//                    }
//                }
//            ]
        };

        myChart.setOption(option);
    }

    function selectList(name) {
//		alert(name.length)
		var strs = '';
		for (var p = 0 ; p < name.length ; p++)
		{
			strs += 	"<option value="+p+">"+name[p]+"</option>"
        }
        $('#nameName').html("<option value='' selected='selected'>请选择..</option>"+strs)
    }

    function columnarHtml(data , name)
    {
        //表头数据
        var singleName = '';
        for (var i = 0 ; i < name.length ; i++ )
        {
            singleName += "<td class='company' >"+name[i]+"</td>";
        }
        var strName = "<tr><td>时间</td>"+singleName+"<td class='company'>总计</td></tr>";
        $('#trendAnalysisTitle').html(strName);
        //表数据
        var dataList = '';
        for (var s = 0 ; s < data.day.length ; s++)
        {
            var singleData = '';
            var num = 0;
            for (var n = 0 ; n < name.length ; n++)
            {
                singleData += "<td class='company'>"+data.info[n].data[s]+"</td>";
                num += parseInt(data.info[n].data[s])
            }
            dataList += "<tr><td>"+data.day[s]+"</td>"+singleData+"<td class='company'>"+num+"</td></tr>"
        }
        $('#trendAnalysisData').html(dataList);
    }


</script>
</body>
</html>