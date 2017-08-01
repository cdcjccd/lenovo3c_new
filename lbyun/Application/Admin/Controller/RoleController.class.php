<?php
/**
 * Created by PhpStorm.
 * PROJECT: Lenovo3C
 * User: cd cddong@163.com
 * Date: 2017/6/12
 * Time: 16:05
 * 商家用户 -- 角色管理
 */
namespace Admin\Controller;
use Think\Controller;

class RoleController extends Controller{

    public function roleList(){

        $this->display();
    }

    public function roleView(){

        $this->display();
    }
}