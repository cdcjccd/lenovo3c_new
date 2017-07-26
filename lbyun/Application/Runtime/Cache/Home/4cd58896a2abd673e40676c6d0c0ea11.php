<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta charset="UTF-8">
		<title>产品报价</title>
		<base href="<%=basePath%>">
		<link rel="stylesheet" href="/yjc/lby/Public/Home/public/css/commen.css">
		<link rel="stylesheet" href="/yjc/lby/Public/Home/public/css/shoufei.css">
		<link rel="stylesheet" href="/yjc/lby/Public/Home/public/font-awesome-4.7.0/css/font-awesome.min.css">
	</head>
	<body>
<!--导航-->
		<div class="nav">
	    	<a href="index.html" target="_blank">
	    		<img class="logo" src="/yjc/lby/Public/Home/public/images/logo.png">
	    		<img class="logo" src="/yjc/lby/Public/Home/public/images/05.gif" style="height:36px; margin-left:20px;">
	    	</a>
	    	<p>Beta</p>
	        <ul class="nav_center">
	        	<li><a href="<?php echo U('Home/Index/index');?>" target="_blank">首页</a></li>
	            <li><a href="<?php echo U('Home/Index/aboutus');?>" >关于联保云</a></li>
	            <li><a href="<?php echo U('Home/Index/caseshow');?>">方案展示</a></li>
	            <li><a href="<?php echo U('Home/Index/cost');?>">产品报价</a></li>
	            <li><a href="<?php echo U('Home/Index/contactus');?>">联系我们</a></li>
	             
	        </ul>
	        <ul class="nav_right">
	        <li><a href=" javascript:void(0);" >管理中心</a></li>            <!-- onclick="cooklogin()" -->
            <li><a href="<?php echo U('Home/Index/login');?>">登录</a></li>
            <li><a href="<?php echo U('Home/Index/login');?>" target="_blank">注册</a></li>
	        </ul>
	        <div class="clearfix"></div>
	    </div>
<!--导航结束-->
		<div class="shoufei_banner">
			<ul>
				<li class="div1">
					<div>
						<p>普通会员</p>
					</div>
					<a href="<%=basePath%>go_login"><span>免费使用</span></a>
				</li>
				<li class="div2">
					<div>
						<p>高级会员<br>3000元/年<br>(特惠)6800元/三年</p>
					</div>
					<a href="contactus.html"><span>立即购买</span></a>
				</li>
				<li class="div3">
					<div>
						<p>VIP会员<br>8000元/年<br>(特惠)18000元/三年</p>
					</div>
					<a href="contactus.html"><span>立即购买</span></a>
				</li>
				<div class="clearfix"></div>
			</ul>
		</div>
