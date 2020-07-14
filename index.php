
<html>
<head>
    <title>Stripe Demo</title>
</head>

<body>
    <form method="POST" action="process_index.php">
        <h1>Billing Information</h1>
        <div class="row">
            <div> 
                <span>Amount</span>  
                <input type="text" name="total_amount" value="2.00" required>
            </div>
            <hr />
            <button type="submit">Pay with FPX</button>
        </div>
    </form>
</body>
</html>
