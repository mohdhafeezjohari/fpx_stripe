<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Stripe Demo</title>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
</head>

<body>

    <div id="header"></div>

    <div class="container">
        <form method="POST" action="process_index.php" role="molpayseamless">
            <h1 style="margin-top:40px;">Billing Information</h1>
            <div class="row">
                <div class="col-md-12 marginbttm">Amount <span class="mandatory">*</span>  <input type="text" class="form-control" name="total_amount" id="total_amount" value="2.00" required></div>
                <hr />
                <button type="submit" class="btn btn-primary pull-right">Pay with FPX</button>
            </div>
        </form>
</body>
</html>
