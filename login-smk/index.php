
<!DOCTYPE html>
<html>
<head><title>Login - SMK Bunda Kandung</title></head>
<body>
 <h2 align="center">Form Login</h2>
 <form action="login.php" method="post" align="center">
 <input type="text" name="username" placeholder="Username" required><br><br>
 <input type="password" name="password" placeholder="Password" required><br><br>
 <input type="submit" value="Login">
 </form>
 <style>
        /* Reset body margin and padding */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(120deg,rgb(19, 20, 88),rgb(81, 89, 206));
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        /* Style for the heading */
        h2 {
            color: #000;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Style for the form */
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(208, 255, 0, 0.1);
            width: 300px;
        }

        /* Style for text and password input fields */
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        /* Style for the submit button */
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color:rgb(38, 63, 145);
            border: none;
            color: white;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        /* Hover effect for the submit button */
        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Responsive design for smaller screens */
        @media (max-width: 600px) {
            form {
                width: 80%;
            }
        }
    </style>
</body>
</html>