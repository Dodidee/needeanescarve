<!DOCTYPE html> 
<html> 
<head> 
    <title>Update Staff</title> 
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .header {
            text-align: center;
            background-color: #007bff;
            color: #fff;
            padding: 20px 0;
        }

        h1 {
            margin: 0;
            font-size: 24px;
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

        button[type="submit"], button[type="reset"] {
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
    <div class="header">
        <h1>Update Staff</h1>
    </div>
    <div class="container">
        <form action="{{ route('update-staff',['id'=>$model->staff_id]) }}" method="POST" enctype="multipart/form-data"> 
            @csrf  
            <label for="username">Username:</label> 
            <input type="text" name="username" id="username" value="{{$model->username}}"> 

            <label for="staff_Fname">Full Name:</label> 
            <input type="text" name="staff_Fname" id="staff_Fname" value="{{$model->staff_Fname}}"> 

            <label for="staff_email">Email:</label> 
            <input type="text" name="staff_email" id="staff_email" value="{{$model->staff_email}}"> 

            <label for="staff_phoneNo">Phone No:</label> 
            <input type="text" name="staff_phoneNo" id="staff_phoneNo" value="{{$model->staff_phoneNo}}"> 

            <label for="staff_password">Password:</label> 
            <input type="text" name="staff_password" id="staff_password" value="{{$model->staff_password}}">

            <button type="submit">Submit</button> 
            <button type="reset">Reset</button> 
        </form>
    </div>
</body> 
</html>
