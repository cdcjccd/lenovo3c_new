<?php
/**
 * Created by PhpStorm.
 * PROJECT=> Lenovo3C
 * Author=> cd
 * Date=> 2017/6/20
 * Time=> 14=>49
 * Controller=>  销售分析控制器
 */

namespace Admin\Controller;
use Think\Controller;

class SaleAnalyzeController extends Controller
{
    /**
     * 通路分析扇形图
     */
    public function route()
    {
        if (IS_AJAX) {
            if (I ('get.day') == '7') {
                if (cookie ('pie7_route'))
                {
//                    dump (array_values (json_decode (cookie ('pie7_route'),true)));die;
                    $this->ajaxReturn (array_values (unserialize (cookie ('pie7_route'))));
                }else{
                    $where['audit_time'] = array('GT' , date ( 'Y-m-d H:i:s' , time() - (7*86400) ) );
                    $where['audit_decision'] = 1;
//                    $table['tableName'] = 'sys_route';
//                    $table['id'] = 't_id';
                    $pie7 = $this -> pie ($where );
//                    dump ($pie7);die;
                    cookie ('pie7_route' , serialize ( $pie7 ) );
                    $this->ajaxReturn (array_values ($pie7));
                }
            }elseif (I ('get.day') == '30'){
                $where['audit_time'] = array('GT' , date ( 'Y-m-d H:i:s' , time() - (30*86400) ) );
                $where['audit_decision'] = 1;;
                $pie30 = $this -> pie ($where );
                $this->ajaxReturn (array_values ($pie30) );
            }elseif (IS_POST){
                $where['audit_time'] = array('between' , array( I('post.startDate') , I('post.endDate') ) );
                $where['audit_decision'] = 1;
                $search = $this -> pie ($where);
//                $this->ajaxReturn (M('checking_audit')->getLastSql() );
                $this->ajaxReturn (array_values ($search) );
            }
        }else{
            $this->display ();
        }
    }

    /**
     *  Pie图查询数据
     * @param $where
     * @return array    返回数据
     */
    protected function pie ($where  )
    {

        $num = M('sys_route') -> max('t_id');
//                dump ($num);
        $pie = [];
        for ($i = 1 ; $i <= $num ; $i++) {
            $pie[$i] = array (
                'name' => M('sys_route') -> field('name') -> where('t_id'.' ='." $i") -> find()['name'] ,
                'value' => M('checking_audit') -> field('audit_tong') -> where("audit_tong = $i") -> where($where) -> count()
            );
        }
        return $pie;
    }

    /**
     *  通路分析柱形图
     */
    public function columnar()
    {
        if (IS_AJAX) {
            if ( I('get.day') == 7 ) {
                if (I('get.route') != '') {
                    $routeWhere = I('get.route');
                    $data = $this -> columnData (7,$routeWhere);
                    $this->ajaxReturn ($data);
//                    dump ($data);
                }else{
                    $data = $this -> columnData (7);
                    $this->ajaxReturn ($data);
                }

            }elseif (I('get.day') == 30) {
                if (I('get.route') != '') {
                    $routeWhere = I('get.route');
                    $data = $this -> columnData (30,$routeWhere);
                    $this->ajaxReturn ($data);
//                    dump ($data);
                }else{
                    $data = $this -> columnData (30);
                    $this->ajaxReturn ($data);
                }
            }

        }
    }

    /**
     *  通路分析柱状图右边列表
     */
    public function columnarRouteList() {
        $this -> ajaxReturn( M('sys_route') -> field ('t_id , name') -> select() );
    }

