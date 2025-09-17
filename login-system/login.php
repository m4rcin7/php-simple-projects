<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .login-container {
            max-width: 400px;
            margin: 40px auto;
            padding: 2rem;
            background: #1e1e1e;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
            color: #fff;
            font-family: Arial, sans-serif;
        }

        .login-container h2 {
            margin-bottom: 10px;
            text-align: center;
            font-size: 1.8rem;
        }

        .login-container p {
            margin-bottom: 20px;
            text-align: center;
            color: #bbb;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            font-size: 0.9rem;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #444;
            background: #2c2c2c;
            color: #fff;
            font-size: 1rem;
            transition: border 0.3s;
        }

        .form-group input:focus {
            outline: none;
            border-color: #4f8cff;
        }

        .form-actions {
            text-align: center;
        }

        .form-actions input[type="submit"] {
            background: #4f8cff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }

        .form-actions input[type="submit"]:hover {
            background: #3576e6;
        }

        .login-container a {
            color: #4f8cff;
            text-decoration: none;
        }

        .login-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <p>Please fill in your email and password.</p>
        <form action="" method="post">
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <div class="form-actions">
                <input type="submit" name="submit" value="Submit">
            </div>
            <p>Don't have an account? <a href="register.php">Register here</a>.</p>
        </form>
    </div>
</body>

</html>