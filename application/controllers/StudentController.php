<?php
defined('BASEPATH') or exit('No direct script access allowed');
class StudentController extends CI_Controller {
    public function index() {
        $this->load->model('StudentModel', 'stdM');
        // $student_info = $this->StudentModel->getStudent();
        // $studentName = new StudentModel;
        // $studentName = $studentName->getStudent();
        $student_info = $this->stdM->getStudent();
        echo $student_info;
    }

    public function show($id)
    {
        $this->load->model('StudentModel', 'stdM');
        $selected_student = $this->stdM->student_show($id);
        echo $selected_student;
    }
}