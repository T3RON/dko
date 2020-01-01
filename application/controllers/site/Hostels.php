<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 5/1/2019
 * Time: 11:55 PM
 */

class Hostels extends CI_Controller {



    private $tbl_name = 'hostels';

    function __construct()
    {
        parent::__construct();
        $this->load->model('Hostels_model');
        $this->load->library('session');
        $this->load->library('encryption');


    }


    function index()
    {
        $id = $this->uri->segment('4');
        $data[$this->tbl_name] = $this->Hostels_model->select_single_where('hostels','cities',$id);
        $data['cities'] = $this->Hostels_model->select_single('cities',$id);
        $data['attraction'] = $this->Hostels_model->select_single_where('attraction','cities',$id);
        $data['menu'] = $this->Hostels_model->select('menu');
        $this->load->view('site/'.$this->tbl_name,$data);


    }

    function Show() {
        $id = $this->uri->segment('4');
        $data[$this->tbl_name] = $this->Hostels_model->show_join_one($this->tbl_name,'cities',$id);
        $this->load->view('admin/show',$data);
    }

    function hostels() {
        $id = $this->uri->segment('4');
        $data[$this->tbl_name] = $this->Hostels_model->select_single($this->tbl_name,$id);
        $data['gallery'] = $this->Hostels_model->select_single_where('gallery',$this->tbl_name,$id);
        $data['money'] = $this->Hostels_model->get_sum('reviews','reviews_money','hostels_id',$id);
        $data['security'] = $this->Hostels_model->get_sum('reviews','reviews_security','hostels_id',$id);
        $data['location'] = $this->Hostels_model->get_sum('reviews','reviews_location','hostels_id',$id);
        $data['staff'] = $this->Hostels_model->get_sum('reviews','reviews_staff','hostels_id',$id);
        $data['atmosphere'] = $this->Hostels_model->get_sum('reviews','reviews_atmosphere','hostels_id',$id);
        $data['cleanliness'] = $this->Hostels_model->get_sum('reviews','reviews_cleanliness','hostels_id',$id);
        $data['facilities'] = $this->Hostels_model->get_sum('reviews','reviews_facilities','hostels_id',$id);
        $data['count_review'] = $this->Hostels_model->get_count('reviews','hostels_id',$id);
        $data['get_all_rate'] = $this->Hostels_model->get_all_rate();
        $data['rev'] = $this->Hostels_model->select_limit_where('reviews','4','hostels_id',$id,'reviews_id','DESC');
        $data['morerview'] = $this->Hostels_model->select_offset('reviews','100','hostels_id',$id,'reviews_id','DESC');

        $this->load->view('site/reservation',$data);
    }


    function insert () {
        if ($this->session->userdata('logged_in')) { 

      
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
            'books_date' => date('Y-m-d H:i:s'),
            'book_read_the_payment' => $this->input->post('book_read_the_payment')
        );

        $id = $this->Hostels_model->insert_books('books',$data);

        $data['books'] = $this->Hostels_model->show_join_three('books','person','hostels','cities','books',$id);

        $namePDF = 'assets/uploads/pdf/Diako-' . $this->input->post('person_id').'-'.$this->input->post('hostels_id').'-'.$this->input->post('cities_id').'.pdf';
        $en_hostels = $this->encryption->encrypt($this->input->post('hostels_id').'/');
        $message = 'Hi '.$this->input->post('book_first_name').' '.$this->input->post('book_last_name') . '<br> <a href="'.base_url('site/Review/index').'/'.  $en_hostels .'">Rreviews url for this hostels in diako group</a>';
        $this->load->view('site/confirmation',$data);
        $html = $this->output->get_output();
        $this->load->library('Pdf');
        $this->dompdf->loadHtml($html);
        $this->dompdf->setPaper('A4', 'landscape');
        $this->dompdf->set_option('isRemoteEnabled', true);
        $this->dompdf->render();
        $pdf = $this->dompdf->output();
        file_put_contents($namePDF, $pdf);

    

        $this->load->library('email');
        $ssl = ($this->smtp_crypto === 'ssl') ? 'ssl://' : '';
        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = $ssl.'smtp.googlemail.com';
        $config['smtp_user'] = 'seif4847';
        $config['smtp_pass'] = 'Ms3950171533'; 
        $config['smtp_port'] = 465;
        $config['mailtype'] = 'html';
        $this->email->initialize($config);
        $this->email->set_newline("\r\n");  
        
        $this->email->from("seif4847@gmail.com"); // change it to yours
        $this->email->to($this->input->post('book_email'));// change it to yours
        $this->email->subject("Diako Hostels");
        $this->email->message($message);
        $this->email->attach($namePDF);

       if($this->email->send())
       {
        $this->session->set_flashdata('in',$message . '<br> You email : ' . $this->input->post('book_email'));
        redirect("site/Hostels/email");
       }
     
       
        }else {
            redirect('site/Account');
        }
    }

     function email()
    {
        $data['email'] = $this->session->flashdata('in');
        $this->load->view('site/email',$data);
    }

}
