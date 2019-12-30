<?php


class MY_Model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    function select($table) {
        $this->db->select('*');
        $this->db->from($table);
        $query = $this->db->get();
        return $query->result();
    }

    function select_limit($table,$limit,$order_by,$order_type) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->limit($limit);
        $this->db->order_by($order_by,$order_type);
        $query = $this->db->get();
        return $query->result();
    }

    function select_limit_where($table,$limit,$field_where,$where,$field_order_by,$type_order_by) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field_where, $where);
        $this->db->limit($limit);
        $this->db->order_by($field_order_by,$type_order_by);
        $query = $this->db->get();
        return $query->result();

    }


    function join_one($table,$table_join,$orderby_type) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table_join, $table.'.'.$table_join.'_id = '.$table_join.'.'.$table_join.'_id');
        $this->db->order_by($table.'_id', $orderby_type);
        $query = $this->db->get();
        return $query->result();
    }

    function show_join_one($table,$table_join,$id) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table_join, $table.'.'.$table_join.'_id = '.$table_join.'.'.$table_join.'_id');
        $this->db->where($table.'_id', $id);
        $query = $this->db->get();
        return $query->result();
    }


    function join_two($table,$table_one,$table_two) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table_one, $table.'.'.$table_one.'_id = '.$table_one.'.'.$table_one.'_id');
        $this->db->join($table_two, $table.'.'.$table_two.'_id = '.$table_two.'.'.$table_two.'_id');
        $query = $this->db->get();
        return $query->result();
    }

    function show_join_two($table,$table_one,$table_two,$table_where,$table_w,$id) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table_one, $table.'.'.$table_one.'_id = '.$table_one.'.'.$table_one.'_id');
        $this->db->join($table_two, $table.'.'.$table_two.'_id = '.$table_two.'.'.$table_two.'_id');
        $this->db->where($table_where.'.'.$table_w.'_id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    function join_three($table,$table_one,$table_two,$table_three) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table_one, $table.'.'.$table_one.'_id = '.$table_one.'.'.$table_one.'_id');
        $this->db->join($table_two, $table.'.'.$table_two.'_id = '.$table_two.'.'.$table_two.'_id');
        $this->db->join($table_three, $table.'.'.$table_three.'_id = '.$table_three.'.'.$table_three.'_id');
        $query = $this->db->get();
        return $query->result();
    }

    function show_join_three($table,$table_one,$table_two,$table_three,$table_where,$id) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table_one, $table.'.'.$table_one.'_id = '.$table_one.'.'.$table_one.'_id');
        $this->db->join($table_two, $table.'.'.$table_two.'_id = '.$table_two.'.'.$table_two.'_id');
        $this->db->join($table_three, $table.'.'.$table_three.'_id = '.$table_three.'.'.$table_three.'_id');
        $this->db->where($table_where.'_id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    function join_four($table,$table_one,$table_two,$table_three,$table_four,$orderby_field,
                        $orderby_type) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table_one, $table.'.'.$table_one.'_id = '.$table_one.'.'.$table_one.'_id');
        $this->db->join($table_two, $table.'.'.$table_two.'_id = '.$table_two.'.'.$table_two.'_id');
        $this->db->join($table_three, $table.'.'.$table_three.'_id = '.$table_three.'.'.$table_three.'_id');
        $this->db->join($table_four, $table.'.'.$table_four.'_id = '.$table_four.'.'.$table_four.'_id');
        $this->db->order_by($orderby_field, $orderby_type);
        $query = $this->db->get();
        return $query->result();
    }

    function show_join_four($table,$table_one,$table_two,$table_three,$table_four,$table_where, $id) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table_one, $table.'.'.$table_one.'_id = '.$table_one.'.'.$table_one.'_id');
        $this->db->join($table_two, $table.'.'.$table_two.'_id = '.$table_two.'.'.$table_two.'_id');
        $this->db->join($table_three, $table.'.'.$table_three.'_id = '.$table_three.'.'.$table_three.'_id');
        $this->db->join($table_four, $table.'.'.$table_four.'_id = '.$table_four.'.'.$table_four.'_id');
        $this->db->where($table_where.'_id', $id);
        $query = $this->db->get();
        return $query->result();
    }




    function select_single($table,$id) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($table.'_id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    function select_single_where($table,$tble_where,$id) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($tble_where.'_id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    function insert ($data,$table) {
        return $this->db->insert($data, $table);
    }

    function update ($table,$id,$data) {
        $this->db->where($table.'_id', $id);
        return $this->db->update($table, $data);
    }

    function upload($fileName,$types,$max) {
        $config['upload_path'] = './assets/uploads/files/';
        $config['allowed_types'] = $types;//'jpg|png'
        $config['max_size'] = $max;//5024
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($fileName)) {
            return $this->upload->display_errors();
        } else {
            $fileData = $this->upload->data();
            return $fileData['file_name'];
        }
    }

    function delete($table,$id) {
        $this->db->where($table.'_id', $id);
        return $this->db->delete($table);
    }

    function get_count($table,$where_field,$where) {
        $this->db->select('count(*)');
        $this->db->where($where_field,$where);
        $query = $this->db->get($table);
        $cnt = $query->row_array();
        return $cnt['count(*)'];
    }

    
  
}