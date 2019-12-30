<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 5/1/2019
 * Time: 11:55 PM
 */

class Books extends MY_Controller {

    private $tbl_name = 'books';

    function __construct()
    {
        parent::__construct();
        $this->load->model('Books_model');
    }


    function index()
    {
        $data[$this->tbl_name] = $this->Books_model->join_three($this->tbl_name,'person','hostels','cities');
        $this->load->view('admin/'.$this->tbl_name.'/'.$this->tbl_name,$data);

    }

    function show()
    {
        $id = $this->uri->segment('4');
        $data[$this->tbl_name] = $this->Books_model->show_join_three($this->tbl_name,'person','hostels','cities',$this->tbl_name,$id);
        $this->load->view('admin/'.$this->tbl_name.'/show',$data);

    }

    function InsertForm() {
        $data[$this->tbl_name] = $this->Books_model->select($this->tbl_name);
        $this->load->view('admin/'.$this->tbl_name.'/insert',$data);
    }


    function insert () {
        $data = array(
            'person_id' => $this->session->userdata('person_id'),
            'hostels_id' => $this->input->post('hostels_id'),
            'cities_id' =>$this->input->post('cities_id'),
            'book_number_of_guests' => $this->input->post('book_number_of_guests'),
            'book_type_of_room' =>  $this->input->post('book_type_of_room'),
            'book_check_in_date' => $this->input->post('book_check_in_date'),
            'book_check_out_date' => $this->input->post('book_check_out_date'),
            'book_length_of_day' => $this->input->post('book_length_of_day'),
            'book_gender' => $this->input->post('book_gender'),
            'book_first_name' => $this->input->post('book_first_name'),
            'book_last_name' => $this->input->post('book_last_name'),
            'book_email' => $this->input->post('book_email'),
            'book_nationality_of_residence' => $this->input->post('book_nationality_of_residence'),
            'book_cellphone_number' => $this->input->post('book_cellphone_number'),
            'book_approximate' => $this->input->post('book_approximate'),
            'book_comment' => $this->input->post('book_comment'),
            'book_read_the_payment' => $this->input->post('book_read_the_payment')
        );

        $result = $this->Books_model->Insert($this->tbl_name,$data);

        if ($result) {
            $array_msg = array('title'=>$this->tbl_name,'text'=>$this->tbl_name.' Updated','type'=>'success');
            $this->session->set_flashdata('msg',$array_msg);
            redirect('site/Index');
        }else {
            $array_msg = array('title'=>$this->tbl_name,'text'=>'Have problems','type'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            redirect('site/Index');
        }

    }

    function edit() {
        $data = array(
            'hostels_id' => $this->input->post('hostels_id'),
            'cities_id' =>$this->input->post('cities_id'),
            'book_number_of_guests' => $this->input->post('book_number_of_guests'),
            'book_type_of_room' =>  $this->input->post('book_type_of_room'),
            'book_check_in_date' => $this->input->post('book_check_in_date'),
            'book_check_out_date' => $this->input->post('book_check_out_date'),
            'book_length_of_day' => $this->input->post('book_length_of_day'),
            'book_gender' => $this->input->post('book_gender'),
            'book_first_name' => $this->input->post('book_first_name'),
            'book_last_name' => $this->input->post('book_last_name'),
            'book_email' => $this->input->post('book_email'),
            'book_nationality_of_residence' => $this->input->post('book_nationality_of_residence'),
            'book_cellphone_number' => $this->input->post('book_cellphone_number'),
            'book_approximate' => $this->input->post('book_approximate'),
            'book_comment' => $this->input->post('book_comment'),
            'book_read_the_payment' => $this->input->post('book_read_the_payment')
        );
        $result = $this->Books_model->Insert($this->tbl_name,$data);
        if ($result) {
            $array_msg = array('title'=>$this->tbl_name,'text'=>$this->tbl_name.' Updated','type'=>'success');
            $this->session->set_flashdata('msg',$array_msg);
            redirect('site/Index');
        }else {
            $array_msg = array('title'=>$this->tbl_name,'text'=>'Have problems','type'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            redirect('site/Index');
        }

    }

    function delete() {
        $id = $this->uri->segment('4');
        $result = $this->Books_model->delete($this->tbl_name,$id);
        if ($result) {
            $array_msg = array('title'=>$this->tbl_name,'text'=>$this->tbl_name.' Deleted','type'=>'success');
            $this->session->set_flashdata('msg',$array_msg);
            $data[$this->tbl_name] = $this->Books_model->join_three($this->tbl_name,'person','hostels','cities');

            $this->load->view('admin/'.$this->tbl_name.'/'.$this->tbl_name,$data);
        }else {
            $array_msg = array('title'=>$this->tbl_name,'text'=>'Have problems','type'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            $data[$this->tbl_name] = $this->Books_model->join_three($this->tbl_name,'person','hostels','cities');
            $this->load->view('admin/'.$this->tbl_name.'/'.$this->tbl_name,$data);
        }
    }


}
