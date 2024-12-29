<!DOCTYPE html>
<html>
<head>
    <title>Create Staff</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"],
        button[type="reset"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"] {
            background-color: #007bff;
        }

        button[type="reset"] {
            background-color: #ccc;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="{{ route('submit-create-staff') }}" method="POST" onsubmit="return validateForm()">
            @csrf
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>

            <label for="staff_Fname">Full Name:</label>
            <input type="text" name="staff_Fname" id="staff_Fname" required>

            <label for="staff_email">Email (must end with @gmail.com):</label>
            <input type="text" name="staff_email" id="staff_email" required pattern=".+@gmail\.com">

            <label for="staff_phoneNo">Phone No:</label>
            <input type="text" name="staff_phoneNo" id="staff_phoneNo" required>

            <label for="staff_password">Password:</label>
            <input type="text" name="staff_password" id="staff_password" required>

            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </form>
    </div>

    <script>
        function validateForm() {
            if (!document.getElementById('staff_email').checkValidity()) {
                alert('Please enter a valid email address ending with @gmail.com.');
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
