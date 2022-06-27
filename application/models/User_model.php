<?php
class User_model extends CI_Model
{

    //取得資料 by arr
    public function getOne($arr)
    {
        $this->db->select('*');
        $query = $this->db->get_where('users', $arr);
        return $query->row_array();
    }


    //取得列表 by arr
    public function getData($arr = array())
    {
        $this->db->select('*');
        $query = $this->db->get_where('users', $arr);
        return $query->result_array();
    }
}
