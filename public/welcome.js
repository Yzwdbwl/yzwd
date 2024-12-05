// script.js

document.addEventListener('DOMContentLoaded', function() {
    var currentUrl = window.location.pathname;
    
    var goBackLink = document.getElementById('go-back-link');
    
    if (currentUrl === '/') {
        // 
        goBackLink.style.display = 'none';
    } else {
        goBackLink.style.display = 'block';
    }
});