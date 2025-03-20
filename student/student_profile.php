<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
       body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            background-color: #f4f4f9;
        }
        .container {
            display: flex;
            width: 100%;
        }
        .sidebar {
            width: 240px;
            background-color: #003366;
            color: white;
            padding: 20px;
            height: 110vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .sidebar img {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            display: block;
            margin: 0 auto 20px auto;
        }

        .sidebar h1 {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .sidebar p {
            font-size: 0.875rem;
        }
        .sidebar nav a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .sidebar nav a i {
            margin-right: 10px;
        }
        .sidebar nav a:hover {
            background-color: #004080;
        }
        .sidebar nav a.active {
            background-color: #004080;
        }
        .main-content {
            flex-grow: 1;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header .icons a {
            color: black;
            text-decoration: none;
        }

        .header .icons a i {
            margin-right: 5px;
        }

        .profile-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
        }

        .profile-picture {
            background-color: #f3f4f6;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 30%;
        }

        .profile-picture img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .profile-details {
            background-color: #f3f4f6;
            padding: 20px;
            border-radius: 10px;
            width: 65%;
        }

        .profile-details .detail {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .profile-details .detail {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .profile-details .detail span {
            font-weight: bold;
            text-align: left;
            width: 100%;
        }

        .profile-details .buttons {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }

        .profile-details .buttons button {
            margin-left: 10px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .profile-details .buttons .resolve-button {
            background-color: #4CAF50; 
        }

        .profile-details .buttons .reply-button {
            background-color: #007BFF; 
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
            <nav>
                <a href="student_dashboard.php"><i class="fas fa-home"></i> Home</a>
                <a href="student_scholar_status.php"><i class="fas fa-user-graduate"></i> Students Scholar Status</a>
                <a href="student_announcement.php"><i class="fas fa-bullhorn"></i> Announcement</a>
                <a href="student_scholar_sub.php"><i class="fas fa-list"></i> Students Scholar Submission List</a>
                <a href="student_rsa.php"><i class="fas fa-users"></i> Return Service Activity</a>
                <a href="student_Ars.php"><i class="fas fa-calendar-alt"></i> Allowance Releasing Schedule</a>
                <a href="student_profile.php"><i class="fas fa-user"></i> Profile</a>
                <a href="student_concern.php"><i class="fas fa-question-circle"></i> Student Scholar Concern</a>
            </nav>
        </div>

        <div class="main-content">
            <div class="header">
                <h1>Student Profile</h1>
                <div class="icons">
                    <a href="#"><i class="fas fa-bell"></i> Notification</a>
                    <a href="#"><i class="fas fa-cog"></i> Settings</a>
                    <a href="../login.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
            <div class="profile-container">
                <div class="profile-picture">
                    <img src="profile.png" alt="Profile Picture">
                    <h2><?php echo $user['name']; ?></h2>
                    <p><?php echo $user['course']; ?></p>
                    <p><?php echo $user['address']; ?></p>
                </div>
                <div class="profile-details">
                    <div class="detail">
                        <span>Full name:</span>
                        <span><?php echo $user['name']; ?></span>
                    </div>
                    <div class="detail">
                        <span>Email:</span>
                        <span><?php echo $user['email']; ?></span>
                    </div>
                    <div class="detail">
                        <span>Phone:</span>
                        <span><?php echo $user['phone']; ?></span>
                    </div>
                    <div class="detail">
                        <span>Address:</span>
                        <span><?php echo $user['address']; ?></span>
                    </div>
                    <div class="detail">
                        <span>Course:</span>
                        <span><?php echo $user['course']; ?></span>
                    </div>
                    <div class="buttons">
                        <button class="resolve-button">Edit</button>
                        <button class="reply-button">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    session_start(); // Start the session to access user data

    // Database connection
    $conn = new mysqli("localhost", "username", "password", "database");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Assuming the user ID is stored in the session after login
    $userId = $_SESSION['user_id'];

    // Fetch user details
    $sql = "SELECT name, email, phone, address, course FROM users WHERE id = '$userId'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
    } else {
        echo "No user found.";
    }

    $conn->close();
    ?>
</body>
</html>
