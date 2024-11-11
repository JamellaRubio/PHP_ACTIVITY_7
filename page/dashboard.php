<?php
session_start();
 
if(!isset($_SESSION['email']) || !isset($_SESSION['password'])){
    header("Location:../index.php");
    exit;
}
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <?php include('../layout/style.php');?>
        <style>
    body {
        background: linear-gradient(135deg, #006994, #00b0cc); /* Ocean Blue Gradient */
        color: #ffffff;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .form-container {
        max-width: 600px;
        margin: 50px auto;
        padding: 30px;
        background-color: rgba(0, 0, 0, 0.7);
        border-radius: 10px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.4);
        text-align: center;
    }

    .form-container h2 {
        margin-bottom: 20px;
        font-size: 24px;
        color: #ffd700; /* Gold Color */
        border-bottom: 2px solid #ffd700; /* Gold Border */
        padding-bottom: 10px;
    }

    .form-container label {
        display: block;
        font-size: 18px;
        margin-top: 15px;
        color: #a0d3e3; /* Soft Light Blue */
    }

    .form-container input[type="text"],
    .form-container input[type="number"],
    .form-container select {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        background-color: #cce7ff; /* Soft Sky Blue */
        color: #333;
    }

    .form-container button[type="submit"],
    .form-container button[type="reset"] {
        width: 48%;
        padding: 10px;
        margin-top: 20px;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        color: white;
        transition: background-color 0.3s;
    }

    .form-container button[type="submit"] {
        background-color: #ffd700; /* Gold */
    }

    .form-container button[type="reset"] {
        background-color: #00b0cc; /* Ocean Blue */
    }

    .form-container button[type="submit"]:hover {
        background-color: #ffcc00; /* Lighter Gold */
    }

    .form-container button[type="reset"]:hover {
        background-color: #0099b7; /* Darker Ocean Blue */
    }
</style>
    </head>
    <body class="sb-nav-fixed">

        <?php include('../layout/header.php');?>

        <div id="layoutSidenav">
            <?php include('../layout/navigation.php');?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li>Email: <?php echo $_SESSION['email'];?></li> <br>
                            <li>  Password: <?php echo $_SESSION['password'];?></li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Primary Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Warning Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr>
                                            <td>James Adrian Principe</td>
                                            <td>Engineer</td>
                                            <td>Santa Cruz Engineering Office</td>
                                            <td>24</td>
                                            <td>2020/04/13</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Jasmine principe</td>
                                            <td> Flight Attendant</td>
                                            <td>Philippine Airline</td>
                                            <td>24</td>
                                            <td>2019/04/15</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Jamella Principe</td>
                                            <td>Computer Engineer</td>
                                            <td>Santa Cruz Engineering Office</td>
                                            <td>20</td>
                                            <td>2020/04/13</td>
                                            <td>$320,800</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include('../layout/footer.php');?>
            </div>
        </div>
        <?php include('../layout/script.php');?>
    </body>
</html>