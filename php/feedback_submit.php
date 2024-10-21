<?php
//db config
include "config.php";
// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer-master/src/Exception.php';
require './PHPMailer-master/src/PHPMailer.php';
require './PHPMailer-master/src/SMTP.php';

// Database connection settings
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // Fetch form data
$patientName = $_POST['patientName'];
$phoneNumber = $_POST['phoneNumber'];
$op_number = $_POST['op_number'];
$doctor = $_POST['doctor'];
// This field are optional

$reception_service = isset($_POST['reception_service']) ? $_POST['reception_service'] : NULL;
$doctors_communication = isset($_POST['doctors_communication']) ? $_POST['doctors_communication'] : NULL;
$staff_communication = isset($_POST['staff_communication']) ? $_POST['staff_communication'] : NULL;
$ultrasound = isset($_POST['ultrasound']) ? $_POST['ultrasound'] : NULL;
$endoscopy = isset($_POST['endoscopy']) ? $_POST['endoscopy'] : NULL;
$laboratory = isset($_POST['laboratory']) ? $_POST['laboratory'] : NULL;
$xray = isset($_POST['xray']) ? $_POST['xray'] : NULL;
$ecg = isset($_POST['ecg']) ? $_POST['ecg'] : NULL;
$pharmacy = isset($_POST['pharmacy']) ? $_POST['pharmacy'] : NULL;
// This is required

$overall_experience = $_POST['overall_experience']; 
$feedbackText=$_POST['feedbackText'];
$email = $_POST['email'];

// Define doctor's name based on the value
$doctor_name = '';
if ($doctor == '1') {
    $doctor_name = 'Doctor A';
} else if ($doctor == '2') {
    $doctor_name = 'Doctor B';
}
// send mail with box rating


// Function to generate box ratings with different colors and highlight the selected rating
function generateRatingBox($rating) {
    // Array of colors for each rating from 1 to 10
    $colors = [
        1 => "#FF0000",  // Red
        2 => "#FF3300",  // Dark Orange
        3 => "#FF6600",  // Orange
        4 => "#FF9933",  // Lighter Orange
        5 => "#FFCC33",  // Yellow Orange
        6 => "#FFFF66",  // Light Yellow
        7 => "#CCFF33",  // Light Green
        8 => "#99CC33",  // Medium Green
        9 => "#66CC33",  // Green
        10 => "#33CC33"  // Dark Green
    ];

    $output = '';
    for ($i = 10; $i >= 1; $i--) { // Loop from 10 to 1 to reverse the order
        // Use the predefined color from the array
        $baseColor = $colors[$i]; // Color for each rating box
        $highlightColor = "#000000"; // Black for the selected rating box (highlight)

        // If the current box is the selected rating, use the highlight color
        if ($i == $rating) {
            $color = $highlightColor;
            $textColor = "#fff"; // White text for the highlighted box
        } else {
            $color = $baseColor;
            $textColor = "#000"; // Black text for all other boxes
        }

        // Generate a box with a number inside and the respective color
        $output .= "<span style='display: inline-block; width: 25px; height: 25px; background-color: $color; margin: 0px; color: $textColor; text-align: center; line-height: 25px; border-radius: 0px;'>$i</span>";
    }
    return $output;
}

