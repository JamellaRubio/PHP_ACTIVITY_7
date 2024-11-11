<?php
// Start the session to use session variables
session_start();

// Initialize variables
$email = isset($_POST['email']) ? $_POST['email'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";
$message = "";

// Check if login credentials are correct
if ($email == "rubio.jamella@marsu.edu.ph" && $password == "admin") {
    // Store email and password in session variables
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    
    // Set success message
    $message = "<div class='alert alert-success'>Logged in Successfully</div>";

    // Redirect to the dashboard page
    echo "<script>window.location.href = 'page/dashboard.php';</script>";
    
} elseif ($email == "" || $password == "") {
    // If email or password is empty, show a message
    $message = "<div class='alert alert-danger'>Please enter your email and password</div>";
} else {
    // If credentials are incorrect, show an error message
    $message = "<div class='alert alert-danger'>Login Failed</div>";
}

// Check if logout is requested
if (isset($_GET['logout']) && $_GET['logout'] == 'true') {
    // Destroy the session and log the user out
    session_destroy();
    header("Location: index.php"); // Redirect to login page or home page
    exit();
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
        <title>Login - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <style>
        /* Ocean Blue with Gold Theme */
        body {
            background: linear-gradient(135deg, #006994, #00b0cc); /* Ocean Blue Gradient */
            color: #00b0cc;
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
            color: #ffd700; /* Gold */
            border-bottom: 2px solid #ffd700;
            padding-bottom: 10px;
        }

        .form-container label {
            display: block;
            font-size: 18px;
            margin-top: 15px;
            color: #c2f0f7; /* Light Blue */
        }

        .form-container input[type="text"],
        .form-container input[type="number"],
        .form-container select,
        .form-container input[type="email"],
        .form-container input[type="password"] {
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

        .card-footer {
            background-color: #00b0cc;
            color: white;
        }

        .card-footer a {
            color: #ffd700; /* Gold links */
        }

        .card-footer a:hover {
            color: #ffcc00;
        }
        .card header{
            color: #ffd700; /* Gold links */
        }

        .alert {
            margin-bottom: 20px;
        }
    </style>
    </head>
    
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-body">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                        <form action="" method="post" onSubmit="return confirm('Do you want to continue?');">
                                            <?php echo $message;?>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="email" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                <button type="submit" class="btn btn-primary">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2024</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
