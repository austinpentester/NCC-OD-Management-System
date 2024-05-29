$(document).ready(function() {
    $('#submitForm').click(function(e) {
     
        e.preventDefault(); // Prevent default form submission

        var formData = $('#departmentForm').serialize(); // Serialize form data
        var csrfToken = $('meta[name="csrf-token"]').attr('content'); // Get CSRF token

        // AJAX POST request with CSRF token
        $.ajax({
            type: 'POST',
            url: '/departments', // Replace with your Laravel route URL
            data: formData,
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function(response) {
                // Handle success response
                console.log(response);
            },
            error: function(xhr, status, error) {
                // Handle error response
                console.error(xhr.responseText);
                alert('An error occurred while processing your request. Please try again later.');
            }
        });
    });
});
