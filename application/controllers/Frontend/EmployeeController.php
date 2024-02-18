<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeController extends CI_Controller {
    public function index() {
        $this->load->view('template/header');
        $this->load->model('EmployeeModel', 'emp');
        $data['employees'] = $this->emp->getEmployee();
        $this->load->view('frontend/employee', $data);
        $this->load->view('template/footer');
    }

    public function create() {
        $this->load->view('template/header');
        $this->load->view('frontend/create');
        $this->load->view('template/footer');
    }

    public function store() {
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        if($this->form_validation->run()) {
            $data = [
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email')
            ];

            $this->load->model('EmployeeModel', 'emp');
            $this->emp->insertEmployee($data);
            $this->session->set_flashdata('status', 'Employee Data added successfully');
            redirect(base_url('employee'));
        } else {
            $this->create();
        }
    }

    public function edit($id) {
        $this->load->view('template/header');
        $this->load->model('EmployeeModel', 'emp');
        $data['employee'] = $this->emp->editEmployeeById($id);
        $this->load->view('frontend/edit', $data);
        $this->load->view('template/footer');
    }

    public function update($id) {
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if($this->form_validation->run()) {
            $data = [
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email')
            ];

            $this->load->model('EmployeeModel', 'emp');
            $this->emp->updateEmployeeById($data, $id);
            $this->session->set_flashdata('status', 'Employee Data updated successfully');
            redirect(base_url('employee'));
        }else {
            redirect(base_url('employee/edit'));
        }
    }

    /**
     * Delete an Employee by it's ID
     * @param [type] $id Employee
     */
    public function delete($id) {
        $this->load->model('EmployeeModel', 'emp');
        $this->emp->deleteEmployeeById($id);
        $this->session->set_flashdata('status', 'Employee Data deleted successfully');
        redirect(base_url('employee'));
    }

    /**
     * Show an Employee by it's ID
     *
     * @param [type] $id
     * @return void
     */
    public function show($id) {
        $this->load->view('template/header');
        $this->load->model('EmployeeModel', 'emp');
        $data['employees'] = $this->emp->showEmployeeById($id);
        $this->load->view('frontend/show', $data);
        $this->load->view('template/footer');
    }
}