    /**
     *  根据条件查询出相应天数
     * @param $dayNum
     * @return array
     */
    public function tianShu($dayNum)
    {
        $day = array();
        for ($i=0 ; $i < $dayNum ;$i++) {
            if ($i == 0) {
                $day[$i] = date ("Y-m-d ", time ());
                continue;
            }
            $day[$i] = date ("Y-m-d ", strtotime ("-$i day"));
        }
        return $day;
    }
    /**
     * 通路分析底部柱状图
     * @param $dayNum
     * @param string $routeWhere
     * @return array
     */
    public function columnData($dayNum , $routeWhere = '')
    {
        $day = $this -> tianShu ($dayNum);
        // 数据
        if ($routeWhere != '') {
            $routeName = M('sys_route') -> field ('name') -> where ("t_id = $routeWhere") -> find ()['name'];
            $dataList = [];
            $num = [];
            for ($p = 0 ; $p < count ($day) ; $p++) {
                $map['audit_time'] = array('between' , array($day[$p].' 00:00:00' , date ('Y-m-d H:i:s' , strtotime("$day[$p] +1 day")-1)));
                $map['audit_tong'] = $routeWhere;
                $map['audit_decision'] = 1;
                $num[$p] = M('checking_audit')
//                    -> field ('audit_time')
                    -> where ($map)
                    -> count ();
            }
            $dataList[] = array(
                'name' => $routeName ,
                'type' => 'bar' ,
                'data' => array_reverse ($num)
            );
            return array('time' =>  array_reverse ($day) , 'data' => $dataList);
        }else{
            $routeNum = M('sys_route') -> max('t_id');
            $data = [];
            $value = [];
            for ($s = 1 ; $s <= $routeNum ; $s++) {
                for ($n = 0 ; $n < count($day) ; $n++) {
                    $where['audit_time'] = array('between' , array($day[$n].' 00:00:00' , date ('Y-m-d H:i:s' , strtotime("$day[$n] +1 day")-1)));
                    $where['audit_tong'] = $s;
                    $where['audit_decision'] = 1;
                    $value[$n] = M('checking_audit')
                        -> field('audit_tong')
                        -> where($where)
                        -> count();
//                        var_dump (M('checking_audit') -> getLastSql ());
//                        echo '<br>';
                }
                $data[$s] = array (
                    'name' => M('sys_route')
                        -> field('name')
                        -> where("t_id = $s")
                        -> find()['name'] ,
                    'type' => 'bar' ,
                    'data' => array_reverse ( $value )
                );
            }
//            dump(array_values ($data));
            return array('time' => array_reverse ($day) , 'data' => array_values ($data));
//            dump (array('time' => array_reverse ($day) , 'data' => array_values ($data)));
        }

    }

    /**
     *  产品销售分析
     */
    public function product()
    {
        if (IS_AJAX) {
            if (I ('get.day') == '7') {
                $where['audit_time'] = array('GT', date ('Y-m-d H:i:s', time () - (7 * 86400)));
                $where['audit_decision'] = 1;
//                $table['tableName'] = 'hou_product';
//                $table['id'] = 'id';
                $pie7 = $this->productPie ($where);
                $this->ajaxReturn (array_values ($pie7));
            }elseif (I ('get.day') == '30'){
                $where['audit_time'] = array('GT' , date ( 'Y-m-d H:i:s' , time() - (30*86400) ) );
                $where['audit_decision'] = 1;
                $pie30 = $this -> productPie ($where);
                $this->ajaxReturn (array_values ($pie30) );
            }elseif (IS_POST){
                $where['audit_time'] = array('between' , array( I('post.startDate') , I('post.endDate') ) );
                $where['audit_decision'] = 1;
                $search = $this -> productPie ($where);
                $this->ajaxReturn (array_values ($search) );
            }
        }else {
            $this -> display();
        }
    }

    
    public function productPie($where)
    {
        $num = M('hou_product') -> max('product_id');
//                dump ($num);
        $pie = [];
        for ($i = 1 ; $i <= $num ; $i++) {
            $name = M('hou_product') -> field('product_type') -> where("product_id = $i") -> find()['product_type'];
            if (isset($name)) {
                $pie[$i] = array (
                    'name' => $name ,
                    'value' => M('checking_audit') -> field('audit_product') -> where("audit_product = $i") -> where($where) -> count()
                );
            }else{
                continue;
            }

        }
        return $pie;
    }

    public function productLine()
    {
        if (IS_AJAX)
        {
            if (I('get.day') == 7)
            {
                $this -> ajaxReturn ($this -> productLineData (7) );
            }elseif (I('get.day') == 30)
            {
                $this -> ajaxReturn ($this -> productLineData (30) );
            }
        }
    }

