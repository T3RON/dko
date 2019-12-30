<?php

class Hostels_model extends MY_Model  {


	function __construct()
    {
        parent::__construct();
    }


    function insert_books ($data,$table) {
        $this->db->insert($data, $table);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }
    
    function get_sum($table,$table_field,$where_field,$where) {
        $this->db->select('COUNT('.$table_field.') as v_count, SUM('.$table_field.') as v_sum');
        $this->db->where($where_field,$where);
        $row = $this->db->get($table)->row();
        @$sum = (100 * $row->v_count) /  $row->v_sum ;
        return round($sum) ;
        
    }

    function get_all_rate() {
        $this->db->select('COUNT(reviews_id) as v_count, SUM(reviews_money)+SUM(reviews_security)+SUM(reviews_location)+SUM(reviews_staff)+SUM(reviews_atmosphere)+SUM(reviews_cleanliness)+SUM(reviews_facilities) as v_sum');
        $row = $this->db->get('reviews')->row();
        $sum = (10 * $row->v_count) /  $row->v_sum ;
        return round($sum,1) ;
        
    }


    function select_offset($table,$limit,$field_where,$where,$field_order_by,$type_order_by) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join('person', 'person.person_id = reviews.person_id');
        $this->db->where($field_where, $where);
        $this->db->limit($limit);
        $this->db->order_by($field_order_by,$type_order_by);
        $query = $this->db->get();
        return $query->result();

    }



}
