<?php
include('conne.php');
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $remember = $_POST['remember'];
    // fetch details from register database
    $emailCheck = "SELECT * FROM register WHERE UserId='$email'";
    $result = mysqli_query($sql_con, $emailCheck);
    $emailCount = mysqli_num_rows($result);
    if ($emailCount > 0) {
        $query = "SELECT * FROM register WHERE `UserId`= '$email' AND `Password` = '$password' AND `Status` ='verified' LIMIT 1";
        $result = mysqli_query($sql_con, $query);
        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            // set session
            session_start();
            $_SESSION['RegistrationId'] = $user['RegistrationId'];
            $category = $user['CompanyCategory'];
            $category = strtoupper($category) . " " . "MASTER";
            // redirect
            if ($remember == 'on') {
                setcookie('email', $email, time() + 60 * 60 * 24 * 7);
                echo "<script>location.href='$category/template/index.php'</script>";
                exit();
            }else{
                echo "<script>location.href='$category/template/index.php'</script>";
                exit();
            }
        } else {
            $error = "Invalid Email or Password";
        }
    } else {
        $error = "Email Address Does Not Exist";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appanage Mart || Login with email id and Password</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            width: 100%;
            min-height: 100vh;
            box-sizing: border-box;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .container {
            position: relative;
            min-height: 100vh;
            max-width: 100% !important;
            background-color: #161623;
            overflow: hidden;
            display: grid;
            place-items: center;
            padding: 2rem 0.5rem;
        }

        .container::before {
            content: "";
            position: absolute;
            width: 40vw;
            height: 40vw;
            border-radius: 50%;
            background: hsl(0, 100%, 10%);
            animation: move-up6 2s ease-in infinite alternate-reverse;
            filter: blur(10px);
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.5), 0 0 60px rgba(136, 6, 6, 0.5), 0 0 100px rgba(255, 0, 0, 0.9);
        }

        .container::after {
            content: "";
            position: absolute;
            vertical-align: bottom;
            width: 250px;
            height: 250px;
            border-radius: 50%;
            background: hsl(0, 73%, 19%);

            animation: move-up6 2s ease-in infinite alternate-reverse;
        }

        @keyframes move-up6 {
            to {
                transform: translateY(-50px);

            }
        }

        a {
            text-decoration: none;
        }

        .login {
            position: relative;
            max-width: 550px;
            padding: 30px;
            width: 100%;
            height: fit-content;
            background-color: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 15px;
            z-index: 10;
            backdrop-filter: blur(25px);
            box-shadow: 10px 10px 40px rgba(0, 0, 0, 0.2),
                -10px -10px 40px rgba(0, 0, 0, 0.2);
        }

        @media (max-width:400px) {
            .login {
                width: 90%;
            }
        }

        .login h1 {
            font-size: 1.8rem;
            color: #fff;
            margin-top: 0;
            text-align: center;
            margin-bottom: 0.5rem;
        }

        .login p {
            text-align: center;
            color: #fff;
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
        }

        .login form {
            width: 100%;
            height: 100%;
            outline: none;
            border: none;
        }

        .login .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            column-gap: 30px;
        }

        .login form .input-box {
            width: 100%;
            position: relative;
            margin-bottom: 30px;
            display: flex;
        }

        .login .theme-color {
            color: hsl(43, 75%, 56%);
        }

        .login form .input-box input {
            width: 100%;
            border: none;
            padding: 1rem 2.7rem 1rem 1rem;
            border-radius: 10px;
            color: #fff;
            background-color: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.4);
        }

        .login form .input-box input::placeholder {
            color: #fff;
            font-size: 0.8rem;
            transition: 0.5s ease;
        }

        .login form .input-box input:focus::placeholder {
            opacity: 0;
        }

        .login form .input-box input:focus {
            outline: none;
        }

        .login form .input-box i {
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            color: #fff;
            font-size: 1.2rem;
        }

        .login form .rembar {
            margin-bottom: 10px;
            width: 100%;
        }

        .login form .rembar input {
            appearance: none;
        }

        .login form .rembar label {
            color: #fff;
            position: relative;
            width: 100%;
            padding-left: 35px;
            font-size: 0.9rem;
        }

        .login form .rembar label::before {
            content: "";
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 22px;
            height: 22px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.2);
        }

        .login form .rembar label::after {
            content: "";
            position: absolute;
            left: 4px;
            top: 50%;
            transform: translateY(-50%);
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background-color: #fff;
            transition: 0.5 ease;
            opacity: 0;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        }

        .login form .rembar input:checked+label::after {
            opacity: 1;
        }

        .login form button {
            width: 100%;
            max-width: 300px;
            text-align: center;
            border: none;
            padding: 1rem;
            border-radius: 10px;
            color: #fff;
            margin-bottom: 30px;
            background-color: hsl(0, 98%, 21%);
            border: 1px solid rgba(255, 255, 255, 0.4);
            transition: 0.5s ease;
            cursor: pointer;
            font-weight: 600;
        }

        .login form button:hover {
            background-color: #111;
        }

        .login form .links {
            width: 100%;
            display: flex;
            justify-content: space-between;
            gap: 15px;
            margin-bottom: 10px;
        }

        .login form .links a {
            color: #fff;
            font-weight: 100;
            font-size: 0.7rem;
        }

        .error {
            margin-bottom: 10px;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login">
            <h1>
                Welcome to <span class="theme-color">
                    Appanage Mart
                </span>
            </h1>
            <p>
                Login into world largest online marketplace Appanage Mart, where you can buy or sell everything.<br />
                please login with your email id and password
            </p>
            <form action="login.php" method="post">
                <div class="grid">
                    <div class="input-box">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="input-box">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="rembar">
                    <input type="checkbox" id="remember" name="remember" />
                    <label for="remember">Remember me</label>
                </div>
                <div class="error">
                    <?php echo $error; ?>
                </div>
                <div class="links">
                    <a href="forgetPassword.php">Forgot Password?</a>
                </div>
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </div>
</body>

</html>