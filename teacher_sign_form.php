<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('your-image-path.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .home-button-container {
            text-align: center;
            margin: 20px;
        }

        .home-button-container button {
            background-color: #004d7a;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .home-button-container button:hover {
            background-color: #0073e6;
        }

        .signup-container {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            width: 350px;
            margin: 0 auto 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            background-color: #fff;
            animation: fadeIn 1s ease-in-out;
        }

        .signup-container h2 {
            text-align: center;
            color: #004d7a;
        }

        .signup-container p {
            text-align: center;
            color: #333;
            font-size: 16px;
            margin-bottom: 20px;
        }

        .signup-container label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .signup-container input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .signup-container button {
            background-color: #004d7a;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        .signup-container button:hover {
            background-color: #0073e6;
        }

        footer {
            background-color: #004d7a;
            color: white;
            text-align: center;
            padding: 15px 0;
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

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .signup-container {
                width: 90%;
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h2>Teacher Sign Up</h2>
        <p>Fill out the form below to create your account.</p>
        <form action="../app/register.php" method="POST">

            <label for="full_name">Full Name:</label>
            <input type="text" id="full_name" name="full_name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

           
            <button type="submit">Sign Up</button>
        </form>

        <hr>
        <p>Already have an account? <a href="teacher_login_form.php">Login</a></p>
    </div>

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
