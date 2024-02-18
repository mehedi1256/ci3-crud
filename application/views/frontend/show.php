<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h5>
                        Show Single Employee details from database
                        <a href="<?php echo base_url('employee') ?>" class="btn btn-primary float-right">Back</a>
                    </h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th> 
                                <th>Phone No.</th>
                                <th>Email ID</th>
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