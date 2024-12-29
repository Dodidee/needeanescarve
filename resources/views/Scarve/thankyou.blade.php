<!DOCTYPE html>
<html lang="en">
<style>
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.thank-you-container {
    text-align: center;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #f4a936;
}

p {
    color: #333;
}

.create-address-btn {
            /* Add your desired styles */
            background-color: #000000; /* Change to your preferred color */
            color: #fff; /* Text color */
            padding: 10px 20px; /* Adjust padding as needed */
            border-radius: 5px; /* Optional: Rounded corners */
            text-decoration: none; /* Remove underline */
            display: inline-block; /* Ensure it behaves like a block element */
        }

.create-address-btn:hover {
            /* Add hover effect styles if needed */
            background-color: #000000; /* Change to your preferred hover color */
        }

        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 10vh; /* Adjust based on your layout */
        }        
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Your Purchase | needeaneScarve</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="thank-you-container">
    
        <img src="assets/images/thank-you.png" alt="Thank You Image" style="height: 20.0rem;">
        <h1>Thank You for Your Purchase!</h1>
        <p>We appreciate you purchases at needeaneScarve online. Your order has been successfully processed.</p>
        <br>
        <div class="button-container">
            <a class="btn btn-danger btn-common create-address-btn" href="{{ route('dashboard') }}">Continue</a>
        </div>
        <!-- Add any additional information or details here -->
    </div>
</body>
</html>

