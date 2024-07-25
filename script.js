document.addEventListener('DOMContentLoaded', function() {
    var loaderOverlay = document.getElementById('loader-overlay');
    var loader = document.getElementById('loader');
    
    document.querySelectorAll('.loader-link').forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            loaderOverlay.style.display = 'block';
            loader.style.display = 'block';
            document.querySelector('.loader-text').textContent = "Humza is thinking";
            setTimeout(function() {
                window.location.href = link.getAttribute('href');
            }, 1000);
        });
    });

    var contactForm = document.getElementById('contactForm');
    var successMessage = document.getElementById('successMessage');

    contactForm.addEventListener('submit', function(event) {
        event.preventDefault();

        var firstName = contactForm.elements['firstName'].value.trim();
        var lastName = contactForm.elements['lastName'].value.trim();
        var email = contactForm.elements['useremail'].value.trim();
        var message = contactForm.elements['usermessage'].value.trim();
        var isValid = true;

        document.querySelectorAll('.validation-message').forEach(function(element) {
            element.textContent = '';
        });
        document.querySelectorAll('.styled-input input, .styled-input textarea').forEach(function(element) {
            element.style.borderBottom = '1px solid #2d2d2d';
        });
        if (firstName === '') {
            document.getElementById('firstName').style.borderBottom = '2px solid #ed2620';
            isValid = false;
        }
        if (lastName === '') {
            document.getElementById('lastName').style.borderBottom = '2px solid #ed2620';
            isValid = false;
        }
        if (email === '') {
            document.getElementById('email').style.borderBottom = '2px solid #ed2620';
            isValid = false;
        }
        if (message === '') {
            document.getElementById('message').style.borderBottom = '2px solid #ed2620';
            isValid = false;
        }

        if (isValid) {
            successMessage.style.display = 'inline-block';
            successMessage.style.color = '#0BFED4';
            setTimeout(function() {
                successMessage.style.display = 'none';
                contactForm.submit();
            }, 2000);
        }
    });
});

function downloadResume() {
    const pdfUrl = 'resume-humza2.pdf';
    const link = document.createElement('a');
    link.href = pdfUrl;
    link.setAttribute('download', 'resume-humza2.pdf');
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}
