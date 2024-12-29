<!DOCTYPE html>
<html>
<head>
    <title>Create Shipping</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 20px;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #000000;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #000000; /* Updated border color to match */
            border-radius: 6px;
            background-color: #f2f2f2; /* Updated background color to match */
        }

        button {
            background-color: #000000;
            color: #fff;
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #267bb5;
        }

        h1 {
            text-align: center;
            font-size: 36px;
            color: #333;
            margin-top: 20px;
        }
    </style>
</head>

<body>
<h1>SHIPPING ADDRESS</h5>

<form action="{{ route('submit-create-shipping') }}" method="POST">
    @csrf
    <label for="ship_name">Name:</label>
    <input type="text" name="ship_name" id="ship_name">

    <label for="ship_phoneNo">Phone Number:</label>
    <input type="number" name="ship_phoneNo" id="ship_phoneNo">

    <label for="ship_address">Address:</label>
    <input type="text" name="ship_address" id="ship_address">

    <label for="ship_code">Postal Code:</label>
    <input type="number" name="ship_code" id="ship_code">

    <label for="ship_city">City:</label>
    <input type="text" name="ship_city" id="ship_city">

    <label for="ship_state">State:</label>
    <select name="ship_state" id="ship_state">
        <option value="" disabled selected>Choose State</option>
        <option value="Kedah">Kedah</option>
        <option value="Johor">Johor</option>
        <option value="Melaka">Melaka</option>
        <option value="Pahang">Pahang</option>
        <option value="Negeri Sembilan">Negeri Sembilan</option>
        <option value="Selangor">Selangor</option>
        <option value="Perak">Perak</option>
        <option value="Terengganu">Terengganu</option>
        <option value="Kelantan">Kelantan</option>
        <option value="Pulau Pinang">Pulau Pinang</option>
        <option value="Perak">Kedah</option>
        <option value="Perlis">Perlis</option>
        <option value="Sabah">Sabah</option>
        <option value="Sarawak">Sarawak</option>
        <option value="Wilayah Persekutuan">Wilayah Persekutuan</option>
    </select>
    
        <!-- Add more options as needed -->
    </select>

    <button type="submit">Submit</button>
</form>

</body>
</html>

