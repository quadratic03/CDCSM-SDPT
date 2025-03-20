<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
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
            width: 268px;
            background-color: #003366;
            color: white;
            padding: 20px;
            height: 130vh;
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
                <a href="staff_dashboard.php"><i class="fas fa-home"></i> Home</a>
                <a href="student_scholar_status.php"><i class="fas fa-user-graduate"></i> Students Scholar Status</a>
                <a href="staff_announcement.php"><i class="fas fa-bullhorn"></i> Announcement</a>
                <a href="student_scholar_sub.php"><i class="fas fa-list"></i> Students Scholar Submission List</a>
                <a href="staff_rsa.php"><i class="fas fa-users"></i> Return Service Activity</a>
                <a href="staff_Ars.php"><i class="fas fa-calendar-alt"></i> Allowance Releasing Schedule</a>
                <a href="staff_profile.php"><i class="fas fa-user"></i> Profile</a>
                <a href="student_concern.php"><i class="fas fa-question-circle"></i> Student Scholar Concern</a>
            </nav>
        </div>

        <div class="main-content">
            <div class="header">
                <h1>Allowance Releasing Schedule</h1>
                <div class="icons">
                    <a href="#"><i class="fas fa-bell"></i> Notification</a>
                    <a href="#"><i class="fas fa-cog"></i> Settings</a>
                    <a href="../staff_login.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
            <div class="profile-container">
                <div class="profile-details" style="width: 100%;">
                    <div class="detail">
                        <input type="text" placeholder="Search Student..." style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
                    </div>
                    <table style="width: 100%; margin-top: 20px; border-collapse: collapse;">
                        <thead>
                            <tr style="background-color: #f3f4f6;">
                                <th style="padding: 10px; border: 1px solid #ccc;">NAME OF SCHOLAR</th>
                                <th style="padding: 10px; border: 1px solid #ccc;">CASHIER NO.</th>
                                <th style="padding: 10px; border: 1px solid #ccc;">PAYROLL NO.</th>
                                <th style="padding: 10px; border: 1px solid #ccc;">PERIOD</th>
                                <th style="padding: 10px; border: 1px solid #ccc;">VENUE</th>
                                <th style="padding: 10px; border: 1px solid #ccc;">SCHEDULE</th>
                                <th style="padding: 10px; border: 1px solid #ccc;">All <i class="fas fa-filter"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="padding: 10px; border: 1px solid #ccc;">1. ALABA, FRANCIS OLIVER G.</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">120</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">321</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">OCTOBER - DECEMBER 2024</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">City Hall Quadrangle</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">January 27, 2025 - 1:00pm - 3:00pm</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">
                                    <button class="delete-button" data-id="1" style="background-color: #ff4d4d; color: white; padding: 5px 10px; border: none; border-radius: 5px;">Delete</button>
                                    <button class="edit-button" data-id="1" style="background-color: #ffcc00; color: white; padding: 5px 10px; border: none; border-radius: 5px;">Edit</button>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; border: 1px solid #ccc;">2. ANCOD, DOMINGO E.</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">442</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">212</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">OCTOBER - DECEMBER 2024</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">City Hall Quadrangle</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">January 27, 2025 - 1:00pm - 3:00pm</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">
                                    <button class="delete-button" data-id="2" style="background-color: #ff4d4d; color: white; padding: 5px 10px; border: none; border-radius: 5px;">Delete</button>
                                    <button class="edit-button" data-id="2" style="background-color: #ffcc00; color: white; padding: 5px 10px; border: none; border-radius: 5px;">Edit</button>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; border: 1px solid #ccc;">3. ANGKA, CHRISTIAN DAVE</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">212</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">111</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">OCTOBER - DECEMBER 2024</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">City Hall Quadrangle</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">January 27, 2025 - 1:00pm - 3:00pm</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">
                                    <button class="delete-button" data-id="3" style="background-color: #ff4d4d; color: white; padding: 5px 10px; border: none; border-radius: 5px;">Delete</button>
                                    <button class="edit-button" data-id="3" style="background-color: #ffcc00; color: white; padding: 5px 10px; border: none; border-radius: 5px;">Edit</button>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; border: 1px solid #ccc;">4. ATIS, DAVE E.</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">111</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">321</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">OCTOBER - DECEMBER 2024</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">City Hall Quadrangle</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">January 27, 2025 - 1:00pm - 3:00pm</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">
                                    <button class="delete-button" data-id="4" style="background-color: #ff4d4d; color: white; padding: 5px 10px; border: none; border-radius: 5px;">Delete</button>
                                    <button class="edit-button" data-id="4" style="background-color: #ffcc00; color: white; padding: 5px 10px; border: none; border-radius: 5px;">Edit</button>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; border: 1px solid #ccc;">5. ATABA, JULIAN G.</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">321</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">555</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">OCTOBER - DECEMBER 2024</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">City Hall Quadrangle</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">January 27, 2025 - 1:00pm - 3:00pm</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">
                                    <button class="delete-button" data-id="5" style="background-color: #ff4d4d; color: white; padding: 5px 10px; border: none; border-radius: 5px;">Delete</button>
                                    <button class="edit-button" data-id="5" style="background-color: #ffcc00; color: white; padding: 5px 10px; border: none; border-radius: 5px;">Edit</button>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; border: 1px solid #ccc;">6. BABAW, ANGEL MAE T.</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">555</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">643</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">OCTOBER - DECEMBER 2024</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">City Hall Quadrangle</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">January 27, 2025 - 1:00pm - 3:00pm</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">
                                    <button class="delete-button" data-id="6" style="background-color: #ff4d4d; color: white; padding: 5px 10px; border: none; border-radius: 5px;">Delete</button>
                                    <button class="edit-button" data-id="6" style="background-color: #ffcc00; color: white; padding: 5px 10px; border: none; border-radius: 5px;">Edit</button>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; border: 1px solid #ccc;">7. BABALAKA, FAITH H.</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">643</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">102</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">OCTOBER - DECEMBER 2024</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">City Hall Quadrangle</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">January 27, 2025 - 1:00pm - 3:00pm</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">
                                    <button class="delete-button" data-id="7" style="background-color: #ff4d4d; color: white; padding: 5px 10px; border: none; border-radius: 5px;">Delete</button>
                                    <button class="edit-button" data-id="7" style="background-color: #ffcc00; color: white; padding: 5px 10px; border: none; border-radius: 5px;">Edit</button>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; border: 1px solid #ccc;">8. CASIPONG, DARWIN S.</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">102</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">142</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">OCTOBER - DECEMBER 2024</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">City Hall Quadrangle</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">January 27, 2025 - 1:00pm - 3:00pm</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">
                                    <button class="delete-button" data-id="8" style="background-color: #ff4d4d; color: white; padding: 5px 10px; border: none; border-radius: 5px;">Delete</button>
                                    <button class="edit-button" data-id="8" style="background-color: #ffcc00; color: white; padding: 5px 10px; border: none; border-radius: 5px;">Edit</button>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; border: 1px solid #ccc;">9. CANILAWAN, AXEL V.</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">142</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">120</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">OCTOBER - DECEMBER 2024</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">City Hall Quadrangle</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">January 27, 2025 - 1:00pm - 3:00pm</td>
                                <td style="padding: 10px; border: 1px solid #ccc;">
                                    <button class="delete-button" data-id="9" style="background-color: #ff4d4d; color: white; padding: 5px 10px; border: none; border-radius: 5px;">Delete</button>
                                    <button class="edit-button" data-id="9" style="background-color: #ffcc00; color: white; padding: 5px 10px; border: none; border-radius: 5px;">Edit</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.delete-button');
            const editButtons = document.querySelectorAll('.edit-button');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');
                    alert('Delete button clicked for ID: ' + id);
                    // Add your delete logic here
                });
            });

            editButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');
                    alert('Edit button clicked for ID: ' + id);
                    // Add your edit logic here
                });
            });
        });
    </script>
</body>
</html>
