<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="overflow-x:hidden;overflow-y:auto;"><head>
		<title>
		产品--出险率 - Powered By Enjoy3C</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Cache-Control" content="no-store"><meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<meta name="author" content="http://ljz0721cx.iteye.com/">
<meta http-equiv="X-UA-Compatible" content="IE=7,IE=9,IE=10">
	<script src="/lenovo3C/Public/Admin/static/userlist/jquery-1.js" type="text/javascript"></script>

	<link href="/lenovo3C/Public/Admin/static/userlist/bootstrap.css" type="text/css" rel="stylesheet" />
	<!--<script src="/lenovo3C/Public/Admin/static/userlist/bootstrap.js" type="text/javascript"></script>-->
	<!--[if lte IE 6]><!--<link href="/lenjoy/static/bootstrap/bsie/css/bootstrap-ie6.min.css" type="text/css" rel="stylesheet" />-->
	<script src="/lenjoy/static/bootstrap/bsie/js/bootstrap-ie.min.js" type="text/javascript"></script><![endif]-->

	<!--<link href="/lenovo3C/Public/Admin/static/userlist/lenjoy.css" type="text/css" rel="stylesheet" />-->
	<script src="/lenovo3C/Public/Admin/static/userlist/lenjoy.js" type="text/javascript"></script>

	<script src="/lenovo3C/Public/Admin/static/userlist/My97DatePicker/WdatePicker.js"></script>



		<!--  需要添加百度统计分析-->
		
	
	<meta name="decorator" content="default">
	<link href="sellerpinganList_data/treeTable.css" rel="stylesheet" type="text/css">
<script src="sellerpinganList_data/jquery.js" type="text/javascript"></script>
	
	<style type="text/css">  
		.loading{  
		    width:160px;  
		    height:56px;  
		    position: absolute;  
		    top:50%;  
		    left:50%;  
		    line-height:56px;  
		    color:#fff;  
		    padding-left:60px;  
		    font-size:15px;  
		    background: #000 url(/lenjoy/static/images/loader.gif) no-repeat 10px 50%;  
		    opacity: 0.7;  
		    z-index:9999;  
		    -moz-border-radius:20px;  
		    -webkit-border-radius:20px;  
		    border-radius:20px;  
		    filter:progid:DXImageTransform.Microsoft.Alpha(opacity=70);  
		}
		th {
			color: #ffffff;
			background: rgb(68,142,205);
		}
</style>



	</head>
	<body>
		
     <div id="loading" class="loading" style="display: none"></div> 
	<ul class="nav nav-tabs">
		<li class="active"><a href="http://114.247.140.53:8080/#stats/outInsurance/sellerpinganList">产品--出险率</a></li>
	</ul>
	<form id="searchForm" class="breadcrumb form-search" action="/#stats/outInsurance/sellerpinganList" method="post">
		<div style="margin-top: 8px;">
			<input id="pageNo" name="pageNo" value="1" type="hidden">
		    <input id="pageSize" name="pageSize" value="20" type="hidden">
			<label>统计日期：</label>
			<input name="endDate" maxlength="50" onclick="WdatePicker()" readonly="readonly" class="input-medium Wdate" value="2017-07-07" type="text">
			&nbsp;<input id="btnSubmit" class="btn btn-primary" value="查询" onclick="return search();" type="submit">
		</div>
	</form>














	


