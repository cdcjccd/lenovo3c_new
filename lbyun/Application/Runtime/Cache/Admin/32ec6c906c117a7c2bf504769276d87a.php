<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
<title>联保云</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" href="/lenovo3c_new/lbyun/Public/Home/login/bootstrap.min.css" />
<link rel="stylesheet" href="/lenovo3c_new/lbyun/Public/Home/login/css/camera.css" />
<link rel="stylesheet" href="/lenovo3c_new/lbyun/Public/Home/login/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="/lenovo3c_new/lbyun/Public/Home/login/matrix-login.css" />
<link rel="stylesheet" href="/lenovo3c_new/lbyun/Public/Home/public/css/commen.css">
<!-- <link rel="stylesheet" href="login/css/commen.css" /> -->
<link href="/lenovo3c_new/lbyun/Public/Home/login/font-awesome.css" rel="stylesheet" />
<script type="text/javascript" src="/lenovo3c_new/lbyun/Public/Home/login/js/jquery-1.5.1.min.js"></script>
<!-- 软键盘控件start -->
<link href="/lenovo3c_new/lbyun/Public/Home/login/keypad/css/framework/form.css" rel="stylesheet" type="text/css"/>
<!-- 软键盘控件end -->
<!-- input提示框 -->
<script src="/lenovo3c_new/lbyun/Public/Home/login/js/jquery-1.11.1.js"></script>
<script src="/lenovo3c_new/lbyun/Public/Home/login/js/jquery-validate.js"></script>
<link rel="stylesheet" href="/lenovo3c_new/lbyun/Public/Home/login/css/input_tishi.css"/>
<!-- input提示框 -->

	<script src="/lenovo3c_new/lbyun/Public/Home/login/js/bootstrap.min.js"></script>
	<script src="/lenovo3c_new/lbyun/Public/Home/js/jquery-1.7.2.js"></script>
	<script src="/lenovo3c_new/lbyun/Public/Home/login/js/jquery.easing.1.3.js"></script>
	<script src="/lenovo3c_new/lbyun/Public/Home/login/js/jquery.mobile.customized.min.js"></script>
	<script src="/lenovo3c_new/lbyun/Public/Home/login/js/camera.min.js"></script>
	<script src="/lenovo3c_new/lbyun/Public/Home/login/js/templatemo_script.js"></script>
	<script src="/lenovo3c_new/lbyun/Public/Home/login/js/ban.js"></script>
	<script type="text/javascript" src="/lenovo3c_new/lbyun/Public/Home/js/jQuery.md5.js"></script>
	<script type="text/javascript" src="/lenovo3c_new/lbyun/Public/Home/js/jquery.tips.js"></script>
	<script type="text/javascript" src="/lenovo3c_new/lbyun/Public/Home/js/jquery.cookie.js"></script>
 <style type="text/css">

  /* body{
     -webkit-transform: rotate(-3deg);
    -moz-transform: rotate(-3deg);
    -o-transform: rotate(-3deg);
	padding-top:20px;
    }*/

      .cavs{
    	z-index:1;
    	position: fixed;
    	width:95%;
    	margin-left: 20px;
    	margin-right: 20px;
    }
  </style>
  <script>
//	  var date = new Date();
//	  alert(date.getTime())
  		//window.setTimeout(showfh,3000);
  		var timer;
		function showfh(){
			fhi = 1;
			//关闭提示晃动屏幕，注释掉这句话即可
			timer = setInterval(xzfh2, 10);
		};
		var current = 0;
		function xzfh(){
			current = (current)%360;
			document.body.style.transform = 'rotate('+current+'deg)';
			current ++;
			if(current>360){current = 0;}
		};
		var fhi = 1;
		var current2 = 1;
		function xzfh2(){
			if(fhi>50){
				document.body.style.transform = 'rotate(0deg)';
				clearInterval(timer);
				return;
			}
			current = (current2)%360;
			document.body.style.transform = 'rotate('+current+'deg)';
			current ++;
			if(current2 == 1){current2 = -1;}else{current2 = 1;}
			fhi++;
		};
	</script>
