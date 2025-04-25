<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7"
        crossorigin="anonymous"
    >
</head>
<body style="background-image: url('assets/playground.jpg'); background-size: cover;">
    <center>
        <div class="login">
            <div class="login-title">
                <h1>Login</h1>
            </div>
            <form class="login-form" method="POST">

                <div>
                    <label class="label-form">Username</label>
                    <input class="input-form" type="text" name="username">
                </div>

                <div>
                    <label class="label-form">Password</label>
                    <input class="input-form" type="password" name="password">
                </div>

                <div>
                    <input class="login-button btn btn-primary" type="submit" name="submit" value="Login">
                </div>

            </form>
        </div>
    </center>
</body>
</html>