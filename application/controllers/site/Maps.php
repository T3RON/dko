<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 5/1/2019
 * Time: 11:55 PM
 */

class Maps extends MY_Controller {

    private $tbl_name = 'people';

    function __construct()
    {
        parent::__construct();
        $this->load->model('Signup_model');

    }


    function index()
    {
        $id = $this->uri->segment('4');
        $data[$this->tbl_name] = $this->Hostels_model->select_single_where('hostels','cities',$id);
        $data['cities'] = $this->Hostels_model->select_single('cities',$id);
        $data['attraction'] = $this->Hostels_model->select_single_where('attraction','cities',$id);
        $data['menu'] = $this->Hostels_model->select('menu');
        $this->load->view('site/'.$this->tbl_name.'/'.$this->tbl_name,$data);

    }

    function Show() {
        $id = $this->uri->segment('4');
        $data[$this->tbl_name] = $this->Hostels_model->show_join_one($this->tbl_name,'cities',$id);
        $this->load->view('admin/'.$this->tbl_name.'/show',$data);
    }

    function hostels() {
        $id = $this->uri->segment('4');
        $data[$this->tbl_name] = $this->Hostels_model->select_single($this->tbl_name,$id);
        $data['gallery'] = $this->Hostels_model->select_single_where('gallery',$this->tbl_name,$id);
        $data['menu'] = $this->Hostels_model->select('menu');
        $data['submenu'] = $this->Hostels_model->select_single_where('submenu','menu','6');

        $this->load->view('site/'.$this->tbl_name.'/reservation',$data);
    }


    function insert () {
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

        $result = $this->Hostels_model->Insert('books',$data);
        var_dump($result);
        exit;
//        if ($result) {
//            $array_msg = array('title'=>$this->tbl_name,'text'=>$this->tbl_name.' Updated','type'=>'success');
//            $this->session->set_flashdata('msg',$array_msg);
//            redirect('site/Index');
//        }else {
//            $array_msg = array('title'=>$this->tbl_name,'text'=>'Have problems','type'=>'error');
//            $this->session->set_flashdata('msg',$array_msg);
//            redirect('site/Index');
//        }

    }

}