</head>
<body>
	<!-- 页头 -->
	

	<canvas class="cavs"></canvas>
	<div class="loginbox_one">
		<!-- 登录 -->
		<div id="windows1">
		<div id="loginbox">
			<form action="<?php echo U('login/index');?>" method="post" name="loginForm" id="loginForm" class="form_bg">
			
				<div class="control-group">
				<h4 style="padding-bottom:20px;" id="cookmsg">用户登录</h4>
					<div class="controls">
						<div class="main_input_box">
							<p class="huiyuanming">用户名：</p>
							<span class="add-on bg_lg">
							<i><img height="37" src="/lenovo3c_new/lbyun/Public/Home/login/user.png" /></i>
							</span><input class="input_shuru" type="text" name="loginname" id="loginname" value="" placeholder="请输入用户名" />
						</div>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<div class="main_input_box">
							<p class="huiyuanming">密码：</p>
							<span class="add-on bg_lg">
							<i><img height="37" src="/lenovo3c_new/lbyun/Public/Home/login/suo.png" /></i>
							</span><input class="input_shuru" type="password" name="password" id="password" placeholder="请输入密码" value=""/>
							<p class="wangjimima">忘记密码？</p>
							<p class="tiaoyue"><input type="checkbox" checked><span>我已阅读并同意<a href="xieyi.html">《联保云服务协议》</a></span></p>
						</div>
					</div>
				</div>

				<div style="float:right;padding-right:10%;">
					<div style="float: left;margin-top:3px;margin-right:2px;">
						<font>记住密码</font>
					</div>
					<div style="float: left;">
						<input name="form-field-checkbox" id="saveid" type="checkbox"
							onclick="savePaw();" style="padding-top:0px;" />
					</div>
				</div>
				<div class="form-actions">
					<div style="width:86%;padding-left:8%;">
                       <div id="yzm" style="display: none">
						<div style="float: left;padding-top:2px;">
							<i><img src="/lenovo3c_new/lbyun/Public/Home/login/yan.png" /></i>
						</div>
						<div style="float: left;padding-top:2px;">
							<i><img style="height:30px;" id="codeImg" alt="点击更换" title="点击更换" src="" /></i>
						</div>
					  </div>
						<span class="pull-right" style="padding-right:3%;"><a href="javascript:changepage(1);" class="btn btn-success">注册</a></span>
						 <input id="btnSubmit" class="btn btn-primary" value="提交" onclick="return search();" type="submit">
					</div>
				</div>
			</form>
							
		</div>
		<div id="loginbox" style="margin-right:2%;">
			<form class="form_img">
				<a href="#"><img src="/lenovo3c_new/lbyun/Public/Home/login/images/img_02.png"></a>
			</form>
		</div>
		<div class="cliearfix" style="clear:both;"></div>
		<div class="footer" style="margin-top:100px;">
	        <div class="footer_t">
	        	<ul>
	            	<li><img src="/lenovo3c_new/lbyun/Public/Home/login/images/lxy_index_29.png"></li>
	                <li><p>十分钟让您拥有云端售后能力</p></li>
	            </ul>
	            <ul>
	            	<li><img src="/lenovo3c_new/lbyun/Public/Home/login/images/lxy_index_31.png"></li>
	                <li><p>7*24小时售后顾问支持</p></li>
	            </ul>
	            <ul>
	            	<li><img src="/lenovo3c_new/lbyun/Public/Home/login/images/lxy_index_33.png"></li>
	                <li><p>极大降低服务成本</p></li>
	            </ul>
	            <ul>
	            	<li><img src="/lenovo3c_new/lbyun/Public/Home/login/images/lxy_index_35.png"></li>
	                <li><p>助你赢取客户忠诚度</p></li>
	            </ul>
	            <div class="clearfix"></div>
	        </div>
	        <div class="footer_c">
	        	<ul>
	            	<li><img src="/lenovo3c_new/lbyun/Public/Home/login/images/lxy_index_41.png"></li>
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
	        <div class="footer_b">
	            <span>Copyright&nbsp;&nbsp;联保云&nbsp;版权所有2016&nbsp;&nbsp;<a target="_blank" href=""><!-- http://www.miitbeian.gov.cn/ -->京ICP备16042723号-1</a>&nbsp;&nbsp;
		 		<a target="_blank" href="">
		 			<img src="/lenovo3c_new/lbyun/Public/Home/public/images/record.png">
		 			京公网安备 11010802022735号
		 		</a>
		 	</span>
	        </div>
	   </div>
		</div>
		<!-- 注册 -->
		<div id="windows2" style="display: none;">
		<div id="loginboxo"style="margin-top:20px;">
			<form action="<?php echo U('Login/addUserHandel');?>" method="post" onsubmit="return validate()" id="loginForm" class="form_bg">
				<h4 style="padding-bottom:20px; padding-top:20px;">会员注册</h4>

                <div class="control-group">
					<div class="controls">
						<div class="main_input_box">
							<span class="add-on bg_lg">
							邮箱
							</span><input class="input_shuru required" data-tip="请输入您的邮箱" data-valid="isNonEmpty||isEmail" data-error="邮箱不能为空||邮箱格式不正确" type="text" name="userEmail" id="EMAIL" value="" placeholder="请输入邮箱" />
						</div>
					</div>
				</div>

				<div class="control-group">
				  <div class="controls">
					<div class="main_input_box">
						<span class="add-on bg_lg">
						 用户名
						</span>
						<input class="input_shuru required" data-tip="限16个字符，支持中英文、数字、减号或下划线，请勿包含姓名/身份证/银行卡等隐私信息，一旦设置成功无法修改" data-valid="isNonEmpty" data-error="用户名不能为空" type="text" name="loginname" id="USERNAME" value="" placeholder="请输入用户名" />
						</div>
					</div>
				</div>

				<div class="control-group">
					<div class="controls">
						<div class="main_input_box">
							<span class="add-on bg_lg">
							密码
							</span><input class="input_shuru required" data-tip="请您输入密码" data-valid="isNonEmpty" data-error="密码不能为空" type="password" name="password" id="PASSWORD" placeholder="请输入密码" allowKeyboard="true" />
						</div>
					</div>
				</div>

				<div class="control-group">
					<div class="controls">
						<div class="main_input_box">
							<span class="add-on bg_lg">
							确定密码
							</span><input class="input_shuru required" data-tip="与上边密码相同" data-valid="isNonEmpty" data-error="密码不能为空" type="password" name="chkpwd" id="chkpwd" placeholder="请重新输入密码" class="keypad" keypadMode="full" allowKeyboard="true" value=""/>
						</div>
					</div>
				</div>
                
                <div class="control-group">
					<div class="controls">
						<div class="main_input_box">
							<span class="add-on bg_lg">
							真实姓名
							</span><input class="input_shuru required" data-tip="请输入您的真实的姓名" data-valid="isNonEmpty||onlyZh" data-error="姓名不能为空||请您输入真实姓名" type="text" name="userRealName" id="name" placeholder="请输入姓名" />
						</div>
					</div>
				</div>

				<div class="control-group">
					<div class="controls">
			          <div class="main_input_box">
					  <span class="add-on bg_lg">
					    省份
					  </span>
				        <select name="userProvince" id="province" onchange="getCity()" aria-invalid="false" class="valid"></select>
                   </div>
			    </div>
	          </div>

	          <div class="control-group">
				 <div class="controls">
			        <div class="main_input_box">
					  <span class="add-on bg_lg">
					    城市
					  </span>
				        <select name="userCity" id="city"></select>
                   </div>
			    </div>
	          </div>
              
              <div class="control-group">
					<div class="controls">
						<div class="main_input_box">
							<span class="add-on bg_lg">
							详细地址
							</span><input class="input_shuru required" data-tip="请输入详细地址" data-valid="isNonEmpty||onlyZh" data-error="地址不能为空||请您输入详细地址" type="text" name="userAddress" id="address"  placeholder="请输入详细地址" />
						</div>
					</div>
				</div>
				
			  <div class="control-group">
					<div class="controls">
						<div class="main_input_box">
							<span class="add-on bg_lg">
							  联系电话
							</span>
							<input class="input_shuru required" data-tip="请输入您的电话号" data-valid="isNonEmpty||isMobile" data-error="电话不能为空||电话号码格式不对" type="text" name="userMobile" id="MOBILE"  placeholder="请输入手机号" />
						</div>
					</div>
				</div>

              <div class="control-group">
					<div class="controls">
						<div class="main_input_box">
							<span class="add-on bg_lg">
							手机验证
							</span>
							<input class="input_shuru required"  data-valid="isNonEmpty||onlyZh" data-error="验证码不能为空||请您输入验证码" type="text" name="telcode" id="telcode" value="" placeholder="手机验证码" />
							<!-- <span id="btn-auth"  style="text-align: center;line-height: 40px;">获取验证码</span> -->
							 <span style="text-align: center;line-height: 40px;" id="btn-auth" onclick="rend(this)">获取验证码</span>
						</div>
					</div>
				</div>




				 <div class="form-actions">
					<div style="width:60%;padding-left:20%;">
						<div style="float: left;padding-top:2px;">
							<i><img src="/lenovo3c_new/lbyun/Public/Home/login/yan.png"/></i>
						</div>
						<div style="float: left;" class="codediv">
							<input type="text" name="rcode" id="rcode" class="login_code" style="height:16px; padding-top:4px;"  data-valid="isNonEmpty" data-error="验证码不能为空" />
						</div>
						<div style="float: left; padding-top:2px;">
							<i><img src="<?php echo U('Login/verify');?>" style="height:30px;" id="zcodeImg" alt="点击更换" title="点击更换" onclick="this.src='<?php echo U('Login/verify');?>'+'?'+Math.random();" /><i>
							<!-- <i><img style="height:30px;" id="zcodeImg" alt="点击更换" title="点击更换" src="" /></i> -->
						</div>

						<span class="pull-right" style="padding-right:3%;"><a href="javascript:changepage(2);" class="btn btn-success">取消</a></span>
						<input id="btnSubmit" class="btn btn-primary" value="注册" onclick="rcheck();" type="submit">
						<!--<input type="hidden" id="telTimes">-->
					</div>
				  </div>
			</form>
	</div>
		
		<div class="footer" style="margin-top:100px;">
	        <div class="footer_t">
	        	<ul>
	            	<li><img src="/lenovo3c_new/lbyun/Public/Home/login/images/lxy_index_29.png"></li>
	                <li><p>十分钟让您拥有云端售后能力</p></li>
	            </ul>
	            <ul>
	            	<li><img src="/lenovo3c_new/lbyun/Public/Home/login/images/lxy_index_31.png"></li>
	                <li><p>7*24小时售后顾问支持</p></li>
	            </ul>
	            <ul>
	            	<li><img src="/lenovo3c_new/lbyun/Public/Home/login/images/lxy_index_33.png"></li>
	                <li><p>极大降低服务成本</p></li>
	            </ul>
	            <ul>
	            	<li><img src="/lenovo3c_new/lbyun/Public/Home/login/images/lxy_index_35.png"></li>
	                <li><p>助你赢取客户忠诚度</p></li>
	            </ul>
	            <div class="clearfix"></div>
	        </div>
	        <div class="footer_c">
	        	<ul>
	            	<li><img src="/lenovo3c_new/lbyun/Public/Home/login/images/lxy_index_41.png"></li>
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
	        <div class="footer_b">
	            <span>Copyright&nbsp;&nbsp;联保云&nbsp;版权所有2016&nbsp;&nbsp;<a target="_blank" href=""><!-- http://www.miitbeian.gov.cn/ -->京ICP备16042723号-1</a>&nbsp;&nbsp;
		 		<a target="_blank" href="">
		 			<img src="/lenovo3c_new/lbyun/Public/Home/public/images/record.png">
		 			京公网安备 11010802022735号
		 		</a>
		 	</span>
	        </div>
	   </div>
	</div>
	<!-- <div id="templatemo_banner_slide" class="container_wapper" style="">

	</div> -->
