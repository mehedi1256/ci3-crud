<?php
class EmployeeModel extends CI_Model
{
    public function getEmployee()
    {
        $query = $this->db->get('employee');
        return $query->result();
    }

    public function editEmployeeById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('employee');
        return $query->row();
    }

    public function updateEmployeeById($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('employee', $data);
    }
    public function insertEmployee($data) 
    {
        return $this->db->insert('employee', $data);
    }

    public function deleteEmployeeById($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('employee');
    }

    public function showEmployeeById($id)
    {
        $query = $this->db->get_where('employee', ['id' => $id]);
        return $query->result();
    }
}