    /**
     * 折线图数据处理
     * @param $dayNum
     * @return array
     */
    public function productLineData($dayNum)
    {
        $productNum = M('hou_product') -> max('product_id');
        $day = $this -> tianShu($dayNum);
        for ($i = 1 ; $i <= $productNum ; $i++)
        {
            $name = M('hou_product') -> field('product_type') -> where("product_id = $i") -> find()['product_type'];
//            dump (isset($name));
            if ( isset($name) )
            {
                for ($n = 0 ; $n < count($day) ; $n++)
                {
                    $where['audit_time'] = array('between' , array( $day[$n].' 00:00:00' , date ('Y-m-d H:i:s' , strtotime($day[$n].'+1 day') -1 )) );
                    $where['audit_tong'] = $i;
                    $where['audit_decision'] = 1;
                    $value[$n] = M('checking_audit')
                        -> field('audit_time')
                        -> where($where)
                        -> count();
//                    dump (M('checking_audit')->getLastSql());
                }
                $data[$i] = array (
                    'name' => $name,
                    'type' => 'line',
                    'data' => array_reverse ( $value ),
//                    'markPoint' => [
//                        'data' => [
//                            ['type' => 'max', 'name' => '最大值'],
//                            ['type' => 'min', 'name' => '最小值']
//                        ]
//                    ],
//                    'markLine' => [
//                        'data' => [
//                            ['type' => 'average', 'name' => '平均值']
//                        ]
//                    ]
                );
            }else{
                continue;
            }
        }
//        dump(array('day' => $day , 'info' => $data))  ;
        return array('day' => array_reverse ($day) , 'info' => array_values($data)) ;
    }

    /**
     * @return int 模拟数据方法
     */
    public function rand()
    {
        return mt_rand (100,999);
    }

    /**
     *  区域分析
     */
    public function area()
    {
        if (IS_AJAX) {
//            if (I('get.day') == 7){
                $data =  [
                    ['name'=> '北京', 'value'=> $this->rand()],
                    ['name'=> '天津', 'value'=> $this->rand()],
                    ['name'=> '上海', 'value'=> $this->rand()],
                    ['name'=> '重庆', 'value'=> $this->rand()],
                    ['name'=> '河北', 'value'=> $this->rand()],
                    ['name'=> '河南', 'value'=> $this->rand()],
                    ['name'=> '云南', 'value'=> $this->rand()],
                    ['name'=> '辽宁', 'value'=> $this->rand()],
                    ['name'=> '黑龙江', 'value'=> $this->rand()],
                    ['name'=> '湖南', 'value'=> $this->rand()],
                    ['name'=> '安徽', 'value'=> $this->rand()],
                    ['name'=> '山东', 'value'=> $this->rand()],
                    ['name'=> '新疆', 'value'=> $this->rand()],
                    ['name'=> '江苏', 'value'=> $this->rand()],
                    ['name'=> '浙江', 'value'=> $this->rand()],
                    ['name'=> '江西', 'value'=> $this->rand()],
                    ['name'=> '湖北', 'value'=> $this->rand()],
                    ['name'=> '广西', 'value'=> $this->rand()],
                    ['name'=> '甘肃', 'value'=> $this->rand()],
                    ['name'=> '山西', 'value'=> $this->rand()],
                    ['name'=> '内蒙古', 'value'=> $this->rand()],
                    ['name'=> '陕西', 'value'=> $this->rand()],
                    ['name'=> '吉林', 'value'=> $this->rand()],
                    ['name'=> '福建', 'value'=> $this->rand()],
                    ['name'=> '贵州', 'value'=> $this->rand()],
                    ['name'=> '广东', 'value'=> $this->rand()],
                    ['name'=> '青海', 'value'=> $this->rand()],
                    ['name'=> '西藏', 'value'=> $this->rand()],
                    ['name'=> '四川', 'value'=> $this->rand()],
                    ['name'=> '宁夏', 'value'=> $this->rand()],
                    ['name'=> '海南', 'value'=> $this->rand()],
                    ['name'=> '台湾', 'value'=> $this->rand()],
                    ['name'=> '香港', 'value'=> $this->rand()],
                    ['name'=> '澳门', 'value'=> $this->rand()]
                ];
//            }
            $this->ajaxReturn($data);
        }else {
            $this -> display();
        }
    }

