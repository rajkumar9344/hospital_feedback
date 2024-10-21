
function checkPattern(inputField) {
    // Access the pattern and title attributes
    const pattern = inputField.getAttribute('pattern');
    const title = inputField.getAttribute('title');
    const helpText = inputField.nextElementSibling; // The <small> tag for help message

    // If there's a pattern, check it
    if (pattern && inputField.value !== "") {
        const regex = new RegExp(pattern);
        if (!regex.test(inputField.value)) {
            helpText.textContent = title; // Show the pattern message
            helpText.style.color = 'red';
        } else {
            helpText.textContent = ""; // Clear the message if the input is valid
        }
    }
}
// On page load, check the selected language
window.onload = function() {
    var savedLanguage = localStorage.getItem('selectedLanguage');
    if (savedLanguage) {
        updateComplaintPageLanguage(savedLanguage);
    }
};

// Update complaint page content based on language
function updateComplaintPageLanguage(language) {
    var patientName = document.getElementById('patientName');
    var phoneNumber = document.getElementById('phoneNumber');
    var mail = document.getElementById('email');
    var complaintText = document.getElementById('complaintText');
    var feedbackText = document.getElementById('feedbackText');
    var s_complaint = document.getElementById('s_complaint');
    var back = document.getElementById('back');
    var op_number = document.getElementById('op_number');
    var doctorSelect = document.getElementById('doctor');
    var s_button = document.getElementById('s_button');
    var r_c = document.getElementById('r_c');
    var goodLabels = document.querySelectorAll("[id^='good']");
    var badLabels = document.querySelectorAll("[id^='bad']");
    var bad = document.getElementById('p');

    var d_c = document.getElementById('d_c');
    var s_c = document.getElementById('s_c');
    var u_r = document.getElementById('u_r');
    var e_r = document.getElementById('e_r');
    var l_r = document.getElementById('l_r');
    var x_r = document.getElementById('x_r');
    var ecg_r = document.getElementById('ecg_r');
    var ph_r = document.getElementById('ph_r');
    var o_e_r = document.getElementById('o_e_r');





    if (language === 'ta') {
        feedbackText.innerHTML =
            'நாங்கள் உங்கள் கருத்துக்களை வரவேற்கிறோம். உங்கள் கருத்துகளை எங்களுடன் பகிர்ந்து கொள்ளுங்கள், அது உங்கள் அடுத்த அனுபவத்தை மேலும் சிறப்பாக மாற்ற உதவும்.';

        patientName.placeholder = 'நோயாளியின் பெயர்*';
        phoneNumber.placeholder = 'தொலைபேசி எண்*';
        mail.placeholder = 'மின்னஞ்சல்*';
        op_number.placeholder = 'வெளி நோயாளி எண்';
        s_button.innerHTML = 'கருத்தினை அனுப்பவும்';
        r_c.innerHTML = 'வரவேற்பு சேவை';
        d_c.innerHTML = 'டாக்டர்கள் தொடர்பு';
        s_c.innerHTML = 'பணியாளர் தொடர்பு';
        u_r.innerHTML = 'அல்ட்ராசவுண்ட்';
        e_r.innerHTML = 'எண்டோஸ்கோபி';
        l_r.innerHTML = 'ஆய்வகம்';
        x_r.innerHTML = 'எக்ஸ்-ரே';
        ecg_r.innerHTML = 'ஈசிஜி';
        ph_r.innerHTML = 'மருந்தகம்';
        o_e_r.innerHTML = 'ஒட்டுமொத்த அனுபவம் *';

        // Update all "Good" and "Bad" labels to Tamil
        goodLabels.forEach(function(label) {
            label.innerHTML = 'நல்ல';
        });
        badLabels.forEach(function(label) {
            label.innerHTML = 'மோசமான';
        });


        p.innerHTML =
            'பொருத்தமான எண்களைக் கிளிக் செய்வதன் மூலம் உங்கள் கருத்தைத் தெரிவிக்கவும், மேலும் ஏதேனும் கருத்து அல்லது புகார்கள் இருந்தால், சில வாக்கியங்களையும் தட்டச்சு செய்யவும். உங்கள் கருத்து, எங்கள் வாடிக்கையாளர் சேவை அனுபவத்தை அடுத்த முறை இன்னும் சிறப்பாகச் செய்யும்.';



        back.innerHTML = 'முந்தைய பக்கம்';
        doctorSelect.innerHTML = `
                <option value="">மருத்துவர்</option>
                <option value="1">மருத்துவர் A</option>
                <option value="2">மருத்துவர் B</option>
            `;
    } else {
        feedbackText.innerHTML =
            'We would love to get your feedback. Please share your feedback with us so that we can make your service experience even better next time.';

        patientName.placeholder = 'Patient Name*';
        phoneNumber.placeholder = 'Phone Number*';
        mail.placeholder = 'Email*';
        complaintText.placeholder = 'Your Complaint*';
        s_complaint.innerHTML = 'Submit Complaint';

        doctorSelect.innerHTML = `
                <option value="">Doctor</option>
                <option value="1">Doctor A</option>
                <option value="2">Doctor B</option>
            `;

    }
}

