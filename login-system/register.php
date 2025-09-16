<?php

require_once "config.php";
require_once "session.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $fullname = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    if ($query = $db->prepare("SELECT * FROM users WHERE email = ?")) {
        
        $error = '';
        $query->bind_param('s', $email);
        $query->execute();
        $query->store_result();
        
        if ($query->num_rows > 0) {
            $error .= '<p class="error">The email address is already registered!</p>';
        } else {
            if (strlen($password) < 6) {
                $error .= '<p class="error">Password must have at least 6 characters.</p>';
            }

            if (empty($confirm_password)) {
                $error .= '<p class="error">Please enter confirm password.</p>';
            } else {
                if (empty($error) && ($password != $confirm_password)) {
                    $error .= '<p class="error">Passwords did not match.</p>';
                }
            }

            if (empty($error)) {
                if ($insertQuery = $db->prepare("INSERT INTO users (name, email, password) VALUES (?,?,?);")) {
                    $insertQuery->bind_param("sss", $fullname, $email, $password_hash);
                    $result = $insertQuery->execute();
                    if ($result) {
                        $error .= '<p class="success">Your registration was successful! :)</p>';
                    } else {
                        $error .= '<p class="error">Something went wrong!</p>';
                    }
                    $insertQuery->close();
                }
            }
        }
        $query->close();
    }

    mysqli_close($db);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        form {
            background: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            max-width: 400px;
            width: 100%;
            margin: auto;
        }

        h2 {
            margin-top: 0;
            margin-bottom: 0.5rem;
            font-size: 1.8rem;
            text-align: center;
        }

        p {
            text-align: center;
            margin-bottom: 1.5rem;
            font-size: 0.95rem;
        }

        label {
            display: block;
            margin-bottom: 0.25rem;
            font-weight: 500;
            font-size: 0.9rem;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 0.95rem;
            margin-bottom: 1rem;
            transition: border 0.3s ease, box-shadow 0.3s ease;
        }

        input:focus {
            border-color: #4f46e5;
            outline: none;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
        }

        input[type="submit"] {
            width: 100%;
            padding: 0.75rem;
            background: #4f46e5;
            color: white;
            font-size: 1rem;
            font-weight: 600;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        input[type="submit"]:hover {
            background: #4338ca;
        }

        a {
            color: #4f46e5;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #4338ca;
        }

        .error {
            color: #ff6347;
        }

        .success {
            color: #3cb371;
        }
 
        @media (max-width: 480px) {
            form {
                padding: 1.5rem;
            }

            h2 {
                font-size: 1.5rem;
            }
        }
    </style>

</head>

<body>
    <div>
        <div>
            <h2>Register</h2>
            <p>Please fill this form to create an account.</p>
            <form action="" method="post">
                <div>
                    <label>Full Name</label>
                    <input type="text" name="name" required>
                </div>
                <div>
                    <label>Email</label>
                    <input type="email" name="email" required>
                </div>
                <div>
                    <label>Password</label>
                    <input type="password" name="password" required>
                </div>
                <div>
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" required>
                </div>
                <div>
                    <input type="submit" name="submit" value="Submit">
                </div>
                <p>Already have an account? <a href="login.php">Login here</a>.</p>
            </form>
        </div>
    </div>
</body>

</html>