<script type="text/javascript">top.$.jBox.closeTip();</script>



	<table id="contentTable" class="table table-striped table-bordered table-condensed">
		<thead>
			<!-- <tr>
			    <th>销售商名称</th>
			    <th>出险数</th>
			    <th>注册数</th>
				<th>出险率</th>
			</tr> -->
			 <tr>
			    <th>销售商ID</th>
			    <th>销售商名称</th>
			    <th>出险数</th>
			    <th>注册数</th>
				<th>出险率</th>
			</tr>
		</thead>
		<tbody>
		
				
				<tr>
				    <td>CZYT-00077</td>
					<td></td>
					<td>1</td>
					<td>1</td>
					<td>100.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18013</td>
					<td></td>
					<td>2</td>
					<td>2</td>
					<td>100.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00050</td>
					<td></td>
					<td>1</td>
					<td>1</td>
					<td>100.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00113</td>
					<td></td>
					<td>2</td>
					<td>2</td>
					<td>100.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03577</td>
					<td></td>
					<td>1</td>
					<td>1</td>
					<td>100.00%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-01053</td>
					<td>宝通莱阳大润发</td>
					<td>1</td>
					<td>1</td>
					<td>100.00%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-00888</td>
					<td></td>
					<td>2</td>
					<td>2</td>
					<td>100.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03580</td>
					<td>山东烟台门店</td>
					<td>1</td>
					<td>1</td>
					<td>100.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00317</td>
					<td></td>
					<td>1</td>
					<td>1</td>
					<td>100.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00069</td>
					<td></td>
					<td>2</td>
					<td>2</td>
					<td>100.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00142</td>
					<td></td>
					<td>11</td>
					<td>16</td>
					<td>68.75%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-04017</td>
					<td></td>
					<td>2</td>
					<td>3</td>
					<td>66.67%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-06352</td>
					<td></td>
					<td>1</td>
					<td>2</td>
					<td>50.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00176</td>
					<td></td>
					<td>1</td>
					<td>2</td>
					<td>50.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00323</td>
					<td></td>
					<td>1</td>
					<td>2</td>
					<td>50.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00250</td>
					<td></td>
					<td>1</td>
					<td>2</td>
					<td>50.00%</td> 
				</tr>
			
				
				<tr>
				    <td>SWTL-00018</td>
					<td></td>
					<td>1</td>
					<td>2</td>
					<td>50.00%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-01007</td>
					<td></td>
					<td>1</td>
					<td>2</td>
					<td>50.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00225</td>
					<td></td>
					<td>1</td>
					<td>2</td>
					<td>50.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00254</td>
					<td></td>
					<td>1</td>
					<td>2</td>
					<td>50.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-06501</td>
					<td></td>
					<td>1</td>
					<td>2</td>
					<td>50.00%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-00006</td>
					<td></td>
					<td>1</td>
					<td>2</td>
					<td>50.00%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-00010</td>
					<td></td>
					<td>2</td>
					<td>4</td>
					<td>50.00%</td> 
				</tr>
			
				
				<tr>
				    <td>SWTL-00060</td>
					<td></td>
					<td>1</td>
					<td>2</td>
					<td>50.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00182</td>
					<td></td>
					<td>1</td>
					<td>2</td>
					<td>50.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00166</td>
					<td></td>
					<td>3</td>
					<td>6</td>
					<td>50.00%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-01036</td>
					<td></td>
					<td>1</td>
					<td>2</td>
					<td>50.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00238</td>
					<td></td>
					<td>2</td>
					<td>4</td>
					<td>50.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00140</td>
					<td></td>
					<td>5</td>
					<td>11</td>
					<td>45.45%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00226</td>
					<td></td>
					<td>5</td>
					<td>11</td>
					<td>45.45%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18009</td>
					<td></td>
					<td>7</td>
					<td>16</td>
					<td>43.75%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00290</td>
					<td></td>
					<td>2</td>
					<td>5</td>
					<td>40.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-10003</td>
					<td></td>
					<td>3</td>
					<td>8</td>
					<td>37.50%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18024</td>
					<td></td>
					<td>10</td>
					<td>29</td>
					<td>34.48%</td> 
				</tr>
			
				
				<tr>
				    <td>SWTL-00075</td>
					<td></td>
					<td>1</td>
					<td>3</td>
					<td>33.33%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-06356</td>
					<td></td>
					<td>1</td>
					<td>3</td>
					<td>33.33%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00330</td>
					<td></td>
					<td>1</td>
					<td>3</td>
					<td>33.33%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00260</td>
					<td></td>
					<td>4</td>
					<td>12</td>
					<td>33.33%</td> 
				</tr>
			
				
				<tr>
				    <td>HAIYE-00001</td>
					<td></td>
					<td>1</td>
					<td>3</td>
					<td>33.33%</td> 
				</tr>
			
				
				<tr>
				    <td>XCHL-00010</td>
					<td>手机通讯商</td>
					<td>1</td>
					<td>3</td>
					<td>33.33%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18049</td>
					<td></td>
					<td>2</td>
					<td>6</td>
					<td>33.33%</td> 
				</tr>
			
				
				<tr>
				    <td>SWTL-00068</td>
					<td></td>
					<td>1</td>
					<td>3</td>
					<td>33.33%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18020</td>
					<td></td>
					<td>4</td>
					<td>12</td>
					<td>33.33%</td> 
				</tr>
			
				
				<tr>
				    <td>CQDS-00022</td>
					<td>重庆市陡石通讯器材有限责任公司</td>
					<td>1</td>
					<td>3</td>
					<td>33.33%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00338</td>
					<td></td>
					<td>1</td>
					<td>3</td>
					<td>33.33%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-01061</td>
					<td></td>
					<td>1</td>
					<td>3</td>
					<td>33.33%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00026</td>
					<td></td>
					<td>4</td>
					<td>13</td>
					<td>30.77%</td> 
				</tr>
			
				
				<tr>
				    <td>KFJHL-00020</td>
					<td></td>
					<td>2</td>
					<td>7</td>
					<td>28.57%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00178</td>
					<td></td>
					<td>2</td>
					<td>7</td>
					<td>28.57%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00300</td>
					<td></td>
					<td>2</td>
					<td>7</td>
					<td>28.57%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00185</td>
					<td></td>
					<td>19</td>
					<td>69</td>
					<td>27.54%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00308</td>
					<td></td>
					<td>3</td>
					<td>11</td>
					<td>27.27%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00203</td>
					<td></td>
					<td>8</td>
					<td>30</td>
					<td>26.67%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00299</td>
					<td></td>
					<td>5</td>
					<td>19</td>
					<td>26.32%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-01024</td>
					<td></td>
					<td>2</td>
					<td>8</td>
					<td>25.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00051</td>
					<td></td>
					<td>1</td>
					<td>4</td>
					<td>25.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-06506</td>
					<td></td>
					<td>1</td>
					<td>4</td>
					<td>25.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-23006</td>
					<td></td>
					<td>1</td>
					<td>4</td>
					<td>25.00%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-01014</td>
					<td></td>
					<td>1</td>
					<td>4</td>
					<td>25.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18005</td>
					<td></td>
					<td>2</td>
					<td>8</td>
					<td>25.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-11500</td>
					<td></td>
					<td>5</td>
					<td>20</td>
					<td>25.00%</td> 
				</tr>
			
				
				<tr>
				    <td>XCHL-00014</td>
					<td></td>
					<td>1</td>
					<td>4</td>
					<td>25.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03555</td>
					<td></td>
					<td>1</td>
					<td>4</td>
					<td>25.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-04409</td>
					<td></td>
					<td>25</td>
					<td>103</td>
					<td>24.27%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00343</td>
					<td></td>
					<td>17</td>
					<td>71</td>
					<td>23.94%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18054</td>
					<td></td>
					<td>4</td>
					<td>17</td>
					<td>23.53%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-23022</td>
					<td></td>
					<td>4</td>
					<td>17</td>
					<td>23.53%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00333</td>
					<td></td>
					<td>31</td>
					<td>134</td>
					<td>23.13%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00056</td>
					<td></td>
					<td>9</td>
					<td>39</td>
					<td>23.08%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00068</td>
					<td></td>
					<td>3</td>
					<td>13</td>
					<td>23.08%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00341</td>
					<td></td>
					<td>35</td>
					<td>154</td>
					<td>22.73%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-01015</td>
					<td></td>
					<td>6</td>
					<td>27</td>
					<td>22.22%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00224</td>
					<td></td>
					<td>5</td>
					<td>23</td>
					<td>21.74%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18021</td>
					<td></td>
					<td>11</td>
					<td>52</td>
					<td>21.15%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00186</td>
					<td></td>
					<td>4</td>
					<td>19</td>
					<td>21.05%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18031</td>
					<td></td>
					<td>25</td>
					<td>120</td>
					<td>20.83%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03565</td>
					<td></td>
					<td>1</td>
					<td>5</td>
					<td>20.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-30021</td>
					<td></td>
					<td>1</td>
					<td>5</td>
					<td>20.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18040</td>
					<td></td>
					<td>1</td>
					<td>5</td>
					<td>20.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18053</td>
					<td></td>
					<td>1</td>
					<td>5</td>
					<td>20.00%</td> 
				</tr>
			
				
				<tr>
				    <td>SWTL-00042</td>
					<td></td>
					<td>2</td>
					<td>10</td>
					<td>20.00%</td> 
				</tr>
			
				
				<tr>
				    <td>SWTL-00008</td>
					<td></td>
					<td>1</td>
					<td>5</td>
					<td>20.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00012</td>
					<td></td>
					<td>5</td>
					<td>25</td>
					<td>20.00%</td> 
				</tr>
			
				
				<tr>
				    <td>SWTL-00052</td>
					<td></td>
					<td>1</td>
					<td>5</td>
					<td>20.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03536</td>
					<td></td>
					<td>2</td>
					<td>10</td>
					<td>20.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00291</td>
					<td></td>
					<td>2</td>
					<td>10</td>
					<td>20.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18028</td>
					<td></td>
					<td>7</td>
					<td>35</td>
					<td>20.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03512</td>
					<td></td>
					<td>2</td>
					<td>10</td>
					<td>20.00%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-01018</td>
					<td></td>
					<td>2</td>
					<td>10</td>
					<td>20.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00274</td>
					<td></td>
					<td>1</td>
					<td>5</td>
					<td>20.00%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-01041</td>
					<td></td>
					<td>1</td>
					<td>5</td>
					<td>20.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00038</td>
					<td></td>
					<td>1</td>
					<td>5</td>
					<td>20.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03550</td>
					<td></td>
					<td>15</td>
					<td>76</td>
					<td>19.74%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00241</td>
					<td></td>
					<td>20</td>
					<td>102</td>
					<td>19.61%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00204</td>
					<td></td>
					<td>7</td>
					<td>36</td>
					<td>19.44%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00139</td>
					<td></td>
					<td>30</td>
					<td>155</td>
					<td>19.35%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00235</td>
					<td></td>
					<td>33</td>
					<td>174</td>
					<td>18.97%</td> 
				</tr>
			
				
				<tr>
				    <td>BRDL-00013</td>
					<td></td>
					<td>53</td>
					<td>283</td>
					<td>18.73%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-23000</td>
					<td></td>
					<td>7</td>
					<td>38</td>
					<td>18.42%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00202</td>
					<td></td>
					<td>13</td>
					<td>71</td>
					<td>18.31%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03528</td>
					<td></td>
					<td>2</td>
					<td>11</td>
					<td>18.18%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00023</td>
					<td></td>
					<td>3</td>
					<td>17</td>
					<td>17.65%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00347</td>
					<td></td>
					<td>3</td>
					<td>17</td>
					<td>17.65%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18026</td>
					<td></td>
					<td>18</td>
					<td>103</td>
					<td>17.48%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-01044</td>
					<td></td>
					<td>4</td>
					<td>23</td>
					<td>17.39%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00135</td>
					<td></td>
					<td>4</td>
					<td>23</td>
					<td>17.39%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-06503</td>
					<td></td>
					<td>6</td>
					<td>35</td>
					<td>17.14%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-11501</td>
					<td></td>
					<td>6</td>
					<td>35</td>
					<td>17.14%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18001</td>
					<td></td>
					<td>9</td>
					<td>53</td>
					<td>16.98%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03506</td>
					<td></td>
					<td>15</td>
					<td>89</td>
					<td>16.85%</td> 
				</tr>
			
				
				<tr>
				    <td>KFJHL-00017</td>
					<td></td>
					<td>1</td>
					<td>6</td>
					<td>16.67%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-04009</td>
					<td></td>
					<td>1</td>
					<td>6</td>
					<td>16.67%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-04010</td>
					<td></td>
					<td>2</td>
					<td>12</td>
					<td>16.67%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-01047</td>
					<td></td>
					<td>1</td>
					<td>6</td>
					<td>16.67%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-01067</td>
					<td></td>
					<td>1</td>
					<td>6</td>
					<td>16.67%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18027</td>
					<td></td>
					<td>1</td>
					<td>6</td>
					<td>16.67%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03845</td>
					<td></td>
					<td>3</td>
					<td>18</td>
					<td>16.67%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00055</td>
					<td></td>
					<td>2</td>
					<td>12</td>
					<td>16.67%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-04402</td>
					<td></td>
					<td>3</td>
					<td>18</td>
					<td>16.67%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18019</td>
					<td></td>
					<td>1</td>
					<td>6</td>
					<td>16.67%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18029</td>
					<td></td>
					<td>2</td>
					<td>12</td>
					<td>16.67%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00031</td>
					<td></td>
					<td>1</td>
					<td>6</td>
					<td>16.67%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00229</td>
					<td></td>
					<td>38</td>
					<td>232</td>
					<td>16.38%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18043</td>
					<td></td>
					<td>14</td>
					<td>88</td>
					<td>15.91%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00269</td>
					<td></td>
					<td>17</td>
					<td>107</td>
					<td>15.89%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-30305</td>
					<td></td>
					<td>31</td>
					<td>196</td>
					<td>15.82%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18056</td>
					<td></td>
					<td>11</td>
					<td>70</td>
					<td>15.71%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03538</td>
					<td></td>
					<td>5</td>
					<td>32</td>
					<td>15.63%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03804</td>
					<td></td>
					<td>1008</td>
					<td>6556</td>
					<td>15.38%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-10000</td>
					<td></td>
					<td>2</td>
					<td>13</td>
					<td>15.38%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03571</td>
					<td></td>
					<td>2</td>
					<td>13</td>
					<td>15.38%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18047</td>
					<td></td>
					<td>4</td>
					<td>26</td>
					<td>15.38%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00331</td>
					<td></td>
					<td>17</td>
					<td>112</td>
					<td>15.18%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-30012</td>
					<td></td>
					<td>21</td>
					<td>139</td>
					<td>15.11%</td> 
				</tr>
			
				
				<tr>
				    <td>HSTT-00010</td>
					<td></td>
					<td>65</td>
					<td>431</td>
					<td>15.08%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00302</td>
					<td></td>
					<td>39</td>
					<td>263</td>
					<td>14.83%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-04203</td>
					<td></td>
					<td>22</td>
					<td>150</td>
					<td>14.67%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00122</td>
					<td></td>
					<td>36</td>
					<td>247</td>
					<td>14.57%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00234</td>
					<td></td>
					<td>105</td>
					<td>729</td>
					<td>14.40%</td> 
				</tr>
			
				
				<tr>
				    <td>SWTL-00040</td>
					<td></td>
					<td>2</td>
					<td>14</td>
					<td>14.29%</td> 
				</tr>
			
				
				<tr>
				    <td>TJHXT-00040</td>
					<td></td>
					<td>1</td>
					<td>7</td>
					<td>14.29%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00177</td>
					<td></td>
					<td>1</td>
					<td>7</td>
					<td>14.29%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03811</td>
					<td></td>
					<td>8</td>
					<td>56</td>
					<td>14.29%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-01028</td>
					<td></td>
					<td>1</td>
					<td>7</td>
					<td>14.29%</td> 
				</tr>
			
				
				<tr>
				    <td>SWTL-00026</td>
					<td></td>
					<td>1</td>
					<td>7</td>
					<td>14.29%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00335</td>
					<td></td>
					<td>9</td>
					<td>63</td>
					<td>14.29%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-01058</td>
					<td></td>
					<td>1</td>
					<td>7</td>
					<td>14.29%</td> 
				</tr>
			
				
				<tr>
				    <td>YINONG-00002</td>
					<td>内蒙古益农实业有限责任公司</td>
					<td>1</td>
					<td>7</td>
					<td>14.29%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18007</td>
					<td></td>
					<td>41</td>
					<td>293</td>
					<td>13.99%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18022</td>
					<td></td>
					<td>4</td>
					<td>29</td>
					<td>13.79%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00138</td>
					<td></td>
					<td>24</td>
					<td>177</td>
					<td>13.56%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00236</td>
					<td></td>
					<td>7</td>
					<td>52</td>
					<td>13.46%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-04403</td>
					<td></td>
					<td>36</td>
					<td>269</td>
					<td>13.38%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03579</td>
					<td></td>
					<td>2</td>
					<td>15</td>
					<td>13.33%</td> 
				</tr>
			
				
				<tr>
				    <td>SJZLA-00002</td>
					<td></td>
					<td>106</td>
					<td>797</td>
					<td>13.30%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00088</td>
					<td></td>
					<td>124</td>
					<td>935</td>
					<td>13.26%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-00111</td>
					<td></td>
					<td>7</td>
					<td>53</td>
					<td>13.21%</td> 
				</tr>
			
				
				<tr>
				    <td>SWTL-00050</td>
					<td></td>
					<td>5</td>
					<td>38</td>
					<td>13.16%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18016</td>
					<td></td>
					<td>3</td>
					<td>23</td>
					<td>13.04%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-06507</td>
					<td></td>
					<td>12</td>
					<td>92</td>
					<td>13.04%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-09201</td>
					<td></td>
					<td>6</td>
					<td>46</td>
					<td>13.04%</td> 
				</tr>
			
				
				<tr>
				    <td>SJZKHSM-00000</td>
					<td></td>
					<td>31</td>
					<td>238</td>
					<td>13.03%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-07001</td>
					<td></td>
					<td>281</td>
					<td>2173</td>
					<td>12.93%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-20007</td>
					<td></td>
					<td>36</td>
					<td>282</td>
					<td>12.77%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00306</td>
					<td></td>
					<td>12</td>
					<td>95</td>
					<td>12.63%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00044</td>
					<td></td>
					<td>3</td>
					<td>24</td>
					<td>12.50%</td> 
				</tr>
			
				
				<tr>
				    <td>SWTL-00020</td>
					<td></td>
					<td>1</td>
					<td>8</td>
					<td>12.50%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00029</td>
					<td></td>
					<td>2</td>
					<td>16</td>
					<td>12.50%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-01037</td>
					<td></td>
					<td>1</td>
					<td>8</td>
					<td>12.50%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00222</td>
					<td></td>
					<td>1</td>
					<td>8</td>
					<td>12.50%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18036</td>
					<td></td>
					<td>1</td>
					<td>8</td>
					<td>12.50%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18052</td>
					<td></td>
					<td>2</td>
					<td>16</td>
					<td>12.50%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03520</td>
					<td></td>
					<td>1</td>
					<td>8</td>
					<td>12.50%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-30302</td>
					<td></td>
					<td>39</td>
					<td>313</td>
					<td>12.46%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-04003</td>
					<td></td>
					<td>7</td>
					<td>57</td>
					<td>12.28%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00174</td>
					<td></td>
					<td>9</td>
					<td>74</td>
					<td>12.16%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00305</td>
					<td></td>
					<td>34</td>
					<td>280</td>
					<td>12.14%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03534</td>
					<td></td>
					<td>56</td>
					<td>465</td>
					<td>12.04%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00011</td>
					<td></td>
					<td>3</td>
					<td>25</td>
					<td>12.00%</td> 
				</tr>
			
				
				<tr>
				    <td>SWTL-00019</td>
					<td></td>
					<td>3</td>
					<td>25</td>
					<td>12.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00132</td>
					<td></td>
					<td>6</td>
					<td>50</td>
					<td>12.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00242</td>
					<td></td>
					<td>38</td>
					<td>319</td>
					<td>11.91%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00303</td>
					<td></td>
					<td>9</td>
					<td>76</td>
					<td>11.84%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03553</td>
					<td></td>
					<td>4</td>
					<td>34</td>
					<td>11.76%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-04015</td>
					<td></td>
					<td>19</td>
					<td>163</td>
					<td>11.66%</td> 
				</tr>
			
				
				<tr>
				    <td>ZKHD-00001</td>
					<td></td>
					<td>3</td>
					<td>26</td>
					<td>11.54%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00180</td>
					<td></td>
					<td>4</td>
					<td>35</td>
					<td>11.43%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00278</td>
					<td></td>
					<td>13</td>
					<td>115</td>
					<td>11.30%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00275</td>
					<td></td>
					<td>61</td>
					<td>546</td>
					<td>11.17%</td> 
				</tr>
			
				
				<tr>
				    <td>HBYWB-00001</td>
					<td></td>
					<td>117</td>
					<td>1052</td>
					<td>11.12%</td> 
				</tr>
			
				
				<tr>
				    <td>SWTL-00085</td>
					<td></td>
					<td>1</td>
					<td>9</td>
					<td>11.11%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-04407</td>
					<td></td>
					<td>3</td>
					<td>27</td>
					<td>11.11%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18032</td>
					<td></td>
					<td>1</td>
					<td>9</td>
					<td>11.11%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-07000</td>
					<td></td>
					<td>315</td>
					<td>2841</td>
					<td>11.09%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03802</td>
					<td></td>
					<td>130</td>
					<td>1174</td>
					<td>11.07%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-28700</td>
					<td></td>
					<td>24</td>
					<td>218</td>
					<td>11.01%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03808</td>
					<td></td>
					<td>606</td>
					<td>5514</td>
					<td>10.99%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-04410</td>
					<td></td>
					<td>24</td>
					<td>219</td>
					<td>10.96%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18057</td>
					<td></td>
					<td>39</td>
					<td>358</td>
					<td>10.89%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-04011</td>
					<td></td>
					<td>52</td>
					<td>478</td>
					<td>10.88%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-30023</td>
					<td></td>
					<td>4</td>
					<td>37</td>
					<td>10.81%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00007</td>
					<td></td>
					<td>4</td>
					<td>37</td>
					<td>10.81%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-30208</td>
					<td></td>
					<td>95</td>
					<td>881</td>
					<td>10.78%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03800</td>
					<td></td>
					<td>133</td>
					<td>1237</td>
					<td>10.75%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-23004</td>
					<td></td>
					<td>3</td>
					<td>28</td>
					<td>10.71%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-04200</td>
					<td></td>
					<td>26</td>
					<td>246</td>
					<td>10.57%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-11705</td>
					<td></td>
					<td>4</td>
					<td>38</td>
					<td>10.53%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-04205</td>
					<td></td>
					<td>2</td>
					<td>19</td>
					<td>10.53%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00141</td>
					<td></td>
					<td>13</td>
					<td>125</td>
					<td>10.40%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-04411</td>
					<td></td>
					<td>93</td>
					<td>896</td>
					<td>10.38%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-04400</td>
					<td></td>
					<td>249</td>
					<td>2406</td>
					<td>10.35%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18044</td>
					<td></td>
					<td>3</td>
					<td>29</td>
					<td>10.34%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-04405</td>
					<td></td>
					<td>9</td>
					<td>88</td>
					<td>10.23%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-33500</td>
					<td></td>
					<td>433</td>
					<td>4241</td>
					<td>10.21%</td> 
				</tr>
			
				
				<tr>
				    <td>BRDL-00016</td>
					<td></td>
					<td>17</td>
					<td>167</td>
					<td>10.18%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18050</td>
					<td></td>
					<td>7</td>
					<td>69</td>
					<td>10.14%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-04008</td>
					<td></td>
					<td>8</td>
					<td>79</td>
					<td>10.13%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00184</td>
					<td></td>
					<td>92</td>
					<td>914</td>
					<td>10.07%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-11504</td>
					<td></td>
					<td>1</td>
					<td>10</td>
					<td>10.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18015</td>
					<td></td>
					<td>1</td>
					<td>10</td>
					<td>10.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00270</td>
					<td></td>
					<td>1</td>
					<td>10</td>
					<td>10.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00211</td>
					<td></td>
					<td>1</td>
					<td>10</td>
					<td>10.00%</td> 
				</tr>
			
				
				<tr>
				    <td>SWTL-00015</td>
					<td></td>
					<td>5</td>
					<td>50</td>
					<td>10.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18006</td>
					<td></td>
					<td>1</td>
					<td>10</td>
					<td>10.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00168</td>
					<td></td>
					<td>1</td>
					<td>10</td>
					<td>10.00%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-01019</td>
					<td></td>
					<td>1</td>
					<td>10</td>
					<td>10.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-35000</td>
					<td></td>
					<td>99</td>
					<td>995</td>
					<td>9.95%</td> 
				</tr>
			
				
				<tr>
				    <td>HNHFKF-00001</td>
					<td>开封通运电子</td>
					<td>38</td>
					<td>382</td>
					<td>9.95%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00246</td>
					<td></td>
					<td>92</td>
					<td>925</td>
					<td>9.95%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-07400</td>
					<td></td>
					<td>122</td>
					<td>1241</td>
					<td>9.83%</td> 
				</tr>
			
				
				<tr>
				    <td>HSTT-00005</td>
					<td></td>
					<td>58</td>
					<td>592</td>
					<td>9.80%</td> 
				</tr>
			
				
				<tr>
				    <td>CYDXT-00002</td>
					<td></td>
					<td>55</td>
					<td>565</td>
					<td>9.73%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03801</td>
					<td></td>
					<td>71</td>
					<td>730</td>
					<td>9.73%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00603</td>
					<td></td>
					<td>5</td>
					<td>52</td>
					<td>9.62%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-09601</td>
					<td></td>
					<td>29</td>
					<td>302</td>
					<td>9.60%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00345</td>
					<td></td>
					<td>11</td>
					<td>115</td>
					<td>9.57%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-04408</td>
					<td></td>
					<td>2</td>
					<td>21</td>
					<td>9.52%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00183</td>
					<td></td>
					<td>2</td>
					<td>21</td>
					<td>9.52%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00030</td>
					<td></td>
					<td>2</td>
					<td>21</td>
					<td>9.52%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00273</td>
					<td></td>
					<td>2</td>
					<td>21</td>
					<td>9.52%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-01023</td>
					<td></td>
					<td>6</td>
					<td>64</td>
					<td>9.38%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00304</td>
					<td></td>
					<td>3</td>
					<td>32</td>
					<td>9.38%</td> 
				</tr>
			
				
				<tr>
				    <td>SCXWF-00006</td>
					<td></td>
					<td>3</td>
					<td>32</td>
					<td>9.38%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-09801</td>
					<td></td>
					<td>36</td>
					<td>385</td>
					<td>9.35%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00329</td>
					<td></td>
					<td>4</td>
					<td>43</td>
					<td>9.30%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-36700</td>
					<td></td>
					<td>92</td>
					<td>990</td>
					<td>9.29%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-09200</td>
					<td></td>
					<td>175</td>
					<td>1885</td>
					<td>9.28%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-04406</td>
					<td></td>
					<td>20</td>
					<td>216</td>
					<td>9.26%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-32000</td>
					<td></td>
					<td>89</td>
					<td>966</td>
					<td>9.21%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-30013</td>
					<td></td>
					<td>225</td>
					<td>2447</td>
					<td>9.19%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-07600</td>
					<td></td>
					<td>111</td>
					<td>1211</td>
					<td>9.17%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-46004</td>
					<td></td>
					<td>1</td>
					<td>11</td>
					<td>9.09%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18042</td>
					<td></td>
					<td>2</td>
					<td>22</td>
					<td>9.09%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18000</td>
					<td></td>
					<td>4</td>
					<td>44</td>
					<td>9.09%</td> 
				</tr>
			
				
				<tr>
				    <td>SWTL-00021</td>
					<td></td>
					<td>1</td>
					<td>11</td>
					<td>9.09%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-01055</td>
					<td></td>
					<td>1</td>
					<td>11</td>
					<td>9.09%</td> 
				</tr>
			
				
				<tr>
				    <td>HSTT-00501</td>
					<td></td>
					<td>1</td>
					<td>11</td>
					<td>9.09%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-04019</td>
					<td></td>
					<td>1</td>
					<td>11</td>
					<td>9.09%</td> 
				</tr>
			
				
				<tr>
				    <td>XMBS-00001</td>
					<td></td>
					<td>1</td>
					<td>11</td>
					<td>9.09%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03560</td>
					<td></td>
					<td>1</td>
					<td>11</td>
					<td>9.09%</td> 
				</tr>
			
				
				<tr>
				    <td>SWTL-00016</td>
					<td></td>
					<td>1</td>
					<td>11</td>
					<td>9.09%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-11502</td>
					<td></td>
					<td>2</td>
					<td>22</td>
					<td>9.09%</td> 
				</tr>
			
				
				<tr>
				    <td>SWTL-00003</td>
					<td></td>
					<td>2</td>
					<td>22</td>
					<td>9.09%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-06700</td>
					<td></td>
					<td>302</td>
					<td>3325</td>
					<td>9.08%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-04000</td>
					<td></td>
					<td>21</td>
					<td>235</td>
					<td>8.94%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00332</td>
					<td></td>
					<td>5</td>
					<td>56</td>
					<td>8.93%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03503</td>
					<td></td>
					<td>13</td>
					<td>146</td>
					<td>8.90%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-30042</td>
					<td></td>
					<td>218</td>
					<td>2476</td>
					<td>8.80%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-07200</td>
					<td></td>
					<td>136</td>
					<td>1548</td>
					<td>8.79%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18038</td>
					<td></td>
					<td>5</td>
					<td>57</td>
					<td>8.77%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03505</td>
					<td></td>
					<td>2</td>
					<td>23</td>
					<td>8.70%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-10200</td>
					<td></td>
					<td>67</td>
					<td>775</td>
					<td>8.65%</td> 
				</tr>
			
				
				<tr>
				    <td>HSTT-00017</td>
					<td>衡水天通商贸有限公司</td>
					<td>5</td>
					<td>58</td>
					<td>8.62%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-14202</td>
					<td></td>
					<td>210</td>
					<td>2437</td>
					<td>8.62%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-35400</td>
					<td></td>
					<td>31</td>
					<td>362</td>
					<td>8.56%</td> 
				</tr>
			
				
				<tr>
				    <td>HSTT-00011</td>
					<td></td>
					<td>260</td>
					<td>3056</td>
					<td>8.51%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18008</td>
					<td></td>
					<td>11</td>
					<td>132</td>
					<td>8.33%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-01062</td>
					<td></td>
					<td>3</td>
					<td>36</td>
					<td>8.33%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03532</td>
					<td></td>
					<td>2</td>
					<td>24</td>
					<td>8.33%</td> 
				</tr>
			
				
				<tr>
				    <td>KFJHL-00012</td>
					<td></td>
					<td>1</td>
					<td>12</td>
					<td>8.33%</td> 
				</tr>
			
				
				<tr>
				    <td>HSTT-00001</td>
					<td></td>
					<td>94</td>
					<td>1131</td>
					<td>8.31%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-30260</td>
					<td></td>
					<td>125</td>
					<td>1517</td>
					<td>8.24%</td> 
				</tr>
			
				
				<tr>
				    <td>CYDXT-00001</td>
					<td></td>
					<td>214</td>
					<td>2609</td>
					<td>8.20%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-30161</td>
					<td></td>
					<td>68</td>
					<td>833</td>
					<td>8.16%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-30304</td>
					<td></td>
					<td>85</td>
					<td>1053</td>
					<td>8.07%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00201</td>
					<td></td>
					<td>28</td>
					<td>349</td>
					<td>8.02%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-30040</td>
					<td></td>
					<td>662</td>
					<td>8275</td>
					<td>8.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03552</td>
					<td></td>
					<td>12</td>
					<td>150</td>
					<td>8.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-23200</td>
					<td></td>
					<td>115</td>
					<td>1454</td>
					<td>7.91%</td> 
				</tr>
			
				
				<tr>
				    <td>HSTT-00009</td>
					<td></td>
					<td>11</td>
					<td>140</td>
					<td>7.86%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-09000</td>
					<td></td>
					<td>34</td>
					<td>437</td>
					<td>7.78%</td> 
				</tr>
			
				
				<tr>
				    <td>HSTT-00007</td>
					<td></td>
					<td>193</td>
					<td>2489</td>
					<td>7.75%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-11503</td>
					<td></td>
					<td>1</td>
					<td>13</td>
					<td>7.69%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18014</td>
					<td></td>
					<td>1</td>
					<td>13</td>
					<td>7.69%</td> 
				</tr>
			
				
				<tr>
				    <td>CYZSZTXQCSD-00001</td>
					<td>迁安市蔡园镇神州通讯器材商店</td>
					<td>1</td>
					<td>13</td>
					<td>7.69%</td> 
				</tr>
			
				
				<tr>
				    <td>NXHDC-00001</td>
					<td></td>
					<td>2</td>
					<td>26</td>
					<td>7.69%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-18034</td>
					<td></td>
					<td>1</td>
					<td>13</td>
					<td>7.69%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03544</td>
					<td></td>
					<td>5</td>
					<td>65</td>
					<td>7.69%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03563</td>
					<td></td>
					<td>2</td>
					<td>26</td>
					<td>7.69%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-04201</td>
					<td></td>
					<td>42</td>
					<td>549</td>
					<td>7.65%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-04204</td>
					<td></td>
					<td>4</td>
					<td>53</td>
					<td>7.55%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-38400</td>
					<td></td>
					<td>15</td>
					<td>199</td>
					<td>7.54%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-43001</td>
					<td></td>
					<td>9</td>
					<td>121</td>
					<td>7.44%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-38401</td>
					<td></td>
					<td>41</td>
					<td>556</td>
					<td>7.37%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-30220</td>
					<td></td>
					<td>162</td>
					<td>2217</td>
					<td>7.31%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-14200</td>
					<td></td>
					<td>27</td>
					<td>375</td>
					<td>7.20%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-01004</td>
					<td></td>
					<td>1</td>
					<td>14</td>
					<td>7.14%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-01042</td>
					<td></td>
					<td>3</td>
					<td>42</td>
					<td>7.14%</td> 
				</tr>
			
				
				<tr>
				    <td>WZD-00001</td>
					<td></td>
					<td>1</td>
					<td>14</td>
					<td>7.14%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-35001</td>
					<td></td>
					<td>23</td>
					<td>322</td>
					<td>7.14%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-01025</td>
					<td></td>
					<td>1</td>
					<td>14</td>
					<td>7.14%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00247</td>
					<td></td>
					<td>1</td>
					<td>14</td>
					<td>7.14%</td> 
				</tr>
			
				
				<tr>
				    <td>PASZ-00028</td>
					<td>屏安信息科技（苏州）有限公司</td>
					<td>27</td>
					<td>381</td>
					<td>7.09%</td> 
				</tr>
			
				
				<tr>
				    <td>SWTL-00014</td>
					<td></td>
					<td>3</td>
					<td>43</td>
					<td>6.98%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03519</td>
					<td></td>
					<td>66</td>
					<td>946</td>
					<td>6.98%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-30182</td>
					<td></td>
					<td>118</td>
					<td>1699</td>
					<td>6.95%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-46003</td>
					<td></td>
					<td>9</td>
					<td>132</td>
					<td>6.82%</td> 
				</tr>
			
				
				<tr>
				    <td>SWTL-00028</td>
					<td></td>
					<td>4</td>
					<td>59</td>
					<td>6.78%</td> 
				</tr>
			
				
				<tr>
				    <td>SCXWF-00004</td>
					<td></td>
					<td>13</td>
					<td>194</td>
					<td>6.70%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03548</td>
					<td></td>
					<td>1</td>
					<td>15</td>
					<td>6.67%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-43000</td>
					<td></td>
					<td>464</td>
					<td>6953</td>
					<td>6.67%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00003</td>
					<td></td>
					<td>4</td>
					<td>60</td>
					<td>6.67%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-04404</td>
					<td></td>
					<td>22</td>
					<td>333</td>
					<td>6.61%</td> 
				</tr>
			
				
				<tr>
				    <td>HSTT-00012</td>
					<td></td>
					<td>4</td>
					<td>61</td>
					<td>6.56%</td> 
				</tr>
			
				
				<tr>
				    <td>HNHFXC-00001</td>
					<td>河南辉凡许昌</td>
					<td>156</td>
					<td>2392</td>
					<td>6.52%</td> 
				</tr>
			
				
				<tr>
				    <td>SCXWF-00001</td>
					<td>舒城县新万佛通讯有限公司</td>
					<td>10</td>
					<td>155</td>
					<td>6.45%</td> 
				</tr>
			
				
				<tr>
				    <td>FYYWB-00001</td>
					<td>阜阳市颍州区杨楼孜镇玉东手机专卖店</td>
					<td>61</td>
					<td>950</td>
					<td>6.42%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-01056</td>
					<td></td>
					<td>3</td>
					<td>47</td>
					<td>6.38%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03566</td>
					<td></td>
					<td>4</td>
					<td>63</td>
					<td>6.35%</td> 
				</tr>
			
				
				<tr>
				    <td>TJHXT-00002</td>
					<td></td>
					<td>2</td>
					<td>32</td>
					<td>6.25%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00093</td>
					<td></td>
					<td>1</td>
					<td>16</td>
					<td>6.25%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03511</td>
					<td></td>
					<td>4</td>
					<td>64</td>
					<td>6.25%</td> 
				</tr>
			
				
				<tr>
				    <td>HSTT-00006</td>
					<td></td>
					<td>5</td>
					<td>80</td>
					<td>6.25%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-11900</td>
					<td></td>
					<td>26</td>
					<td>425</td>
					<td>6.12%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-14600</td>
					<td></td>
					<td>82</td>
					<td>1354</td>
					<td>6.06%</td> 
				</tr>
			
				
				<tr>
				    <td>BRDL-00015</td>
					<td></td>
					<td>4</td>
					<td>66</td>
					<td>6.06%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-05200</td>
					<td></td>
					<td>116</td>
					<td>1922</td>
					<td>6.04%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-30140</td>
					<td></td>
					<td>15</td>
					<td>251</td>
					<td>5.98%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00021</td>
					<td></td>
					<td>18</td>
					<td>303</td>
					<td>5.94%</td> 
				</tr>
			
				
				<tr>
				    <td>KFJHL-00010</td>
					<td></td>
					<td>6</td>
					<td>102</td>
					<td>5.88%</td> 
				</tr>
			
				
				<tr>
				    <td>SWTL-00070</td>
					<td></td>
					<td>1</td>
					<td>17</td>
					<td>5.88%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-21000</td>
					<td></td>
					<td>95</td>
					<td>1620</td>
					<td>5.86%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-04202</td>
					<td></td>
					<td>5</td>
					<td>86</td>
					<td>5.81%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00114</td>
					<td></td>
					<td>5</td>
					<td>86</td>
					<td>5.81%</td> 
				</tr>
			
				
				<tr>
				    <td>BRKJ-10000</td>
					<td></td>
					<td>3</td>
					<td>52</td>
					<td>5.77%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03502</td>
					<td></td>
					<td>5</td>
					<td>87</td>
					<td>5.75%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-01063</td>
					<td>宝通莱州二店</td>
					<td>2</td>
					<td>35</td>
					<td>5.71%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00045</td>
					<td></td>
					<td>6</td>
					<td>105</td>
					<td>5.71%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-36900</td>
					<td></td>
					<td>19</td>
					<td>334</td>
					<td>5.69%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-38000</td>
					<td></td>
					<td>14</td>
					<td>248</td>
					<td>5.65%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-14800</td>
					<td></td>
					<td>193</td>
					<td>3441</td>
					<td>5.61%</td> 
				</tr>
			
				
				<tr>
				    <td>SCXWF-00002</td>
					<td></td>
					<td>17</td>
					<td>305</td>
					<td>5.57%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00276</td>
					<td></td>
					<td>1</td>
					<td>18</td>
					<td>5.56%</td> 
				</tr>
			
				
				<tr>
				    <td>HNHFNY-00001</td>
					<td>南阳鼎鑫通信</td>
					<td>1</td>
					<td>18</td>
					<td>5.56%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00025</td>
					<td></td>
					<td>2</td>
					<td>36</td>
					<td>5.56%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-28500</td>
					<td></td>
					<td>218</td>
					<td>3935</td>
					<td>5.54%</td> 
				</tr>
			
				
				<tr>
				    <td>HBYWB-00002</td>
					<td></td>
					<td>9</td>
					<td>163</td>
					<td>5.52%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-11901</td>
					<td></td>
					<td>18</td>
					<td>328</td>
					<td>5.49%</td> 
				</tr>
			
				
				<tr>
				    <td>LDTX-00001</td>
					<td></td>
					<td>4</td>
					<td>73</td>
					<td>5.48%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00342</td>
					<td></td>
					<td>2</td>
					<td>37</td>
					<td>5.41%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-39500</td>
					<td></td>
					<td>84</td>
					<td>1579</td>
					<td>5.32%</td> 
				</tr>
			
				
				<tr>
				    <td>XCHL-00001</td>
					<td></td>
					<td>33</td>
					<td>624</td>
					<td>5.29%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-16000</td>
					<td></td>
					<td>65</td>
					<td>1232</td>
					<td>5.28%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00277</td>
					<td></td>
					<td>1</td>
					<td>19</td>
					<td>5.26%</td> 
				</tr>
			
				
				<tr>
				    <td>SWTL-00027</td>
					<td></td>
					<td>1</td>
					<td>19</td>
					<td>5.26%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-04005</td>
					<td></td>
					<td>1</td>
					<td>19</td>
					<td>5.26%</td> 
				</tr>
			
				
				<tr>
				    <td>TJHXT-00003</td>
					<td></td>
					<td>6</td>
					<td>115</td>
					<td>5.22%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00019</td>
					<td></td>
					<td>9</td>
					<td>173</td>
					<td>5.20%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00022</td>
					<td></td>
					<td>3</td>
					<td>60</td>
					<td>5.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03551</td>
					<td></td>
					<td>1</td>
					<td>20</td>
					<td>5.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00307</td>
					<td></td>
					<td>1</td>
					<td>20</td>
					<td>5.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-46000</td>
					<td></td>
					<td>11</td>
					<td>222</td>
					<td>4.95%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-21002</td>
					<td></td>
					<td>14</td>
					<td>283</td>
					<td>4.95%</td> 
				</tr>
			
				
				<tr>
				    <td>CQDS-00023</td>
					<td></td>
					<td>5</td>
					<td>105</td>
					<td>4.76%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-35002</td>
					<td></td>
					<td>2</td>
					<td>42</td>
					<td>4.76%</td> 
				</tr>
			
				
				<tr>
				    <td>SWTL-00006</td>
					<td></td>
					<td>2</td>
					<td>43</td>
					<td>4.65%</td> 
				</tr>
			
				
				<tr>
				    <td>SWTL-00010</td>
					<td></td>
					<td>1</td>
					<td>22</td>
					<td>4.55%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-27010</td>
					<td></td>
					<td>19</td>
					<td>421</td>
					<td>4.51%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-27004</td>
					<td></td>
					<td>11</td>
					<td>247</td>
					<td>4.45%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-30245</td>
					<td></td>
					<td>54</td>
					<td>1222</td>
					<td>4.42%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-14201</td>
					<td></td>
					<td>20</td>
					<td>456</td>
					<td>4.39%</td> 
				</tr>
			
				
				<tr>
				    <td>SWTL-00017</td>
					<td></td>
					<td>1</td>
					<td>23</td>
					<td>4.35%</td> 
				</tr>
			
				
				<tr>
				    <td>SWTL-00007</td>
					<td></td>
					<td>1</td>
					<td>23</td>
					<td>4.35%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03543</td>
					<td></td>
					<td>1</td>
					<td>23</td>
					<td>4.35%</td> 
				</tr>
			
				
				<tr>
				    <td>HBYWB-00003</td>
					<td>濉溪县城北赵路手机销售部</td>
					<td>80</td>
					<td>1844</td>
					<td>4.34%</td> 
				</tr>
			
				
				<tr>
				    <td>TJHXT-00004</td>
					<td></td>
					<td>8</td>
					<td>187</td>
					<td>4.28%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-01009</td>
					<td></td>
					<td>5</td>
					<td>118</td>
					<td>4.24%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-30380</td>
					<td></td>
					<td>19</td>
					<td>448</td>
					<td>4.24%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-30382</td>
					<td></td>
					<td>53</td>
					<td>1249</td>
					<td>4.24%</td> 
				</tr>
			
				
				<tr>
				    <td>HNHFAY-00001</td>
					<td>中域手机销售</td>
					<td>15</td>
					<td>357</td>
					<td>4.20%</td> 
				</tr>
			
				
				<tr>
				    <td>TJHXT-00005</td>
					<td></td>
					<td>2</td>
					<td>48</td>
					<td>4.17%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-21004</td>
					<td></td>
					<td>16</td>
					<td>391</td>
					<td>4.09%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-00001</td>
					<td></td>
					<td>9</td>
					<td>223</td>
					<td>4.04%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-30045</td>
					<td></td>
					<td>29</td>
					<td>717</td>
					<td>4.04%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03501</td>
					<td></td>
					<td>1</td>
					<td>25</td>
					<td>4.00%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-30243</td>
					<td></td>
					<td>158</td>
					<td>4005</td>
					<td>3.95%</td> 
				</tr>
			
				
				<tr>
				    <td>SMG-00003</td>
					<td></td>
					<td>10</td>
					<td>255</td>
					<td>3.92%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-21003</td>
					<td></td>
					<td>15</td>
					<td>394</td>
					<td>3.81%</td> 
				</tr>
			
				
				<tr>
				    <td>SCXWF-00003</td>
					<td></td>
					<td>11</td>
					<td>289</td>
					<td>3.81%</td> 
				</tr>
			
				
				<tr>
				    <td>LTXEH-00001</td>
					<td></td>
					<td>1</td>
					<td>27</td>
					<td>3.70%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-30244</td>
					<td></td>
					<td>98</td>
					<td>2646</td>
					<td>3.70%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-38200</td>
					<td></td>
					<td>1</td>
					<td>27</td>
					<td>3.70%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00223</td>
					<td></td>
					<td>1</td>
					<td>27</td>
					<td>3.70%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-01022</td>
					<td></td>
					<td>1</td>
					<td>28</td>
					<td>3.57%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00004</td>
					<td></td>
					<td>1</td>
					<td>28</td>
					<td>3.57%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-09600</td>
					<td></td>
					<td>3</td>
					<td>84</td>
					<td>3.57%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00008</td>
					<td></td>
					<td>2</td>
					<td>57</td>
					<td>3.51%</td> 
				</tr>
			
				
				<tr>
				    <td>SWTL-00009</td>
					<td></td>
					<td>2</td>
					<td>58</td>
					<td>3.45%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-01011</td>
					<td></td>
					<td>1</td>
					<td>29</td>
					<td>3.45%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-21001</td>
					<td></td>
					<td>17</td>
					<td>499</td>
					<td>3.41%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-27011</td>
					<td></td>
					<td>52</td>
					<td>1559</td>
					<td>3.34%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-25200</td>
					<td>广西贵港门店</td>
					<td>1</td>
					<td>30</td>
					<td>3.33%</td> 
				</tr>
			
				
				<tr>
				    <td>FYYWB-00002</td>
					<td>阜阳市颍东区正午镇王亚梅中国移动通信专营店</td>
					<td>52</td>
					<td>1567</td>
					<td>3.32%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-30420</td>
					<td></td>
					<td>107</td>
					<td>3285</td>
					<td>3.26%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-27003</td>
					<td></td>
					<td>143</td>
					<td>4922</td>
					<td>2.91%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00015</td>
					<td></td>
					<td>1</td>
					<td>35</td>
					<td>2.86%</td> 
				</tr>
			
				
				<tr>
				    <td>BRKJ-10001</td>
					<td></td>
					<td>8</td>
					<td>286</td>
					<td>2.80%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-01002</td>
					<td></td>
					<td>1</td>
					<td>36</td>
					<td>2.78%</td> 
				</tr>
			
				
				<tr>
				    <td>TJHXT-00008</td>
					<td></td>
					<td>1</td>
					<td>37</td>
					<td>2.70%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-27001</td>
					<td></td>
					<td>69</td>
					<td>2624</td>
					<td>2.63%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-27009</td>
					<td></td>
					<td>89</td>
					<td>3464</td>
					<td>2.57%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-27008</td>
					<td></td>
					<td>2</td>
					<td>78</td>
					<td>2.56%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00002</td>
					<td></td>
					<td>5</td>
					<td>196</td>
					<td>2.55%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-27002</td>
					<td></td>
					<td>96</td>
					<td>3841</td>
					<td>2.50%</td> 
				</tr>
			
				
				<tr>
				    <td>SWTL-00061</td>
					<td></td>
					<td>1</td>
					<td>41</td>
					<td>2.44%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-27006</td>
					<td></td>
					<td>29</td>
					<td>1221</td>
					<td>2.38%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00602</td>
					<td></td>
					<td>7</td>
					<td>301</td>
					<td>2.33%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00020</td>
					<td></td>
					<td>5</td>
					<td>215</td>
					<td>2.33%</td> 
				</tr>
			
				
				<tr>
				    <td>YTZYDZ-01001</td>
					<td></td>
					<td>65</td>
					<td>2878</td>
					<td>2.26%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00301</td>
					<td></td>
					<td>1</td>
					<td>45</td>
					<td>2.22%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-30221</td>
					<td></td>
					<td>4</td>
					<td>198</td>
					<td>2.02%</td> 
				</tr>
			
				
				<tr>
				    <td>LIANJIETONG-00003</td>
					<td></td>
					<td>1</td>
					<td>52</td>
					<td>1.92%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-00017</td>
					<td></td>
					<td>2</td>
					<td>107</td>
					<td>1.87%</td> 
				</tr>
			
				
				<tr>
				    <td>TJHXT-00007</td>
					<td></td>
					<td>2</td>
					<td>107</td>
					<td>1.87%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-03547</td>
					<td></td>
					<td>2</td>
					<td>109</td>
					<td>1.83%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-27005</td>
					<td></td>
					<td>54</td>
					<td>3429</td>
					<td>1.57%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-30141</td>
					<td></td>
					<td>2</td>
					<td>127</td>
					<td>1.57%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-27007</td>
					<td></td>
					<td>22</td>
					<td>1485</td>
					<td>1.48%</td> 
				</tr>
			
				
				<tr>
				    <td>CZYT-27012</td>
					<td></td>
					<td>5</td>
					<td>340</td>
					<td>1.47%</td> 
				</tr>
			
				
				<tr>
				    <td>XCHFKJ-00002</td>
					<td>许昌经销商</td>
					<td>1</td>
					<td>286</td>
					<td>0.35%</td> 
				</tr>
			
		
		</tbody>
	</table>

	
	<div class="form-actions">
			<input id="btnCancel" class="btn" value="返 回" onclick="history.go(-1);return false;" type="button">
		</div>

	
</body></html>