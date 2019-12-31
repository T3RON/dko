<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('MY_Model');


    }

    function index () {
        $data['cities'] = $this->MY_Model->g_count('cities');
        $data['hostels'] = $this->MY_Model->g_count('hostels');
        $data['books'] = $this->MY_Model->g_count('books');
        $data['person'] = $this->MY_Model->g_count('person');
        $this->load->view('admin/index',$data);
    }

}