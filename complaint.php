
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/complaint.css">
    <style>
    
    </style>
</head>

<body>

    <!-- Header Section -->
    <nav class="navbar navbar-custom">
        <div class="container d-flex justify-content-between align-items-center">
            <h3 class="header-message">Patient Feedback Collection</h3>
            <img src="./assets/images/feedback_image1.jpeg" alt="Logo" class="logo img-fluid">
        </div>
    </nav>

    <!-- Main Content -->
    <!-- Main Content -->
    <div class="container content">
        <div class="row justify-content-center mt-2">
            <div class="col-12 text-center">
                <h5 id="feedbackText">We would love to get your feedback. <br>
                    Please share your feedback with us so that we can make your service experience even better next
                    time.</h5>

                <!-- Complaint Form -->
                <form class="mt-4" action="./php/complaint_submit.php" method="POST" onsubmit="return validateForm()">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" id="patientName" name="patientName"
                                placeholder="Patient Name*" required pattern="[A-Za-z\s]+"
                                title="Only letters are allowed.">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber"
                                placeholder="Phone Number*" required pattern="[0-9]{10}"
                                title="Phone number must be 10 digits.">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="email" class="form-control" id="mail" name="mail" placeholder="Enter Mail*"
                                required>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="complaintText" name="complaint" rows="2"
                            placeholder="Specify (Complaint*)" required></textarea>
                    </div>
                    <button type="submit" id="s_complaint" class="btn btn-danger btn-lg btn-block">Submit
                        Complaint</button>

                </form>

                <!-- Back Button at the bottom -->
                <a href="index.php" class="btn btn-secondary mt-3" id="back">Back</a>
            </div>
        </div>
    </div>


     <!-- Include the JavaScript file from the javascript folder -->
<script src="./assets/javascript/complaint.js"></script>



    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<div class="footer">
    <p class="copyright mb-0 text-center">
        Copyright © 2024 <a href="https://redmindtechnologies.com" target="_blank">RedMind Technologies</a>. All
        Rights Reserved.
    </p>
</div>


</html>