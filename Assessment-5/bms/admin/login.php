<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <style>
        body {
    background-color: white;
    margin: 0;
    height: auto;
    padding: 0;
    width: 100%;
}

.container {
    margin: 0px;
    width: 100%;
    height: auto;
}

.left {
    height: auto;
    width: 49%;
    float: left;
    background-color: white;
}

#img {
    width: 100%;
}

.right {
    margin: 0;
    color: black;
    padding: 30px 10px 20px 10px;
    float: right;
    width: 49%;
    background-color: #f2f2f2;
    border-top: 100px;
    text-align: center;
}

.logincard {
    background-color: white;
    margin: 10% 10% 10% 10%;
    padding: 10px;
    border: 1px solid black;
    width: 80%;
}


#submit {
    color: white;
    background-color: rgb(62, 194, 66);
    width: 300px;
    align-self: center;
}

a {
    color: rgba(18, 148, 18, 0.655);
    text-decoration: none;
}

.email {
    width: 300px;
    align-items: center;
}

.Login {
    text-align: left;
}

.password {
    width: 300px;
}

#address {
    text-align: left;
}

.welcome {
    text-align: left;
}
h4{
    text-align: left;
}
    </style>
</head>

<body>
    <div class="container">
        <div class="left"><img src="Mobile.png" id="img" alt="Random image"></div>
        <div right class="right">
            <div class="logincard">
                <h2 class="Login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;Login</h2>
                <p class="welcome">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome back!Log in to your account</p>
                <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email Address:</h4>

                <input type="email" placeholder="Text@gmail.com" required class="email">

                <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password:</h4>

                <input type="password" placeholder="************" required class="password">

                <br><br>
                <input type="checkbox" class="remember">Remember
                password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                    href="https://www.google.com" class="forgot">Forgot
                    Password?</a>
                <br><br>
                <input type="submit" value="SIGN IN" id="submit">
                <p>---------Signin with---------</p>
                <input type="button" value="l">&nbsp;<input type="button" value="i">&nbsp;<input type="button"
                    value="t">&nbsp;<input type="button" value="f">
                <p>Don't have
                    account&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://www.google.com">Create account</a>

                </p>


            </div>
        </div>

    </div>
</body>

</html>