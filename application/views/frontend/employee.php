<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <?php if($this->session->flashdata('status')):?>
                    <div class="alert alert-success">
                        <?php echo $this->session->flashdata('status'); ?>
                    </div>
                    <?php endif; ?>
                    <h5>
                        Employee Data
                        <a href="<?php echo base_url('employee/create') ?>" class="btn btn-primary float-right">Add Employee</a>
                    </h5>
                </div>
                <div class="card-body">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th> 
                                <th>Phone No.</th>
                                <th>Email ID</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php 
                                    foreach($employees as $employee) {
                                        echo '
                                            <tr>
                                                <td>'.$employee->id.'</td>
                                                <td>'.$employee->first_name.'</td>
                                                <td>'.$employee->last_name.'</td>
                                                <td>'.$employee->phone.'</td>
                                                <td>'.$employee->email.'</td>
                                                <td>
                                                    <a href="employee/edit/'.$employee->id.'" class="btn btn-primary">Edit</a>
                                                    <a href="employee/delete/'.$employee->id.'" class="btn btn-danger">Delete</a>
                                                    <button type="button" class="btn btn-danger confirm-delete" value="'.$employee->id.'">Confirm Delete</button>
                                                    <a href="employee/show/'.$employee->id.'" class="btn btn-secondary">View</a>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>