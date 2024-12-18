<?php
// Include the database connection file
include('includes/db.php');

// Query to fetch images and descriptions from the database
$sql = "SELECT image_path, description FROM images";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROLE-BASED MANAGEMENT</title>
    <style>
        /* Global Styles */
        body {
            
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #1E3A8A;
    color: #333;
    display: flex;
    flex-direction: column;
    min-height: 100vh; 
    text-align: center;
    line-height: 1.6;
    transition: all 0.3s ease;
    background: linear-gradient(45deg, #1E3A8A, #4CAF50, #FFEB3B, #FFFFFF);
background-size: 400% 400%;
animation: gradientShift 10s ease infinite;

    overflow-x: hidden; 
    padding-top: 80px; 


    }

    /* Gradient Animation Keyframes */
    @keyframes gradientShift {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }

        }
    
    /* Glow Effect */
    #dynamic-content h1 {
        font-size: 3rem;
        font-weight: 600;
        text-shadow: 0 0 15px rgba(255, 255, 255, 0.8), 
                     0 0 30px rgba(255, 255, 255, 0.6),
                     0 0 45px rgba(255, 255, 255, 0.4);
        animation: glowFade 3s infinite alternate ease-in-out;
    }

    /* Fade In-Out Animation */
    @keyframes glowFade {
        0% {
            opacity: 0.7;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.8), 
                         0 0 20px rgba(255, 255, 255, 0.6), 
                         0 0 30px rgba(255, 255, 255, 0.4);
        }
        100% {
            opacity: 1;
            text-shadow: 0 0 20px rgba(255, 255, 255, 1), 
                         0 0 40px rgba(255, 255, 255, 0.8), 
                         0 0 60px rgba(255, 255, 255, 0.6);
        }
    }


        a {
            text-decoration: none;
            color: inherit;
        }

       
        header {
    background-color: #004d7a;
    color: white;
    padding: 15px 20px;
    display: flex;
    justify-content: space-between; /* Keep buttons on both sides */
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
    flex-wrap: nowrap; /* Prevent wrapping to ensure buttons stay on their respective sides */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Optional: Shadow for visibility */
}

body {
    padding-top: 80px; /* Adjust for fixed header */
}

header .left-buttons, header .right-buttons {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin: 5px 0;
}

header .left-buttons {
    flex: 1; /* Aligns left buttons to the left side */
    justify-content: flex-start;
}

header .right-buttons {
    flex: 1; /* Aligns right buttons to the right side */
    justify-content: flex-end;
    margin-right: 20px;
}

header .left-buttons button, header .right-buttons button {
    background-color: #006699;
    border: none;
    color: white;
    padding: 10px 20px;
    margin: 5px 10px;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

header .left-buttons button:hover, header .right-buttons button:hover {
    background-color: #005b7f;
    transform: scale(1.05);
}

header .left-buttons button:active, header .right-buttons button:active {
    background-color: #004d7a;
    transform: scale(0.95);
}


@media (max-width: 768px) {
    header {
        flex-direction: column;
        text-align: center; 
    }
    
    .left-buttons, .right-buttons {
        justify-content: center; 
        width: 100%; 
    }



        }

        footer {
            background-color: black;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 20px;
            
        }

        footer p {
        color: white;
        }


        .social-icons a {
            color: white;
            margin: 0 10px;
            font-size: 20px;
            text-decoration: none;
        }

        .social-icons a:hover {
            color: #0073e6;
        }

        /* Header Button Styles */
        .left-buttons button, .right-buttons button {
            background-color: #006699;
            border: none;
            color: white;
            padding: 10px 20px;
            margin: 0 8px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .left-buttons button:hover, .right-buttons button:hover {
            background-color: #005b7f;
            transform: scale(1.05);
        }

        .left-buttons button:active, .right-buttons button:active {
            background-color: #004d7a;
            transform: scale(0.95);
        }

        /* Main content styles */
        main {
            padding: 50px 20px;
            text-align: center;
            flex-grow: 1;
        }

        #dynamic-content h1 {
            font-size: 3rem;
            font-weight: 600;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.2);
        }

        #dynamic-content p {
            font-size: 1.2rem;
            color: #555;
            max-width: 800px;
            margin: 20px auto;
        }

        /* Image Hover Effect */
        /* Image Hover Effect */
.image-container {
    position: relative;
    width: 300px;
    height: 200px;
    margin: 20px;
    display: inline-block;
    overflow: hidden;
    border-radius: 200px; /* Updated for circular effect */
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
}

.image-container:hover {
    transform: scale(1.05) rotate(1deg);
}

.floating-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease-in-out;
}

.image-container:hover .floating-image {
    transform: scale(1.1);
}

.image-description {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.7);
    color: white;
    padding: 15px;
    text-align: center;
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
    border-bottom-left-radius: 200px; /* Match the border radius */
    border-bottom-right-radius: 200px; /* Match the border radius */
}

.image-container:hover .image-description {
    opacity: 1;
}

.image-gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

/* Responsive Styles */
@media (max-width: 768px) {
    header, footer {
        flex-direction: column;
        text-align: center;
    }

    .left-buttons, .right-buttons {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    .image-gallery {
        flex-direction: column;
        gap: 10px;
    }

    .image-container {
        width: 100%;
        max-width: 350px;
    }
}

    </style>
    <!-- Include Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome CDN for social media icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

   
    </script>
</head>
<body>

    <header>
        <div class="left-buttons">
            <button onclick="window.location.href='index.php'">Holy Infant Academy</button>
            <button onclick="window.location.href='admin_login.php'">Admin</button>
            <button id="teacherLoginBtn" onclick="window.location.href='templates/teacher_login_form.php'">Teacher</button>
            <button onclick="window.location.href='student_login.php'">Student</button>
        </div>
        <div class="right-buttons">
            <button onclick="window.location.href='about_us.php'">About Us</button>
            <button onclick="window.location.href='contact_us.php'">Contact Us</button>
        </div>
    </header>

    <main>
        <div id="dynamic-content" style="padding: 20px;">
            <h1>Welcome to Role-Based <br> School Management System</h1>
           
        </div>
    <br> <br> <br> 
        
            <div class="image-gallery">
                <?php
                // Check if there are any records
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="image-container">';
                        echo '<img src="' . $row['image_path'] . '" alt="Image" class="floating-image">';
                        echo '<div class="image-description">' . $row['description'] . '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No images available.</p>';
                }
                ?>
            </div>
        </main>

    <footer>
    <div class="social-icons">
        <a href="https://www.facebook.com" target="_blank" class="fab fa-facebook-f"></a>
        <a href="mailto:example@gmail.com" class="fas fa-envelope"></a>
        <a href="https://twitter.com" target="_blank" class="fab fa-twitter"></a>
    </div>
    <p>&copy; 2024 Holy Infant Academy. All rights reserved.</p>
</footer>

</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
