<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YOUR ADDRESS</title> 
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

        button {
            display: block;
            margin: 0 auto;
        }

        /* Add specific styling for the Create Address button */
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

        .create-view-btn {
            /* Add your desired styles */
            background-color: #204ce6; /* Change to your preferred color */
            color: #fff; /* Text color */
            padding: 10px 20px; /* Adjust padding as needed */
            border-radius: 5px; /* Optional: Rounded corners */
            text-decoration: none; /* Remove underline */
            display: inline-block; /* Ensure it behaves like a block element */
        }

        .create-view-btn:hover {
            /* Add hover effect styles if needed */
            background-color: #204ce6; /* Change to your preferred hover color */
        }

        .create-delete-btn {
            /* Add your desired styles */
            background-color: #e62020; /* Change to your preferred color */
            color: #fff; /* Text color */
            padding: 10px 30px; /* Adjust padding as needed */
            border-radius: 5px; /* Optional: Rounded corners */
            text-decoration: none; /* Remove underline */
            display: inline-block; /* Ensure it behaves like a block element */
        }

        .create-delete-btn:hover {
            /* Add hover effect styles if needed */
            background-color: #e62020; /* Change to your preferred hover color */
        }

        
    </style>
</head>
<body>

<div class="container"> 
    <h1>YOUR ADDRESS</h1>
    <h3>Your Details</h3>
    <div class="button-container">
        <a class="btn btn-danger btn-common create-address-btn" href="{{ route('createform-shipping') }}">Create Address</a>
    </div>

    <table>
        <tbody> 
            @if(count($model) > 0)
                @foreach ($model as $address)
                    @if ($address->user_id == auth()->id()) 
                        <tr> 
                        <td class="table-row">
                            <div class="table-content">
                                <p>{{ $address->ship_name }}</p>
                                <p>{{ $address->ship_phoneNo }}</p>
                                <p>{{ $address->ship_address }}</p>  
                                <p>{{ $address->ship_code }}</p> 
                                <p>{{ $address->ship_city }}</p> 
                                <p>{{ $address->ship_state }}</p>
                            </div>

                        
                            <div class="button-container">
                                <a class="btn btn-danger btn-common create-view-btn" href="{{ route('viewAddress-shipping', ['id' => $address->ship_id]) }}">Use This</a><br>
                                <br>
                                <form action="{{ route('delete-shipping', ['id' => $address->ship_id]) }}" method="get"> 
                                    @csrf 
                                    @method('delete')  
                                    <button class="btn btn-danger btn-common create-delete-btn" type="submit" onclick="return confirm('Are you sure you want to delete this address')">Delete</button> 
                                </form>
                            </div>

                        </td>

                        </tr>
                    @endif
                @endforeach
            @endif
        </tbody> 
    </table>

    <table>
    
</table>

   

<script>
    function showConfirmation() {
        var isConfirmed = confirm('Are you sure you want to submit the order');
        if (isConfirmed) {
            alert('Your order has been submitted successfully!');
            return true; // Proceed with form submission
        } else {
            return false; // Cancel form submission
        }
    }

    var yourVariable = []; 

        function submitForm() {
            
            yourVariable = [];

            console.log("Data cleared and submitted successfully!");
        }
</script>
</body>
</html>
