<!DOCTYPE html> 
<html> 
<head> 
    <title>Update Product</title> 
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
            border: 1px solid #000000;
            border-radius: 6px;
            background-color: #f2f2f2;
        }

        /* Increase the height of the textarea for bigger box size */
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #000000;
            border-radius: 6px;
            background-color: #f2f2f2;
            resize: vertical; /* Allow vertical resizing */
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
<h1>UPDATE PRODUCT</h1>
 
<form action="{{ route('update-product',['id'=>$model->prod_id]) }}" method="POST" enctype="multipart/form-data"> 
    @csrf  
    <label for="prod_name">Product Name:</label> 
    <input type="text" name="prod_name" id="prod_name" value="{{$model->prod_name}}"> 
 
    <br> 

    <label for="prod_price">Price:</label> 
    <input type="number" name="prod_price" id="prod_price"  min="0.01" step="0.01" step="any" value="{{$model->prod_price}}"> 
 
    <br> 

    <!-- Use textarea for bigger box size -->
    <label for="prod_desc">Description:</label> 
    <textarea name="prod_desc" id="prod_desc" rows="5">{{$model->prod_desc}}</textarea>
 
    <br> 

    <label for="prod_desc1">Scarve Description:</label> 
    <textarea name="prod_desc1" id="prod_desc1" rows="5">{{$model->prod_desc1}}</textarea>
 
    <br> 

    <label for="prod_desc2">Colour Description:</label> 
    <textarea name="prod_desc2" id="prod_desc2" rows="5">{{$model->prod_desc2}}</textarea>
 
    <br> 

    <label for="prod_quantity">Quantity:</label> 
    <input type="number" name="prod_quantity" id="prod_quantity" value="{{$model->prod_quantity}}">
    
    <br>

    <label for="prod_image">Image:</label> 
    <input type="file" name="prod_image" id="prod_image"> 

    <br>

    <label for="prod_image2">Image Side:</label> 
    <input type="file" name="prod_image2" id="prod_image2"> 

    <br>

    <label for="prod_image3">Image Closer:</label> 
    <input type="file" name="prod_image3" id="prod_image3"> 

    <br>

    <label for="prod_image4">Colour:</label> 
    <input type="file" name="prod_image4" id="prod_image4"> 
 
    <button type="submit">Submit</button> 
    <button type="reset">Reset</button> 
</form> 
 
</body> 
</html>
