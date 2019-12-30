<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 5/1/2019
 * Time: 11:55 PM
 */

class Review extends CI_Controller {

    private $tbl_name = 'reviews';

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Account_model');
        $this->load->library('encryption');

    }


    function index()
    {
        
        $date['hostels_id'] = $this->encryption->decrypt($this->uri->segment('4'));
        $this->load->view('site/reviews',$date);
    }





    function insert() {
        $data = array (
            'hostels_id' => $this->input->post('hostels_id'),
            'person_id' =>$this->session->userdata('person_id'),
            'reviews_money' => $this->input->post('reviews_money'),
            'reviews_date' =>  date('Y-m-d H:i:s'),
            'reviews_content' => $this->input->post('reviews_content'),
            'reviews_security' => $this->input->post('reviews_security'),
            'reviews_location' => $this->input->post('reviews_location'),
            'reviews_staff' => $this->input->post('reviews_staff'),
            'reviews_atmosphere' => $this->input->post('reviews_atmosphere'),
            'reviews_cleanliness' => $this->input->post('reviews_cleanliness'),
            'reviews_facilities' => $this->input->post('reviews_facilities'),
            'details_gender' => $this->input->post('details_gender'),
            'details_age' => $this->input->post('details_age'),
            'details_trip' => $this->input->post('details_trip'),
            'would_you_type' => $this->input->post('would_you_type'),
            'would_you_why' => $this->input->post('would_you_why'),
        );

         $this->Account_model->insert('reviews',$data);
         redirect('site/Account');
    }


  



}