    /**
     *  销售商家占比分析
     */
    public function business() {
        if (IS_AJAX)
        {
            if (I('get.day') == 7)
            {
                $where['audit_time'] = array('GT', date ('Y-m-d H:i:s', time () - (7 * 86400)));
                $where['audit_decision'] = 1;
//                dump ($this -> businessPie ($where));
                $this -> ajaxReturn ( $this -> businessPie ($where) );
            }elseif (I('get.day') == 30)
            {
                $where['audit_time'] = array('GT', date ('Y-m-d H:i:s', time () - (30 * 86400)));
                $where['audit_decision'] = 1;
                $this -> ajaxReturn ( $this -> businessPie ($where) );
            }elseif (IS_POST){
                $where['audit_time'] = array('between' , array( I('post.startDate') , I('post.endDate') ) );
                $where['audit_decision'] = 1;
                $search = $this -> businessPie ($where);
                $this->ajaxReturn (array_values ($search) );
            }
        }else {
            $this -> display ();
        }
    }

//    public function tong() {
//        return mt_rand (1,10);
//    }
//    public function audit_time() {
//        $day = $this -> tianShu(20);
//        return $day[ array_rand ($day, 1)].'00:00:00' ;
////        return array_rand ($this -> tianShu(20) , 1).'00:00:00';
//    }
//    public function shop_name() {
//        return mt_rand(2,5);
//    }
//    public function pro() {
//        return mt_rand(1,10);
//    }
//    public function dataTest() {
//
//        for ($i = 0 ; $i < 1000 ;$i++)
//        {
//            $this -> sql();
//        }
//    }
//    public function sql() {
////        $day = $this -> tianShu (15);
//        echo $data['audit_time'] = $this -> audit_time();
////        dump ($data['audit_time']);die;
////        $shops_name = [2,3,4,5];
//        $data['audit_shops_name'] = $this -> shop_name();
//        $data['audit_decision'] = 1;
//        $data['audit_tong'] = $this -> tong();
//        $data['audit_product'] = $this -> pro();
//        M('checking_audit') ->add ($data);
//    }
    /**
     *  商家扇形图数据
     * @param $where
     * @return mixed
     */
    protected function businessPie($where)
    {
        $businessNum = M('sys_business') -> max('id');
        $data = [];
        for ($i = 1 ; $i <= $businessNum ; $i++ )
        {
            $businessName = M('sys_business') -> where("id = $i") -> getField ('busName');
            if (isset($businessName))
            {
                $data[$i] = array(
                    'name' => $businessName,
                    'value' => M('checking_audit') -> where("audit_shops_name = $i") -> where($where) -> count()
                );
//                dump (M('checking_audit') -> getLastSql ());
                if ($data[$i]['value'] == '0')
                {
                    unset($data[$i]);
                }
            }else{
                continue;
            }
        }
        return array_values ( $data );
    }

    public function businessLine()
    {
        if (I('get.day') == 7)
        {
            $this -> ajaxReturn($this -> businessLineData(7));
        }
        if (I('get.day') == 30)
        {
            $this -> ajaxReturn($this -> businessLineData(30));
        }
    }

