<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Collection</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/home.css">
    
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
    <div class="container content">
        <!-- Added content class for styling -->
        <div class="row justify-content-center mt-5">
            <div class="col-12 text-center">
                <!-- Use full width on mobile -->
                <h5 id="feedbackText">We would love to get your feedback. <br>
                    Please share your feedback with us so that we can make your service experience even better next
                    time.</h5>

                <!-- Language Selector -->
                <div class="mt-3">
                    <label for="language">Language:</label>
                    <select id="language" class="form-control d-inline-block" style="width:auto;"
                        onchange="changeLanguage()">
                        <option value="en">English</option>
                        <option value="ta">தமிழ்</option>
                        <!-- Add more languages as needed -->
                    </select>
                </div>

                <div class="btn-group mt-4 d-flex justify-content-center">
                    <!-- Center buttons -->
                    <a href="complaint.php" class="btn btn-outline-primary btn-lg" id="complaintButton">Complaint</a>
                    <a href="feedback.php" class="btn btn-outline-success btn-lg btn-gap"
                        id="feedbackButton">Feedback</a>
                </div>
            </div>
        </div>
    </div>
  

    <!-- Script to handle language change -->
    <!-- Include the JavaScript file from the javascript folder -->
<script src="./assets/javascript/language.js"></script>



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