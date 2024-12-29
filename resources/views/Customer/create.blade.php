<!DOCTYPE html> 
<html> 
<head> 
    <title>Register </title> 
</head> 
<body> 
 
<form action="{{ route('submit-create-customer') }}" method="POST"> 
    @csrf  
    <label for="username">Username:</label> 
    <input type="text" name="username" id="username"> 
 
    <br> 

    <label for="cust_Fname">Full Name:</label> 
    <input type="text" name="cust_Fname" id="cust_Fname"> 
 
    <br> 

    <label for="cust_email">Email:</label> 
    <input type="text" name="cust_email" id="cust_email"> 
 
    <br> 
 
    <label for="cust_phoneNo">Phone No:</label> 
    <input type="text" name="cust_phoneNo" id="cust_phoneNo"> 

    <br> 
 
    <label for="cust_password">Password:</label> 
    <input type="text" name="cust_password" id="cust_password"> 
 
   
    <button type="submit">Submit</button> 
    <button type="reset">Reset</button> 
</form> 
 
 
</body> 
</html>