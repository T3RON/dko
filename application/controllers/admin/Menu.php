<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 5/1/2019
 * Time: 11:55 PM
 */

class Menu extends MY_Controller {

    private $tbl_name = 'menu';


    function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_model');


    }


    function index()
    {

        $data[$this->tbl_name] = $this->Menu_model->select($this->tbl_name);

        $this->load->view('admin/'.$this->tbl_name.'/'.$this->tbl_name,$data);

    }

    function InsertForm() {
        $this->load->view('admin/'.$this->tbl_name.'/insert');
    }

    function show() {
        $this->load->view('admin/'.$this->tbl_name.'/show');
    }

    function EditForm() {

        $id = $this->uri->segment('4');
        $data[$this->tbl_name] = $this->Menu_model->select_single($this->tbl_name,$id);
        $this->load->view('admin/'.$this->tbl_name.'/edit',$data);
    }

    function insert() {
        $data = array(
            'menu_title' => $this->input->post('menu_title')
        );
        $result = $this->Menu_model->Insert($this->tbl_name,$data);

        if ($result) {
            $array_msg = array('title'=>$this->tbl_name,'text'=>$this->tbl_name.' Inserted','type'=>'success');
            $this->session->set_flashdata('msg',$array_msg);
            $data[$this->tbl_name] = $this->Menu_model->select($this->tbl_name);
            $this->load->view('admin/'.$this->tbl_name.'/insert',$data);
        }else {
            $array_msg = array('title'=>$this->tbl_name,'text'=>'Have problems','type'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            $data[$this->tbl_name] = $this->Menu_model->select($this->tbl_name);
            $this->load->view('admin/'.$this->tbl_name.'/insert',$data);
        }

    }

    function edit() {
        $id = $this->input->post('menu_id');

        $data = array(
            'menu_title' => $this->input->post('menu_title'),
        );
        $result = $this->Menu_model->update($this->tbl_name,$id,$data);
        if ($result) {
            $array_msg = array('title'=>$this->tbl_name,'text'=>$this->tbl_name.' Updated','type'=>'success');
            $this->session->set_flashdata('msg',$array_msg);
            $data[$this->tbl_name] = $this->Menu_model->select($this->tbl_name);
            $this->load->view('admin/'.$this->tbl_name.'/'.$this->tbl_name,$data);
        }else {
            $array_msg = array('title'=>$this->tbl_name,'text'=>'Have problems','type'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            $data[$this->tbl_name] = $this->Menu_model->select($this->tbl_name);
            $this->load->view('admin/'.$this->tbl_name.'/'.$this->tbl_name,$data);
        }

    }

    function delete() {
        $id = $this->uri->segment('4');
        $result = $this->Menu_model->delete($this->tbl_name,$id);
        if ($result) {
            $array_msg = array('title'=>$this->tbl_name,'text'=>$this->tbl_name.' Deleted','type'=>'success');
            $this->session->set_flashdata('msg',$array_msg);
            $data[$this->tbl_name] = $this->Menu_model->select($this->tbl_name);
            $this->load->view('admin/'.$this->tbl_name.'/'.$this->tbl_name,$data);
        }else {
            $array_msg = array('title'=>$this->tbl_name,'text'=>'Have problems','type'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            $data[$this->tbl_name] = $this->Menu_model->select($this->tbl_name);
            $this->load->view('admin/'.$this->tbl_name.'/'.$this->tbl_name,$data);
        }
    }


}
