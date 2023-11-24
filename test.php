<!DOCTYPE html>
<html>
<head>
    <title>Datepicker Test</title>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- jQuery UI -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
    $(document).ready(function() {
        $("#invoice_due_date_string").datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true
        });
    });
    </script>
</head>
<body>

<label for="invoice_due_date" class="form-label">Due Date</label>
<input class="form-control form-control-sm datepicker" placeholder="yyyy-mm-dd (optional)" tabindex="7" maxlength="100" autocomplete="off" size="100" type="text" name="due_date" id="invoice_due_date_string" />

</body>
</html>
