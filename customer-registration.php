<?php
include('conne.php');
$error = "";
if (isset($_POST["register"])) {
    $firstName = $_POST["FirstName"];
    $lastName = $_POST["LastName"];
    $emailId = $_POST["EmailId"];
    $mobileNo = $_POST["MobileNo"];
    $password = $_POST["Password"];
    $referenceNumber = $_POST["ReferenceNumber"];
    $companyOwner = $_POST["CompanyOwner"];
    $companyCategory = $_POST["CompanyCategory"];
    $companySub = $_POST["CompanySub"];
    $companyName = $_POST["CompanyName"];
    $companyDescription = $_POST["CompanyDescription"];
    $companyLocation = $_POST["CompanyLocation"];
    $companyCity = $_POST["CompanyCity"];
    $companyState = $_POST["State"];
    $companyPincode = $_POST["CompanyPincode"];
    $companyCountry = $_POST["Country"];
    $companyType = $_POST["CompanyType"];
    $gstRegister = $_POST["GstRegister"];
    $gstNumber = $_POST["GstNumber"];
    $companyLogo = $_FILES["CompanyLogo"]["name"];
    $tmp_name = $_FILES["CompanyLogo"]["tmp_name"];
    $companyLogo = date('d-m-Y') . "-" . $companyLogo;
    move_uploaded_file($tmp_name, "images/" . $companyLogo);
    $userId = $_POST["UserId"];
    $accountType = $_POST["AccountType"];
    $accountNumber = $_POST["AccountNumber"];
    $accountHolderName = $_POST["AccountHolderName"];
    $status = "Not verified";
    $emailCheck = "SELECT  * FROM  register where UserId ='$emailId'";
    $query = mysqli_query($sql_con, $emailCheck);
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_array($query);
        $email = $row["EmailId"];
        $status = $row["Status"];
        if ($status == "Not verified") {
            $error = "Email already exists and not verified";
            $otp = rand(100000, 999999);
            $error = "";
            $to = $userId;
            $subject = "Verify your Registration with Appanage Mart";
            $txt = "Thanks for registering with us. Your Registration ID is <b>$newString</b>. Please verify your registration by enter this code in appanage mart verification page. your code is <b>" . $otp . "</b>";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: info@appanage-mart.com" . "\r\n" .
                "CC: info@appanage-mart.com";
            if (mail($to, $subject, $txt, $headers)) {
                session_start();
                $_SESSION['email'] = $userId;
                $_SESSION['otp'] = $otp;
                $_SESSION['RegistrationId'] = $newString;
                $success = "Please Verify Your Email Id";
            }
        } else {
            $error = "Email already exists, please login to continue";
        }
    } else {
        $fetchLastRegisteredID = "SELECT Sno FROM `register` ORDER BY Sno DESC LIMIT 1";
        $query = mysqli_query($sql_con, $fetchLastRegisteredID);
        $row = mysqli_fetch_array($query)["Sno"];
        $findLastRegisterId = "SELECT RegistrationId from register where Sno=$row";
        $query = mysqli_query($sql_con, $findLastRegisterId);
        $registerID = mysqli_fetch_array($query)["RegistrationId"];
        $string = $registerID;
        // Extract the numeric part
        $numericPart = substr($string, 4);
        // Increment the numeric part
        $numericPart = str_pad((int)$numericPart + 1, strlen($numericPart), '0', STR_PAD_LEFT);
        // Combine the numeric part with the rest of the string
        $newString = substr($string, 0, 4) . $numericPart;
        $firstName = mysqli_real_escape_string($sql_con, $firstName);
        $lastName = mysqli_real_escape_string($sql_con, $lastName);
        $emailId = mysqli_real_escape_string($sql_con, $emailId);
        $mobileNo = mysqli_real_escape_string($sql_con, $mobileNo);
        $password = mysqli_real_escape_string($sql_con, $password);
        $referenceNumber = mysqli_real_escape_string($sql_con, $referenceNumber);
        $companyOwner = mysqli_real_escape_string($sql_con, $companyOwner);
        $companyCategory = mysqli_real_escape_string($sql_con, $companyCategory);
        $companySub = mysqli_real_escape_string($sql_con, $companySub);
        $companyName = mysqli_real_escape_string($sql_con, $companyName);
        $companyDescription = mysqli_real_escape_string($sql_con, $companyDescription);
        $companyLocation = mysqli_real_escape_string($sql_con, $companyLocation);
        $companyCity = mysqli_real_escape_string($sql_con, $companyCity);
        $companyState = mysqli_real_escape_string($sql_con, $companyState);
        $companyPincode = mysqli_real_escape_string($sql_con, $companyPincode);
        $companyCountry = mysqli_real_escape_string($sql_con, $companyCountry);
        $companyType = mysqli_real_escape_string($sql_con, $companyType);
        $gstRegister = mysqli_real_escape_string($sql_con, $gstRegister);
        $gstNumber = mysqli_real_escape_string($sql_con, $gstNumber);
        $companyLogo = mysqli_real_escape_string($sql_con, $companyLogo);
        $userId = mysqli_real_escape_string($sql_con, $userId);
        $accountType = mysqli_real_escape_string($sql_con, $accountType);
        $accountNumber = mysqli_real_escape_string($sql_con, $accountNumber);
        $accountHolderName = mysqli_real_escape_string($sql_con, $accountHolderName);
        $status = mysqli_real_escape_string($sql_con, $status);
        $insertData = "INSERT INTO `register`(`RegistrationId`,`FirstName`, `LastName`, `MobileNo`, `EmailId`, `ReferenceNumber`, `CompanyOwner`, `CompanyCategory`, `CompanySub`, `CompanyName`, `CompanyDescription`, `CompanyLocation`, `CompanyCity`, `CompanyPincode`, `State`, `Country`, `CompanyType`, `GstRegister`, `GstNumber`, `CompanyLogo`, `UserId`, `Password`, `ReEnteredPassword`, `AccountType`, `AccountNumber`, `AccountHolderName`, `Status`) VALUES ('$newString','$firstName','$lastName','$mobileNo','$emailId','$referenceNumber','$CompanyOwner','$companyCategory','$companySub','$companyName','$companyDescription','$companyLocation','$companyCity','$companyPincode','$companyState','$companyCountry','$companyType','$gstRegister','$gstNumber','$companyLogo','$userId','$password','$reEnteredPassword','$accountType','$accountNumber','$accountHolderName','$status')";
        $result = mysqli_query($sql_con, $insertData);
        if ($result) {
            $otp = rand(100000, 999999);
            $error = "";
            $to = $userId;
            $subject = "Verify your Registration with Appanage Mart";
            $txt = "Thanks for registering with us. Your Registration ID is <b>$newString</b>. Please verify your registration by enter this code in appanage mart verification page. your code is <b>" . $otp . "</b>";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: info@appanage-mart.com" . "\r\n" .
                "CC: info@appanage-mart.com";
            if (mail($to, $subject, $txt, $headers)) {
                session_start();
                $_SESSION['email'] = $userId;
                $_SESSION['otp'] = $otp;
                $_SESSION['RegistrationId'] = $newString;
                $success = "Registration successfully";
            }
        } else {
            $error = "Something went wrong";
        }
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
        <title>Appanage Mart Registration || Join World Largest Online Marketplace</title>
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
                max-width: 850px;
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

            .login form .links a {
                color: #fff;
                font-weight: 100;
                font-size: 0.7rem;
            }

            select {
                background-color: rgba(255, 255, 255, 0.2);
                width: 100%;
                padding: 1rem;
                border-radius: 10px;
                color: #fff;
            }

            select option {
                color: #111;
                font-size: clamp(0.8rem, 2vw, 1rem);
            }

            select:focus {
                outline: none;
            }
        </style>
    </head>

    <body>
        <div class="container">

            <div class="login">
                <h1>Join Us</h1>
                <p class="desc">
                    Create a new account to get started
                </p>
                <form method="post" enctype="multipart/form-data" autocomplete="on">
                    <div class="grid">
                        <div class="input-box">
                            <input type="text" placeholder="First Name" name="FirstName" value="<?= $firstName ?>" required>
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Last Name" name="LastName" value="<?= $lastName ?>" required>
                        </div>
                        <div class="input-box">
                            <input type="text" pattern="[0-9]{10}" placeholder="Mobile no" name="MobileNo" value="<?= $mobileNo ?>" required>
                        </div>
                        <div class="input-box">
                            <input type="email" placeholder="Email" name="EmailId" value="<?= $emailId ?>" required>
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Email Id for Verification" name="UserId" value="<?= $userId ?>" required>
                        </div>
                        <div class="input-box">
                            <input type="password" placeholder="Password" required value="<?= $password ?>" name="Password" <?php if (!$password == "") echo "type=text"; ?>>
                        </div>
                        <h3 style="grid-column: 1/-1;color:#fff;margin-bottom: 1rem;">
                            Company Details
                        </h3>
                        <div class="input-box">
                            <input type="text" placeholder="Reference Number" name="ReferenceNumber" value="<?= $referenceNumber ?>">
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Owner Name" name="CompanyOwner" value="<?= $companyOwner ?>" required>
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Company Name" name="CompanyName" value="<?= $companyName ?>" required>
                        </div>
                        <div class="input-box">
                            
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Company sub-Category" name="CompanySub" value="<?= $companySub ?>">
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Company Description" required name="CompanyDescription" value="<?= $companyDescription ?>">
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Company Location" required value="<?= $companyLocation ?>" name="CompanyLocation">
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Company city" value="<?= $companyCity ?>" name="CompanyCity">
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Company Pincode" value="<?= $companyPincode ?>" required name="CompanyPincode">
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Company state" required value="<?= $companyState ?>" name="State">
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Company Country" required value="<?= $companyCountry ?>" name="Country">
                        </div>
                        <div class="input-box">
                            <select title="Company Type" name="CompanyType" required>
                                <option value="Companies Limited by Shares" <?= $companyType == 'Companies Limited by Shares' ? 'selected' : '' ?>> Company Limited by Shares</option>
                                <option value="Companies Limited by Guarantee" <?= $companyType == 'Companies Limited by Guarantee' ? 'selected' : '' ?>>Company Limited by Guarantee</option>
                                <option value="Unlimited Company" <?= $companyType == 'Unlimited Company' ? 'selected' : '' ?>>Unlimited Company</option>
                                <option value="One Person Company" <?= $companyType == 'One Person Company' ? 'selected' : '' ?>> One Person Company</option>
                                <option value="Private Company" <?= $companyType == 'Private Company' ? 'selected' : '' ?>> Private Company</option>
                                <option value="Public Company" <?= $companyType == 'Public Company' ? 'selected' : '' ?>> Public Company</option>
                                <option value="Holding and Subsidiary Company" <?= $companyType == 'Holding and Subsidiary Company' ? 'selected' : '' ?>> Holding and Subsidiary Company</option>
                                <option value="Associate Company" <?= $companyType == 'Associate Company' ? 'selected' : '' ?>> Associate Company</option>
                                <option value="Company in terms of Access to Capital"> Company in terms of Access to Capital
                                </option>
                                <option value="Government Company" <?= $companyType == 'Government Company' ? 'selected' : '' ?>> Government Company</option>
                                <option value="Foreign Company" <?= $companyType == 'Foreign Company' ? 'selected' : '' ?>> Foreign Company</option>
                                <option value="Charitable Company" <?= $companyType == 'Charitable Company' ? 'selected' : '' ?>> Charitable Company</option>
                                <option value="Dormant Company" <?= $companyType == 'Dormant Company' ? 'selected' : '' ?>> Dormant Company</option>
                                <option value="Nidhi Company" <?= $companyType == 'Nidhi Company' ? 'selected' : '' ?>> Nidhi Company</option>
                                <option value="Public Financial Institutions" <?= $companyType == 'Public Financial Institutions' ? 'selected' : '' ?>> Public Financial Institutions</option>
                                <option value="Private Financial Institutions" <?= $companyType == 'Private Financial Institutions' ? 'selected' : '' ?>> Private Financial Institutions</option>
                                <option value="other" <?= $companyType == 'other' ? 'selected' : '' ?>> other</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <select title="Gst" name="GstRegister" required>
                                <option value="Yes" <?= $gstRegister == 'Yes' ? 'selected' : '' ?>>Yes</option>
                                <option value="No" <?= $gstRegister == 'No' ? 'selected' : '' ?>>No</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Gst Number" value="<?= $gstNumber ?>" name="GstNumber">
                        </div>
                        <h4 style="grid-column: 1/-1;color:#fff;margin-bottom: 1rem;">
                            Select Company Logo
                        </h4>
                        <div class="input-box">
                            <input type="file" name="CompanyLogo" placeholder="Company Logo" value="<?= $companyLogo ?>" required accept="image/*" />
                        </div>
                        <h3 style="grid-column: 1/-1;color:#fff;margin-bottom: 1rem;">
                            Bank Account Details
                        </h3>
                        <div class="input-box">
                            <select title="Account Type" name="AccountType" required>
                                <optgroup label="Account Type" style="color:#111">
                                    <option value="Current Account" <?= $accountType == 'Current Account' ? 'selected' : '' ?>>Current Account</option>
                                    <option value="Fixed Deposit Account" <?= $accountType == 'Fixed Deposit Account' ? 'selected' : '' ?>>Fixed Deposit Account</option>
                                    <option value="Recurring Deposit Account" <?= $accountType == 'Recurring Deposit Account' ? 'selected' : '' ?>>Recurring Deposit Account</option>
                                    <option value="Joint Account" <?= $accountType == 'Joint Account' ? 'selected' : '' ?>>Joint Account</option>
                                    <option value="Savings Account" <?= $accountType == 'Savings Account' ? 'selected' : '' ?>>Savings Account</option>
                                    <option value="NRI Account" <?= $accountType == 'NRI Account' ? 'selected' : '' ?>>NRI Account</option>
                                    <option value="Other" <?= $accountType == 'Other' ? 'selected' : '' ?>>Other</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="input-box">
                            <input type="text" name="AccountNumber" value="<?= $accountNumber ?>" placeholder="Account Number" />
                        </div>
                        <div class="input-box">
                            <input type="text" name="AccountHolderName" value="<?= $accountHolderName ?>" placeholder="Account holder name" />
                        </div>
                    </div>
                    <button type="submit" name="register">Register</button>
                    <div class="links" style="margin-bottom: 1rem;color:#fff">
                        <?php if (isset($error)) {
                            echo $error;
                        }
                        if (isset($success)) {
                            echo $success;
                            echo '<br>';
                            echo "We sent an OTP to your email. Please verify it";
                            echo '<a href="verify.php" class="success"> Go to Verify page</a>';
                        } ?>
                    </div>
                    <div class="links">
                        <a href="#">Forgot password</a>
                        <a href="login.php">have an account? Please login</a>
                    </div>
                </form>
            </div><!-- End Login -->
        </div>
    </body>

    </html>