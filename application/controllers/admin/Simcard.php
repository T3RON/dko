<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 5/1/2019
 * Time: 11:55 PM
 */

class Simcard extends MY_Controller {

    private $tbl_name = 'simcard';

    function __construct()
    {
        parent::__construct();
        $this->load->model('Simcard_model');
    }


    function index()
    {
        $data['tbl_name'] = $this->Simcard_model->select($this->tbl_name);

        $this->load->view('admin/'.$this->tbl_name.'/'.$this->tbl_name,$data);

    }



    function Show() {
        $id = $this->uri->segment('4');
        $data['tbl_name'] = $this->Simcard_model->select_single($this->tbl_name,$id);
        $this->load->view('admin/'.$this->tbl_name.'/show',$data);
    }



    function delete() {
        $id = $this->uri->segment('4');
        $result = $this->Simcard_model->delete($this->tbl_name,$id);
        if ($result) {
            $array_msg = array('title'=>$this->tbl_name,'text'=>$this->tbl_name.' Deleted','type'=>'success');
            $this->session->set_flashdata('msg',$array_msg);
            redirect('admin/Simcard');
        }else {
            $array_msg = array('title'=>$this->tbl_name,'text'=>'Have problems','type'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            redirect('admin/Simcard');
        }
    }

    function lock () {
        $id = $this->uri->segment('4');
        $state = $this->uri->segment('5');
        if($state == 0 ) {
            $data = array(
                'simcard_state' => 1
            );
        }else {
            $data = array(
                'simcard_state' => 0
            );
        }
       
        $result = $this->Simcard_model->update($this->tbl_name,$id,$data);
        redirect('admin/Simcard');        
    }


}
