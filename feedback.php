


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Feedback System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
     <!-- Custom CSS -->
     <link rel="stylesheet" href="assets/css/feedback.css">
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
    <div class="container content">
        <div class="row justify-content-center mt-2">
            <div class="col-12 text-center">
                <h5 id="feedbackText">We would love to get your feedback. <br>
                    Please share your feedback with us so that we can make your service experience even better next
                    time.</h5>

                <!-- Complaint Form -->
                <form class="mt-4" action="./php/feedback_submit.php" method="POST" id="feedbackForm">
                    <div class="form-row">
                        <!-- Patient Name -->
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" id="patientName" name="patientName"
                                placeholder="Patient Name*" required pattern="[A-Za-z\s]+"
                                title="Only letters and spaces are allowed." oninput="checkPattern(this)">
                            <small id="patientNameHelp" class="form-text text-muted"></small>
                        </div>

                        <!-- Phone Number -->
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" id="phoneNumber" name="phoneNumber"
                                placeholder="Phone Number*" required pattern="[0-9]{10}"
                                title="Phone number must be exactly 10 digits." oninput="checkPattern(this)">
                            <small id="phoneHelp" class="form-text text-muted"></small>
                        </div>

                        <!-- Email -->
                        <div class="form-group col-sm-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email*"
                                required oninput="checkPattern(this)">
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>

                        <!-- OP Number -->
                        <div class="form-group col-sm-3">
                            <input type="text" class="form-control" id="op_number" name="op_number"
                                placeholder="OP Number*" required pattern="[A-Za-z0-9]+"
                                title="Only alphanumeric characters are allowed." oninput="checkPattern(this)">
                            <small id="opNumberHelp" class="form-text text-muted"></small>
                        </div>

                        <!-- Doctor Selection -->
                        <div class="form-group col-sm-3">
                            <select class="form-control" id="doctor" name="doctor" required>
                                <option value="">Select Doctor</option>
                                <option value="1">Doctor A</option>
                                <option value="2">Doctor B</option>
                            </select>
                        </div>
                        <div class="col-sm-12 text-color:#008080">
                            <p id="para1">Please give your feedback on the website by clicking on the appropriate
                                numbers
                                and
                                also type
                                a few sentences if you have got any feedback or complaints. Your feedback will make our
                                customer service experience even better next time.</p>
                        </div>

                        <div class="container">
                            <!-- Reception Service Rating -->
                            <div class="rating-container mt-2">
                                <h5 class="text-left" id="r_c">Reception Service Rating</h5>
                                <div class="rating-scale">
                                    <input type="radio" id="reception10" name="reception_service" value="10">
                                    <label for="reception10" data-value="10">10</label>
                                    <input type="radio" id="reception9" name="reception_service" value="9">
                                    <label for="reception9" data-value="9">9</label>
                                    <input type="radio" id="reception8" name="reception_service" value="8">
                                    <label for="reception8" data-value="8">8</label>
                                    <input type="radio" id="reception7" name="reception_service" value="7">
                                    <label for="reception7" data-value="7">7</label>
                                    <input type="radio" id="reception6" name="reception_service" value="6">
                                    <label for="reception6" data-value="6">6</label>
                                    <input type="radio" id="reception5" name="reception_service" value="5">
                                    <label for="reception5" data-value="5">5</label>
                                    <input type="radio" id="reception4" name="reception_service" value="4">
                                    <label for="reception4" data-value="4">4</label>
                                    <input type="radio" id="reception3" name="reception_service" value="3">
                                    <label for="reception3" data-value="3">3</label>
                                    <input type="radio" id="reception2" name="reception_service" value="2">
                                    <label for="reception2" data-value="2">2</label>
                                    <input type="radio" id="reception1" name="reception_service" value="1">
                                    <label for="reception1" data-value="1">1</label>
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                    <span class="text-success" id="good1">Good</span>
                                    <span class="text-danger" id="bad1">Bad</span>
                                </div>
                            </div>



                            <!-- Doctors Communication Rating -->
                            <div class="rating-container mt-2  ">
                                <h5 class="text-left" id="d_c">Doctors Communication Rating</h5>
                                <div class="rating-scale">
                                    <input type="radio" id="doctors10" name="doctors_communication" value="10">
                                    <label for="doctors10" data-value="10">10</label>
                                    <input type="radio" id="doctors9" name="doctors_communication" value="9">
                                    <label for="doctors9" data-value="9">9</label>
                                    <input type="radio" id="doctors8" name="doctors_communication" value="8">
                                    <label for="doctors8" data-value="8">8</label>
                                    <input type="radio" id="doctors7" name="doctors_communication" value="7">
                                    <label for="doctors7" data-value="7">7</label>
                                    <input type="radio" id="doctors6" name="doctors_communication" value="6">
                                    <label for="doctors6" data-value="6">6</label>
                                    <input type="radio" id="doctors5" name="doctors_communication" value="5">
                                    <label for="doctors5" data-value="5">5</label>
                                    <input type="radio" id="doctors4" name="doctors_communication" value="4">
                                    <label for="doctors4" data-value="4">4</label>
                                    <input type="radio" id="doctors3" name="doctors_communication" value="3">
                                    <label for="doctors3" data-value="3">3</label>
                                    <input type="radio" id="doctors2" name="doctors_communication" value="2">
                                    <label for="doctors2" data-value="2">2</label>
                                    <input type="radio" id="doctors1" name="doctors_communication" value="1">
                                    <label for="doctors1" data-value="1">1</label>
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                    <span class="text-success" id="good2">Good</span>
                                    <span class="text-danger" id="bad2">Bad</span>
                                </div>
                            </div>


                            <!-- Staff Communication Rating -->
                            <div class="rating-container mt-2 ">
                                <h5 class="text-left" id="s_c">Staff Communication Rating</h5>
                                <div class="rating-scale">
                                    <input type="radio" id="staff10" name="staff_communication" value="10">
                                    <label for="staff10" data-value="10">10</label>
                                    <input type="radio" id="staff9" name="staff_communication" value="9">
                                    <label for="staff9" data-value="9">9</label>
                                    <input type="radio" id="staff8" name="staff_communication" value="8">
                                    <label for="staff8" data-value="8">8</label>
                                    <input type="radio" id="staff7" name="staff_communication" value="7">
                                    <label for="staff7" data-value="7">7</label>
                                    <input type="radio" id="staff6" name="staff_communication" value="6">
                                    <label for="staff6" data-value="6">6</label>
                                    <input type="radio" id="staff5" name="staff_communication" value="5">
                                    <label for="staff5" data-value="5">5</label>
                                    <input type="radio" id="staff4" name="staff_communication" value="4">
                                    <label for="staff4" data-value="4">4</label>
                                    <input type="radio" id="staff3" name="staff_communication" value="3">
                                    <label for="staff3" data-value="3">3</label>
                                    <input type="radio" id="staff2" name="staff_communication" value="2">
                                    <label for="staff2" data-value="2">2</label>
                                    <input type="radio" id="staff1" name="staff_communication" value="1">
                                    <label for="staff1" data-value="1">1</label>
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                    <span class="text-success" id="good3">Good</span>
                                    <span class="text-danger" id="bad3">Bad</span>
                                </div>
                            </div>

                            <!-- Ultrasound Rating -->
                            <div class="rating-container mt-2 ">
                                <h5 class="text-left" id="u_r">Ultrasound Rating</h5>
                                <div class="rating-scale">
                                    <input type="radio" id="ultrasound10" name="ultrasound" value="10">
                                    <label for="ultrasound10" data-value="10">10</label>
                                    <input type="radio" id="ultrasound9" name="ultrasound" value="9">
                                    <label for="ultrasound9" data-value="9">9</label>
                                    <input type="radio" id="ultrasound8" name="ultrasound" value="8">
                                    <label for="ultrasound8" data-value="8">8</label>
                                    <input type="radio" id="ultrasound7" name="ultrasound" value="7">
                                    <label for="ultrasound7" data-value="7">7</label>
                                    <input type="radio" id="ultrasound6" name="ultrasound" value="6">
                                    <label for="ultrasound6" data-value="6">6</label>
                                    <input type="radio" id="ultrasound5" name="ultrasound" value="5">
                                    <label for="ultrasound5" data-value="5">5</label>
                                    <input type="radio" id="ultrasound4" name="ultrasound" value="4">
                                    <label for="ultrasound4" data-value="4">4</label>
                                    <input type="radio" id="ultrasound3" name="ultrasound" value="3">
                                    <label for="ultrasound3" data-value="3">3</label>
                                    <input type="radio" id="ultrasound2" name="ultrasound" value="2">
                                    <label for="ultrasound2" data-value="2">2</label>
                                    <input type="radio" id="ultrasound1" name="ultrasound" value="1">
                                    <label for="ultrasound1" data-value="1">1</label>
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                    <span class="text-success" id="good4">Good</span>
                                    <span class="text-danger" id="bad4">Bad</span>
                                </div>
                            </div>

                            <!-- Endoscopy Rating -->
                            <div class="rating-container mt-2">
                                <h5 class="text-left" id="e_r">Endoscopy Rating</h5>
                                <div class="rating-scale">
                                    <input type="radio" id="endoscopy10" name="endoscopy" value="10">
                                    <label for="endoscopy10" data-value="10">10</label>
                                    <input type="radio" id="endoscopy9" name="endoscopy" value="9">
                                    <label for="endoscopy9" data-value="9">9</label>
                                    <input type="radio" id="endoscopy8" name="endoscopy" value="8">
                                    <label for="endoscopy8" data-value="8">8</label>
                                    <input type="radio" id="endoscopy7" name="endoscopy" value="7">
                                    <label for="endoscopy7" data-value="7">7</label>
                                    <input type="radio" id="endoscopy6" name="endoscopy" value="6">
                                    <label for="endoscopy6" data-value="6">6</label>
                                    <input type="radio" id="endoscopy5" name="endoscopy" value="5">
                                    <label for="endoscopy5" data-value="5">5</label>
                                    <input type="radio" id="endoscopy4" name="endoscopy" value="4">
                                    <label for="endoscopy4" data-value="4">4</label>
                                    <input type="radio" id="endoscopy3" name="endoscopy" value="3">
                                    <label for="endoscopy3" data-value="3">3</label>
                                    <input type="radio" id="endoscopy2" name="endoscopy" value="2">
                                    <label for="endoscopy2" data-value="2">2</label>
                                    <input type="radio" id="endoscopy1" name="endoscopy" value="1">
                                    <label for="endoscopy1" data-value="1">1</label>
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                    <span class="text-success" id="good5">Good</span>
                                    <span class="text-danger" id="bad5">Bad</span>
                                </div>
                            </div>

                            <!-- Laboratory Rating -->
                            <div class="rating-container mt-2">
                                <h5 class="text-left" id="l_r">Laboratory Rating</h5>
                                <div class="rating-scale">
                                    <input type="radio" id="laboratory10" name="laboratory" value="10">
                                    <label for="laboratory10" data-value="10">10</label>
                                    <input type="radio" id="laboratory9" name="laboratory" value="9">
                                    <label for="laboratory9" data-value="9">9</label>
                                    <input type="radio" id="laboratory8" name="laboratory" value="8">
                                    <label for="laboratory8" data-value="8">8</label>
                                    <input type="radio" id="laboratory7" name="laboratory" value="7">
                                    <label for="laboratory7" data-value="7">7</label>
                                    <input type="radio" id="laboratory6" name="laboratory" value="6">
                                    <label for="laboratory6" data-value="6">6</label>
                                    <input type="radio" id="laboratory5" name="laboratory" value="5">
                                    <label for="laboratory5" data-value="5">5</label>
                                    <input type="radio" id="laboratory4" name="laboratory" value="4">
                                    <label for="laboratory4" data-value="4">4</label>
                                    <input type="radio" id="laboratory3" name="laboratory" value="3">
                                    <label for="laboratory3" data-value="3">3</label>
                                    <input type="radio" id="laboratory2" name="laboratory" value="2">
                                    <label for="laboratory2" data-value="2">2</label>
                                    <input type="radio" id="laboratory1" name="laboratory" value="1">
                                    <label for="laboratory1" data-value="1">1</label>
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                    <span class="text-success" id="good6">Good</span>
                                    <span class="text-danger" id="bad6">Bad</span>
                                </div>
                            </div>

                            <!-- X-Ray Rating -->
                            <div class="rating-container mt-2">
                                <h5 class="text-left" id="x_r">X-Ray Rating</h5>
                                <div class="rating-scale">
                                    <input type="radio" id="xray10" name="xray" value="10">
                                    <label for="xray10" data-value="10">10</label>
                                    <input type="radio" id="xray9" name="xray" value="9">
                                    <label for="xray9" data-value="9">9</label>
                                    <input type="radio" id="xray8" name="xray" value="8">
                                    <label for="xray8" data-value="8">8</label>
                                    <input type="radio" id="xray7" name="xray" value="7">
                                    <label for="xray7" data-value="7">7</label>
                                    <input type="radio" id="xray6" name="xray" value="6">
                                    <label for="xray6" data-value="6">6</label>
                                    <input type="radio" id="xray5" name="xray" value="5">
                                    <label for="xray5" data-value="5">5</label>
                                    <input type="radio" id="xray4" name="xray" value="4">
                                    <label for="xray4" data-value="4">4</label>
                                    <input type="radio" id="xray3" name="xray" value="3">
                                    <label for="xray3" data-value="3">3</label>
                                    <input type="radio" id="xray2" name="xray" value="2">
                                    <label for="xray2" data-value="2">2</label>
                                    <input type="radio" id="xray1" name="xray" value="1">
                                    <label for="xray1" data-value="1">1</label>
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                    <span class="text-success" id="good7">Good</span>
                                    <span class="text-danger" id="bad7">Bad</span>
                                </div>
                            </div>

                            <!-- ECG Rating -->
                            <div class="rating-container mt-2">
                                <h5 class="text-left" id="ecg_r">ECG Rating</h5>
                                <div class="rating-scale">
                                    <input type="radio" id="ecg10" name="ecg" value="10">
                                    <label for="ecg10" data-value="10">10</label>
                                    <input type="radio" id="ecg9" name="ecg" value="9">
                                    <label for="ecg9" data-value="9">9</label>
                                    <input type="radio" id="ecg8" name="ecg" value="8">
                                    <label for="ecg8" data-value="8">8</label>
                                    <input type="radio" id="ecg7" name="ecg" value="7">
                                    <label for="ecg7" data-value="7">7</label>
                                    <input type="radio" id="ecg6" name="ecg" value="6">
                                    <label for="ecg6" data-value="6">6</label>
                                    <input type="radio" id="ecg5" name="ecg" value="5">
                                    <label for="ecg5" data-value="5">5</label>
                                    <input type="radio" id="ecg4" name="ecg" value="4">
                                    <label for="ecg4" data-value="4">4</label>
                                    <input type="radio" id="ecg3" name="ecg" value="3">
                                    <label for="ecg3" data-value="3">3</label>
                                    <input type="radio" id="ecg2" name="ecg" value="2">
                                    <label for="ecg2" data-value="2">2</label>
                                    <input type="radio" id="ecg1" name="ecg" value="1">
                                    <label for="ecg1" data-value="1">1</label>
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                    <span class="text-success" id="good8">Good</span>
                                    <span class="text-danger" id="bad8">Bad</span>
                                </div>
                            </div>

                            <!-- Pharmacy Rating -->
                            <div class="rating-container mt-2">
                                <h5 class="text-left" id="ph_r">Pharmacy Rating</h5>
                                <div class="rating-scale">
                                    <input type="radio" id="pharmacy10" name="pharmacy" value="10">
                                    <label for="pharmacy10" data-value="10">10</label>
                                    <input type="radio" id="pharmacy9" name="pharmacy" value="9">
                                    <label for="pharmacy9" data-value="9">9</label>
                                    <input type="radio" id="pharmacy8" name="pharmacy" value="8">
                                    <label for="pharmacy8" data-value="8">8</label>
                                    <input type="radio" id="pharmacy7" name="pharmacy" value="7">
                                    <label for="pharmacy7" data-value="7">7</label>
                                    <input type="radio" id="pharmacy6" name="pharmacy" value="6">
                                    <label for="pharmacy6" data-value="6">6</label>
                                    <input type="radio" id="pharmacy5" name="pharmacy" value="5">
                                    <label for="pharmacy5" data-value="5">5</label>
                                    <input type="radio" id="pharmacy4" name="pharmacy" value="4">
                                    <label for="pharmacy4" data-value="4">4</label>
                                    <input type="radio" id="pharmacy3" name="pharmacy" value="3">
                                    <label for="pharmacy3" data-value="3">3</label>
                                    <input type="radio" id="pharmacy2" name="pharmacy" value="2">
                                    <label for="pharmacy2" data-value="2">2</label>
                                    <input type="radio" id="pharmacy1" name="pharmacy" value="1">
                                    <label for="pharmacy1" data-value="1">1</label>
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                    <span class="text-success" id="good9">Good</span>
                                    <span class="text-danger" id="bad9">Bad</span>
                                </div>
                            </div>

                            <!-- Overall Experience Rating -->
                            <div class="rating-container mt-2">
                                <h5 class="text-left" id="o_e_r">Overall Experience Rating <span
                                        style="color: red;">*</span></h5>
                                <div class="rating-scale">
                                    <input type="radio" id="overall10" name="overall_experience" value="10" required>
                                    <label for="overall10" data-value="10">10</label>
                                    <input type="radio" id="overall9" name="overall_experience" value="9">
                                    <label for="overall9" data-value="9">9</label>
                                    <input type="radio" id="overall8" name="overall_experience" value="8">
                                    <label for="overall8" data-value="8">8</label>
                                    <input type="radio" id="overall7" name="overall_experience" value="7">
                                    <label for="overall7" data-value="7">7</label>
                                    <input type="radio" id="overall6" name="overall_experience" value="6">
                                    <label for="overall6" data-value="6">6</label>
                                    <input type="radio" id="overall5" name="overall_experience" value="5">
                                    <label for="overall5" data-value="5">5</label>
                                    <input type="radio" id="overall4" name="overall_experience" value="4">
                                    <label for="overall4" data-value="4">4</label>
                                    <input type="radio" id="overall3" name="overall_experience" value="3">
                                    <label for="overall3" data-value="3">3</label>
                                    <input type="radio" id="overall2" name="overall_experience" value="2">
                                    <label for="overall2" data-value="2">2</label>
                                    <input type="radio" id="overall1" name="overall_experience" value="1">
                                    <label for="overall1" data-value="1">1</label>
                                </div>


                                <!-- Message for good and bad ratings -->
                                <div class="d-flex justify-content-between mt-2">
                                    <span class="text-success" id="good10">Good</span>
                                    <span class="text-danger" id="bad10">Bad</span>
                                </div>

                                <!-- Custom validation message (optional) -->
                                <div class="invalid-feedback" style="color: red;">
                                    Please rate your overall experience.
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" id="feedbackText" name="feedbackText" rows="2"
                                    placeholder="Comment" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-danger btn-lg btn-block" id="s_button">Submit
                                Feedback</button>

                            <!-- Back Button at the bottom -->
                            <a href="index.php" class="btn btn-secondary mt-3" id="back">Back</a>

                </form>
            </div>

            <!-- Adjust the href to your home page -->
        </div>


    </div>
    </div>
    </div>
</body>
<div class="footer">
    <p class="copyright mb-0 text-center">
        Copyright © 2024 <a href="https://redmindtechnologies.com" target="_blank">RedMind Technologies</a>. All
        Rights Reserved.
    </p>
</div>


    <!-- Include the JavaScript file from the javascript folder -->
    <script src="./assets/javascript/feedback.js"></script>



<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</html>