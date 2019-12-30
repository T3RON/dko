<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 5/1/2019
 * Time: 11:55 PM
 */

class Gallery extends MY_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('Gallery_model');
    }


    function index()
    {
        $data['gallery'] = $this->Gallery_model->join_one('gallery','hostels','hostels.hostels_id = gallery.hostels_id','gallery_id', 'ASC');

        $this->load->view('admin/gallery/gallery',$data);

    }

    function InsertForm () {
        $data['hostels'] = $this->Gallery_model->select('hostels');
        $this->load->view('admin/gallery/insert',$data);
    }

    function EditForm () {

        $id = $this->uri->segment('4');
        $data['hostels'] = $this->Gallery_model->select_single('hostels','hostels_id',$id);
        $this->load->view('admin/gallery/edit',$data);
    }

    function insert () {
        $data = array(
            'hostels_id' => $this->input->post('hostels_id'),
            'gallery_image' => $this->Gallery_model->upload('gallery_image','jpg|png',5024)
        );
        $this->Gallery_model->Insert('gallery',$data);
        $this->session->set_flashdata('Gallery','تصوير ارسال شد');
        redirect('admin/Gallery/InsertForm');
    }

    function edit() {
        $data = array(
            'hostels_id' => $this->input->post('hostels_id'),
            'gallery_image' => $this->Gallery_model->upload('gallery_image','jpg|png',5024)
        );
        $this->Gallery_model->Insert('gallery',$data);
        $this->session->set_flashdata('Gallery','هاستل اضافه دشخ');
        $this->load->view('admin/gallery/insert');

    }


}
