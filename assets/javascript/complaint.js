
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
        var mail = document.getElementById('mail');
        var complaintText = document.getElementById('complaintText');
        var feedbackText = document.getElementById('feedbackText');
        var s_complaint = document.getElementById('s_complaint');
        var back = document.getElementById('back');


        if (language === 'ta') {
            feedbackText.innerHTML =
                'நாங்கள் உங்கள் கருத்துக்களை வரவேற்கிறோம். உங்கள் கருத்துகளை எங்களுடன் பகிர்ந்து கொள்ளுங்கள், அது உங்கள் அடுத்த அனுபவத்தை மேலும் சிறப்பாக மாற்ற உதவும்.';

            patientName.placeholder = 'நோயாளியின் பெயர்*';
            phoneNumber.placeholder = 'தொலைபேசி எண்*';
            mail.placeholder = 'மின்னஞ்சல்*';
            complaintText.placeholder = 'உங்கள் புகார்*';
            s_complaint.innerHTML = 'புகாரை சமர்ப்பிக்கவும்';
            back.innerHTML = 'முந்தைய பக்கம்';
        } else {
            feedbackText.innerHTML =
                'We would love to get your feedback. Please share your feedback with us so that we can make your service experience even better next time.';

            patientName.placeholder = 'Patient Name*';
            phoneNumber.placeholder = 'Phone Number*';
            mail.placeholder = 'Email*';
            complaintText.placeholder = 'Your Complaint*';
            s_complaint.innerHTML = 'Submit Complaint';
        }
    }

    function validateForm() {
        let phone = document.getElementById('phoneNumber').value;
        if (!/^[0-9]{10}$/.test(phone)) {
            alert('Phone number must be 10 digits.');
            return false;
        }
        return true;
    }