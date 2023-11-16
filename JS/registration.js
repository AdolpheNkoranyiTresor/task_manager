//Check for user availability, password (if it meets the requirement), then enable or disable the submit button if the inputs

$(document).ready(function () {
    // Initialize the form validation and username availability check
    validateForm();
    $('#username').on('input', function () {
        checkUsernameAvailability($(this).val());
    });
});

function validateForm() {
    var username = document.querySelector("#username").value;
    var email = document.querySelector("#email").value;
    var password = document.querySelector("#password").value;
    var submitButton = document.querySelector("#submitBtn");

    // Check if the password is less than 8 characters or username is empty
    if (password.length < 8 || username.length < 1) {
        submitButton.disabled = true;
    } else {
        submitButton.disabled = false;
    }
}

function checkUsernameAvailability(username) {
    $.ajax({
        type: 'POST',
        url: 'registration/userRegistration.php', // Backend script to check availability
        data: { username: username },
        success: function (response) {
            if (response === 'available') {
                // Username is available; enable the submit button
                $('#submitBtn').prop('disabled', false);
            } else {
                // Username is taken; disable the submit button
                $('#submitBtn').prop('disabled', true);
            }
        }
    });
}