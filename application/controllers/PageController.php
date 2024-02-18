<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller
{
    public function index()
    {
        echo 'page controller index';
    }

    public function about() {
        echo 'page controller about';
    }

    public function demo_page()
    {
        $this->load->model('StudentModel');
        $std_info = $this->StudentModel->student_str();
        $data['title'] = $std_info;
        $this->load->view('demopage', $data);
    }
}