<!-- input提示框 -->
	<script type="text/javascript">



//        var countdown=60;
        function rend(obj){
            var phone=$("#MOBILE").val();
            var reg=/^1[3|5|7|8]\d{9}$/;
            var interval;
            var time = 10;
            var num = "<span id='second'>"+time+"</span>"+"<span>秒后再次获取</span>";
            if(!reg.test(phone)){
                alert("不能为空/格式不对");
                return false;
            }

			$.ajax({
				url:"<?php echo U('Admin/Login/checkTimes');?>?usermobile="+phone,
				success: function (info) {
					if(info == 5)
					{
					    alert('手机发送次数已用完,Please Try again tomorrow')
						return false;
					}else{
                        $.ajax({
                            type:"POST",
                            url:"<?php echo U('Login/checkTimes');?>",
                            data:"usermobile="+phone,
                            success:function(){
                                alert("发送成功");
                                clearInterval(interval);
                                $('#btn-auth').removeAttr('onclick');
                                $('#btn-auth').html(num)
                                interval = setInterval(second , 1000);
                            }
                        });
					}
                }
			})
        }
        function second() {
            if ($('#second').text() <= 1) {
                $('#btn-auth').text('获取验证码');
                $('#second').remove();
                $('#btn-auth').attr('onclick',"rend()");
            } else {
                $('#btn-auth').removeAttr('onclick');
                $('#second').text($('#second').text()-1)
            }
        }

		  </script>
