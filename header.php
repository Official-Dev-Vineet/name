<!-- Header Section -->
<?php
include('conne.php');
if (isset($_POST['signUp'])) {
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
    $name = $_POST['fullName'];
    $Date = date("Y-m-d");
    $mno = $_POST['phone'];
    $email = $_POST['EmailId'];
    $password = $_POST['password'];
    $cname = $_POST['CompanyName'];
    $cemail = $_POST['cemail'];
    $ccategory = $_POST['CompanyCategory'];
    $csub = $_POST['subCat'];
    $clocation = $_POST['CompanyLocation'];
    $ccity = $_POST['CompanyCity'];
    $cpincode = $_POST['CompanyPincode'];
    $cstate = $_POST['State'];
    $ccountry = $_POST['Country'];
    $ctype = $_POST['CompanyType'];
    $sql = "INSERT INTO `register`(`RegistrationId`, `FirstName`, `DateOfRegistration`, `MobileNo`, `EmailId`,  `CompanyOwner`, `CompanyCategory`, `CompanySub`, `CompanyName`,`CompanyLocation`, `CompanyCity`, `CompanyPincode`, `State`, `Country`, `CompanyType`,`UserId`, `Password`) VALUES ('$newString','$name','$Date','$mno','$email','$name','$ccategory','$csub','$cname','$clocation','$ccity','$cpincode','$cstate','$ccountry','$ctype','$email','$password')";
    $result = mysqli_query($sql_con, $sql);
    if ($result) {
        echo '<script>alert("Registered Successfully")</script>';
        echo '<script>open = null;</script>';
    }
}
// login form 
if (isset($_POST['signIn'])) {
    $email = $_POST['emailLogin'];
    $password = $_POST['passwordPassword'];
    // fetch details from register database
    $emailCheck = "SELECT * FROM register WHERE UserId='$email'";
    $result = mysqli_query($sql_con, $emailCheck);
    $emailCount = mysqli_num_rows($result);
    if ($emailCount > 0) {
        $query = "SELECT * FROM register WHERE `UserId`= '$email' AND `Password` = '$password' LIMIT 1";
        $result = mysqli_query($sql_con, $query);
        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            // set session
            session_start();
            $_SESSION['RegistrationId'] = $user['RegistrationId'];
            $category = $user['CompanyCategory'];
            $category = strtoupper($category) . " " . "MASTER";
            // redirect
            echo "<script>location.href='$category/template/index.php'</script>";
            exit();
        } else {
            $error = "Invalid Email or Password";
        }
    } else {
        $error = "Email Address Does Not Exist";
    }
}
?>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap");

    :root {
        --color-white-100: hsl(206, 5%, 100%);
        --color-white-200: hsl(206, 5%, 90%);
        --color-white-300: hsl(206, 5%, 80%);
        --color-white-400: hsl(206, 5%, 65%);
        --color-white-500: hsl(206, 5%, 50%);
        --color-black-100: hsl(213, 20%, 10%);
        --color-black-200: hsl(213, 23%, 8%);
        --color-black-300: hsl(214, 21%, 6%);
        --color-black-400: hsl(210, 21%, 6%);
        --color-black-500: hsl(216, 22%, 4%);
        --color-black-600: hsl(220, 18%, 3%);
        --color-black-700: hsl(220, 27%, 2%);
        --color-black-800: hsl(180, 20%, 1%);
        --color-blue-100: hsl(214, 95%, 93%);
        --color-blue-200: hsl(213, 97%, 87%);
        --color-blue-300: hsl(212, 96%, 78%);
        --color-blue-400: hsl(213, 94%, 68%);
        --color-blue-500: hsl(217, 91%, 60%);
        --color-blue-600: hsl(221, 83%, 53%);
        --color-blue-700: hsl(224, 76%, 48%);
        --color-blue-800: hsl(226, 71%, 40%);
        --color-blue-900: hsl(224, 64%, 33%);
        --shadow-small: 0 1px 3px 0 rgba(0, 0, 0, 0.1),
            0 1px 2px 0 rgba(0, 0, 0, 0.06);
        --shadow-medium: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
            0 2px 4px -1px rgba(0, 0, 0, 0.06);
        --shadow-large: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
            0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }

    *,
    *::before,
    *::after {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        list-style: none;
        list-style-type: none;
        text-decoration: none;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-rendering: optimizeLegibility;
        outline: none;

    }

    html {
        font-size: 100%;
        box-sizing: inherit;
        scroll-behavior: smooth;
        height: -webkit-fill-available;
    }

    a,
    button {
        cursor: pointer;
        border: none;
        outline: none;
        user-select: none;
        background: none;
        box-shadow: none;
        text-decoration: none;
    }

    img,
    video {
        display: block;
        max-width: 100%;
        height: auto;
        object-fit: cover;
    }

    .section {
        margin: 0 auto;
        padding: 6rem 0 1rem;
    }

    .container {
        max-width: 95rem;
        height: auto;
        margin: 0 auto;
        padding: 0 1.25rem;
    }

    .centered {
        text-align: center;
        vertical-align: middle;
        margin-bottom: 1rem;
    }

    .heading-xl {
        font-family: inherit;
        font-size: clamp(2.648rem, 6vw, 4.241rem);
        font-weight: 700;
        line-height: 1.15;
        letter-spacing: -1px;
    }

    .heading-lg {
        font-family: inherit;
        font-size: clamp(2.179rem, 5vw, 3.176rem);
        font-weight: 700;
        line-height: 1.15;
        letter-spacing: -1px;
    }

    .heading-md {
        font-family: inherit;
        font-size: clamp(1.794rem, 4vw, 2.379rem);
        font-weight: 700;
        line-height: 1.25;
        letter-spacing: -1px;
    }

    .heading-sm {
        font-family: inherit;
        font-size: clamp(1.476rem, 3vw, 1.782rem);
        font-weight: 600;
        line-height: 1.5;
    }

    .heading-xs {
        font-family: inherit;
        font-size: clamp(1.215rem, 2vw, 1.335rem);
        font-weight: 500;
        line-height: 1.5;
    }

    .paragraph {
        font-family: inherit;
        font-size: clamp(1rem, 2vw, 1.125rem);
        text-wrap: balance;
        color: var(--color-white-200);
    }

    .btn {
        display: inline-block;
        font-family: inherit;
        font-size: 1rem;
        font-weight: 500;
        line-height: 1.5;
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
        user-select: none;
        outline: none;
        border: none;
        border-radius: 0.25rem;
        text-transform: unset;
        transition: all 0.3s ease-in-out;
    }

    .btn-inline {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        column-gap: 0.5rem;
    }

    .btn-darken {
        padding: 0.75rem 2rem;
        color: var(--color-white-100);
        background-color: var(--color-black-200);
        box-shadow: var(--shadow-medium);
    }

    .btn-neutral {
        padding: 0.75rem 2rem;
        color: var(--color-black-500);
        background-color: var(--color-white-100);
        box-shadow: var(--shadow-medium);
    }

    .header {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 100;
        width: 100%;
        height: auto;
        margin: 0 auto;
        transition: all 0.35s ease;
    }

    .header.on-scroll {
        background: var(--brandColor);
        box-shadow: var(--shadow-medium), 0 1px 0 1px var(--color-white-100);
    }

    .navbar {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: flex-start;
        column-gap: 1.25rem;
        width: 100%;
        height: 4.25rem;
        margin: 0 auto;
    }

    .brand {
        font-family: inherit;
        font-size: 1.6rem;
        font-weight: 600;
        line-height: 1.5;
        letter-spacing: -1px;
        color: var(--color-white-100);
        text-transform: uppercase;
    }

    .menu {
        position: fixed;
        top: -100%;
        left: 0;
        width: 100%;
        height: auto;
        padding: 4rem 0 3rem;
        overflow: hidden;
        background-color: var(--brandColor);
        box-shadow: var(--shadow-medium);
        transition: all 0.4s ease-in-out;
    }

    .menu.is-active {
        top: 0;
        width: 100%;
        height: auto;
    }

    .menu-inner {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        row-gap: 1.25rem;
    }

    .menu-link {
        font-family: inherit;
        font-size: 1rem;
        font-weight: 500;
        line-height: 1.5;
        color: var(--color-white-100);
        text-transform: uppercase;
        transition: all 0.3s ease;
        position: relative;
    }

    .menu-link::after {
        content: "";
        position: absolute;
        left: 50%;
        top: 100%;
        transform-origin: center;
        width: 0;
        transform: translateX(-50%);
        height: 3px;
        border-radius: 5px;
        background-color: var(--color-white-100);
        transition: all 0.3s ease-in-out;
    }

    .menu-link:hover::after {
        width: 100%
    }

    .menu-block {
        display: inline-block;
        font-family: inherit;
        font-size: 0.875rem;
        font-weight: 500;
        line-height: 1.25;
        user-select: none;
        white-space: nowrap;
        text-align: center;
        margin-left: auto;
        padding: 0.8rem 2rem;
        border-radius: 3rem;
        text-transform: capitalize;
        color: #f5f5f5;
        background-color: var(--brandColor);
        box-shadow: var(--shadow-medium);
        transition: all 0.3s ease-in-out;
        /* add border animation  */
        transition: all 0.3s ease-in-out;
    }

    .menu-link:hover {
        color: #f5f5f5;
    }

    .menu-block:hover {
        color: var(--brandColor);
        font-weight: 700;
        background-color: #f5f5f5;
    }

    @media only screen and (min-width: 48rem) {
        .menu {
            position: relative;
            top: 0;
            width: auto;
            height: auto;
            padding: 0rem;
            margin-left: auto;
            background: none;
            box-shadow: none;
        }

        .menu-inner {
            display: flex;
            flex-direction: row;
            column-gap: 2rem;
            margin: 0 auto;
        }

        .menu-link {
            text-transform: capitalize;
        }

        .menu-block {
            margin-left: 2rem;
        }
    }

    .burger {
        position: relative;
        display: block;
        cursor: pointer;
        user-select: none;
        order: -1;
        z-index: 10;
        width: 1.6rem;
        height: 1.15rem;
        border: none;
        outline: none;
        background: none;
        visibility: visible;
        transform: rotate(0deg);
        transition: 0.35s ease;
    }

    @media only screen and (min-width: 48rem) {
        .burger {
            display: none;
            visibility: hidden;
        }
    }

    .burger-line {
        position: absolute;
        display: block;
        left: 0;
        width: 100%;
        height: 2px;
        border: none;
        outline: none;
        opacity: 1;
        border-radius: 1rem;
        transform: rotate(0deg);
        background-color: var(--color-white-100);
        transition: 0.25s ease-in-out;
    }

    .burger-line:nth-child(1) {
        top: 0px;
    }

    .burger-line:nth-child(2) {
        top: 0.5rem;
        width: 70%;
    }

    .burger-line:nth-child(3) {
        top: 1rem;
    }

    .burger.is-active .burger-line:nth-child(1) {
        top: 0.5rem;
        transform: rotate(135deg);
    }

    .burger.is-active .burger-line:nth-child(2) {
        opacity: 0;
        visibility: hidden;
    }

    .burger.is-active .burger-line:nth-child(3) {
        top: 0.5rem;
        transform: rotate(-135deg);
    }

    .banner-column {
        position: relative;
        display: grid;
        align-items: center;
        row-gap: 3rem;
    }

    header nav .logo-container {
        width: 100px
    }

    header nav .logo {
        width: 100%;
        height: 100%;
        object-fit: contain;
        filter: drop-shadow(0 0 10px rgba(0, 0, 0, 0.9));
        /* border-radius: 50px 80px 30px 40px; */
    }

    .topUpForm,
    .bottomUpForm {
        background-color: rgba(0, 0, 0, 0.9);
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        overflow: auto;
        place-items: center;
        z-index: 9999;
    }

    .topUpForm .container,
    .bottomUpForm .container {
        max-width: 600px;
        position: relative;
        padding: 1rem;
        backdrop-filter: blur(5px);
        background-color: rgba(250, 250, 250, 0.9);
        border-radius: 1rem;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);
    }

    @media screen and (max-width:750px) {

        .topUpForm .container,
        .bottomUpForm .container {
            border-radius: 0;
        }
    }

    .topUpForm .container #close,
    .bottomUpForm .container #closeLogin {
        position: absolute;
        top: 0;
        right: 0;
        padding: 0.5rem;
        font-size: 1.5rem;
    }

    .topUpForm .container legend,
    .bottomUpForm .container legend {
        font-weight: 700;
    }

    .topUpForm .container label,
    .bottomUpForm .container label {
        font-weight: 600;
        color: #000;
    }

    .topUpForm .container .input-box,
    .bottomUpForm .container .input-box {
        margin-bottom: 0.3rem;
        display: grid;
        grid-template-columns: 1fr 2fr;
    }

    .topUpForm .container .input-box input,
    .bottomUpForm .container .input-box input {
        border: none;
        background-color: transparent;
        border-bottom: 1px dotted #000;
        color: #000;
        font-weight: 600;
    }

    .topUpForm .container .input-box input::placeholder,
    .bottomUpForm .container .input-box input::placeholder {
        color: rgba(0, 0, 0, 0.8);
    }

    .topUpForm * {
        background-color: transparent;
    }

    .topUpForm .submitBtn,
    .bottomUpForm .submitBtn {
        background-color: var(--brandColor);
        color: #fff;
        font-weight: 600;
        padding: 0.5rem;
        border-radius: 0.3rem;
    }
