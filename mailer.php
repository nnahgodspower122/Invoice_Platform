<html>
<head>
<style>
    /* Style for the main form */
    .edit_invoice {
        font-family: Arial, sans-serif;
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: white;
    }

    /* Style for the main form buttons */
    .edit_invoice button {
        background-color: #007BFF;
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
    }

    /* Style for the email input form */
    #emailForm {
        display: none;
        background-color: #F8F8FF;
        border: 1px solid #F8F8FF;
        padding: 20px;
        margin-top: 20px;
        text-align: center;

    }

    #emailForm h2 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    #emailForm label {
        display: block;
        margin-bottom: 10px;
    }

    #recipientEmail {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
    }

    #emailForm button {
        background-color: #FFD700;
        color: black;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
    }

    .error {
        color: red;
        font-size: 14px;
        margin-top: 5px;
    }

    #openEmailModal {
    display: block;
    margin: 0 auto;
    }

    form {
    padding: 20px; /* Adjust the value as needed */
    }

    #invoice-form {
    padding: 50px;
    text-align: center;
    margin-top: 15%;
}

#invoice-form .modal-title {
    text-align: center;
}

#emailForm {
    padding: 20px;
}


</style>
</head>
<body style="background: linear-gradient(to bottom, rgba(95, 158, 160, 0), rgba(95, 158, 160, 1));">
    <form class="edit_invoice" id="invoice-form" action="mailer_process.php" accept-charset="UTF-8" data-remote="true" method="post">
        <!-- Main form fields -->
        <div class="modal-header text-center justify-content-center" style="color: black;">
            <h4 class="modal-title fs-6 mx-auto" style="text-align: center;" id="signup-modal-label">
                To print, download or send your invoice, <br/>you have to add a recipient email first.
            </h4>
        </div>

        <hr>

        <!-- Add the "Add Recipient Email" button -->
        <button type="button" id="openEmailModal">Add Recipient Email</button>

        <!-- Existing main form fields and HTML content -->

        <!-- ... -->

        <!-- Email Input Form (displayed within the same page) -->
        <div id="emailForm" style="display: none;">
            <h2 style="text-align: center;">Add Recipient Email</h2>
            <form action="mailer_process.php" method="post" >
                <input type="email" id="recipientEmail" placeholder="your@gmail.com" name="recipientEmail" style="width: 50%;" required>
                <button type="submit" name="email-form" style="margin-top: 20px; width: 50%; text-align: center;">Send Invoice</button>
            </form>
        </div>
    </form>

    <script>
    document.getElementById("openEmailModal").addEventListener("click", function () {
        var emailForm = document.getElementById("emailForm");
        var openEmailButton = document.getElementById("openEmailModal");
        emailForm.style.display = "block";
        openEmailButton.style.display = "none";
    });
    </script>
</body>
</html>