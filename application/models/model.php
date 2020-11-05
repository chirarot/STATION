<?php defined('BASEPATH') or exit('No direct script access allowed');
class model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function addorigin($theorigin)
    {
        $this->db->insert('theorigin', $theorigin);
    }
    function adddestination($destination)
    {
        $this->db->insert('destination', $destination);
    }
    function addhuayrach($huayrach)
    {
        $this->db->insert('huayrach', $huayrach);
    }

    function showstate(){
    $result = $this->db->select('*')
            ->from("theorigin")
            ->join('destination', 'theorigin.s_id = destination.s_id')
            ->join('huayrach', 'theorigin.s_id = huayrach.s_id')
            ->where('theorigin.s_id = destination.s_id')
            ->ORDER_BY('de_time',' ASC')
            ->get();
        return $result;
    }
}