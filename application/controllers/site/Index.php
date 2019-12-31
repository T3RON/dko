<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Cities_model');

    }

    function index () {
        $data['gallery'] = $this->Cities_model->select('gallery');
        $data['cities'] = $this->Cities_model->select('cities');
        $this->load->view('site/index',$data);
    }

}