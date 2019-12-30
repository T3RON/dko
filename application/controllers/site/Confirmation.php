<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 5/1/2019
 * Time: 11:55 PM
 */

class Confirmation extends CI_Controller {

    private $tbl_name = 'person';

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Account_model');

    }


    function index()
    {

        $data['books'] = $this->Account_model->show_join_three('books','person','hostels','cities','books','2');


        $this->load->view('site/confirmation',$data);

    }

    function login() {
        $person_email = $this->input->post('person_email');
        $person_password = $this->input->post('person_password');
        $result = $this->Account_model->check_login($person_email,$person_password);
        if ($result == true) {

            redirect('site/Account');
        } else {
            redirect('site/Account/signup_form');
        }

    }


    function signup_form() {
        $this->load->view('site/signup');

    }


    function update() {
        $data = array(
            'person_username' => $this->input->post('person_username'),
            'person_email' =>$this->input->post('person_email'),
            'person_password' => $this->input->post('person_password'),
            'person_fn' =>  $this->input->post('person_fn'),
            'person_ln' => $this->input->post('person_ln'),
            'person_birthday' => $this->input->post('person_birthday'),
            'person_gender' => $this->input->post('person_gender'),
            'person_nationality' => $this->input->post('person_nationality')
        );

         $this->Account_model->update('person',$this->session->userdata('person_id'),$data);
         redirect('site/Account');
    }


    function password () {


        if ($this->input->post('currentpass') != $this->input->post('person_password')) {
            var_dump('false');
        }else {
            if ($this->input->post('new_password') == $this->input->post('confirm_new_password')) {
                $res = $this->Account_model->update_password('person',$this->session->userdata('person_id'),$this->input->post('new_password'));
                var_dump($this->input->post('person_password'));
            }else {
                var_dump('false');
            }

        }

    }

    function signout() {
        $session_data = array(
            'person_id'=> '',
            'person_email'=> '',
            'person_fn'=> '',
            'person_ln'=> '',
            'logged_in'=> False
        );
        $this->session->unset_userdata($session_data);
        $this->session->sess_destroy();
        redirect('site/Index');
    }



}
