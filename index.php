<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="sitestyle.css">
</head>
<body>
    <header>
        <h1>Cloud Login Demo</h1>
    </header>
    <hr>
    <article>
        <section>
            <h2>Login Details</h2>
            <form action="login.php" method="POST">
                <label for="usr">User Name</label>
                <input type="text" id="usr" name="usr" required><br><br>
                <label for="pwd">Password</label>
                <input type="password" id="pwd" name="pwd" required><br>
                <input type="submit" value="Login">
            </form>
        </section>
    </article>
    <footer>
        Developed by K Anbarasan
    </footer>
</body>
</html>
