<?php
    include 'ComputeIncome.php';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Compute Salary</title>
</head>
<body>
    <main class="container">
        <div class="row justify-content-left">
            <div class="col-3">
                <form method="POST">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="John Doe">
                    </div>
                    <div class="form-group">
                        <label for="civilstatus">Civil Status</label>
                        <select class="form-control" name="civilStatus" id="civilStatus">
                            <option value="" disabled selected>Select Civil Status</option>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="divorced">Divorced</option>
                            <option value="widowed">Widowed</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status">Positinon</label>
                        <select class="form-control" name="position" id="position">
                            <option value="" disabled selected>Select Position</option>
                            <option value="admin">Admin</option>
                            <option value="staff">Staff</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="employmentStatus">Employment Status</label>
                        <select class="form-control" name="employmentStatus" id="employmentStatus">
                            <option value="" disabled selected>Select Employment Status</option>
                            <option value="contractual">Contractual</option>
                            <option value="probationary">Probationary</option>
                            <option value="regular">Regular</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="regularHours">Regular Hours Rendered</label>
                        <input type="number" class="form-control" name="regularHours" id="regularHours">
                    </div>
                    <div class="form-group">
                        <label for="overHours">Over Time Hours</label>
                        <input type="number" class="form-control" name="overHours" id="overHours">
                    </div>
                    <button type="submit" name="btn" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </main>

    <main class="container">
        <div class="row justify-content-left">
            <div class="col-9">
                <?php
                if(isset($_POST['btn'])){
                    $name             = $_POST['name'];
                    $civilStatus      = $_POST['civilStatus'];
                    $position         = $_POST['position'];
                    $employmentStatus = $_POST['employmentStatus'];
                    $regularHours     = $_POST['regularHours'];
                    $overHours        = $_POST['overHours'];

                    $ComputeIncome = new ComputeIncome;

                    // Set the values using the setter
                    $ComputeIncome->setCivilStatus($civilStatus);
                    $ComputeIncome->setPosition($position);
                    $ComputeIncome->setEmploymentStatus($employmentStatus);
                    $ComputeIncome->setRegularHours($regularHours);
                    $ComputeIncome->setOverHours($overHours);


                ?>
                    <table class="table table-bordered mt-3">
                        <thead class="thead-dark">
                        </thead>
                        <tbody>
                            <tr>
                                <td style="background-color: black; color: white;">Full Name</td>
                                <td><?php echo $name; ?></td>
                            </tr>
                            <tr>
                                <td style="background-color: black; color: white;">Civil Status</td>
                                <td><?php echo $civilStatus; ?></td>
                            </tr>
                            <tr>
                                <td style="background-color: black; color: white;">Position</td>
                                <td><?php echo $position; ?></td>
                            </tr>
                            <tr>
                                <td style="background-color: black; color: white;">Employment Status</td>
                                <td><?php echo $employmentStatus; ?></td>
                            </tr>
                            <tr>
                                <td style="background-color: black; color: white;">Gross Income</td>
                                <td><?php echo $regularHours; ?></td>
                            </tr>
                            <tr>
                                <td style="background-color: black; color: white;">Net Income</td>
                                <td><?php echo $overHours; ?></td>
                            </tr>
                        </tbody>
                    </table>
                <?php 
                    }
                ?>
            </div>
        </div>
    </main>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>