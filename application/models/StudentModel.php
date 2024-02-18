<?php
defined('BASEPATH') or exit('No direct script access allowed');
class StudentModel  extends CI_Model {
    public function getStudent() {
        $std_cls = $this->student_class();
        return "Studen Name is " . "Mehedi " . "His Class is " . $std_cls;
    }

    private function student_class() {
        return 'cse';
    }

    public function student_show($id)
    {
        if($id == 1)
        {
            return 'Student 1';
        } 
        elseif($id == 2) 
        {
            return 'Student 2';
        }
        else
        {
            return 'Not Selected';
        }
    }

    public function student_str() 
    {
        return "hello , i am a software developer";
    }
}