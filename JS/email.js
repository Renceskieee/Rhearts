function openEmailModal() {
    document.getElementById('emailModal').style.display = "block";
}

function closeEmailModal() {
    document.getElementById('emailModal').style.display = "none";
}

function sendEmail() {
    var emailTo = document.getElementById('emailTo').value;
    var emailSubject = document.getElementById('emailSubject').value;
    var emailBody = document.getElementById('emailBody').value;

    var mailtoLink = "mailto:" + encodeURIComponent(emailTo) +
                     "?subject=" + encodeURIComponent(emailSubject) +
                     "&body=" + encodeURIComponent(emailBody);

    window.open(mailtoLink);

    closeEmailModal();
}
