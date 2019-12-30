<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 5/1/2019
 * Time: 11:55 PM
 */

class Submenu extends MY_Controller {

    private $tbl_name = 'submenu';


    function __construct()
    {
        parent::__construct();
        $this->load->model('Submenu_model');


    }


    function index()
    {

        $data[$this->tbl_name] = $this->Submenu_model->join_one($this->tbl_name,'menu','ASC');


        $this->load->view('admin/'.$this->tbl_name.'/'.$this->tbl_name,$data);

    }

    function InsertForm() {
        $data['menu'] = $this->Submenu_model->select('menu');
        $this->load->view('admin/'.$this->tbl_name.'/insert',$data);
    }

    function show() {
        $this->load->view('admin/'.$this->tbl_name.'/show');
    }

    function EditForm() {

        $id = $this->uri->segment('4');
        $data['menu'] = $this->Submenu_model->select('menu');
        $data[$this->tbl_name] = $this->Submenu_model->select_single($this->tbl_name,$id);
        $this->load->view('admin/'.$this->tbl_name.'/edit',$data);
    }

    function insert() {
        $data = array(
            'menu_id' => $this->input->post('menu_id'),
            'submenu_title' => $this->input->post('submenu_title')
        );
        $result = $this->Submenu_model->Insert($this->tbl_name,$data);

        if ($result) {
            $array_msg = array('title'=>$this->tbl_name,'text'=>$this->tbl_name.' Inserted','type'=>'success');
            $this->session->set_flashdata('msg',$array_msg);
            $data['menu'] = $this->Submenu_model->select('menu');
            $this->load->view('admin/'.$this->tbl_name.'/insert',$data);
        }else {
            $array_msg = array('title'=>$this->tbl_name,'text'=>'Have problems','type'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            $data['menu'] = $this->Submenu_model->select('menu');
            $this->load->view('admin/'.$this->tbl_name.'/insert',$data);
        }

    }

    function edit() {
        $id = $this->input->post('submenu_id');

        $data = array(
            'menu_id' => $this->input->post('menu_id'),
            'submenu_title' => $this->input->post('submenu_title'),
        );
        $result = $this->Submenu_model->update($this->tbl_name,$id,$data);
        if ($result) {
            $array_msg = array('title'=>$this->tbl_name,'text'=>$this->tbl_name.' Updated','type'=>'success');
            $this->session->set_flashdata('msg',$array_msg);
            $data[$this->tbl_name] = $this->Submenu_model->join_one($this->tbl_name,'menu','ASC');
            $this->load->view('admin/'.$this->tbl_name.'/'.$this->tbl_name,$data);
        }else {
            $array_msg = array('title'=>$this->tbl_name,'text'=>'Have problems','type'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            $data[$this->tbl_name] = $this->Submenu_model->join_one($this->tbl_name,'menu','ASC');
            $this->load->view('admin/'.$this->tbl_name.'/'.$this->tbl_name,$data);
        }

    }

    function delete() {
        $id = $this->uri->segment('4');
        $result = $this->Submenu_model->delete($this->tbl_name,$id);
        if ($result) {
            $array_msg = array('title'=>$this->tbl_name,'text'=>$this->tbl_name.' Deleted','type'=>'success');
            $this->session->set_flashdata('msg',$array_msg);
            $data[$this->tbl_name] = $this->Submenu_model->join_one($this->tbl_name,'menu','ASC');
            $this->load->view('admin/'.$this->tbl_name.'/'.$this->tbl_name,$data);
        }else {
            $array_msg = array('title'=>$this->tbl_name,'text'=>'Have problems','type'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            $data[$this->tbl_name] = $this->Submenu_model->join_one($this->tbl_name,'menu','ASC');
            $this->load->view('admin/'.$this->tbl_name.'/'.$this->tbl_name,$data);
        }
    }


}
