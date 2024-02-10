<?php
$sql_con = mysqli_connect('localhost', 'root', '', 'appange_appanag');

if (isset($_GET['RegistrationId']) && !empty($_GET['Password'])) {
    $user = $_GET['RegistrationId'];
    $pass = $_GET['Password'];
    $gor = $_GET['CompanyCategory'];
    $result = mysqli_query($sql_con, "SELECT * FROM register where RegistrationId = '$user' and Password = '$pass'");
}
?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style type="text/css">
    body {
        background: #e32636;
    }

    .emp-profile {
        padding: 3%;
        margin-top: 3%;
        margin-bottom: 3%;
        border-radius: 0.5rem;
        background: #fff;
    }

    .profile-img {
        text-align: center;
    }

    .profile-img img {
        width: 70%;
        height: 100%;
    }

    .profile-img .file {
        position: relative;
        overflow: hidden;
        margin-top: -20%;
        width: 70%;
        border: none;
        border-radius: 0;
        font-size: 15px;
        background: #212529b8;
    }

    .profile-img .file input {
        position: absolute;
        opacity: 0;
        right: 0;
        top: 0;
    }

    .profile-head h5 {
        color: #333;
    }

    .profile-head h6 {
        color: #0062cc;
    }

    .profile-edit-btn {
        border: none;
        border-radius: 1.5rem;
        width: 70%;
        padding: 2%;
        font-weight: 600;
        color: #6c757d;
        cursor: pointer;
    }

    .proile-rating {
        font-size: 12px;
        color: #818182;
        margin-top: 5%;
    }

    .proile-rating span {
        color: #495057;
        font-size: 15px;
        font-weight: 600;
    }

    .profile-head .nav-tabs {
        margin-bottom: 5%;
    }

    .profile-head .nav-tabs .nav-link {
        font-weight: 600;
        border: none;
    }

    .profile-head .nav-tabs .nav-link.active {
        border: none;
        border-bottom: 2px solid #0062cc;
    }

    .profile-work {
        padding: 14%;
        margin-top: -15%;
    }

    .profile-work p {
        font-size: 12px;
        color: #818182;
        font-weight: 600;
        margin-top: 10%;
    }

    .profile-work a {
        text-decoration: none;
        color: #495057;
        font-weight: 600;
        font-size: 14px;
    }

    .profile-work ul {
        list-style: none;
    }

    .profile-tab label {
        font-weight: 600;
    }

    .profile-tab p {
        font-weight: 600;
        color: #0062cc;
    }
</style>
<div class="container emp-profile">
    <?php
    while ($row = mysqli_fetch_array($result)) {
        $first_name = $row['FirstName'];
        $last_name = $row['LastName'];
        $registrationId = $row['RegistrationId'];
        $emailId = $row['EmailId'];
        $mobile = $row['MobileNo'];
        $companyName = $row['CompanyName'];
        $image = $row['Logo'];
        $CompanyLocation = $row['CompanyLocation'];
        $CompanyState = $row['State'];
        $CompanyCountry = $row['Country'];
        $Companycategory = $row['CompanyCategory'];
    }
    ?>
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="image/<?php echo $image; ?>" alt="" />
                </div>
            </div>

            <div class="col-md-6">
                <div class="profile-head">
                    <h5>
                        <?php echo $first_name; ?>&nbsp;&nbsp;<?php echo $last_name; ?>
                    </h5>
                    <h6>
                        <?php echo $companyName; ?>
                    </h6>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-md-2">

                <a href="index.php"><input type="button" class="profile-edit-btn" name="btnAddMore" value="Logout" style="background: #e32636; color: white;" /></a><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                    <p> LINK</p>
                    <a href="<?php echo $gor; ?> MASTER/template/index.php?user1=<?php echo $user; ?>&category=<?php echo $Companycategory; ?>" target="_blank"><input type="button" class="profile-edit-btn" name="btnAddMore" style="background: #e32636; color: white;" value="Master" /></a><br><br>
                    <a href="<?php echo $gor; ?>/index.php?user6=<?php echo $user; ?>&name=<?php echo $companyName; ?>" targrt="_blank"><input type="button" class="profile-edit-btn" name="btnAddMore" style="background: #e32636; color: white;" value="Website" /></a><br><br>
                    <a href="customer-password.php?user1=<?php echo $user; ?>"><input type="button" class="profile-edit-btn" name="btnAddMore" style="background: #e32636; color: white;" value="Change Password" style="width:90%;" /></a>

                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Registration Id</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $registrationId; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $first_name; ?>&nbsp;&nbsp;<?php echo $last_name; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $emailId; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Phone</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $mobile; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Profession</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $Companycategory; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Location</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $CompanyLocation; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>State</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $CompanyState; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Country</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $CompanyCountry; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Experience</label>
                            </div>
                            <div class="col-md-6">
                                <p>Expert</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Hourly Rate</label>
                            </div>
                            <div class="col-md-6">
                                <p>10$/hr</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Total Projects</label>
                            </div>
                            <div class="col-md-6">
                                <p>230</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>English Level</label>
                            </div>
                            <div class="col-md-6">
                                <p>Expert</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Availability</label>
                            </div>
                            <div class="col-md-6">
                                <p>6 months</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Your Bio</label><br />
                                <p>Your detail description</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>