// mail send using smtp gmail
$mailBody = "
<html>
<head>
    <style>
        body {font-family: Arial, sans-serif; line-height: 1.6; margin: 0; padding: 20px; background-color: #f4f4f4;}
        .container {max-width: 600px; margin: auto; background: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1);}
        h2 {color: #333;}
        .form-group {margin-bottom: 5px;}
        .form-group label {font-weight: bold; display: block; margin-bottom: 5px;}
        .rating {background: #e7f3fe; padding: 20px; text-align: center; font-size: 15px;}
        .footer {margin-top: 20px; font-size: 0.9em; color: #555;}
        .box-rating span {display: inline-block; width: 30px; height: 30px; margin: 2px; border-radius: 5px; text-align: center; line-height: 30px; color: #fff;}
    </style>
</head>
<body>
    <div class='container'>
        <h2>Feedback Received</h2>
        <p>Thank you, <strong>$patientName</strong>, for your feedback!</p>
        
        <p>Your responses have been recorded as follows:</p>
        <p>Your Comment!<br> <strong>$feedbackText</strong></p>
        <div class='form-group'>
            <label>Reception Service Rating:</label>
            <div class='rating box-rating'>" . generateRatingBox($reception_service) . "</div>
        </div>
        <div class='form-group'>
            <label>Doctors Communication Rating:</label>
            <div class='rating box-rating'>" . generateRatingBox($doctors_communication) . "</div>
        </div>
        <div class='form-group'>
            <label>Staff Communication Rating:</label>
            <div class='rating box-rating'>" . generateRatingBox($staff_communication) . "</div>
        </div>
        <div class='form-group'>
            <label>Ultrasound  Rating:</label>
            <div class='rating box-rating'>" . generateRatingBox($ultrasound) . "</div>
        
        </div>
        <div class='form-group'>
            <label>Endoscopy Rating:</label>
            <div class='rating box-rating'>" . generateRatingBox($endoscopy) . "</div>
        </div>
        <div class='form-group'>
            <label>Laboratory Rating:</label>
            <div class='rating box-rating'>" . generateRatingBox($laboratory) . "</div>
        </div>
        <div class='form-group'>
            <label>Xray Rating:</label>
            <div class='rating box-rating'>" . generateRatingBox($xray) . "</div>
        </div>
        <div class='form-group'>
            <label>Ecg Rating:</label>
            <div class='rating box-rating'>" . generateRatingBox($ecg) . "</div>
        </div>
        <div class='form-group'>
            <label>Pharmacy Rating:</label>
            <div class='rating box-rating'>" . generateRatingBox($pharmacy) . "</div>
        </div>
        <div class='form-group'>
            <label>Overall Experience Rating:</label>
            <div class='rating box-rating'>" . generateRatingBox($overall_experience) . "</div>
        </div>
        <p class='footer'>If you have any further questions, feel free to reach out!</p>
    </div>
</body>
</html>";


// SQL query to insert data into the feedback table
    // Prepare an SQL statement
    // $sql = "INSERT INTO feedback (patient_name, phone_number, op_number, doctor, email, comment, reception_service, doctors_communication, staff_communication, ultrasound, endoscopy, laboratory, xray, ecg, pharmacy, overall_experience) 
    // VALUES ('$patientName', '$phoneNumber', '$op_number', '$doctor', '$email', '$feedbackText', $reception_service, $doctors_communication, $staff_communication, $ultrasound, $endoscopy, $laboratory, $xray, $ecg, $pharmacy, $overall_experience)";
    
    $sql = "INSERT INTO feedback (patient_name, phone_number, op_number, doctor, email, comment, reception_service, doctors_communication, staff_communication, ultrasound, endoscopy, laboratory, xray, ecg, pharmacy, overall_experience) 
        VALUES ('$patientName', '$phoneNumber', '$op_number', '$doctor', '$email', '$feedbackText', 
        ".($reception_service ? "'$reception_service'" : "NULL").",
        ".($doctors_communication ? "'$doctors_communication'" : "NULL").",
        ".($staff_communication ? "'$staff_communication'" : "NULL").",
        ".($ultrasound ? "'$ultrasound'" : "NULL").",
        ".($endoscopy ? "'$endoscopy'" : "NULL").",
        ".($laboratory ? "'$laboratory'" : "NULL").",
        ".($xray ? "'$xray'" : "NULL").",
        ".($ecg ? "'$ecg'" : "NULL").",
        ".($pharmacy ? "'$pharmacy'" : "NULL").",
        '$overall_experience')";

    // Check if the query executes successfully
    if ($conn->query($sql) === TRUE) {
        // Prepare email
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->isSMTP(); 
            $mail->Host = 'smtp.gmail.com'; 
            $mail->SMTPAuth = true; 
            $mail->Username = 'rajkumarnkl2024@gmail.com';
            $mail->Password = 'dwjq gfox rdeu wcfp'; 
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
            $mail->Port = 587; 

            // Recipients
            $mail->setFrom('rajkumarnkl2024@gmail.com', 'Hospital Feedback'); // Sender's email and name
            $mail->addAddress($email, $patientName); // Add recipient (the patient)
            // $mail->addReplyTo('rajkumarnkl2024@gmail.com', 'No Reply'); // Add a reply-to address

            // Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'Thank you for your Feedback!';
            $mail->Body    = $mailBody;

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
