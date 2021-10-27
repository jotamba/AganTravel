<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
if (isset($_POST['register'])) {
    include('db.php');

    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/OAuth.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/POP3.php';
    require '../PHPMailer/src/SMTP.php';

    
    // tampung nilai yang ada di from ke variabel
    // sesuaikan variabel name yang ada di registerPage.php disetiap input
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $noTelepon = $_POST['noTelepon'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $isVerified = 0;
    $code = md5($email.date('Y-m-d'));

    $sql = "SELECT * FROM users where email='$email'";
    $query = mysqli_query($con,$sql);
    if(mysqli_num_rows($query) > 0){
        echo '<script>alert("Email sudah terdaftar"); window.history.back()</script>';
    }else {
        $query = mysqli_query(
            $con,
            "INSERT INTO users(username, nama, email, noTelepon, password, isVerified, verif_code)
        VALUES
        ('$username', '$nama', '$email', '$noTelepon', '$password', '$isVerified', '$code')"
        )
            or die(mysqli_error($con)); 

        //Create a new PHPMailer instance
        $mail = new PHPMailer;

        //Tell PHPMailer to use SMTP
        $mail->isSMTP();

        //Enable SMTP debugging
        // SMTP::DEBUG_OFF = off (for production use)
        // SMTP::DEBUG_CLIENT = client messages
        // SMTP::DEBUG_SERVER = client and server messages
        $mail->SMTPDebug = SMTP::DEBUG_OFF;

        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';
        // use
        // $mail->Host = gethostbyname('smtp.gmail.com');
        // if your network does not support SMTP over IPv6

        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;

        //Set the encryption mechanism to use - STARTTLS or SMTPS
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;

        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = 'tubespaw2021b@gmail.com';

        //Password to use for SMTP authentication
        $mail->Password = 'agantravel';

        //Set who the message is to be sent from
        $mail->setFrom('no-reply@agantravel.com', 'AganTravel.com');

        //Set an alternative reply-to address
        //$mail->addReplyTo('replyto@example.com', 'First Last');

        //Set who the message is to be sent to
        $mail->addAddress($email, $nama);

        //Set the subject line
        $mail->Subject = 'Verification Account - AganTravel.com';

        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        $body = "Hi, ".$nama."<br>Plase verif your email before access our website : <br> http://localhost:8080/tubes/AganTravel/process/confirmEmail.php?code=".$code;
        $mail->Body = $body;
        //Replace the plain text body with one created manually
        $mail->AltBody = 'Verification Account';

        //send the message, check for errors
        if (!$mail->send()) {
            echo
        '<script>
 alert("Failed to Send Email"); window.history.back()
 </script>';
        } else {
            echo
        '<script>
 alert("Register Success"); window.location = "../index.php"
 </script>';
            //Section 2: IMAP
            //Uncomment these to save your message in the 'Sent Mail' folder.
            #if (save_mail($mail)) {
            #    echo "Message saved!";
            #}
        }

    }

} else {
    echo
    '<script>
 window.history.back()
 </script>';
}



?>