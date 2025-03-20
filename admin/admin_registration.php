<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Scholarships Office</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
            width: 100%;
        }

        /* Sidebar */
        .sidebar {
            width: 240px;
            background-color: #003366;
            color: white;
            padding: 20px;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            overflow-y: auto;
        }

        .sidebar img {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            display: block;
            margin: 0 auto 20px auto;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 12px 10px;
            cursor: pointer;
            display: flex;
            align-items: center;
            border-radius: 6px;
        }

        .sidebar ul li i {
            margin-right: 12px;
        }

        .sidebar ul li:hover {
            background-color: #004080;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            width: 100%;
        }

        /* Main Content */
        .main-content {
            margin-left: 270px;
            flex-grow: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        /* Registration Form */
        .registration-form {
            background-color: #003366;
            color: white;
            padding: 20px;
            border-radius: 8px;
            width: 100%;
            max-width: 400px;
        }

        .registration-form h2 {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .registration-form .form-group {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
        }

        .registration-form .form-group i {
            margin-right: 10px;
        }

        .registration-form .form-group input,
        .registration-form .form-group select {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: transparent;
            color: white;
        }

        .registration-form .form-group input::placeholder {
            color: white;
        }

        .registration-form .form-group select {
            background-color: transparent;
            color: white;
        }

        .registration-form .form-group select option {
            background-color: white;
            color: black;
        }

        .registration-form button {
            background-color: white;
            color: #003366;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        .registration-form button:hover {
            background-color: #ccc;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <img src="logonimichael.png" alt="CDO Logo">
            <nav>
                <ul>
                    <li><a href="admin_dashboard.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="admin_SSS.php"><i class="fas fa-user-graduate"></i> Students Scholar Status</a></li>
                    <li><a href="admin_announcement.php"><i class="fas fa-bullhorn"></i> Announcement</a></li>
                    <li><a href="admin_SSSL.php"><i class="fas fa-list-alt"></i> Students Scholar Submission List</a></li>
                    <li><a href="admin_RSA.php"><i class="fas fa-users"></i> Return Service Activity</a></li>
                    <li><a href="admin_ars.php"><i class="fas fa-money-bill-wave"></i> Allowance Releasing Schedule</a></li>
                    <li><a href="admin_archive.php"><i class="fas fa-archive"></i> Archive</a></li>
                    <li><a href="admin_editst.php"><i class="fas fa-user"></i> Staff Account</a></li>
                    <li><a href="admin_editstud.php"><i class="fas fa-user-circle"></i> Student Account</a></li>
                    <li><a href="admin_ssc.php"><i class="fas fa-question-circle"></i> Student Scholar Concern</a></li>
                    <li><a href="admin_registration.php"><i class="fas fa-clipboard-list"></i> Registration</a></li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Registration Form -->
            <div class="registration-form">
                <h2>Registration</h2>
                <form>
                    <div class="form-group">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Confirm a Password">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-Phone"></i>
                        <input type="Integer" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-user-plus"></i>
                        <select>
                            <option>Add Staff</option>
                            <option>Add Student</option>
                        </select>
                    </div>
                    <button type="submit">Register</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>