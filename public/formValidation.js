document.addEventListener('DOMContentLoaded', function() {
    // Get the form element
    var form = document.getElementById('articleForm');

    // Add a submit event listener to the form
    form.addEventListener('submit', function(event) {
        // Retrieve all form field values
        var title = form.querySelector('input[name="title"]').value.trim();
        var body = form.querySelector('textarea[name="body"]').value.trim();
        var categoryId = form.querySelector('select[name="category_id"]').value;
        var excerpt = form.querySelector('input[name="excerpt"]').value.trim();

        // Store error messages
        var errorMessages = [];

        // Validate each field
        if (!title) {
            errorMessages.push('Title cannot be empty!');
        }
        if (!body) {
            errorMessages.push('Content cannot be empty!');
        }
        if (!categoryId) {
            errorMessages.push('Category cannot be empty!');
        }
        if (!excerpt) {
            errorMessages.push('Excerpt cannot be empty!');
        }

        // Display error messages if any
        if (errorMessages.length > 0) {
            event.preventDefault(); // Prevent form submission if there are errors
            alert(errorMessages.join('\n'));
        } else {
            // If no errors, allow the form to submit normally
            // You can remove the preventDefault() call here, but since it's already
            // outside the if block for errors, it won't affect the form submission.
            // Instead, we just do nothing and let the browser handle the submission.
            // Alternatively, you can explicitly submit the form here using:
            // form.submit(); // But this is redundant in this case since the form
            // would submit normally without calling preventDefault().
        }
    });
});