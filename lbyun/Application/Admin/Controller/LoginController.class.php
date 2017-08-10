<?php

namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
//protected $a;
public function test() {
//    $a = header ('User-Agent');
//    dump($a);
    $client_ip = get_client_ip ();
    $Ip = new \Org\Net\IpLocation('UTFWry.dat'); // 实例化类 参数表示IP地址库文件
    dump($Ip);
    $area = $Ip->getlocation('60.205.27.65'); // 获取某个IP地址所在的位置
    dump ($area);
//    dump ($this->a);die;
//    dump (session('18303226686'));
//    session_destroy();//销毁一切数据
//    echo session_save_path();
//    session(1234756,null);die;
//    $phone = 125456;
//    $a = array(123,456,7893213,3123213213123);
//    session('phonecode' , $a);
//    dump (session('phonecode'));
//    echo '<br>';
//    $xin = 432432;
//    $x = array_push(session('phonecode') , $xin);
//    session('phonecode' ,$x);
//    dump (session('phonecode'));
//    $b = array( session('phonecode')[] = $xin );
//    session('phonecode' , $b);
//    dump (session('phonecode'));
//    session($phone,array(123));
//    dump (session($phone));
//    dump (session("?$phone"));die;
//    if (session("?$phone")){
//        echo 'youle';
//    }else{
//        session($phone,$a);
//        dump(count( session($phone)));
//    }

}
/*
@@1.直接指向后台模板main 
@@2.url设置简便 admin/home
*/
    public function index(){
        if(IS_POST){
            $loginname = I("post.loginname");
            $password  = I("post.password");
            $user=M("zhong_user");
            $s_user=$user->field('userid,userMobile,userProvince,loginname,password,userCity,userAddress')
                         ->where("loginname='$loginname'")
                         ->find();
            if(empty($s_user)){
               $this->error("用户名不存在");
            }
            if($s_user['password']!=$password){
               $this->error("密码错误");
            }
            session("name_id",$s_user['userid']);
            session("user_name",$s_user['loginname']);
            session("phone",$s_user['usermobile']);
            session("province",$s_user['userprovince']);
            session("country",$s_user['usercity']);
            session("s_address",$s_user['userAddress']);
            $this->redirect("Admin/Index/main");
            die;
        }
    	    $this -> display();
    } 

    
     /**
     * 退出登录
     */
    public  function login_out() {
 
         session_destroy();//销毁一切数据
         $this -> redirect('Login/index');
    }



    /*
    *添加注册信息  手机验证
    ***/
    public  function  addUserHandel(){
        if(IS_POST){

            $data = I('post.');
            $users = M('zhong_user');
            // $data = $users ->create();
            $data['create_time']=date("Y-m-d H-i-s",time());
            $data['password'] = md5($data['password']);
            $yzm=session('zhuce');
            if($data['telcode']!=$yzm){
                $this->error("验证码失败");
            }
            if($users->add($data)){
                $this->success("注册成功");
            }else{
                $this->error("注册失败");
            }
            die;
        }
        $this->display("index");
    }

    public function checkTimes()
    {
        if (IS_AJAX)
        {
            $phone = I("usermobile");
            //判断手机是否之前发过验证码
            dump (session($phone));
            if (session('?'.$phone))
            {
                //判断发送次数是否通过
                if ( session($phone) >= 2 )
                {
                    //发送过两次,不能再发送
                    $this -> ajaxReturn(5);
                }else{
                    //不等于二,还可以发送
                    $this -> rend($phone);
                }
            }else{
                //不存在的新电话 , 可以发送
                $this -> rend($phone);
            }
        }
    }
// 阿里大于
    public  function rend($phone)
    {
        vendor("alidayu.TopSdk"); // 这是载入阿里大鱼SDK
//        $phone=I("post.usermobile");
        $yzm=mt_rand(111111,999999);
        $c = new \TopClient();
        $c ->appkey = '23573771';
        $c ->secretKey = 'e5582f17ba7f60e0c430da54551aac01';
        $req = new \AlibabaAliqinFcSmsNumSendRequest();
        $req ->setExtend("");
        $req ->setSmsType( "normal" );
        $req ->setSmsFreeSignName( "联保云" );
        $req ->setSmsParam("{code:'{$yzm}',product:'联保云'}");
        $req ->setRecNum( $phone );
        $req ->setSmsTemplateCode( "SMS_35055151" );
//        $resp = $c ->execute($req);
        $c ->execute($req);
        session("zhuce",$yzm);
        if (session('?'.$phone))
        {
            $timesArray = session( $phone );
            $newArray = array_push($timesArray , $yzm);
            session($phone , $newArray);
            exit;
        }else{
            session($phone,array($yzm));
        }
//        $this->a = $phone;
    }


    /**
     * 异步验证验证码
     * */
    public function checkVerify($code, $id =''){
      $verify = new \Think\Verify();
      return $verify->check($code, $id);
    }   
    
    /**
     * 验证码图片
     * */
    public function verify(){
      $config =    array(
          'fontSize'    =>    25,    // 验证码字体大小
          'length'      =>      4,     // 验证码位数
          'useNoise'    =>    false, // 关闭验证码杂点
          'imageW'    =>    0, // 验证码宽度
          'imageH'    =>    0, // 验证码高度
      );
      $Verify =     new \Think\Verify($config);
      $Verify->useImgBg = false;
      $Verify->codeSet = '0123456789';
      $Verify->entry();
        
    }    

}