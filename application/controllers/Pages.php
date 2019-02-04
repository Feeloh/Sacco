<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller
{
    public function __contruct()
    {
        parent::__construct();
    }

    public function index(){
        // echo "I am awesome";
        $message['khalid'] = 'Keys';
        $message['key'] ='Oh this is doooope!!!!!!';
        $message['content'] = ('Pages/home');
        // $this->load->view('Pages/Elements/page_header', $message);
        // $this->load->view('Pages/Elements/navigation');
        // $this->load->view('Pages/home', $message);
        // $this->load->view('Pages/Elements/footer');
        $this->load->view('Layouts/master', $message);
    }
}
