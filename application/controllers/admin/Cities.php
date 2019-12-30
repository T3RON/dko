<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 5/1/2019
 * Time: 11:55 PM
 */

class Cities extends MY_Controller {

    private $tbl_name = 'cities';


    function __construct()
    {
        parent::__construct();
        $this->load->model('Cities_model');


    }


    function index()
    {

        $data[$this->tbl_name] = $this->Cities_model->select($this->tbl_name);

        $this->load->view('admin/'.$this->tbl_name.'/'.$this->tbl_name,$data);

    }

    function InsertForm() {

        $this->load->view('admin/'.$this->tbl_name.'/insert');
    }

    function show() {
        $id = $this->uri->segment('4');
        $data[$this->tbl_name] = $this->Cities_model->select_single($this->tbl_name,$id);
        $this->load->view('admin/'.$this->tbl_name.'/show',$data);
    }

    function EditForm() {
        $id = $this->uri->segment('4');
        $data[$this->tbl_name] = $this->Cities_model->select_single($this->tbl_name,$id);
        $this->load->view('admin/'.$this->tbl_name.'/edit',$data);
    }

    function insert() {
        $data = array(
            'cities_title' => $this->input->post('cities_title'),
            'cities_image' => $this->Cities_model->upload('cities_image','jpg|png',5024),
            'cities_information' => $this->input->post('cities_information'),
            'cities_information_image' =>  $this->Cities_model->upload('cities_information_image','jpg|png',5024),
            'cities_lat' => $this->input->post('cities_lat'),
            'cities_sat' => $this->input->post('cities_sat'),
            'cities_tour_title' => $this->input->post('cities_tour_title'),
            'cities_tour_content' => $this->input->post('cities_tour_content')
        );
        $result = $this->Cities_model->Insert($this->tbl_name,$data);

        if ($result) {
            $array_msg = array('title'=>$this->tbl_name,'text'=>$this->tbl_name.' Inserted','type'=>'success');
            $this->session->set_flashdata('msg',$array_msg);
            redirect('admin/Cities');
        }else {
            $array_msg = array('title'=>$this->tbl_name,'text'=>'Have problems','type'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            redirect('admin/Cities');
        }

    }

    function edit() {
        $id = $this->input->post('cities_id');
        
        $data = array(
            'cities_title' => $this->input->post('cities_title'),
            'cities_image' => $this->Cities_model->upload('cities_image','jpg|png',5024),
            'cities_information' => $this->input->post('cities_information'),
            'cities_information_image' =>  $this->Cities_model->upload('cities_information_image','jpg|png',5024),
            'cities_lat' => $this->input->post('cities_lat'),
            'cities_sat' => $this->input->post('cities_sat'),
            'cities_tour_title' => $this->input->post('cities_tour_title'),
            'cities_tour_content' => $this->input->post('cities_tour_content')
        );
        $result = $this->Cities_model->update($this->tbl_name,$id,$data);
        if ($result) {
            $array_msg = array('title'=>$this->tbl_name,'text'=>$this->tbl_name.' Updated','type'=>'success');
            $this->session->set_flashdata('msg',$array_msg);
            redirect('admin/Cities');
        }else {
            $array_msg = array('title'=>$this->tbl_name,'text'=>'Have problems','type'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            redirect('admin/Cities');

        }

    }

    function delete() {
        $id = $this->uri->segment('4');
        $result = $this->Cities_model->delete($this->tbl_name,$id);
        if ($result) {
            $array_msg = array('title'=>$this->tbl_name,'text'=>'City Deleted','type'=>'success');
            $this->session->set_flashdata('msg',$array_msg);
            redirect('admin/Cities');
        }else {
            $array_msg = array('title'=>$this->tbl_name,'text'=>'Have problems','type'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            redirect('admin/Cities');
        }
    }


}
