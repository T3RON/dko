<?php

class Account_model extends MY_Model  {


	function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }


    function check_login ($email,$password) {
        $this->db->where('person_email',$email);
        $this->db->limit(1);
        $login_query = $this->db->get('person');
        if ($login_query->num_rows() > 0) {
            $row = $login_query->row();
         
            if ($row) {
                $session_data = array(
                    'person_id'=> $row->person_id,
                    'person_email'=> $row->person_email,
                    'person_fn'=> $row->person_fn,
                    'person_ln'=> $row->person_ln,
                    'logged_in'=> TRUE
                );

                $this->session->sess_expiration = '14400';
                $this->session->set_userdata($session_data);
                return password_verify($password,$row->person_password);

            }

        }else {
            return false;
        }
    }

    function update_password ($table,$id,$person_password) {
        $this->db->set('person_password', $person_password);
        $this->db->where($table.'_id', $id);
        return $this->db->update($table);
    }




}
