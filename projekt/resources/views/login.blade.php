<!DOCTYPE html>
<html class="login" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logga in</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <video autoplay muted loop id="myVideo">
        <source src="images/film.mp4" type="video/mp4">
    </video>

    <div class="box">
        <h2>Welcome back</h2>
        <form action="/login" method="POST"> 
        {{ csrf_field() }}

            <div class="inputBox">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>  

            <div class="inputBox">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit">Login 📺</button>
            <div class="link"><p>Or <a href="/register">create</a> an account</p></div>
        </form>
    </div>

</body>
</html>
