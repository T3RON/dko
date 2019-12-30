<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 5/1/2019
 * Time: 11:55 PM
 */

class Reviews extends MY_Controller {

    private $tbl_name = 'reviews';

    function __construct()
    {
        parent::__construct();
        $this->load->model('Reviews_model');
    }


    function index()
    {
        $data[$this->tbl_name] = $this->Reviews_model->join_two($this->tbl_name,'person','hostels');
        $this->load->view('admin/'.$this->tbl_name.'/'.$this->tbl_name,$data);

    }

    function show()
    {
        $id = $this->uri->segment('4');
        $data[$this->tbl_name] = $this->Reviews_model->show_join_two($this->tbl_name,'person','hostels',$this->tbl_name,$this->tbl_name,$id);
        $this->load->view('admin/'.$this->tbl_name.'/show',$data);

    }

    function InsertForm() {
        $data[$this->tbl_name] = $this->Reviews_model->select($this->tbl_name);
        $this->load->view('admin/'.$this->tbl_name.'/insert',$data);
    }



    function delete() {
        $id = $this->uri->segment('4');
        $result = $this->Reviews_model->delete($this->tbl_name,$id);
        if ($result) {
            $array_msg = array('title'=>$this->tbl_name,'text'=>$this->tbl_name.' Deleted','type'=>'success');
            $this->session->set_flashdata('msg',$array_msg);
            $data[$this->tbl_name] = $this->Reviews_model->join_two($this->tbl_name,'person','hostels');
            $this->load->view('admin/'.$this->tbl_name.'/'.$this->tbl_name,$data);
        }else {
            $array_msg = array('title'=>$this->tbl_name,'text'=>'Have problems','type'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            $data[$this->tbl_name] = $this->Reviews_model->join_two($this->tbl_name,'person','hostels');
            $this->load->view('admin/'.$this->tbl_name.'/'.$this->tbl_name,$data);
        }
    }


}
