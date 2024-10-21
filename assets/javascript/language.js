 // Function to change the language
 function changeLanguage() {
    var selectedLanguage = document.getElementById('language').value;
    // Store the selected language in localStorage
    localStorage.setItem('selectedLanguage', selectedLanguage);
    // Reload the page to update the language
    window.location.reload();
}

// On page load, check if a language is selected in localStorage
window.onload = function() {
    var savedLanguage = localStorage.getItem('selectedLanguage');
    if (savedLanguage) {
        document.getElementById('language').value = savedLanguage;
        updateLanguageContent(savedLanguage);
    }
};

// Function to update the content based on selected language
function updateLanguageContent(language) {
    var feedbackText = document.getElementById('feedbackText');
    var complaintButton = document.getElementById('complaintButton');
    var feedbackButton = document.getElementById('feedbackButton');

    if (language === 'ta') {
        feedbackText.innerHTML =
            'நாங்கள் உங்கள் கருத்துக்களை வரவேற்கிறோம். உங்கள் கருத்துகளை எங்களுடன் பகிர்ந்து கொள்ளுங்கள், அது உங்கள் அடுத்த அனுபவத்தை மேலும் சிறப்பாக மாற்ற உதவும்.';
        complaintButton.innerHTML = 'புகார்';
        feedbackButton.innerHTML = 'கருத்து';
    } else {
        feedbackText.innerHTML =
            'We would love to get your feedback. Please share your feedback with us so that we can make your service experience even better next time.';
        complaintButton.innerHTML = 'Complaint';
        feedbackButton.innerHTML = 'Feedback';
    }

}

