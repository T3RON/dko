<?php

/**
 * Created by PhpStorm.
 * User: acer
 * Date: 5/1/2019
 * Time: 11:55 PM
 */
class Attraction extends MY_Controller {

    private $tbl_name = 'attraction';

    function __construct() {
        parent::__construct();
        $this->load->model('Attraction_model');
    }

    function index()
    {

        $data[$this->tbl_name] = $this->Attraction_model->join_one($this->tbl_name,'cities','ASC');


        $this->load->view('admin/'.$this->tbl_name.'/'.$this->tbl_name,$data);

    }

    function InsertForm() {
        $data['cities'] = $this->Attraction_model->select('cities');

        $this->load->view('admin/'.$this->tbl_name.'/insert',$data);
    }

    function show() {
        $id = $this->uri->segment('4');
        $data[$this->tbl_name] = $this->Attraction_model->show_join_one($this->tbl_name,'cities',$id);
        $this->load->view('admin/'.$this->tbl_name.'/show',$data);
    }

    function EditForm() {

        $id = $this->uri->segment('4');
        $data[$this->tbl_name] = $this->Attraction_model->select_single($this->tbl_name,$id);
        $this->load->view('admin/'.$this->tbl_name.'/edit',$data);
    }

    function insert() {
        $data = array(
            'cities_id' => $this->input->post('cities_id'),
            'attraction_title' => $this->input->post('attraction_title'),
            'attraction_text' => $this->input->post('attraction_text'),
            'attraction_image' =>  $this->Attraction_model->upload('attraction_image','jpg|png',5024),
            'attraction_map_url' => $this->input->post('attraction_map_url'),
            'attraction_general_information' => $this->input->post('attraction_general_information'),
            'attraction_how_to_get_there' => $this->input->post('attraction_how_to_get_there')
        );
        $result = $this->Attraction_model->Insert($this->tbl_name,$data);

        if ($result) {
            $array_msg = array('title'=>$this->tbl_name,'text'=>$this->tbl_name.' Added','type'=>'success');
            $this->session->set_flashdata('msg',$array_msg);
            $data[$this->tbl_name] = $this->Attraction_model->select($this->tbl_name);
            $this->load->view('admin/'.$this->tbl_name.'/insert',$data);
        }else {
            $array_msg = array('title'=>$this->tbl_name,'text'=>'Have problems','ype'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            $data[$this->tbl_name] = $this->Attraction_model->select('cities');
            $this->load->view('admin/'.$this->tbl_name.'/insert',$data);
        }

    }

    function edit() {

        $id = $this->input->post($this->tbl_name.'_id');
        
        $data = array(
            'cities_id' => $this->input->post('cities_id'),
            'attraction_title' => $this->input->post('attraction_title'),
            'attraction_text' => $this->input->post('attraction_text'),
            'attraction_image' =>  $this->Attraction_model->upload('attraction_image','jpg|png',5024),
            'attraction_map_url' => $this->input->post('attraction_map_url'),
            'attraction_general_information' => $this->input->post('attraction_general_information'),
            'attraction_how_to_get_there' => $this->input->post('attraction_how_to_get_there')
        );
        $result = $this->Attraction_model->update($this->tbl_name,$id,$data);
        if ($result) {
            $array_msg = array('title'=>$this->tbl_name,'text'=>$this->tbl_name.' Updated','type'=>'success');
            $this->session->set_flashdata('msg',$array_msg);
            $data[$this->tbl_name] = $this->Attraction_model->join_one($this->tbl_name,'cities','ASC');
            $this->load->view('admin/'.$this->tbl_name.'/'.$this->tbl_name,$data);
        }else {
            $array_msg = array('title'=>$this->tbl_name,'text'=>'Have problems','type'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            $data[$this->tbl_name] = $this->Attraction_model->join_one($this->tbl_name,'cities','ASC');
            $this->load->view('admin/'.$this->tbl_name.'/'.$this->tbl_name,$data);
        }

    }

    function delete() {
        $id = $this->uri->segment('4');
        $result = $this->Attraction_model->delete($this->tbl_name,$id);
        if ($result) {
            $array_msg = array('title'=>$this->tbl_name,'text'=>$this->tbl_name.' Deleted','type'=>'success');
            $this->session->set_flashdata('msg',$array_msg);
            $data[$this->tbl_name] = $this->Attraction_model->join_one($this->tbl_name,'cities','ASC');
            $this->load->view('admin/'.$this->tbl_name.'/'.$this->tbl_name,$data);
        }else {
            $array_msg = array('title'=>$this->tbl_name,'text'=>'Have problems','type'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            $data[$this->tbl_name] = $this->Attraction_model->join_one($this->tbl_name,'cities','ASC');
            $this->load->view('admin/'.$this->tbl_name.'/'.$this->tbl_name,$data);
        }
    }

}
