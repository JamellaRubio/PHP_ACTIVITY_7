<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Add Form</title>
    <?php include('../layout/style.php'); ?>
    <style>
        /* Ocean Blue with Gold Theme */
        body {
            background: linear-gradient(135deg, #006994, #00b0cc); /* Ocean Blue Gradient */
            color: #ffffff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .form-container {
            max-width: 700px; /* Increased width for a more spacious design */
            margin: 50px auto;
            padding: 40px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.4);
            text-align: left; /* Align text to the left for better readability */
        }

        .form-container h2 {
            margin-bottom: 30px;
            font-size: 28px; /* Slightly larger font for the title */
            color: #ffd700; /* Gold */
            border-bottom: 2px solid #ffd700;
            padding-bottom: 10px;
        }

        .form-container label {
            display: inline-block;
            width: 150px; /* Fixed width for labels to align them consistently */
            font-size: 18px;
            margin-top: 15px;
            color: #c2f0f7; /* Light Blue */
        }

        .form-container input[type="text"],
        .form-container input[type="number"],
        .form-container select,
        .form-container input[type="email"],
        .form-container input[type="password"] {
            width: calc(100% - 160px); /* Make inputs take up remaining space */
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            background-color: #cce7ff; /* Soft Sky Blue */
            color: #333;
            display: inline-block;
        }

        .form-row {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .form-row select, 
        .form-row input[type="text"],
        .form-row input[type="number"],
        .form-row input[type="email"],
        .form-row input[type="password"] {
            flex-grow: 1;
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
<body>
    <?php include('../layout/header.php'); ?>

    <div id="layoutSidenav">
        <?php include('../layout/navigation.php'); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <div class="form-container">
                        <h2>Add Form</h2>
                        <form action="showDetails.php" method="POST">
                            <div class="form-row">
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" placeholder="Enter name" required>
                            </div>

                            <div class="form-row">
                                <label for="age">Age:</label>
                                <input type="number" id="age" name="age" placeholder="Enter age" required>
                            </div>

                            <div class="form-row">
                                <label for="gender">Gender:</label>
                                <select name="gender" id="gender" required>
                                    <option value="male">--SELECT GENDER--</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="form-row">
                                <label for="campus">Campus:</label>
                                <select name="campus" id="campus" required>
                                    <option value="campus">--SELECT CAMPUS--  </option> 
                                    <option value="Sta.Cruz Campus">Sta.Cruz Campus</option>
                                    <option value="Boac Campus">Boac Campus</option>
                                    <option value="Torrijos Campus">Torrijos Campus</option>
                                    <option value="Gasan Campus">Gasan Campus</option>
                                    <option value="Buenavista Campus">Buenavista Campus</option>
                                </select>
                            </div>
                            <div class="form-row">
                                <label for="college">College:</label>
                                <select name="college" id="college" required>
                                    <option value="collge">--SELECT COLLEGE--</option>
                                    <option value="College of Education">College of Education</option>
                                    <option value="College of Governance">College of Governance</option>
                                    <option value="College of Tourism Management">College of Tourism Management</option>
                                    <option value="College of Information and Computing Sciences">College of Information and Computing Sciences</option>
            
                                </select>
                            </div>
                            <div class="form-row">
                            <label for="course">Course:</label>
                            <select name="course" id="course" required>
                                <option value="course">--SELECT COURSE--</option>
                                <option value="BSIS">Information System</option>
                                <option value="BEED">Elementary Education</option>
                                <option value="BSAIS">Tourism Management</option>
                                <option value="BSAIS">Political Science</option>

                            </select>
                            </div>
                            <div class="form-row">
                                <label for="section">Section:</label>
                                <select name="section" id="section" placeholder="Choose your Section"required>
                                    <option value="section">--SELECT SECTION--</option>
                                    <option value="1-A">1-A</option>
                                    <option value="1-B">1-B</option>
                                    <option value="2-A">2-A</option>
                                    <option value="2-B">2-B</option>
                                    <option value="3-A">3-A</option>
                                    <option value="3-B">3-B</option>
                                    <option value="4-A">4-A</option>
                                    <option value="4-B">4-B</option>
                                </select>
                            </div>
                            <div class="form-row">
                                <button type="submit" name="submit">Submit</button>
                                <button type="reset">Clear</button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
            <?php include('../layout/footer.php'); ?>
        </div>
    </div>
    <?php include('../layout/script.php'); ?>
</body>  
</html>
