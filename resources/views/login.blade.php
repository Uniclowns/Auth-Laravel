<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="container">
        <div class="row" style="display: flex; justify-content: center; align-items: center">
            <div class="col-img">
                <img src="PET LOGO.png" alt="" width="640" height="640" />
            </div>
            <div class="col-form">
                <div class="center">
                    <h1>Login Form</h1>
                    <div id="loginMessage"></div>
                    <form id="loginForm">
                        <div class="form-field">
                            <h4>Username:</h4>
                            <input type="text" id="username" name="username" required /><br />
                        </div>
                        <div class="form-field">
                            <h4>Password:</h4>
                            <input type="password" id="password" name="password" required /><br />
                        </div>
                        <button type="button" onclick="validateLogin()" class="bulog">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>
