<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <style>
        /* Define styles for the two columns */
        body {
            font-family: 'Arial', sans-serif;
        }

        .container {
            display: flex;
            align-items: top; /* top items vertically */
        }

        .column1 {
            flex: 1; /* Take 50% of the container width */
        }

        .column2 {
            flex: 1; /* Take 50% of the container width */
            padding: 0 20px; /* Add some padding for spacing */
        }

        table {
            width: 100%; /* Adjusted to full width */
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center;">DETAILS PRODUCT</h1>
    <form method="GET" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="column1">
                <table>
                    <tr>
                        <!-- First Column: Product Details -->
                        <th>Product Name</th>
                        <td>{{ $model->prod_name }}</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>{{ $model->prod_price }}</td>
                    </tr>
                    <tr>
                        <th>Quantity</th>
                        <td>{{ $model->prod_quantity }}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{ $model->prod_desc }}</td>
                    </tr>
                    <tr>
                        <th>Scarve desc</th>
                        <td>{{ $model->prod_desc1 }}</td>
                    </tr>
                    <tr>
                        <th>Colour Description</th>
                        <td>{{ $model->prod_desc2 }}</td>
                    </tr>
                </table>
            </div>

            <div class="column2">
                <table>
                    <tr>
                        <!-- Second Column: Images -->
                        <th>Image</th>
                        <td style="text-align: center;"><img src="{{ asset('images/'.$model->prod_image) }}" width="120" alt="Product Image"></td>
                    </tr>
                    <tr>
                        <th>Image Side</th>
                        <td style="text-align: center;"><img src="{{ asset('images/'.$model->prod_image2) }}" width="120" alt="Product Image"></td>
                    </tr>
                    <tr>
                        <th>Image Closer</th>
                        <td style="text-align: center;"><img src="{{ asset('images/'.$model->prod_image3) }}" width="120" alt="Product Image"></td>
                    </tr>
                    <tr>
                        <th>Colour</th>
                        <td style="text-align: center;"><img src="{{ asset('images/'.$model->prod_image4) }}" width="120" alt="Product Image"></td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
</body>

</html>
