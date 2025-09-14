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
            <form>
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