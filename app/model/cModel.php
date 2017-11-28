<?php
/**
 * Created by PhpStorm.
 * User: joe
 * Date: 28/11/2017
 * Time: 4:20 PM
 */
namespace app\model;

use core\lib\model;

class cModel extends model
{
    public $table = 'user';
    public function lists()
    {
        $ret = $this->select($this->table,'*');
        return $ret;
    }

    public function getOne($id)
    {
        $ret = $this->get($this->table,'*',array(
            'id'=>$id
        ));
        return $ret;
    }
}