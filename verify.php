<?php
include('conne.php');
session_start();
if(!isset($_POST['verify'])){
  if($_SERVER['HTTP_REFERER'] == "https://appanage-mart.com/customer-registration.php"){
}else{
  header('location:index.php');
}
}
if (isset($_POST['verify'])) {
    $email = $_SESSION['email'];
    $RegistrationId = $_SESSION['RegistrationId'];
    $otp = $_SESSION['otp'];
    $verify = $_POST['otp'];
    if ($verify == $otp) {
        $sql = "UPDATE register SET `Status` = 'verified' WHERE UserId = '$email' AND RegistrationId = '$RegistrationId'";
        $result = mysqli_query($sql_con, $sql);
        if ($result) {
            header('location:login.php');
        } else {
            $error = "Something went wrong";
        }
    } else {
        $error = "Wrong OTP";
    }
}
?>
<DocType html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- CSS only -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet" />
        <title>Verify your registration || Join World Largest Online Marketplace</title>
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
                font-family: "Open Sans";
                font-family: "Poppins", sans-serif;

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
                max-width: 450px;
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
            }

            .login p {
                text-align: center;
                color: #fff;
                margin-bottom: 1rem;
            }

            .login form {
                width: 100%;
                height: 100%;
                outline: none;
                border: none;
            }

            .login .grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
                column-gap: 30px;
            }

            .login form .input-box {
                width: 100%;
                position: relative;
                margin-bottom: 30px;
                display: flex;
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
                margin-bottom: 30px;
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
            }

            .login form .link{
                color: #fff;
                font-weight: 700;
                font-size: 1rem;
                margin-bottom: 1rem;
              display:block;
              text-decoration:underline;
            }
          .error{
            animation:left 1.5s linear;
            transform:translateX(0)
          }
          @keyframes left{
            0%{
              transform:translateX(-10px)
            }
            50%{
              transform:translateX(10px)
            }
            100%{
              transform:translateX(0)
            }
          }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="login">
                <form method="post">
                    <h1>
                        Verify Your Email Id
                    </h1>
                    <p>Enter the OTP sent to your email</p>
                    <div>
                        <?php
                        if ($error) {
                            echo '<p class="error">' . $error . '</p>';
                        }
                        ?>
                    </div>
                    <div class="input-box">
                        <input type="text" name="RegistrationId" placeholder="Enter Registration Id" value="<?php echo $_SESSION['RegistrationId']; ?>" readonly>
                    </div>
                    <div class="input-box">
                        <input type="text" name="email" placeholder="Enter Email Id" value="<?php echo $_SESSION['email']; ?>" readonly>
                    </div>
                    <div class="input-box">
                        <input type="text" name="otp" placeholder="Enter OTP" maxlength="6" required>
                    </div>
                    <div class="input-box">
                        <input type="submit" name="verify" value="Verify">
                    </div>
    </body>
    </html>