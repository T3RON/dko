<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 5/1/2019
 * Time: 11:55 PM
 */

class Hostels extends MY_Controller {

    private $tbl_name = 'hostels';

    function __construct()
    {
        parent::__construct();
        $this->load->model('Hostels_model');
    }


    function index()
    {
        $data[$this->tbl_name] = $this->Hostels_model->join_one($this->tbl_name,'cities','ASC');

        $this->load->view('admin/'.$this->tbl_name.'/'.$this->tbl_name,$data);

    }

    function InsertForm() {
        $data['cities'] = $this->Hostels_model->select('cities');
        $this->load->view('admin/'.$this->tbl_name.'/insert',$data);
    }

    function Show() {
        $id = $this->uri->segment('4');
        $data[$this->tbl_name] = $this->Hostels_model->show_join_one($this->tbl_name,'cities',$id);
        $this->load->view('admin/'.$this->tbl_name.'/show',$data);
    }

    function EditForm() {
        $id = $this->uri->segment('4');
        $data[$this->tbl_name] = $this->Hostels_model->select_single($this->tbl_name,$id);
        $data['cities'] = $this->Hostels_model->select('cities');
        $this->load->view('admin/'.$this->tbl_name.'/edit',$data);
    }

    function insert() {
        $data = array(
            'cities_id' => $this->input->post('cities_id'),
            'hostels_title' => $this->input->post('hostels_title'),
            'hostels_minmum_price' => $this->input->post('hostels_minmum_price'),
            'hostels_policies' =>  $this->input->post('hostels_policies'),
            'hostels_fees' => $this->input->post('hostels_fees'),
            'hostels_rules' => $this->input->post('hostels_rules'),
            'hostels_introduction' => $this->input->post('hostels_introduction'),
            'hostels_information' => $this->input->post('hostels_information'),
            'hostels_address_en' => $this->input->post('hostels_address_en'),
            'hostels_address_fa' => $this->input->post('hostels_address_fa'),
            'hostels_map_url' => $this->input->post('hostels_map_url'),
            'hostels_image' => $this->Hostels_model->upload('hostels_image','jpg|png',5024)
        );


        $result = $this->Hostels_model->Insert($this->tbl_name,$data);
        if ($result) {
            $array_msg = array('title'=>$this->tbl_name,'text'=>$this->tbl_name.' Inserted','type'=>'success');
            $this->session->set_flashdata('msg',$array_msg);
            redirect('admin/Hostels');
        }else {
            $array_msg = array('title'=>'City','text'=>'Have problems','ype'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            redirect('admin/Hostels');
        }

    }

    function edit() {

        $id = $this->input->post('hostels_id');
        $data = array(
            'cities_id' => $this->input->post('cities_id'),
            'hostels_title' => $this->input->post('hostels_title'),
            'hostels_minmum_price' => $this->input->post('hostels_minmum_price'),
            'hostels_policies' =>  $this->input->post('hostels_policies'),
            'hostels_fees' => $this->input->post('hostels_fees'),
            'hostels_rules' => $this->input->post('hostels_rules'),
            'hostels_introduction' => $this->input->post('hostels_introduction'),
            'hostels_information' => $this->input->post('hostels_information'),
            'hostels_address_en' => $this->input->post('hostels_address_en'),
            'hostels_address_fa' => $this->input->post('hostels_address_fa'),
            'hostels_map_url' => $this->input->post('hostels_map_url'),
            'hostels_image' =>  $this->Hostels_model->upload('hostels_image','jpg|png',5024)

        );


        $result = $this->Hostels_model->update($this->tbl_name,$id,$data);

        if ($result) {
            $array_msg = array('title'=>$this->tbl_name,'text'=>$this->tbl_name.' Updated','type'=>'success');
            $this->session->set_flashdata('msg',$array_msg);
            redirect('admin/Hostels');
        }else {
            $array_msg = array('title'=>$this->tbl_name,'text'=>'Have problems','ype'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            redirect('admin/Hostels');
        }
    }

    function delete() {
        $id = $this->uri->segment('4');
        $result = $this->Hostels_model->delete($this->tbl_name,$id);
        if ($result) {
            $array_msg = array('title'=>$this->tbl_name,'text'=>$this->tbl_name.' Deleted','type'=>'success');
            $this->session->set_flashdata('msg',$array_msg);
            redirect('admin/Hostels');
        }else {
            $array_msg = array('title'=>$this->tbl_name,'text'=>'Have problems','type'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            redirect('admin/Hostels');
        }
    }


}
