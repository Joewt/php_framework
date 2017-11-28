<?php
/**
 * Created by PhpStorm.
 * User: joe
 * Date: 26/11/2017
 * Time: 10:53 AM
 */
namespace app\ctrl;
use core\lib\model;

class indexCtrl extends \core\imooc
{
    public function index()
    {
        /*
        $model = new \core\lib\model;
        $sql = 'SELECT * FROM user';
        $ret = $model->query($sql);
        print_r($ret->fetchAll());
        */

        /*
        $temp = new \core\lib\model();
        $data = 'hello world';
        $this->assign('data',$data);
        $this->display('/index.html');
        */
        $model = new \app\model\cModel();
        $data = 'hello world';
        $this->assign('data',$data);
        $this->display('/index.html');

    }
}