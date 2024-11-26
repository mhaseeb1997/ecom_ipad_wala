<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="email"],
        input[type="password"],
        input[type="checkbox"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        input[type="checkbox"] {
            width: auto;
            margin-right: 5px;
        }
        .error {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }
        .flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        a {
            text-decoration: none;
            font-size: 14px;
            color: #4a90e2;
        }
        a:hover {
            text-decoration: underline;
        }
        button {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            background-color: #4a90e2;
            color: white;
            font-size: 14px;
            cursor: pointer;
        }
        button:hover {
            background-color: #357ab8;
        }
    </style>
</head>
<body>
<form method="POST" action="/login">
    @csrf
    <!-- Session Status -->
    <div class="form-group">
        <!-- Dynamic session status message can go here -->
    </div>

    <!-- Email Address -->
    <div class="form-group">
        <label for="email">Email</label>
        <input id="email" type="email" name="email" required autofocus autocomplete="username">
        <div class="error"> <!-- Error messages for email (optional) --> </div>
    </div>

    <!-- Password -->
    <div class="form-group">
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required autocomplete="current-password">
        <div class="error"> <!-- Error messages for password (optional) --> </div>
    </div>

    <!-- Remember Me -->
    <div class="form-group">
        <label for="remember_me">
            <input id="remember_me" type="checkbox" name="remember">
            Remember me
        </label>
    </div>

    <!-- Actions -->
    <div class="flex">
        <a href="/password/request">Forgot your password?</a>
        <button type="submit">Log in</button>
    </div>
</form>
</body>
</html>
