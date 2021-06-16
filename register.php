<?php
require_once("include/initialize.php");
if (isset($_SESSION['StudentID'])) {
    # code...
    redirect('index.php');
}

if (isset($_POST['btnRegister'])) {
    # code...  
    if ($_POST['USERNAME'] != "" && $_POST['PASS'] != "") {
        $student = new Student();
        $student->Fname         = $_POST['FNAME'];
        $student->Lname         = $_POST['LNAME'];
        $student->Address       = $_POST['ADDRESS'];
        $student->MobileNo         = $_POST['PHONE'];
        $student->STUDUSERNAME      = $_POST['USERNAME'];
        $student->STUDPASS      = sha1($_POST['PASS']);
        $student->create();
        message("Your now successfully registered. You can login now!", "success");
        // redirect("register.php");
    } else {
        message("please filled the require filed.", "danger");
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Register Forms</title>

    <!-- Main CSS-->

    <link href="<?php echo web_root; ?>assets/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo web_root; ?>assets/mainreg.css">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <?php check_message(); ?>

                    <form method="POST" action="register.php">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Firstname" name="FNAME">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Lastname" name="LNAME">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Address" name="ADDRESS">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Phone" name="PHONE">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Username" name="USERNAME">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="password" placeholder="Password" name="PASS">
                        </div>


                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="btnRegister">Submit</button>
                            <a href="login.php">Back to Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->