<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar Page</title>
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
        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .calendar-header h2 {
            font-size: 1.5rem;
        }
        .calendar-header .buttons button {
            background-color: #4a5568;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        .calendar-header .buttons button:hover {
            background-color: #2d3748;
        }
        .calendar {
            background-color: #1f2937;
            color: white;
            padding: 20px;
            border-radius: 10px;
        }
        .calendar .grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 10px;
        }
        .calendar .grid div {
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
        }
        .calendar .grid .event {
            font-size: 0.875rem;
        }
        .calendar .grid .done {
            color: #10b981; /* Green */
        }
        .calendar .grid .pending {
            color: #fbbf24; /* Yellow */
        }
        .calendar .grid .undone {
            color: #ef4444; /* Red */
        }
        .legend-item .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-right: 5px;
        }
        .legend-item .done {
            background-color: #10b981; /* Green */
        }
        .legend-item .pending {
            background-color: #fbbf24; /* Yellow */
        }
        .legend-item .undone {
            background-color: #ef4444; /* Red */
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
            </ul>
        </div>
        

        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <div class="legend">
                    <div class="legend-item">
                        <div class="dot done"></div>
                        <span>DONE</span>
                    </div>
                    <div class="legend-item">
                        <div class="dot pending"></div>
                        <span>PENDING</span>
                    </div>
                    <div class="legend-item">
                        <div class="dot undone"></div>
                        <span>UNDONE</span>
                    </div>
                </div>
                <div class="icons">
                <a href="#"><i class="fas fa-bell"></i> Notification</a>
                <a href="#"><i class="fas fa-cog"></i> Settings</a>
                <a href="../login.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
            <div class="calendar">
                <div class="calendar-header">
                    <h2>January 2025</h2>
                    <div class="buttons">
                        <button>Week</button>
                        <button>Month</button>
                        <button>Today</button>
                    </div>
                </div>
                <div class="grid">
                    <!-- Calendar Days -->
                    <div>Sun</div>
                    <div>Mon</div>
                    <div>Tue</div>
                    <div>Wed</div>
                    <div>Thu</div>
                    <div>Fri</div>
                    <div>Sat</div>
                    <!-- Calendar Dates -->
                    <div></div>
                    <div></div>
                    <div></div>
                    <div class="relative">
                        <span class="absolute top-1 left-1">1</span>
                        <div class="event done absolute bottom-1 left-1">Clean up Drive</div>
                        <div class="absolute top-1 right-1 w-3 h-3 bg-green-500 rounded-full"></div>
                    </div>
                    <div class="relative">
                        <span class="absolute top-1 left-1">2</span>
                        <div class="event pending absolute bottom-1 left-1">Community Service</div>
                        <div class="absolute top-1 right-1 w-3 h-3 bg-yellow-500 rounded-full"></div>
                    </div>
                    <div class="relative">
                        <span class="absolute top-1 left-1">3</span>
                    </div>
                    <div class="relative">
                        <span class="absolute top-1 left-1">4</span>
                    </div>
                    <div class="relative">
                        <span class="absolute top-1 left-1">5</span>
                        <div class="event undone absolute bottom-1 left-1">Event Planning</div>
                        <div class="absolute top-1 right-1 w-3 h-3 bg-red-500 rounded-full"></div>
                    </div>
                    <div class="relative">
                        <span class="absolute top-1 left-1">6</span>
                    </div>
                    <div class="relative">
                        <span class="absolute top-1 left-1">7</span>
                    </div>
                    <div class="relative">
                        <span class="absolute top-1 left-1">8</span>
                    </div>
                    <div class="relative">
                        <span class="absolute top-1 left-1">9</span>
                    </div>
                    <div class="relative">
                        <span class="absolute top-1 left-1">10</span>
                    </div>
                    <div class="relative">
                        <span class="absolute top-1 left-1">11</span>
                    </div>
                    <div class="relative">
                        <span class="absolute top-1 left-1">12</span>
                    </div>
                    <div class="relative">
                        <span class="absolute top-1 left-1">13</span>
                    </div>
                    <div class="relative">
                        <span class="absolute top-1 left-1">14</span>
                    </div>
                    <div class="relative">
                        <span class="absolute top-1 left-1">15</span>
                    </div>
                    <div class="relative">
                        <span class="absolute top-1 left-1">16</span>
                    </div>
                    <div class="relative">
                        <span class="absolute top-1 left-1">17</span>
                    </div>
                    <div class="relative">
                        <span class="absolute top-1 left-1">18</span>
                    </div>
                    <div class="relative">
                        <span class="absolute top-1 left-1">19</span>
                    </div>
                    <div class="relative">
                        <span class="absolute top-1 left-1">20</span>
                    </div>
                    <div class="relative">
                        <span class="absolute top-1 left-1">21</span>
                    </div>
                    <div class="relative">
                        <span class="absolute top-1 left-1">22</span>
                    </div>
                    <div class="relative">
                        <span class="absolute top-1 left-1">23</span>
                    </div>
                    <div class="relative">
                        <span class="absolute top-1 left-1">24</span>
                    </div>
                    <div class="relative">
                        <span class="absolute top-1 left-1">25</span>
                    </div>
                    <div class="relative">
                        <span class="absolute top-1 left-1">26</span>
                    </div>
                    <div class="relative">
                        <span class="absolute top-1 left-1">27</span>
                    </div>
                    <div class="relative">
                        <span class="absolute top-1 left-1">28</span>
                    </div>
                    <div class="relative">
                        <span class="absolute top-1 left-1">29</span>
                        <div class="event done absolute bottom-1 left-1">Office Duty</div>
                        <div class="absolute top-1 right-1 w-3 h-3 bg-green-500 rounded-full"></div>
                    </div>
                    <div class="relative">
                        <span class="absolute top-1 left-1">30</span>
                    </div>
                    <div class="relative">
                        <span class="absolute top-1 left-1">31</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>