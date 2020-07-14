
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Stripe Demo</title>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
</head>

<body>
    <div class="container">
        <form method="POST" action="process_index.php" role="molpayseamless">
            <h1 style="margin-top:40px;">Billing Information</h1>
            <div class="row">
                <div class="col-md-12 marginbttm"> 
                    <span class="mandatory">Amount</span>  
                    <input type="text" class="form-control" name="total_amount" id="total_amount" value="2.00" required>
                </div>
                <hr />
                <button type="submit" class="btn btn-primary pull-right">Pay with FPX</button>
            </div>
        </form>
    </div>
</body>
</html>