<!--明细-->
		<div class="shoufei_mingxi">
			<table border="0" cellspacing="0" cellpadding="0">
				<caption align="top">联保云产品服务费用明细</caption>
				<tr class="th_abbf">
					<th>产品类别</th>
					<th>服务内容</th>
					<th>普通会员</th>
					<th>高级会员</th>
					<th>VIP会员</th>
				</tr>
				<tr class="shoufei_blue">
					<th rowspan="12" style>1.产品服务卡<br>（基础服务）</th>
					<td>1.1 在线制作和生成产品保修卡</td>
					<td align="center"><i class="fa fa-check"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
				</tr>
				<tr class="shoufei_blue_rigth">
					<td>1.2 在线制作和生成产品说明书</td>
					<td align="center"><i class="fa fa-check"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
				</tr>
				<tr class="shoufei_blue_rigth">
					<td>1.3 在线制作和生成配置单</td>
					<td align="center"><i class="fa fa-check"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
				</tr>
				<tr class="shoufei_blue_rigth">
					<td>1.4 在线制作和生成产品介绍页</td>
					<td align="center"><i class="fa fa-check"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
				</tr>
				<tr class="shoufei_blue_rigth">
					<td>1.5 在线制作和生成产品动态新闻</td>
					<td align="center"><i class="fa fa-check"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
				</tr>
				<tr class="shoufei_blue_rigth">
					<td>1.6 在线制作和生成产品常见问题Q&A（知识库）</td>
					<td align="center"><i class="fa fa-check"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
				</tr>
				<tr class="shoufei_blue_rigth">
					<td>1.7 在线制作和生成用户注册功能</td>
					<td align="center"><i class="fa fa-check"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
				</tr>
				<tr class="shoufei_blue_rigth">
					<td>1.8 在线制作和生成产品真伪验证码</td>
					<td align="center"><i class="fa fa-close"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
				</tr>
				<tr class="shoufei_blue_rigth">
					<td>1.9 在线制作和生成保修查询系统</td>
					<td align="center"><i class="fa fa-close"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
				</tr>
				<tr class="shoufei_blue_rigth">
					<td>1.10 在线制作和生成网上报修功能</td>
					<td align="center"><i class="fa fa-close"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
				</tr>
				<tr class="shoufei_blue_rigth">
					<td>1.11 在线制作和生成产品及服务点评功能</td>
					<td align="center"><i class="fa fa-close"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
				</tr>
				<tr class="shoufei_blue_rigth">
					<td>1.12 服务卡底部添加厂商自有版权信息</td>
					<td align="center"><i class="fa fa-close"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<th colspan="5" style="height:30px; border:none; border-top:2px solid #2a7bbf; border-bottom:2px solid #f79646;"></th>
				</tr>
				<tr class="shoufei_chengse">
					<th rowspan="7">2.产品延保服务<br>（增值服务）</th>
					<td>2.1 生成延保（服务）产品</td>
					<td align="center"><i class="fa fa-check"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
				</tr>
				<tr class="shoufei_chengse_right">
					<td>2.2 注册会员赠送延保</td>
					<td align="center"><i class="fa fa-check"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
				</tr>
				<tr class="shoufei_chengse_right">
					<td>2.3 延保直销和分销体系搭建</td>
					<td align="center"><i class="fa fa-close"></i></td>
					<th rowspan="5" align="center">（延保销售额分佣20%）</th>
					<th rowspan="5" align="center">（延保销售额分佣15%）</th>
				</tr>
				<tr class="shoufei_chengse_right">
					<td>2.4 将延保产品发布到JD和淘宝&天猫等电商平台</td>
					<td align="center"><i class="fa fa-close"></i></td>
					
				</tr>
				<tr class="shoufei_chengse_right">
					<td>2.5 销量、注册量统计分析</td>
					<td align="center"><i class="fa fa-close"></i></td>
					
				</tr>
				<tr class="shoufei_chengse_right">
					<td>2.6 延保出险率和赔付率统计</td>
					<td align="center"><i class="fa fa-close"></i></td>
					
				</tr>
				<tr class="shoufei_chengse_right">
					<td>2.7 延保服务交付管理</td>
					<td align="center"><i class="fa fa-close"></i></td>
					
				</tr>
				<tr>
					<th colspan="5" style="height:30px; border:none; border-top:2px solid #f79646;border-bottom:2px solid #9bbb59;"></th>
				</tr>
				<tr class="shoufei_qingse">
					<th rowspan="5">3.云商城服务<br>（增值服务）</th>
					<td>3.1 云商城（微信和WAP商户标准版）：可上架和销售产品</td>
					<td align="center">4000元/年</td>
					<td align="center">2000元/年</td>
					<td align="center">免费</td>
				</tr>
				<tr class="shoufei_qingse_rigth">
					<td>3.2 云商城（微信和WAP商户高级版）：支持分销</td>
					<td align="center">6000元/年</td>
					<td align="center">4000元/年</td>
					<td align="center">免费</td>
				</tr>
				<tr class="shoufei_qingse_rigth">
					<td>3.3 云商城（微信公众号版）：可上架和销售产品，收款到微信号</td>
					<td align="center"><i class="fa fa-close"></i></td>
					<td align="center">6000元/年</td>
					<td align="center">3000元/年</td>
				</tr>
				<tr class="shoufei_qingse_rigth">
					<td>3.4 云商城微（公众号版）+1次商城界面定制设计</td>
					<td align="center"><i class="fa fa-close"></i></td>
					<td align="center">8000元/年</td>
					<td align="center">6000元/年</td>
				</tr>
				<tr class="shoufei_qingse_rigth">
					<td>3.5 云商城微（公众号版）+1次商城界面定制设计+1年代运营</td>
					<td align="center"><i class="fa fa-close"></i></td>
					<td align="center">12000元/年</td>
					<td align="center">8000元/年</td>
				</tr>
				<tr>
					<th colspan="5" style="height:30px; border:none; border-top:2px solid #9bbb59;border-bottom:2px solid #ffcc00;"></th>
				</tr>
				<tr class="shoufei_ffcc">
					<th rowspan="3">4.智能客服<br>（高级服务）</th>
					<td>4.1 为企业开通智能机器人客服（自动回复用户问题）</td>
					<td align="center"><i class="fa fa-close"></i></td>
					<td align="center">2000元/次</td>
					<td align="center">免费（一次）</td>
				</tr>
				<tr class="shoufei_ffcc_right">
					<td>4.2 为企业定制智能机器人知识库系统（提高解答准确率）</td>
					<td align="center"><i class="fa fa-close"></i></td>
					<td align="center">4000元/次</td>
					<td align="center">2000元/次</td>
				</tr>
				<tr class="shoufei_ffcc_right">
					<td>4.3 为企业运营智能机器人（持续学习新问题，分析用户新需求）</td>
					<td align="center"><i class="fa fa-close"></i></td>
					<td align="center">6000元/次</td>
					<td align="center">3000元/次</td>
				</tr>
				<tr>
					<th colspan="5" style="height:30px; border:none; border-top:2px solid #ffcc00;border-bottom:2px solid #ff0033;"></th>
				</tr>
					<tr class="shoufei_ff00">
					<th rowspan="7">5.托管/外包服务<br>（高级服务）</th>
					<td>5.1 售后服务网站建设&托管</td>
					<td align="center"><i class="fa fa-close"></i></td>
					<th rowspan="7" colspan="2" align="center">根据具体项目询价</th>
				
				</tr>
				<tr>
					<td>5.2 产品官网建设&托管</td>
					<td align="center"><i class="fa fa-close"></i></td>
					
				</tr>
				<tr>
					<td>5.3 在线微商城建设&托管</td>
					<td align="center"><i class="fa fa-close"></i></td>
					
				</tr>
				<tr>
					<td>5.4 客服（呼叫中心）托管（400电话中心/微信客服/淘宝客服）</td>
					<td align="center"><i class="fa fa-close"></i></td>
					
				</tr>
				<tr>
					<td>5.5 售后服务网点托管</td>
					<td align="center"><i class="fa fa-close"></i></td>
					
				</tr>
				<tr>
					<td>5.6 售后二级维修托管</td>
					<td align="center"><i class="fa fa-close"></i></td>
					
				</tr>
				<tr>
					<td>5.7 售后备件供应链托管</td>
					<td align="center"><i class="fa fa-close"></i></td>
					
				</tr>
				<tr>
					<th colspan="5" style="height:30px; border:none; border-top:2px solid #ff0033;border-bottom:2px solid #f79646;"></th>
				</tr>
				<tr class="shoufei_chengse">
					<th rowspan="2">6.顾问服务<br>（高级服务）</th>
					<td>6.1 在线售后服务运营顾问服务</td>
					<td align="center">1000元/小时</td>
					<td align="center">800元/小时</td>
					<td align="center">500元/小时（每年送2小时）</td>
				</tr>
				<tr class="shoufei_chengse">
					<td>6.2 增值售后服务运营顾问服务（服务、延保产品开发和运营）</td>
					<td align="center">2000元/小时</td>
					<td align="center">1600元/小时</td>
					<td align="center">1000元/小时（每年送2小时）</td>
				</tr>
				<tr>
					<th colspan="5" style="height:30px; border:none; border-top:2px solid #f79646;border-bottom:2px solid #66cccc;"></th>
				</tr>
				<tr class="shoufei_ff99">
					<th rowspan="9">7.培训服务<br>（高级服务）</th>
					<td>7.1 企业高管必修的售后服务知识与案例精讲</td>
					<td align="center"><i class="fa fa-close"></i></td>
					<td align="center">6000元/课（2.5小时）</td>
					<td align="center">免费一次</td>
				</tr>
				<tr class="shoufei_ff99_rigth">
					<td>7.2 企业售后服务精讲之一（如何提升客户满意度）</td>
					<td align="center"><i class="fa fa-close"></i></td>
					<td align="center">16000元/课（8小时）</td>
					<td align="center">10000元/课（8小时）</td>
				</tr>
				<tr class="shoufei_ff99_rigth">
					<td>7.3 企业售后服务精讲之二（如何处理客户投诉）</td>
					<td align="center"><i class="fa fa-close"></i></td>
					<td align="center">8000元/课（4小时）</td>
					<td align="center">5000元/课（4小时）</td>
				</tr>
				<tr class="shoufei_ff99_rigth">
					<td>7.4 企业售后服务精讲之三（如何提升服务效率降低成本）</td>
					<td align="center"><i class="fa fa-close"></i></td>
					<td align="center">8000元/课（4小时）</td>
					<td align="center">5000元/课（4小时）</td>
				</tr>
				<tr class="shoufei_ff99_rigth">
					<td>7.5 移动互联网时代的售后服务技巧分享</td>
					<td align="center"><i class="fa fa-close"></i></td>
					<td align="center">4000元/课（2小时）</td>
					<td align="center">免费一次</td>
				</tr>
				<tr class="shoufei_ff99_rigth">
					<td>7.6 增值服务产品的开发与销售</td>
					<td align="center"><i class="fa fa-close"></i></td>
					<td align="center">8000元/课（4小时）</td>
					<td align="center">5000元/课（4小时）</td>
				</tr>
				<tr class="shoufei_ff99_rigth">
					<td>7.7 延保产品运营精讲</td>
					<td align="center"><i class="fa fa-close"></i></td>
					<td align="center">8000元/课（4小时）</td>
					<td align="center">5000元/课（4小时）</td>
				</tr>
				<tr class="shoufei_ff99_rigth">
					<td>7.8 企业售后IT系统架构设计和部署</td>
					<td align="center"><i class="fa fa-close"></i></td>
					<td align="center">8000元/课（4小时）</td>
					<td align="center">5000元/课（4小时）</td>
				</tr>
				<tr class="shoufei_ff99_rigth">
					<td>7.9 企业一线售后客服人员岗前培训</td>
					<td align="center"><i class="fa fa-close"></i></td>
					<td align="center">16000元/课（8小时）</td>
					<td align="center">10000元/课（8小时）</td>
				</tr>
				<tr>
					<th colspan="5" style="height:30px; border:none; border-top:2px solid #66cccc;border-bottom:2px solid #ff9999;"></th>
				</tr>
			
				<tr class="shoufei_ff66">
					<th rowspan="6">8.技术支持服务<br>（技术支持）</th>
					<td>在线更新</td>
					<td align="center">基础</td>
					<td align="center">全部</td>
					<td align="center">全部</td>
				</tr>
				<tr class="shoufei_ff66_right">
					<td>咨询人工客服</td>
					<td align="center"><i class="fa fa-check"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
				</tr>
				<tr class="shoufei_ff66_right">
					<td>技术支持</td>
					<td align="center"><i class="fa fa-close"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
				</tr>
				<tr class="shoufei_ff66_right">
					<td>更新指导</td>
					<td align="center"><i class="fa fa-close"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
				</tr>
				<tr class="shoufei_ff66_right">
					<td>优先解决问题和BUG</td>
					<td align="center"><i class="fa fa-close"></i></td>
					<td align="center"><i class="fa fa-close"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
				</tr>
				<tr class="shoufei_ff66_right">
					<td>二次开发咨询</td>
					<td align="center"><i class="fa fa-close"></i></td>
					<td align="center"><i class="fa fa-close"></i></td>
					<td align="center"><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td colspan="5" style="height:30px; border:none; border-top:2px solid #ff9999;"></td>
				</tr>
			</table>
			<table border="0" cellspacing="0" cellpadding="0" class="table_shuomign">
				<caption align="center" style="border:1px solid #d9d9d9;border-top:4px solid #2a7bbf; padding:10px;">说明</caption>
				<tr>
					<td>1.以上报价均可开具正规发票（根据客户实际情况开具普通发票或增专票）</td>
				</tr>
				<tr>
					<td>2.如需签署合同的客户，联保云支持签署纸质合同签署（合同快递费用双方各自承当寄出费用）；联保云也支持扫描件盖章传递（高效，快捷，节省成本也同样具有法律效力）</td>
				</tr>
				<tr>
					<td>3.对于顾问服务和培训服务，如客户需要上门服务且在北京以外地区，则需要承担讲师差旅费用，具体根据实际项目确定金额。</td>
				</tr>
			</table>
		</div>
