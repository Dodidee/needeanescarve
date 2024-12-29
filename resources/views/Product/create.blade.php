<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 800px; /* Increased max-width to accommodate two sections */
            margin: auto;
            display: grid; /* Using CSS grid for layout */
            grid-template-columns: 1fr 1fr; /* Two columns: 50% width each */
            grid-gap: 20px; /* Spacing between columns */
        }

        .section-left {
            grid-column: 1 / 2; /* Left section spans first column */
        }

        .section-right {
            grid-column: 2 / 3; /* Right section spans second column */
        }

        .section-right label {
            display: block;
            margin-bottom: 5px;
        }

        .section-right input[type="file"] {
            width: 100%;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="reset"] {
            background-color: #dc3545;
            margin-left: 10px;
        }

        /* Clear floats to prevent other elements from floating around */
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        h2 {
            margin-top: 0;
            margin-bottom: 20px; /* Added margin for spacing */
        }
    </style>
</head>
<body>
    <form action="{{ route('submit-create-product') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h2>Add Scarf</h2>
        <div class="section-left">
            <label for="prod_name">Product Name:</label>
            <input type="text" name="prod_name" id="prod_name">

            <label for="prod_price">Price:</label>
            <input type="number" name="prod_price" id="prod_price" min="0.01" step="0.01" value="0" step="any">

            <label for="prod_desc">Description:</label>
            <textarea name="prod_desc" id="prod_desc" rows="4" cols="70"></textarea>

            <label for="prod_desc1">Scarf Description:</label>
            <textarea name="prod_desc1" id="prod_desc1" rows="5" cols="70"></textarea>

            <label for="prod_desc2">Colour Description:</label>
            <textarea name="prod_desc2" id="prod_desc2" rows="6" cols="70"></textarea>

            <label for="prod_quantity">Quantity:</label>
            <input type="number" name="prod_quantity" id="prod_quantity">
        </div>
        <div class="section-right">
            <label for="prod_image">Image:</label>
            <input type="file" name="prod_image" id="prod_image">

            <label for="prod_image2">Image Side:</label>
            <input type="file" name="prod_image2" id="prod_image2">

            <label for="prod_image3">Image Closer:</label>
            <input type="file" name="prod_image3" id="prod_image3">

            <label for="prod_image4">Colour:</label>
            <input type="file" name="prod_image4" id="prod_image4">
        </div>

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>

</html>
