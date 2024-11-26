<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
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
<form method="POST" action="/register">
    @csrf
    <!-- Name -->
    <div class="form-group">
        <label for="name">Name</label>
        <input id="name" type="text" name="name" required autofocus autocomplete="name">
        <div class="error"> <!-- Error messages for name (optional) --> </div>
    </div>

    <!-- Email Address -->
    <div class="form-group">
        <label for="email">Email</label>
        <input id="email" type="email" name="email" required autocomplete="username">
        <div class="error"> <!-- Error messages for email (optional) --> </div>
    </div>

    <!-- Password -->
    <div class="form-group">
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required autocomplete="new-password">
        <div class="error"> <!-- Error messages for password (optional) --> </div>
    </div>

    <!-- Confirm Password -->
    <div class="form-group">
        <label for="password_confirmation">Confirm Password</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required
               autocomplete="new-password">
        <div class="error"> <!-- Error messages for password confirmation (optional) --> </div>
    </div>

    <!-- Actions -->
    <div class="flex">
        <a href="/login">Already registered?</a>
        <button type="submit">Register</button>
    </div>
</form>
</body>
</html>
