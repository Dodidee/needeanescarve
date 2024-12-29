
<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.9.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.9.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/newlogo-128x128-1.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Shipping Order</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

  
  
    {{-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
    <title>SHIPPING PAYMENT</title> 
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h3 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 2px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        p {
            margin: 5px 0;
        }

        label {
            display: block;
            margin-top: 20px;
        }

        input[type="file"] {
            border: 1px solid #ddd;
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            background-color: #000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        .table-row {
            display: flex;
            justify-content: space-between;
        }

        .table-content {
            flex-grow: 1; /* Allows it to take up remaining space */
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

        .thank-you-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    </style>
</head>
<body>

<div class="container"> 
    <h1>SHIPPING PAYMENT</h1>
    <h3>Your Details</h3>

    <table>
        <tbody> 
            <tr> 
                <td class="table-row">
                    <div class="table-content">
                        <p>{{ $model->ship_name }}</p>
                        <p>{{ $model->ship_phoneNo }}</p>
                        <p>{{ $model->ship_address }}</p>  
                        <p>{{ $model->ship_code }}</p> 
                        <p>{{ $model->ship_city }}</p> 
                        <p>{{ $model->ship_state }}</p>
                    </div>
                </td>
            </tr>
        </tbody> 
    </table>

    <table>
        <!-- Add your table content here -->
    </table>

    {{-- <h3>Payment</h3>
    <p>You are required to insert the image payment for proof of payment</p> --}}

    <h3>Payment</h3>

    <div class="thank-you-container">
        <img src="{{ asset('images/qrcode.png') }}" alt="Your Image" width="280">
    </div>

    <p>You are required to insert the image payment for your proof payment</p>

    <form action="{{ route('submit-order') }}" method="post" onsubmit="return showConfirmation()">
        @csrf
        <!-- Your form content here -->

        <input type="file" name="order_payment" id="order_payment" accept="image/*" required title="Please upload an image"><br>
        <small>(Accepted formats: only in PNG)</small><br>
        <div class="button-container">
            <button type="submit" class="btn btn-danger btn-common create-address-btn" onclick="generateDate()" style="background-color: black;">Submit Order</button>
        </div>
        
    </form>

    <script>
       function showConfirmation() {
    // Check if the file input is empty
    var fileInput = document.getElementById('order_payment');
    if (!fileInput.files.length) {
        alert('Please insert the image payment before submitting.');
        return false; // Stop form submission
    }

    var isConfirmed = confirm('Are you sure you want to submit the order?');
    if (isConfirmed) {
        // Show the confirmation message
        alert('Your order has been recorded.');
        // Redirect to the thank you page after a short delay
        setTimeout(function() {
            window.location.href = '/thankyou';
        }, 1000); // Adjust the delay time as needed
        return true; // Proceed with form submission
    } else {
        return false; // Cancel form submission
    }
}
        </script>

</body>
</html>
