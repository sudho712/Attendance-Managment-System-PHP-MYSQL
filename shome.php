<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgb(0, 0, 33);
            color: white;
        }
        header {
            background-color: #2c3e50;
            padding: 20px;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
            color: #f39c12;
        }
        nav {
            display: flex;
            justify-content: center;
            background-color: #34495e;
            padding: 10px 0;
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        nav a:hover {
            background-color: #f39c12;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            text-align: center;
        }
        .cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .card {
            background-color: #34495e;
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }
        .card i {
            font-size: 50px;
            color: #f39c12;
            margin-bottom: 10px;
        }
        .card h3 {
            margin-bottom: 15px;
            color: #f39c12;
        }
        .card a {
            text-decoration: none;
            color: white;
            background-color: #f39c12;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .card a:hover {
            background-color: #e67e22;
        }
        footer {
            background-color: #2c3e50;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            color: #f39c12;
        }
    </style>
</head>
<body>
    <header>
        <h1>Attendance Management System</h1>
    </header>
    <nav>
        <a href="#dashboard">Dashboard</a>
        <a href="#mark-attendance">Mark Attendance</a>
        <a href="#view-records">View Records</a>
        <a href="#reports">Reports</a>
        <a href="#settings">Settings</a>
    </nav>
    <div class="container">
        <h2>Welcome to the Attendance Management System</h2>
        <p>Manage and monitor attendance records efficiently.</p>
        <div class="cards">
            <div class="card">
                <i class="fas fa-users"></i>
                <h3>Mark Attendance</h3>
                <a href="#">Go</a>
            </div>
            <div class="card">
                <i class="fas fa-calendar-alt"></i>
                <h3>View Records</h3>
                <a href="#">Go</a>
            </div>
            <div class="card">
                <i class="fas fa-chart-bar"></i>
                <h3>Generate Reports</h3>
                <a href="#">Go</a>
            </div>
            <div class="card">
                <i class="fas fa-cogs"></i>
                <h3>Settings</h3>
                <a href="#">Go</a>
            </div>
        </div>
    </div>
    <footer>
        &copy; 2024 Attendance Management System. All rights reserved.
    </footer>
</body>
</html>
