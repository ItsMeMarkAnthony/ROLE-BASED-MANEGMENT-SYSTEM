<?php
session_start();

// Check if the user is logged in (optional check)
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'teacher') {
    header('Location: teacher_login_form.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            display: flex;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #004d7a;
            color: white;
            padding-top: 30px;
            position: fixed;
            top: 0;
            left: 0;
        }

        .sidebar a {
            color: white;
            display: block;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 18px;
            margin-bottom: 10px;
            border-radius: 4px;
        }

        .sidebar a:hover {
            background-color: #0073e6;
        }

        .sidebar .logo {
            text-align: center;
            font-size: 24px;
            margin-bottom: 30px;
        }

        /* Main Content */
        .main-content {
            margin-left: 250px;
            padding: 20px;
            flex-grow: 1;
        }

        /* Header */
        .header {
            background-color: #004d7a;
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            margin: 0;
        }

        .header .logout-btn {
            background-color: #ff4c4c;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .header .logout-btn:hover {
            background-color: #e60000;
        }

        /* Dashboard Cards */
        .dashboard-cards {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        .card {
            background-color: white;
            width: 30%;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .card h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 16px;
            color: #666;
        }

        /* Footer */
        footer {
            background-color: #004d7a;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }

            .main-content {
                margin-left: 200px;
            }

            .dashboard-cards {
                flex-direction: column;
                align-items: center;
            }

            .card {
                width: 80%;
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">
            <h2>Dashboard</h2>
        </div>
        <a href="teacher_dashboard.php">Home</a>
        <a href="teacher_profile.php">Profile</a>
        <a href="teacher_courses.php">Courses</a>
        <a href="teacher_grades.php">Grades</a>
        <a href="teacher_schedule.php">Schedule</a>
        <a href="teacher_logout.php">Logout</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">

        <!-- Header -->
        <div class="header">
            <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
            <form action="teacher_logout.php" method="POST">
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        </div>

        <!-- Dashboard Cards -->
        <div class="dashboard-cards">
            <div class="card">
                <h3>Students</h3>
                <p>View your students and their progress.</p>
            </div>
            <div class="card">
                <h3>Assignments</h3>
                <p>Manage assignments and grades.</p>
            </div>
            <div class="card">
                <h3>Announcements</h3>
                <p>Make announcements to your class.</p>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Cedar College Inc. All rights reserved.</p>
    </footer>

</body>

</html>
