<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h4>Login</h4>
    <form method="POST" action="/login">
        @csrf
        <div>
            <label for="email">email</label>
            <input type="text" id="email" name="email" required>
        </div>
        <div>
            <label for="password">password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit">Masuk</button>
        </div>
    </form>
</body>
</html>