<!-- input提示框 -->
	<script type="text/javascript">
	
		$(document).ready(function() {
			changeCode1();
			$("#codeImg").bind("click", changeCode1);
			$("#zcodeImg").bind("click", changeCode2);
		});

	

		function changeCode1() {
			$("#codeImg").attr("src", "<?php echo U('Home/Login/verify');?>");
		}

		function changeCode2() {
			$("#zcodeImg").attr("src", "<?php echo U('Home/Login/verify');?>"+'?rand='+Math.random()*100);
		}


		//登录注册页面切换
		function changepage(value) {
			if(value == 1){
				$("#windows1").hide();
				$("#windows2").show();
				changeCode2();
			}else{
				$("#windows2").hide();
				$("#windows1").show();
				changeCode1();
			}
		}

	//注册
	function validate(){

	if($("#EMAIL").val()==""){
			$("#EMAIL").tips({
				side:3,
	            msg:'输入邮箱',
	            bg:'#AE81FF',
	            time:3
	        });
			$("#EMAIL").focus();
			return false;
	}else if(!ismail($("#EMAIL").val())){
			$("#EMAIL").tips({
				side:3,
	            msg:'邮箱格式不正确',
	            bg:'#AE81FF',
	            time:3
	        });
			$("#EMAIL").focus();
			return false;
		}
      
	if($("#USERNAME").val()==""){
			$("#USERNAME").tips({
				side:3,
	            msg:'用户名不能为空',
	            bg:'#AE81FF',
	            time:3
	        });
			$("#USERNAME").focus();
			$("#USERNAME").val('');
			return false;
		}else{
			$("#USERNAME").val(jQuery.trim($('#USERNAME').val()));
		}
	if($("#PASSWORD").val()=="" || $("#PASSWORD").val().length<6){
			$("#PASSWORD").tips({
				side:3,
	            msg:'输入至少6位密码',
	            bg:'#AE81FF',
	            time:2
	        });
			$("#PASSWORD").focus();
			return false;
		}
	if($("#PASSWORD").val()!=$("#chkpwd").val()){
			$("#chkpwd").tips({
				side:3,
	            msg:'两次密码不相同',
	            bg:'#AE81FF',
	            time:3
	        });
			$("#chkpwd").focus();
			return false;
		}

	if($("#name").val()==""){
			$("#name").tips({
				side:3,
	            msg:'请输入本人身份证姓名',
	            bg:'#AE81FF',
	            time:2
	        });
			$("#name").focus();
		return false;
		}else if(!iszw($("#name").val())){
			$("#name").tips({
				side:3,
	            msg:'请输入您的真实姓名',
	            bg:'#AE81FF',
	            time:3
	        });
			$("#name").focus();
			return false;
		}

	if($("#province").val()==""){
			$("#province").tips({
				side:3,
	            msg:'请填入省份',
	            bg:'#AE81FF',
	            time:2
	        });
			$("#province").focus();
		    return false;
		}else if(!iszw($("#province").val())){
			$("#province").tips({
				side:3,
				msg:'请填写省份',
				bg:'#AE81FF',
				time:3
			});
			$("#province").focus();
			return false;
		}

	if($("#address").val()==""){
			$("#address").tips({
				side:3,
	            msg:'请输入详细地址',
	            bg:'#AE81FF',
	            time:2
	        });
			$("#profession").focus();
		return false;
		}

	if($("#MOBILE").val()==""){
			$("#MOBILE").tips({
				side:3,
	            msg:'请输入本人手机号码',
	            bg:'#AE81FF',
	            time:2
	        });
			$("#MOBILE").focus();
		return false;
		}



    if($("#rcode").val() == ""){
			$("#rcode").tips({
				side : 1,
				msg : '验证码不得为空',
				bg : '#AE81FF',
				time : 3
			});
			$("#rcode").focus();
			return false;
		}

	if ($("#telcode").val() == "") {
			$("#telcode").tips({
				side : 1,
				msg : '手机验证码不得为空',
				bg : '#AE81FF',
				time : 3
			});
			$("#telcode").focus();
			return false;
		}

		return true;

	}



	//邮箱格式校验
	function ismail(mail){
		return(new RegExp(/^(?:[a-zA-Z0-9]+[_\-\+\.]?)*[a-zA-Z0-9]+@(?:([a-zA-Z0-9]+[_\-]?)*[a-zA-Z0-9]+\.)+([a-zA-Z]{2,})+$/).test(mail));
	}
	//正则的验证
	function isphone(value){
		return(new RegExp(/^\+?[1-9][0-9]*$/).test(value));
	}
	function iszw(value){
		return(new RegExp(/^[A-z]+$|^[\u4E00-\u9FA5]+$/).test(value));
	}
	function issfz(value){
		return(new RegExp(/^[1-9]\d{7}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}$|^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}([0-9]|X)$/).test(value));
	}
	//js  日期格式
	function date2str(x,y) {
	     var z ={y:x.getFullYear(),M:x.getMonth()+1,d:x.getDate(),h:x.getHours(),m:x.getMinutes(),s:x.getSeconds()};
	     return y.replace(/(y+|M+|d+|h+|m+|s+)/g,function(v) {return ((v.length>1?"0":"")+eval('z.'+v.slice(-1))).slice(-(v.length>2?v.length:2))});
	 	};
	// </script>
	 <script>
	 	//TOCMAT重启之后 点击左侧列表跳转登录首页
	        	if (window != top) { 		
     		top.location.href = location.href;
	 	}

	
	</script>
    <script type="text/javascript">


        /*城市省份*/

        $(document).ready(function(){
            $(".ppxh").hide();
            $(".leimu").hide();
            var old=$("#province").html();
            //alert(old);
            var province=["--请选择--","北京市", "天津市", "河北省", "河南省", "山西省", "山东省", "内蒙古自治区", "辽宁省", "吉林省", "黑龙江省", "上海市", "江苏省", "浙江省", "福建省", "江西省", "安徽省", "湖北省", "湖南省", "广东省", "广西壮族自治区", "海南省", "重庆市", "四川省", "贵州省", "云南省", "西藏自治区", "陕西省", "甘肃省", "青海省", "宁夏回族自治区", "新疆维吾尔自治区", "台湾省", "香港特别行政区", "澳门特别行政区"];
            var pro=""
            for(var i=0;i<province.length;i++){
                pro+="<option>" + province[i] + "</option>"
            }
            $("#province").html(old + pro);

        })

		/*选择地市*/
        var arr = new  Array();
        arr[0 ]="--请选择--"
        arr[1 ]="市辖区,市辖县"
        arr[2 ]="市辖区,市辖县"
        arr[3 ]="石家庄市, 唐山市, 秦皇岛市, 邯郸市, 邢台市, 保定市, 张家口市, 承德市, 沧州市, 廊坊市, 衡水市, 省直辖县级行政单位"
        arr[4 ]="郑州市, 开封市, 洛阳市, 平顶山市, 安阳市, 鹤壁市, 新乡市, 焦作市, 濮阳市, 许昌市, 漯河市, 三门峡市, 商丘市, 周口市, 驻马店市, 南阳市, 信阳市, 省直辖县级行政单位"
        arr[5 ]="太原市, 大同市, 阳泉市, 长治市, 晋城市, 朔州市, 晋中市, 运城市, 忻州市, 临汾市, 吕梁市"
        arr[6 ]="济南市, 青岛市, 淄博市, 枣庄市, 东营市, 烟台市, 潍坊市, 济宁市, 泰安市, 威海市, 日照市, 滨州市, 德州市, 聊城市, 临沂市, 菏泽市, 莱芜市"
        arr[7 ]="呼和浩特市, 包头市, 乌海市, 赤峰市, 通辽市, 鄂尔多斯市, 呼伦贝尔市, 巴彦淖尔市, 乌兰察布市, 兴安盟, 锡林郭勒盟, 阿拉善盟"
        arr[8 ]="沈阳市, 大连市, 鞍山市, 抚顺市, 本溪市, 丹东市, 锦州市, 营口市, 阜新市, 辽阳市, 盘锦市, 铁岭市, 朝阳市, 葫芦岛市, 省直辖县级行政单位"
        arr[9 ]="长春市, 吉林市, 四平市, 辽源市, 通化市, 白山市, 白城市, 松原市, 延边朝鲜族自治州, 长白山保护开发区, 省直辖县级行政单位"
        arr[10 ]="哈尔滨市, 齐齐哈尔市,鸡西市,鹤岗市,双鸭山市,大庆市,伊春市,佳木斯市, 七台河市, 牡丹江市, 黑河市, 绥化市, 大兴安岭地区, 省直辖县级行政单位"
        arr[11 ]="市辖区, 市辖县"
        arr[12 ]="南京市,无锡市,徐州市, 常州市, 苏州市,南通市,连云港市, 淮安市, 盐城市, 扬州市, 镇江市, 泰州市, 宿迁市, 省直辖县级行政单位"
        arr[13 ]="杭州市, 宁波市, 温州市, 绍兴市, 湖州市, 嘉兴市, 金华市, 衢州市, 台州市, 丽水市, 舟山市, 省直辖县级行政单位"
        arr[14 ]="福州市,厦门市,莆田市,泉州市,漳州市,龙岩市,三明市,南平市,宁德市"
        arr[15 ]="南昌市,赣州市,宜春市,吉安市,上饶市,抚州市, 九江市, 景德镇市, 萍乡市, 新余市, 鹰潭市, 省直辖县级行政单位"
        arr[16 ]="合肥市, 芜湖市, 蚌埠市, 淮南市, 马鞍山市, 淮北市, 铜陵市, 安庆市, 黄山市, 阜阳市, 宿州市, 滁州市, 六安市, 宣城市, 池州市, 亳州市, 省直辖县级行政单位"
        arr[17 ]="武汉市,宜昌市,荆州市,襄樊市,黄石市,荆门市,黄冈市,十堰市,恩施市,潜江市,天门市,仙桃市,随州市,咸宁市,孝感市,鄂州市"
        arr[18 ]="长沙市,常德市,株洲市,湘潭市,衡阳市,岳阳市,邵阳市,益阳市,娄底市,怀化市,郴州市,永州市,湘西市,张家界市"
        arr[19 ]="广州市,深圳市,珠海市,汕头市,东莞市,中山市,佛山市,韶关市,江门市,湛江市,茂名市,肇庆市,惠州市,梅州市,汕尾市,河源市,阳江市,清远市,潮州市,揭阳市,云浮市"
        arr[20 ]="南宁市,柳州市,桂林市,梧州市,北海市,防城港市,钦州市,贵港市,玉林市,南宁地区,柳州地区,贺州市,百色市,河池市"
        arr[21 ]="海口市,三亚市,三沙市,儋州市,省直辖县级行政单位"
        arr[22 ]="市辖区,市辖县"
        arr[23 ]="成都市,绵阳市,德阳市,自贡市,攀枝花市,广元市,内江市,乐山市,南充市,宜宾市,广安市,达川市,雅安市,眉山市,甘孜市,凉山市,泸州市"
        arr[24 ]="贵阳市,六盘水市,遵义市,安顺市,铜仁市,黔西南市,毕节市,黔东南市,黔南市"
        arr[25 ]="昆明市,大理市,曲靖市,玉溪市,昭通市,楚雄市,红河市,文山市,思茅市,西双版纳市,保山市,德宏市,丽江市,怒江市,迪庆市,临沧市"
        arr[26 ]="拉萨市,日喀则市,山南市,林芝市,昌都市,阿里市,那曲市"
        arr[27 ]="西安,宝鸡,咸阳,铜川,渭南,延安,榆林,汉中,安康,商洛"
        arr[28 ]="兰州,嘉峪关,金昌,白银,天水,酒泉,张掖,武威,定西,陇南,平凉,庆阳,临夏,甘南"
        arr[29 ]="西宁,海东,海南,海北,黄南,玉树,果洛,海西"
        arr[30 ]="银川,石嘴山,吴忠,固原"

        arr[31 ]="乌鲁木齐,石河子,克拉玛依,伊犁,巴音郭勒,昌吉,克孜勒苏柯尔克孜,博 尔塔拉,吐鲁番,哈密,喀什,和田,阿克苏"
        arr[32 ]="台北,高雄,台中,台南,屏东,南投,云林,新竹,彰化,苗栗,嘉义,花莲,桃园,宜兰,基隆,台东,金门,马祖,澎湖"
        arr[33 ]="香港"
        arr[34 ]="澳门"


        function init()//打开页面的同时调用INIT()函数
        {
            var city = document.getElementById("city");
            var cityArr = arr[0].split(",");//split() 方法用于把一个字符串分割成字符串数组。
            for(var i=0;i<cityArr.length;i++)
            {
                city[i]=new Option(cityArr[i],cityArr[i]);
            }
        }

        function getCity()
        {

            var pro = document.getElementById("province");
            var city = document.getElementById("city");
            var index = pro.selectedIndex;
            //alert(index)//获得索引值
            var cityArr = arr[index].split(",");

            city.length = 0;
            //将城市数组中的值填充到城市下拉框中  
            for(var i=0;i<cityArr.length;i++)
            {
                city[i]=new Option(cityArr[i],cityArr[i]);
            }
        }
	</script>

</body>
</html>