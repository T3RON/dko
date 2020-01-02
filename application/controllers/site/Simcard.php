<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 5/1/2019
 * Time: 11:55 PM
 */

class Simcard extends CI_Controller {

    private $tbl_name = 'simcard';
    function __construct()
    {
        parent::__construct();
        
        $this->load->model('Simcard_model');


    }


    function index()
    {
       
        $this->load->view('site/simcard');

    }

    function insert()
    {
        $data = array(
            'simcard_nf' => $this->input->post('simcard_nf'),
            'simcard_ln' =>$this->input->post('simcard_ln'),
            'simcard_number' => $this->input->post('simcard_number'),
            'simcard_email' =>  $this->input->post('simcard_email'),
            'simcard_company' => $this->input->post('simcard_company'),
            'simcard_state' => 0
        );

        $result = $this->Simcard_model->insert($this->tbl_name,$data);
        if ($result) {
            $array_msg = array('title'=>$this->tbl_name,'text'=>$this->tbl_name.' Request success','type'=>'success');
            $this->session->set_flashdata('msg',$array_msg);
            $this->load->view('site/simcard');
            
        }else {
            $array_msg = array('title'=>$this->tbl_name,'text'=>'Have problems','type'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            $this->load->view('site/simcard');
        }
    }

}
