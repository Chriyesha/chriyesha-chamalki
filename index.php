<?php
session_start();

if (!isset($_SESSION['username']) || !isset($_SESSION['email'])) {
    header("Location: login.html");
    exit();
}

$username = $_SESSION['username'];
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Courses</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, rgba(245, 245, 250, 0.95), rgba(255, 255, 255, 0.95));
            color: #333;
        }


        .navbar {
    background: rgba(0, 0, 0, 0.9);
    padding: 10px 20px;
    position: sticky;
    top: 0;
    z-index: 1000;
    display: flex;
    justify-content: space-between;
    align-items: center;
    backdrop-filter: blur(10px); 
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
}

.navbar .logo {
    font-size: 30px; 
    font-weight: bold; 
    color: #f9f9f9; 
}

.navbar ul {
    list-style-type: none;
    display: flex;
    margin: 0;
    padding: 0;
}

.navbar ul li {
    margin: 1 20px;
}

.navbar ul li a {
    color: #f9f9f9; 
    text-decoration: none;
    font-weight: 600;
    font-size: 15px; 
    padding: 10px 15px; 
    border-radius: 5px; 
    transition: background 0.3s, color 0.3s;
}

.navbar ul li a:hover {
    background: rgba(240, 192, 64, 1); 
    color: black;
}

.welcome {
    color: #f0f0f0; 
    font-size: 14px; 
    text-align: right;
    margin-right: 30px;
}

       
        .courses {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
            gap: 30px;
            padding: 40px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .course-card {
            background: rgba(255, 255, 255, 0.95); 
            border-radius: 10px;
            padding: 25px; 
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15); 
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .course-card:hover {
            transform: translateY(-5px); 
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
        }

        .course-title {
            font-size: 22px; 
            font-weight: 600;
            margin-bottom: 10px;
            color: #333;
        }

        .course-price {
            color: rgba(0, 150, 0, 1); 
            font-size: 18px;
            font-weight: 500;
        }

        /* Footer */
        footer {
            background: rgba(0, 0, 0, 0.8); 
            color: white;
            text-align: center;
            padding: 20px;
            position: relative;
            margin-top: 40px;
            backdrop-filter: blur(10px); 
        }

        footer span {
            color: rgba(240, 192, 64, 1);
        }
    </style>
</head>
<body>

<header>
    <nav class="navbar">
        <div class="logo">kC Education</div>
        <div class="welcome">
            Welcome <?php echo $username; ?> (<?php echo $email; ?>)
            <p id="datetime"></p>
        </div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">COURSES</a></li>
            <li><a href="#">AFFILIATIONS</a></li>
            <li><a href="#">HOW TO JOIN</a></li>
            <li><a href="#">TESTIMONIALS</a></li>
            <li><a href="logout.php" class="logout-btn">Logout</a></li>
        </ul>
        <div class="cart">🛒</div>
    </nav>
</header>

<div class="courses">
    <div class="course-card">
        <div class="course-title">EC0001 <br> Quantitative Analysis in Business (45 H)</div>
        <div class="course-price">Rs. 35,000/-</div>
    </div>
    <div class="course-card">
        <div class="course-title">EC0002 <br> Information Technology in Retailing (45 H)</div>
        <div class="course-price">Rs. 35,000/-</div>
    </div>
    <div class="course-card">
        <div class="course-title">EC0003 <br> Brand Innovation & Development (30 H)</div>
        <div class="course-price">Rs. 25,000/-</div>
    </div>
    <div class="course-card">
        <div class="course-title">EC0004 <br> Packaging & Logistic Management (30 H)</div>
        <div class="course-price">Rs. 25,000/-</div>
    </div>
    <div class="course-card">
        <div class="course-title">EC0005 <br> Service Marketing (40 H)</div>
        <div class="course-price">Rs. 30,000/-</div>
    </div>
    <div class="course-card">
        <div class="course-title">EC0006 <br> E-Commerce (45 H)</div>
        <div class="course-price">Rs. 35,000/-</div>
    </div>
</div>

<footer>
    <span>&copy; copyright 2024 by kriyesha chamalki | All rights reserved!</span>
</footer>

<script>
    function updateTime() {
        var now = new Date();
        var datetime = now.toLocaleString();
        document.getElementById('datetime').textContent = datetime;
    }

    setInterval(updateTime, 1000);
</script>

</body>
</html>