<!--页脚-->
	<div class="footer">
        <div class="footer_t">
        	<ul>
            	<li><img src="/yjc/lby/Public/Home/public/images/lxy_index_29.png"></li>
                <li><p>十分钟让您拥有云端售后能力</p></li>
            </ul>
            <ul>
            	<li><img src="/yjc/lby/Public/Home/public/images/lxy_index_31.png"></li>
                <li><p>7*24小时售后顾问支持</p></li>
            </ul>
            <ul>
            	<li><img src="/yjc/lby/Public/Home/public/images/lxy_index_33.png"></li>
                <li><p>极大降低服务成本</p></li>
            </ul>
            <ul>
            	<li><img src="/yjc/lby/Public/Home/public/images/lxy_index_35.png"></li>
                <li><p>助你赢取客户忠诚度</p></li>
            </ul>
            <div class="clearfix"></div>   
        </div>
        <div class="footer_c">
        	<ul>
            	<li><img src="/yjc/lby/Public/Home/public/images/lxy_index_41.png"></li>
                <li>
                	<p>服务热线</p>
                    <p>400-882-2088</p>
                </li>
            </ul>
            <ul style=" margin-left:120px;">
            	<li><a href="">为您的产品保驾护航&nbsp;&nbsp;&nbsp;&nbsp;|</a></li>
                <li><a href="">&nbsp;&nbsp;&nbsp;&nbsp;精准的方案推荐&nbsp;&nbsp;&nbsp;&nbsp;|</a></li>
                <li><a href="">&nbsp;&nbsp;&nbsp;&nbsp;灵活的合作方案&nbsp;&nbsp;&nbsp;&nbsp;|</a></li>
                <li><a href="">&nbsp;&nbsp;&nbsp;&nbsp;一对一贴心帮助服务</a></li>
                <div class="clearfix"></div>
            </ul>
            <div class="clearfix"></div>
        </div>
<!--        <div class="link">
        	<p>友情链接：</p>
        </div>-->
        <div class="footer_b">
            <span>Copyright&nbsp;&nbsp;联保云&nbsp;版权所有2016&nbsp;&nbsp;<a target="_blank" href="http://www.miitbeian.gov.cn/">京ICP备16042723号-1</a>&nbsp;&nbsp;
		 		<a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802022735">
		 			<img src="/yjc/lby/Public/Home/public/images/record.png">
		 			京公网安备 11010802022735号
		 		</a>
		 	</span>
        </div>
        </div>
	</body>
</html>