</style>
<header class="header" id="header">
    <nav class="navbar container">
        <a href="/" class="brand logo-container"><img src="images/AppanageLogo2.png" alt="appanage mart logo" class="logo"></a>
        <div class="burger" id="burger">
            <span class="burger-line"></span>
            <span class="burger-line"></span>
            <span class="burger-line"></span>
        </div>
        <div class="menu" id="menu">
            <ul class="menu-inner">
                <li class="menu-item"><a href="/" class="menu-link">Home</a></li>
                <li class="menu-item"><a href="howitworks.php" class="menu-link">How it works</a></li>
                <li class="menu-item joinUs" id="joinUs"><span class="menu-link" style="cursor: pointer;">Join us</span></li>
            </ul>
        </div>
        <a class="menu-block" id="logIn" onclick="openForm()">Login</a>
    </nav>
</header>
<section class="topUpForm">
    <div class="container">
        <i class="fa fa-close" style="color: #a30047;" onclick="closeForm()" id="close"></i>
        <div class="signUp">
            <h1 style="color: var(--brandColor);text-align: center;">Sign Up</h1>
            <p style="text-align: center;font-weight: 600;margin-top: 0.5rem;">
                Join us and start connecting to world's largest marketplace.
            </p>
            <form method="post">
                <div class="grid">
                    <fieldset>
                        <legend> Personal Details </legend>
                        <div class="input-box">
                            <label for="fullName"> Full Name</label>
                            <input type="text" name="fullName" id="fullName" required placeholder="Enter Full Name">
                        </div>
                        <div class="input-box">
                            <label for="EmailId"> Email ID</label>
                            <input type="email" name="EmailId" id="EmailId" required placeholder="Enter Email Id">
                        </div>
                        <div class="input-box">
                            <label for="Password"> Password</label>
                            <input type="password" name="password" id="Password" required placeholder="Enter Password">
                        </div>
                        <div class="input-box">
                            <label for="phone"> Phone Number</label>
                            <input type="text" name="phone" id="phone" required placeholder="Enter Phone Number">
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend> Company Details </legend>
                        <div class="input-box">
                            <label for="cname"> Company Name </label>
                            <input type="text" name="CompanyName" id="cname" required placeholder="Company name">
                        </div>
                        <div class="input-box">
                            <label for="cemail"> Company Email ID</label>
                            <input type="email" name="cemail" id="cemail" required placeholder="Company Email Id">
                        </div>
                        <div class="input-box">
                            <label for="ccategory"> Company Category</label>
                            <select name="CompanyCategory" id="ccategory" required title="Company Category" required>
                                <?php
                                $result = mysqli_query($sql_con, "SELECT * FROM `product_category`");
                                while ($row = mysqli_fetch_array($result)) {
                                ?>
                                    <option value="<?php echo $row['ProductCategory']; ?>"><?php echo $row['ProductCategory']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="input-box">
                            <label for="subCat"> Company Sub Category</label>
                            <input type="text" name="subCat" id="subCat" required placeholder="Company Sub Category">
                        </div>
                        <div class="input-box">
                            <label for="CompanyCategory"> Company location</label>
                            <input type="text" name="CompanyLocation" required id="CompanyCategory" placeholder="Company location">
                        </div>
                        <div class="input-box">
                            <label for="CompanyCity">
                                Company City
                            </label>
                            <input type="text" name="CompanyCity" required id="CompanyCity" placeholder="Company City">
                        </div>
                        <div class="input-box">
                            <label for="CompanyPincode">
                                Company PinCode
                            </label>
                            <input type="text" name="CompanyPincode" required id="CompanyPincode" placeholder="Company Pincode">
                        </div>
                        <div class="input-box">
                            <label for="CompanyState">
                                Company State
                            </label>
                            <input type="text" name="State" required id="CompanyState" placeholder="Company State">
                        </div>
                        <div class="input-box">
                            <label for="CompanyState">
                                Company Country
                            </label>
                            <input type="text" name="Country" required id="CompanyCountry" placeholder="Company Country">
                        </div>
                        <div class="input-box">
                            <label for="CompanyCity">
                                Company Type
                            </label>
                            <select title="Company Type" name="CompanyType" required style="font-size: 0.8rem;">
                                <option value="Companies Limited by Shares"> Company Limited by Shares</option>
                                <option value="Companies Limited by Guarantee">Company Limited by Guarantee</option>
                                <option value="Unlimited Company">Unlimited Company</option>
                                <option value="One Person Company"> One Person Company</option>
                                <option value="Private Company"> Private Company</option>
                                <option value="Public Company"> Public Company</option>
                                <option value="Holding and Subsidiary Company"> Holding and Subsidiary Company</option>
                                <option value="Associate Company"> Associate Company</option>
                                <option value="Company in terms of Access to Capital"> Company in terms of Access to Capital
                                </option>
                                <option value="Government Company"> Government Company</option>
                                <option value="Foreign Company"> Foreign Company</option>
                                <option value="Charitable Company"> Charitable Company</option>
                                <option value="Dormant Company"> Dormant Company</option>
                                <option value="Nidhi Company"> Nidhi Company</option>
                                <option value="Public Financial Institutions"> Public Financial Institutions</option>
                                <option value="Private Financial Institutions"> Private Financial Institutions</option>
                                <option value="other"> other</option>
                            </select>
                        </div>
                    </fieldset>
                    <input type="submit" name="signUp" value="Sign Up" class="submitBtn">
                </div>
            </form>
        </div>
    </div>
</section>
<section class="bottomUpForm">
    <div class="container">
        <i class="fa fa-close" style="color: #a30047;" onclick="closeFormLogin()" id="closeLogin"></i>
        <form method="post">
            <div class="signIn">
                <h1 style="color: var(--brandColor);text-align: center;">Sign In</h1>
                <p style="text-align: center;font-weight: 600;margin-top: 0.5rem;">
                    Welcome back 😊 in world's largest marketplace.
                </p>
                <div class="input-box">
                    <label for="emailLogin">Email ID</label>
                    <input type="email" name="emailLogin" id="emailLogin" placeholder="Enter Email Id">
                </div>
                <div class="input-box">
                    <label for="passwordLogin">Password</label>
                    <input type="password" name="passwordPassword" id="passwordLogin" placeholder="Enter Password">
                </div>
                <input type="submit" name="login" value="Sign In" class="submitBtn">
            </div>
        </form>
    </div>
</section>
<!-- Main Section -->