    public function businessLineData($dayNum)
    {
        $productNum = M('sys_business') -> max('id');
        $day = $this -> tianShu($dayNum);
        $data = [];
        for ($i = 1 ; $i <= $productNum ; $i++)
        {
            $name = M('sys_business') -> where("id = $i") -> find()['busname'];
            if ( isset($name) )
            {
                $value = [];
                for ($n = 0 ; $n < count($day) ; $n++)
                {
                    $where['audit_time'] = array('between' , array( $day[$n].' 00:00:00' , date ('Y-m-d H:i:s' , strtotime($day[$n].'+1 day') -1 )) );
                    $where['audit_shops_name'] = $i;
                    $where['audit_decision'] = 1;
                    $value[$n] = M('checking_audit')
                        -> field('audit_time')
                        -> where($where)
                        -> count();
//                    dump (M('checking_audit')->getLastSql());
                }
                $num = 0;
                for ($p = 0 ; $p < count ($value) ; $p++)
                {
                    $num += $value[$p];
                }
                if ($num != 0)
                {
                    $data[$i] = array (
                        'name' => $name,
                        'type' => 'line',
                        'data' => array_reverse ($value),
                    'markPoint' => [
                        'data' => [
                            ['type' => 'max', 'name' => '最大值'],
                            ['type' => 'min', 'name' => '最小值']
                        ]
                    ],
                    'markLine' => [
                        'data' => [
                            ['type' => 'average', 'name' => '平均值']
                        ]
                    ]
                    );
                }else{
                    continue;
                }
            }else{
                continue;
            }
        }
        return array('day' => array_reverse ($day) , 'info' => array_values($data)) ;
    }
    /**
     *  销售占比分析
     */
    public function saleExport(){
        if (I('get.export') == 'export'){
            $data = M ('sys_route')->field ('name , code , remarks , sort')->select ();
            $this -> excelOut($data);
        }
        $this -> display ();
    }

    /**
     *  Excel 导出数据
     * @param $data 数据
     */
    protected function excelOut($data) {

        //引入类库
        vendor ('PHPExcel.PHPExcel');
        $obj = new \PHPExcel();
        //设置属性
        $obj->getProperties ()->setCreator ("ctos")
            ->setLastModifiedBy ("ctos")
            ->setTitle ("Office 2007 XLSX  Test Document")
            ->setSubject ("Office 2007 XLSX  Test Document")
            ->setDescription ("Test document for Office 2007 XLSX , generated using PHP classes.")
            ->setKeywords ("office 2007 openxml php")
            ->setCategory ("Test result file");
        //set setWidth
        $obj->getActiveSheet ()->getColumnDimension ('A')->setWidth (20);
        $obj->getActiveSheet ()->getColumnDimension ('B')->setWidth (20);
        $obj->getActiveSheet ()->getColumnDimension ('C')->setWidth (20);
        $obj->getActiveSheet ()->getColumnDimension ('D')->setWidth (20);
        //表头
//        $arr = array(
//            'A1' => '销售导出',
//            'A2' => '通路名称',
//            'B2' => '通路编码',
//            'C2' => '通路描述',
//            'D2' => '通路排序',
//        );
        $obj->setActiveSheetIndex(0)
            ->setCellValue('A1', '销售导出')
            ->setCellValue('A2', '通路名称')
            ->setCellValue('B2', '通路编码')
            ->setCellValue('C2', '通路描述')
            ->setCellValue('D2', '通路排序');
//        $obj->setActiveSheetIndex(0)
//            ->setCellValue('A1', '销售导出')
//            ->setCellValue('A2', '通路名称')
//            ->setCellValue('B2', '通路编码')
//            ->setCellValue('C2', '通路描述')
//            ->setCellValue('D2', '通路排序');
        //循环添加数据
        foreach ($data as $k => $v) {
            $obj->getActiveSheet(0)->setCellValue('A'.($k+3), $v['name']);
            $obj->getActiveSheet(0)->setCellValue('B'.($k+3), $v['code']);
            $obj->getActiveSheet(0)->setCellValue('C'.($k+3), $v['remarks']);
            $obj->getActiveSheet(0)->setCellValue('D'.($k+3), $v['sort']);

//            $obj->getActiveSheet()->getStyle('A'.($k+3).':D'.($k+3))->getAlignment()->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER);
//            $obj->getActiveSheet()->getStyle('A'.($k+3).':D'.($k+3))->getBorders()->getAllBorders()->setBorderStyle(\PHPExcel_Style_Border::BORDER_THIN);
            $obj->getActiveSheet()->getRowDimension($k+3)->setRowHeight(16);
        }
        //表信息
        $obj->getActiveSheet()->setTitle('销售导出');
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="销售导出('.date('Ymd-His').').xls"');  //日期为文件名后缀
        header('Cache-Control: max-age=0');
        ob_clean();//关键
        flush();//关键
        $objWriter = \PHPExcel_IOFactory::createWriter($obj, 'Excel5');  //excel5为xls格式，excel2007为xlsx格式        s

        $objWriter->save('php://output');

    }

    public function excelIn() {

    }

}
