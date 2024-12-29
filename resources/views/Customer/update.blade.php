<!DOCTYPE html> 
<html> 
<head> 
    <title>Update Profile </title> 
</head> 
<body> 
 
<form action="{{ route('update-customer',['id'=>$model->cust_id]) }}" method="POST" enctype="multipart/form-data">  
    @csrf  
    <label for="username">Username:</label> 
    <input type="text" name="username" id="username" value="{{$model->username}}"> 
 
    <br> 

    <label for="cust_Fname">Full Name:</label> 
    <input type="text" name="cust_Fname" id="cust_Fname" value="{{$model->cust_Fname}}"> 
 
    <br> 

    <label for="cust_email">Email:</label> 
    <input type="text" name="cust_email" id="cust_email" value="{{$model->cust_email}}"> 
 
    <br> 
 
    <label for="cust_phoneNo">Phone No:</label> 
    <input type="text" name="cust_phoneNo" id="cust_phoneNo" value="{{$model->cust_phoneNo}}"> 

    <br> 
 
    <label for="cust_password">Password:</label> 
    <input type="text" name="cust_password" id="cust_password" value="{{$model->cust_password}}"> 
 
   
    <button type="submit">Submit</button> 
    <button type="reset">Reset</button> 
</form> 
 
 
</body> 
</html>