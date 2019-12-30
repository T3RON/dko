<?php


class MY_Controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('ion_auth');
        $this->load->library('user_agent');
        $this->load->helper('form');
        $this->load->model('Menu_model');

        //var_dump($this->ion_auth->logged_in());exit;

        if (!$this->ion_auth->logged_in())
        {
            redirect('auth/login');
        }



    }
}