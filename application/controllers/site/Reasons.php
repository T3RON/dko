<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 5/1/2019
 * Time: 11:55 PM
 */

class Reasons extends CI_Controller {


    function __construct()
    {
        parent::__construct();
    }


    function index()
    {

        $this->load->view('site/reasons');

    }




}
