<!DOCTYPE html>
<html class="register" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="box">
        <h2>Create an account</h2>

        <form action="/register" method="POST">
            {{ csrf_field() }}

        <div class="inputBox">
            <input type="text" id="name" name="name" required>
            <label>Name</label>
        </div>

        <div class="inputBox">
            <input type="email" id="email" name="email" required>
            <label>Email</label>
        </div>

        <div class="inputBox">
            <input type="password" id="password" name="password" required>
            <label>Password</label>
        </div>

        <button type="submit">Gå 🚀</button>
        <p>Or <a href="/login">Log in</a></p>
        </form>

    </div>

</body>
</html>