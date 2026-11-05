<?php
session_start();

// amount URL se lo
if(isset($_GET['amount'])){
    $amount = $_GET['amount'] * 100; // paise me convert
} else {
    echo "Amount not found!";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment</title>
</head>
<body>

<h2>Redirecting to payment...</h2>

<!-- Razorpay Script -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
window.onload = function () {

    var options = {
        "key": "rzp_test_SZjMokwIFAVMvH", // 🔑 Apni test key
        "amount": "<?php echo $amount; ?>",
        "currency": "INR",
        "name": "My Website",
        "description": "Order Payment",

        "handler": function (response){
            // Success hone par redirect
            window.location.href = "confirmation.php?payment_id=" + response.razorpay_payment_id;
        },

        "theme": {
            "color": "#3399cc"
        }
    };

    var rzp = new Razorpay(options);
    rzp.open(); // 🔥 AUTO OPEN PAYMENT
};
</script>

</body>
</html>