<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: "Arial", sans-serif;
            background-color: #EBD9D1;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #9A3F3F;
            font-weight: bold;
            margin-bottom: 40px;
            text-align: center;
        }

        .form-box {
            background: #fff;
            border: 2px solid #9A3F3F;
            border-radius: 8px;
            padding: 20px;
            margin: 30px auto;
            max-width: 400px;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #9A3F3F;
            text-align: left;
            font-weight: bold;
        }

        input[type="email"], 
        input[type="password"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background: #9A3F3F;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background: #9A3F3F;
        }

        p {
            margin-top: 15px;
        }

        a {
            color: #9A3F3F;
            font-weight: bold;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="form-box">
        <h1>Login</h1>
        <form method="POST" action="handlers/handleForms.php">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <button type="submit" name="login">Login</button>
            <p>Don't Have An Account Yet? You May <a href="register.php">Register Here!</a></p>
        </form>
    </div>
</body>
</html>