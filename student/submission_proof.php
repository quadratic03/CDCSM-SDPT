<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Submission Form</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .container {
            display: flex;
            width: 100%;
        }

        .sidebar {
            width: 250px;
            background-color: #003366;
            color: white;
            padding: 20px;
            height: 100vh;
        }

        .sidebar .logo {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }

        .sidebar .logo img {
            width: 160px;
            height: 160px;
            border-radius: 50%;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 10px 0;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .sidebar ul li i {
            margin-right: 10px;
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
        .main-content {
            flex-grow: 1;
            padding: 20px;
        }
        .header {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
        }
        .header .icons a {
            color: black;
            text-decoration: none;
        }
        .header .icons a i {
            margin-right: 5px;
        }
        .content-area {
            display: flex;
            gap: 20px;
        }
        .form-section, .concern-section, .grades-section {
            background-color: #e0e0e0;
            padding: 20px;
            border-radius: 5px;
            width: 100%;
        }
        .form-section h2, .concern-section h2, .grades-section h2 {
            text-align: center;
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }
        .form-section .upload-area, .concern-section textarea, .grades-section .upload-area {
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
        }
        .form-section .upload-area, .grades-section .upload-area {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100px;
        }
        .form-section .upload-area i, .grades-section .upload-area i {
            margin-right: 10px;
        }
        .form-section button, .concern-section button, .grades-section button {
            background-color: #003366;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
        }
        .form-section button:hover, .concern-section button:hover, .grades-section button:hover {
            background-color: #004080;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logo">
                <img src="logonimichael.png" alt="CDO Logo">
            </div>
            <ul>
                <li><a href="Student_dashboard.php"><i class="fas fa-home"></i> <span>Home</span></a></li>
                <li><a href="student_status.php"><i class="fas fa-user-graduate"></i> <span>Student Status</span></a></li>
                <li><a href="submission_proof.php"><i class="fas fa-file-alt"></i> <span>Submission Form/Consultation</span></a></li>
                <li><a href="calendar.php"><i class="fas fa-calendar-alt"></i> <span>Calendar</span></a></li>
                <li><a href="announcement.php"><i class="fas fa-bullhorn"></i> <span>Announcement</span></a></li>
                <li><a href="inbox.php"><i class="fas fa-inbox"></i> <span>Inbox</span></a></li> 
                <li><a href="returnservices.php"><i class="fas fa-users"></i> <span>Return Service Activity</span></a></li>
                <li><a href="AllowanceReleasing.php"><i class="fas fa-money-bill-wave"></i> <span>Allowance Releasing Schedule</span></a></li>
                <li><a href="profile.php"><i class="fas fa-user"></i> <span>Profile</span></a></li>
            </ul>
        </div>
        
        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <div class="icons">
                    <a href="#"><i class="fas fa-bell"></i> Notification</a>
                    <a href="#"><i class="fas fa-cog"></i> Settings</a>
                    <a href="../login.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
            <div class="content-area">
                <!-- Student Submission Form -->
                <div class="form-section">
                    <h2>Student Submission Form</h2>
                    <div class="mb-4">
                        <label class="block text-sm font-medium mb-2">PROOF:</label>
                        <div class="upload-area">
                            <i class="fas fa-upload text-gray-500"></i>
                            <span>Upload proof</span>
                        </div>
                    </div>
                    <button type="submit">Submit</button>
                </div>

                <!-- Student Concern -->
                <div class="concern-section">
                    <h2>Student Concern</h2>
                    <label class="block text-sm font-medium mb-2">Concern:</label>
                    <textarea placeholder="Describe your concern"></textarea>
                    <button type="submit">Submit Request</button>
                </div>

                <!-- Student Send Grades -->
                <div class="grades-section">
                    <h2>Student Send Grades</h2>
                    <div class="mb-4">
                        <label class="block text-sm font-medium mb-2">PROOF:</label>
                        <div class="upload-area">
                            <i class="fas fa-upload text-gray-500"></i>
                            <span>Upload proof</span>
                        </div>
                    </div>
                    <button type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>