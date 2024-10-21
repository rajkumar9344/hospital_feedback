<?php

include "config.php";

// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer-master/src/Exception.php';
require './PHPMailer-master/src/PHPMailer.php';
require './PHPMailer-master/src/SMTP.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patientName = $conn->real_escape_string($_POST['patientName']);
    $phoneNumber = $conn->real_escape_string($_POST['phoneNumber']);
    $email = $conn->real_escape_string($_POST['mail']);
    $complaint = $conn->real_escape_string($_POST['complaint']);

    // SQL query to insert data into the feedback table
    $sql = "INSERT INTO complaints (patient_name, phone_number, email, complaint_text) VALUES ('$patientName', '$phoneNumber', '$email', '$complaint')";

    if ($conn->query($sql) === TRUE) {
        // Prepare email
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->isSMTP(); // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com'; // Specify your SMTP server
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = 'rajkumarnkl2024@gmail.com'; // SMTP username
            $mail->Password = 'dwjq gfox rdeu wcfp'; // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
            $mail->Port = 587; // TCP port to connect to

            // Recipients
            $mail->setFrom('rajkumarnkl2024@gmail.com', 'Hospital Feedback'); // Sender's email and name
            $mail->addAddress($email, $patientName); // Add recipient (the patient)
            // $mail->addReplyTo('rajkumarnkl2024@gmail.com', 'No Reply'); // Add a reply-to address

            // Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'Thank you for your Feedback!';
            $mail->Body    = "<p>Dear $patientName,</p>
                              <p>Thank you for your feedback. We value your input and strive to improve our services.</p>
                              <p>Your complaint: <strong>$complaint</strong></p>
                              <p>Best regards,<br>Hospital Team</p>";

            // Send email
            $mail->send();
            echo "<script>
            alert('Feedback submitted successfully! A confirmation email has been sent.');
            window.location.href='../index.php';
          </script>";
            } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
