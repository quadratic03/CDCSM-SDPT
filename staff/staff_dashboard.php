<!DOCTYPE html>
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
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 1.8rem;
        }

        .header .icons a {
            color: black;
            text-decoration: none;
        }
        .header .icons a i {
            margin-right: 5px;
        }

        /* Dashboard Grid */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .grid-item {
            background-color: #e0e0e0;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease, background-color 0.2s ease;
        }

        .grid-item:hover {
            background-color: #d0d0d0;
            transform: translateY(-5px);
        }

        .grid-item i {
            font-size: 2.2rem;
            margin-bottom: 10px;
            color: #003366;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <?php include '../components/sidebar.php'; renderSidebar("staff", "staff_dashboard.php"); ?>

        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <h1>Welcome, [Staff Name]</h1>
                <div class="icons">
                    <a href="#"><i class="fas fa-bell"></i> Notification</a>
                    <a href="#"><i class="fas fa-cog"></i> Settings</a>
                    <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>

            <div class="grid-container">
                <a href="student_scholar_status.php" class="grid-item">
                    <i class="fas fa-user-graduate"></i>
                    <p>Students Scholar Status</p>
                </a>
                <a href="staff_announcement.php" class="grid-item">
                    <i class="fas fa-bullhorn"></i>
                    <p>Announcement</p>
                </a>
                <a href="staff_rsa.php" class="grid-item">
                    <i class="fas fa-users"></i>
                    <p>Return Service Activity</p>
                </a>
                <a href="student_scholar_sub.php" class="grid-item">
                    <i class="fas fa-list-alt"></i>
                    <p>Students Scholar Submission List</p>
                </a>
                <a href="staff_profile.php" class="grid-item">
                    <i class="fas fa-user"></i>
                    <p>Profile</p>
                </a>
                <a href="staff_Ars.php" class="grid-item">
                    <i class="fas fa-money-bill-wave"></i>
                    <p>Allowance Releasing Schedule</p>
                </a>
                <a href="student_concern.php" class="grid-item">
                    <i class="fas fa-question-circle"></i>
                    <p>Student Scholar Concern</p>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
