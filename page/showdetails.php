<?php
session_start();

// Check if email and password are set in the session
if (!isset($_SESSION['email']) || !isset($_SESSION['password'])) {
    header('location:../login.php');
    exit();
}

// Initialize session variable to store entries if it doesn't exist
if (!isset($_SESSION['entries'])) {
    $_SESSION['entries'] = [];
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Capture and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $gender = htmlspecialchars($_POST['gender']);
    $course = htmlspecialchars($_POST['course']);
    $campus = htmlspecialchars($_POST['campus']);
    $college = htmlspecialchars($_POST['college']);
    
    // Store the new entry in the session
    $_SESSION['entries'][] = [
        'name' => $name,
        'age' => $age,
        'gender' => $gender,
        'course' => $course,
        'campus' => $campus,
        'college' => $college
    ];
}

// Check if a delete request has been made
if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
    $deleteIndex = (int)$_GET['delete'];
    if (isset($_SESSION['entries'][$deleteIndex])) {
        unset($_SESSION['entries'][$deleteIndex]);
        // Re-index array after deletion
        $_SESSION['entries'] = array_values($_SESSION['entries']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Details Page</title>
    <?php include('../layout/style.php'); ?>
    <!-- Include DataTable CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <style>
    body {
        background: linear-gradient(135deg, #006994, #00b0cc);
        color: #333333; /* Dark Text for contrast */
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .table-container {
        max-width: 1000px;
        margin: 50px auto;
        padding: 30px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        border: 2px solid #00838f; /* Ocean Blue border */
    }

    .table-container h2 {
        margin-bottom: 20px;
        font-size: 24px;
        color: #00838f; /* Ocean Blue for headings */
        border-bottom: 2px solid #f1c40f; /* Gold accent line */
        padding-bottom: 10px;
    }

    /* Style for delete button */
    .delete-button {
        color: #ffffff;
        background-color: #f1c40f; /* Gold for button background */
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
    }

    /* Hover effect for the delete button */
    .delete-button:hover {
        background-color: #d4ac0d; /* Darker Gold on hover */
    }
</style>

</head>
<body>
    <?php include('../layout/header.php'); ?>

    <div id="layoutSidenav">
        <?php include('../layout/navigation.php'); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="table-container">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Student Information
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple" class="display">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Course</th>
                                        <th>Campus</th>
                                        <th>College</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($_SESSION['entries'] as $index => $entry) : ?>
                                        <tr>
                                            <td><?php echo $entry['name']; ?></td>
                                            <td><?php echo $entry['age']; ?></td>
                                            <td><?php echo $entry['gender']; ?></td>
                                            <td><?php echo $entry['course']; ?></td>
                                            <td><?php echo $entry['campus']; ?></td>
                                            <td><?php echo $entry['college']; ?></td>
                                            <td>
                                                <a href="addform.php?edit=<?php echo $index; ?>" class= "btn btn-warning btn-sm">Edit</a>
                                                <a href="?delete=<?php echo $index; ?>" onclick="return confirm('Are you sure you want to delete this entry?');">
                                                    <button class="delete-button">Delete</button>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <a href="addform.php" class = "add-entry-link"> ADD NEW FORM </a>
                        </div>
                    </div>
                </div>
                <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatablesSimple').DataTable();
        });
    </script>
            <?php include('../layout/footer.php'); ?>
        </div>

    </div>

    <?php include('../layout/script.php'); ?>
    <!-- Include DataTable JS -->

</body>
</html>