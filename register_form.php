<?php
@include 'config.php';

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];
    $department = isset($_POST['department']) ? mysqli_real_escape_string($conn, $_POST['department']) : '';
    $branch = isset($_POST['branch']) ? mysqli_real_escape_string($conn, $_POST['branch']) : '';
    $roll_number = mysqli_real_escape_string($conn, $_POST['roll_number']);

    // Verify reCAPTCHA
    $recaptcha_secret = '6Le7MpgpAAAAAGJcsIR99HFt8KQ0A-645DSH4EEk';
    $recaptcha_response = $_POST['g-recaptcha-response'];
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = array(
        'secret' => $recaptcha_secret,
        'response' => $recaptcha_response
    );
    $options = array(
        'http' => array(
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context = stream_context_create($options);
    $verify = file_get_contents($url, false, $context);
    $captcha_success = json_decode($verify);
    if (!$captcha_success->success) {
        $error[] = 'reCAPTCHA verification failed.';
    } else {
        // Generate and send OTP via Firebase
        // You need to implement this part according to Firebase's OTP authentication method
        // Refer to Firebase documentation for OTP authentication: https://firebase.google.com/docs/auth/web/phone-auth
    }

    // Check if the user is an Faculty
    if ($user_type == 'Faculty') {
        $department = mysqli_real_escape_string($conn, $_POST['department']); // Set department to empty for Faculty
        $branch = ''; // Set branch to empty for Faculty
    }

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'User already exists!';
    } else {
        if ($pass != $cpass) {
            $error[] = 'Password not matched!';
        } else {
            $insert = "INSERT INTO user_form(name, email, password, user_type, department, branch, roll_number) 
                        VALUES('$name','$email','$pass','$user_type','$department','$branch','$roll_number')";
            mysqli_query($conn, $insert);
            header('location:login_form.php');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

    <!-- reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>

    <div class="form-container">

        <form action="" method="post">
            <h3>Register Now</h3>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                };
            };
            ?>
            <input type="text" name="name" required placeholder="Enter Your Name">
            <input type="email" name="email" required placeholder="Enter Your Email">
            <input type="password" name="password" required placeholder="Enter Your Password">
            <input type="password" name="cpassword" required placeholder="Confirm Your Password">
            <select name="user_type">
                <option value="user">User</option>
                <option value="Faculty">Faculty</option>
            </select>
            <select name="department">
                <option value="NA">Department</option>
                <option value="Computer Science & IT Department">Computer Science & IT Department</option>
                <option value="Civil Engg. Department">Civil Engg. Department</option>
                <option value="Mechanical Engg. & Petrolium Department">Mechanical Engg. & Petrolium Department</option>
                <option value="Electrical Engg. Technology Department">Electrical Engg. Technology Department</option>
                <option value="Aeronautical Department">Aeronautical Department</option>
            </select>
            <select name="branch">
                <option value="NA">Branch</option>
                <option value="CS">CS</option>
                <option value="IT">IT</option>
                <option value="ME">ME</option>
                <option value="PE">PE</option>
                <option value="PCE">PCE</option>
                <option value="EE">EE</option>
                <option value="ECE">ECE</option>
                <option value="EIC">EIC</option>
                <option value="CE">CE</option>
                <option value="AE">AE</option>
            </select>
            <input type="text" name="roll_number" required placeholder="Enter Your Roll No.">
            <!-- reCAPTCHA -->
            <div class="g-recaptcha" data-sitekey="6Le7MpgpAAAAAKpdVwB98HAJNw3gd--sqSuiV9_X"></div>
            <input type="submit" name="submit" value="Register Now" class="form-btn">
            <p>Already have an account? <a href="login_form.php">Login Now</a></p>
        </form>

    </div>

</body>

</html>
