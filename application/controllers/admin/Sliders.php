<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 5/1/2019
 * Time: 11:55 PM
 */

class Sliders extends MY_Controller {

    private $tbl_name = 'sliders';


    function __construct()
    {
        parent::__construct();
        $this->load->model('Sliders_model');


    }


    function index()
    {

        $data[$this->tbl_name] = $this->Sliders_model->select($this->tbl_name);


        $this->load->view('admin/'.$this->tbl_name.'/'.$this->tbl_name,$data);

    }

    function InsertForm() {
        $data['cities'] = $this->Sliders_model->select('cities');

        $this->load->view('admin/'.$this->tbl_name.'/insert',$data);
    }

    function show() {
        $this->load->view('admin/'.$this->tbl_name.'/show');
    }

    function EditForm() {

        $id = $this->uri->segment('4');
        $data[$this->tbl_name] = $this->Sliders_model->select_single($this->tbl_name,$id);
        $this->load->view('admin/'.$this->tbl_name.'/edit',$data);
    }

    function insert() {
        $data = array(
            'cities_id' => $this->input->post('cities_id'),
            'sliders_title' => $this->input->post('sliders_title'),
            'sliders_text' => $this->input->post('sliders_text'),
            'sliders_image' => $this->Sliders_model->upload('sliders_image','jpg|png',5024)

        );
        $result = $this->Sliders_model->Insert($this->tbl_name,$data);

        if ($result) {
            $array_msg = array('title'=>$this->tbl_name,'text'=>$this->tbl_name.' Inserted','type'=>'success');
            $this->session->set_flashdata('msg',$array_msg);
            redirect('admin/Sliders');
        }else {
            $array_msg = array('title'=>$this->tbl_name,'text'=>'Have problems','type'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            redirect('admin/Sliders');
        }

    }

    function edit() {
        $id = $this->input->post('menu_id');

        $data = array(
            'menu_title' => $this->input->post('menu_title'),
        );
        $result = $this->Sliders_model->update($this->tbl_name,$id,$data);
        if ($result) {
            $array_msg = array('title'=>$this->tbl_name,'text'=>$this->tbl_name.' Updated','type'=>'success');
            $this->session->set_flashdata('msg',$array_msg);
            redirect('admin/Sliders');
        }else {
            $array_msg = array('title'=>$this->tbl_name,'text'=>'Have problems','type'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            redirect('admin/Sliders');
        }

    }

    function delete() {
        $id = $this->uri->segment('4');
        $result = $this->Sliders_model->delete($this->tbl_name,$id);
        if ($result) {
            $array_msg = array('title'=>$this->tbl_name,'text'=>$this->tbl_name.' Deleted','type'=>'success');
            $this->session->set_flashdata('msg',$array_msg);
            redirect('admin/Sliders');
        }else {
            $array_msg = array('title'=>$this->tbl_name,'text'=>'Have problems','type'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            redirect('admin/Sliders');
        }
    }


}
