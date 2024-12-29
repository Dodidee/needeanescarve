
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
  
  
  <title>Detail product</title>
  <link rel="stylesheet" href="('assets/web/assets/mobirise-icons2/mobirise2.css' )">
  <link rel="stylesheet" href="('assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css')">
  <link rel="stylesheet" href="('assets/bootstrap/css/bootstrap.min.css')">
  <link rel="stylesheet" href="('assets/bootstrap/css/bootstrap-grid.min.css')">
  <link rel="stylesheet" href="('assets/bootstrap/css/bootstrap-reboot.min.css')">
  <link rel="stylesheet" href="('assets/dropdown/css/style.css')">
  <link rel="stylesheet" href="('assets/socicon/css/styles.css')">
  <link rel="stylesheet" href="('assets/theme/css/style.css')">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="{{ asset('assets/mobirise/css/mbr-additional.css') }}"><link rel="stylesheet" href="{{ asset('assets/mobirise/css/mbr-additional.css') }}" type="text/css">

  

    <style>
        /* Define styles for the two columns */
        .container {
            display: flex;
            align-items: center; /* Center items vertically */
        }

        .column1 {
            flex: 1; /* Take 50% of the container width */
        }

        .column2 {
            flex: 1; /* Take 50% of the container width */
            padding: 0 20px; /* Add some padding for spacing */
        }

        .gallery-container {
            position: relative;
        }

        .gallery-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
            cursor: pointer;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px;
        }

        .gallery-button.next {
            right: 10px;
        }

        .gallery-button.prev {
            left: 10px;
        }

        input {
            width: 50px; /* Adjust the width as needed */
            text-align: center;
        }

        button {
            width: 30px;
            cursor: pointer;
        }

        .button1 {
            width: 100px;
            cursor: pointer;
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            border: 2px solid #3498db; /* Border color */
            color: #fff; /* Text color */
            background-color: #3498db; /* Background color */
            border-radius: 5px; /* Rounded corners */
            transition: background-color 0.3s ease; /* Smooth transition on hover */
        }

        .add-to-cart-btn:hover {
            background-color: #2980b9; /* Change background color on hover */
        }

        #galleryImage {
            width: 450px;
            transition: transform 0.2s ease-in-out; /* Add a smooth transition effect */
            
        }


        /* //for contrast purpose */
        body {
        margin: 0;
        overflow-y: auto; /* Set overflow-y to auto to allow vertical scrolling */
        }

        #colorBlindButton {

        background-color: #000000; /* Example blue color, you can change this */
        color: #fff;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        position: fixed;
        bottom: 10px; /* Adjust the distance from the bottom as needed */
        right: 10px; /* Adjust the distance from the right as needed */
        display: inline-block;
        }  

        #tooltip {
        display: none;
        position: fixed;
        bottom: 40px;
        right: 10px;
        background-color: #fff;
        color: #333;
        padding: 5px; /* Adjusted padding to make it smaller */
        border: 1px solid #bdc3c7;
        border-radius: 5px;
        z-index: 1; /* Set a lower z-index for the tooltip */
        }
        
        .image {
        filter: contrast(100%) saturate(100%); /* Initial values */
        }
    
        body {
        background-color: #f2f2f2; /* Initial background color */
        }

        html, body {
        scroll-behavior: smooth;
        }

        .custom-button {
            width: 500px; /* Set your desired width */
        }

        div {
            margin: 10px; /* Adjust margin as needed */
        }

        /* Style the input[type=number] */
        input[type=number] {
            width: 50px; /* Adjust width as needed */
            padding: 5px; /* Adjust padding as needed */
            font-size: 16px; /* Adjust font size as needed */
            border: 1px solid #ccc; /* Add border for visual appeal */
            border-radius: 5px; /* Add border-radius for rounded corners */
            text-align: center; /* Center the text within the input */
        }

        body {
        margin: 0;
        overflow-y: auto;
        }

        .image {
        filter: contrast(100%) saturate(100%);
        }
        #tooltip {
        display: none;
        position: fixed;
        bottom: 40px;
        right: 10px;
        background-color: #fff;
        color: #333;
        padding: 5px;
        border: 1px solid #bdc3c7;
        border-radius: 5px;
        z-index: 1;
        }

        .btn {
        width: 100px; /* Adjust the width to your preference */
        cursor: pointer;
        }

        .quantity-container {
        display: flex;
        align-items: center;
    }

    .quantity-input {
        width: 50px;
        text-align: center;
        margin: 0 10px;
    }

    .quantity-button {
        cursor: pointer;
        padding: 5px 10px;
        border: 1px solid #ccc;
        background-color: #f8f8f8;
    }

    .button-container {
        display: flex;
        align-items: center;
    }

    .btn {
        padding: 10px; /* Adjust the padding to your preference */
    }

    input {
        height: 100%; /* Ensure the input takes the full height of the button */
        padding: 8px; /* Adjust the padding to match the button's padding */
        box-sizing: border-box; /* Include padding and border in the element's total width and height */
    }

    .button {
      display: inline-block;
      padding: 10px 20px; /* Adjust padding as needed */
      margin-right: 10px; /* Adjust margin to create space between buttons */
      text-decoration: none;
      background-color: #3498db; /* Button background color */
      color: #fff; /* Button text color */
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .contrast-container {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      width: 200px; /* Adjust width as needed */
    }

    /* Apply styles to the slider */
    #contrastRange {
      width: 100%; /* Make the slider full width within the container */
    }

    .product-container {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
  }

  .contrast-container,
  .button-container {
    margin-right: 10px; /* Adjust the space between the sections */
  }
    </style>
<body>
     

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
      
      
      <title>Detail product</title>
      <link rel="stylesheet" href="('assets/web/assets/mobirise-icons2/mobirise2.css' )">
      <link rel="stylesheet" href="('assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css')">
      <link rel="stylesheet" href="('assets/bootstrap/css/bootstrap.min.css')">
      <link rel="stylesheet" href="('assets/bootstrap/css/bootstrap-grid.min.css')">
      <link rel="stylesheet" href="('assets/bootstrap/css/bootstrap-reboot.min.css')">
      <link rel="stylesheet" href="('assets/dropdown/css/style.css')">
      <link rel="stylesheet" href="('assets/socicon/css/styles.css')">
      <link rel="stylesheet" href="('assets/theme/css/style.css')">
      <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
      <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
      <link rel="preload" as="style" href="{{ asset('assets/mobirise/css/mbr-additional.css') }}"><link rel="stylesheet" href="{{ asset('assets/mobirise/css/mbr-additional.css') }}" type="text/css">
    
      
    
        <style>
            /* Define styles for the two columns */
            .container {
                display: flex;
                align-items: center; /* Center items vertically */
            }
    
            .column1 {
                flex: 1; /* Take 50% of the container width */
            }
    
            .column2 {
                flex: 1; /* Take 50% of the container width */
                padding: 0 20px; /* Add some padding for spacing */
            }
    
            .gallery-container {
                position: relative;
            }
    
            .gallery-button {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                font-size: 20px;
                cursor: pointer;
                background-color: #007bff;
                color: #fff;
                border: none;
                padding: 10px;
            }
    
            .gallery-button.next {
                right: 10px;
            }
    
            .gallery-button.prev {
                left: 10px;
            }
    
            input {
                width: 50px; /* Adjust the width as needed */
                text-align: center;
            }
    
            button {
                width: 30px;
                cursor: pointer;
            }
    
            .button1 {
                width: 100px;
                cursor: pointer;
                display: inline-block;
                padding: 10px 20px;
                font-size: 16px;
                font-weight: bold;
                text-align: center;
                text-decoration: none;
                cursor: pointer;
                border: 2px solid #3498db; /* Border color */
                color: #fff; /* Text color */
                background-color: #3498db; /* Background color */
                border-radius: 5px; /* Rounded corners */
                transition: background-color 0.3s ease; /* Smooth transition on hover */
            }
    
            .add-to-cart-btn:hover {
                background-color: #2980b9; /* Change background color on hover */
            }
    
            #galleryImage {
                width: 450px;
                transition: transform 0.2s ease-in-out; /* Add a smooth transition effect */
                
            }
    
    
            /* //for contrast purpose */
            body {
            margin: 0;
            overflow-y: auto; /* Set overflow-y to auto to allow vertical scrolling */
            }
    
            #colorBlindButton {
    
            background-color: #000000; /* Example blue color, you can change this */
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            position: fixed;
            bottom: 10px; /* Adjust the distance from the bottom as needed */
            right: 10px; /* Adjust the distance from the right as needed */
            display: inline-block;
            }  
    
            #tooltip {
            display: none;
            position: fixed;
            bottom: 40px;
            right: 10px;
            background-color: #fff;
            color: #333;
            padding: 5px; /* Adjusted padding to make it smaller */
            border: 1px solid #bdc3c7;
            border-radius: 5px;
            z-index: 1; /* Set a lower z-index for the tooltip */
            }
            
            .image {
            filter: contrast(100%) saturate(100%); /* Initial values */
            }
        
            body {
            background-color: #f2f2f2; /* Initial background color */
            }
    
            html, body {
            scroll-behavior: smooth;
            }
    
            .custom-button {
                width: 500px; /* Set your desired width */
            }
    
            div {
                margin: 10px; /* Adjust margin as needed */
            }
    
            /* Style the input[type=number] */
            input[type=number] {
                width: 50px; /* Adjust width as needed */
                padding: 5px; /* Adjust padding as needed */
                font-size: 16px; /* Adjust font size as needed */
                border: 1px solid #ccc; /* Add border for visual appeal */
                border-radius: 5px; /* Add border-radius for rounded corners */
                text-align: center; /* Center the text within the input */
            }
    
            body {
            margin: 0;
            overflow-y: auto;
            }
    
            .image {
            filter: contrast(100%) saturate(100%);
            }
            #tooltip {
            display: none;
            position: fixed;
            bottom: 40px;
            right: 10px;
            background-color: #fff;
            color: #333;
            padding: 5px;
            border: 1px solid #bdc3c7;
            border-radius: 5px;
            z-index: 1;
            }
    
            .btn {
            width: 100px; /* Adjust the width to your preference */
            cursor: pointer;
            }
    
            .quantity-container {
            display: flex;
            align-items: center;
        }
    
        .quantity-input {
            width: 50px;
            text-align: center;
            margin: 0 10px;
        }
    
        .quantity-button {
            cursor: pointer;
            padding: 5px 10px;
            border: 1px solid #ccc;
            background-color: #f8f8f8;
        }
    
        .button-container {
            display: flex;
            align-items: center;
        }
    
        .btn {
            padding: 10px; /* Adjust the padding to your preference */
        }
    
        input {
            height: 100%; /* Ensure the input takes the full height of the button */
            padding: 8px; /* Adjust the padding to match the button's padding */
            box-sizing: border-box; /* Include padding and border in the element's total width and height */
        }
    
        .button {
          display: inline-block;
          padding: 10px 20px; /* Adjust padding as needed */
          margin-right: 10px; /* Adjust margin to create space between buttons */
          text-decoration: none;
          background-color: #3498db; /* Button background color */
          color: #fff; /* Button text color */
          border: none;
          border-radius: 5px;
          cursor: pointer;
        }
    
        .contrast-container {
          padding: 10px;
          border: 1px solid #ccc;
          border-radius: 5px;
          width: 200px; /* Adjust width as needed */
        }
    
        /* Apply styles to the slider */
        #contrastRange {
          width: 100%; /* Make the slider full width within the container */
        }
    
        .product-container {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
      }
    
      .contrast-container,
      .button-container {
        margin-right: 10px; /* Adjust the space between the sections */
      }
        </style>
    <body>
         
    
    <section>
            <!-- Container for two columns -->
            <div class="container">
                <!-- First Column: Big Image -->
                <div class="gallery-container">
                    
                    {{-- <img id="galleryImage" src="{{ asset('images/'.$model->prod_image) }}" width="350" alt="Product Image"> --}}
                    <button class="gallery-button prev" onclick="showImage(-1)" style="background-color: rgba(128, 128, 128, 0.2); border-radius: 50%;">&#62;</button>
                    <img class="image" id="galleryImage" src="{{ asset('images/'.$model->prod_image) }}" width="350" alt="Product Image">
                    <button class="gallery-button prev" onclick="showImage(-1)" style="background-color: rgba(128, 128, 128, 0.2); border-radius: 50%;">&#60;</button>
                    <button class="gallery-button next" onclick="showImage(1)" style="background-color: rgba(128, 128, 128, 0.2); border-radius: 50%;">&#62;</button>
                </div>
                
    
                <!-- Second Column: Other Details -->
    
                <div class="column2">
                <p style="font-size: 40px;"><strong></strong> {{ $model->prod_name }}</p>
                <p style="font-size: 30px;"><strong></strong> RM {{ $model->prod_price }}.00</p>
                <p id="prod_quantity">{{ $model->prod_quantity }} quantity</p>
                
               
                
                {{-- // coding ni ada button dencrease and increase --}}
                {{-- <div class="quantity-container">
                    <button class="quantity-button" onclick="decreaseQuantity()">-</button>
                    <input type="number" name="cart_quantity" class="quantity-input" id="cartQuantity" value="1" min="1">
                    <button class="quantity-button" onclick="increaseQuantity()">+</button>
                </div> --}}
                
    
    
            </form>
            <div class="contrast-container">
                <p><strong>Contrast:</strong></p>
                <div class="button-container">
                    <input type="range" id="contrastRange" min="50" max="500" value="100" step="1" oninput="updateFilters()">
                    <!-- Add space between the input and button -->
                    <span style="margin-right: 10px;"></span>
                    <button class="btn btn-primary" onclick="resetContrast()" style="font-size: 12px; width: 60px; height: 40px;">Reset</button>
                </div>
              </div>
              <form action="{{ route('add_cart',$model->prod_id ) }}" method="POST">
                @csrf
                <div class="button-container">
                    <button class="btn btn-primary" onclick="addToCarts()" style="width: 200px; height: 50px; margin-bottom: 10px;">Add to Cart</button>
                    <input type="number" id="cart_quantity" name="cart_quantity" value="1" min="1" style="width: 200px; height: 50px; margin-bottom: 10px;" onchange="updateProdQuantity()">
                </div>
    
                   
                <p><strong>Description:</strong> {{ $model->prod_desc }}</p>
                <p><strong>Material:</strong> {{ $model->prod_desc1 }}</p>
                <p><strong>Colour Explaination:</strong> {{ $model->prod_desc2 }}</p>
            </div>
        </div>
    
    </section>   
    
        <script>
            let currentImageIndex = 0;
            const images = [
                "{{ asset('images/'.$model->prod_image) }}",
                "{{ asset('images/'.$model->prod_image2) }}",
                "{{ asset('images/'.$model->prod_image3) }}",
                "{{ asset('images/'.$model->prod_image4) }}"
            ];
    
            function showImage(direction) {
                currentImageIndex += direction;
                if (currentImageIndex < 0) {
                    currentImageIndex = images.length - 1;
                } else if (currentImageIndex >= images.length) {
                    currentImageIndex = 0;
                }
    
                document.getElementById('galleryImage').src = images[currentImageIndex];
            }
    
            //     function addToCarts() {
            //     // Add your logic for adding the product to the cart here
            //     alert('Product added to cart!');
            // }
    
            function resetContrast() {
            // Set the contrast range input back to its default value
            document.getElementById('contrastRange').value = 100;
            // Call your updateFilters function to apply the reset value
            updateFilters();
        }
    
    
    
        function addToCart() {
            var selectedQuantity = document.getElementById('selectedQuantity');
            var quantityInput = document.getElementById('quantityInput').value;
            selectedQuantity.innerText = 'Selected Quantity: ' + quantityInput;
        }
    
         function toggleTooltip() {
        var tooltip = document.getElementById("tooltip");
        tooltip.style.display = (tooltip.style.display === "none" || tooltip.style.display === "") ? "block" : "none";
     }
    
     function updateFilters() {
        var contrastValue = document.getElementById("contrastRange").value;
        
        var image = document.getElementById("image");
        image.style.filter = "contrast(" + contrastValue + "%)";
     }
    
     function toggleTooltip() {
        var tooltip = document.getElementById("tooltip");
        tooltip.style.display = (tooltip.style.display === "none" || tooltip.style.display === "") ? "block" : "none";
      }
    
      function updateFilters() {
        var contrastValue = document.getElementById("contrastRange").value;
        var images = document.querySelectorAll('.image');
    
        images.forEach(function(image) {
          image.style.filter = "contrast(" + contrastValue + "%)";
        });
    
        
      }

      function addToCart() {
        var cartQuantity = parseInt(document.getElementById('cart_quantity').value);
        var prodQuantityElement = document.getElementById('prod_quantity');
        var prodQuantity = parseInt(prodQuantityElement.textContent);

        if (cartQuantity <= prodQuantity) {
            var updatedProdQuantity = prodQuantity - cartQuantity;
            prodQuantityElement.textContent = updatedProdQuantity;

            if (updatedProdQuantity <= 0) {
                alert('Out of stock');
                // Prevent submitting the form if out of stock
                return;
            }

            // Store the updated quantity in session storage
            sessionStorage.setItem('updatedProdQuantity', updatedProdQuantity);

            // Submit the form if there is enough stock
            document.getElementById('cartForm').submit();
        } else {
            alert('Not enough stock');
        }
    }
    
//       function addToCart() {
//     var cartQuantity = parseInt(document.getElementById('cart_quantity').value);
//     var prodQuantityElement = document.getElementById('prod_quantity');
//     var prodQuantity = parseInt(prodQuantityElement.textContent);
    
//     if (cartQuantity <= prodQuantity) {
//         var updatedProdQuantity = prodQuantity - cartQuantity;
//         prodQuantityElement.textContent = updatedProdQuantity;
        
//         if (updatedProdQuantity <= 0) {
//             alert('Out of stock');
//             // Prevent adding to cart if out of stock
//             return;
//         }
        
//         // Store the updated quantity in session storage
//         sessionStorage.setItem('updatedProdQuantity', updatedProdQuantity);
        
//         // Add logic to send the item to the cart page
//         alert('Product added to cart!');
//         // Call a function to add the product to the cart
        
//         // Redirect the user back to the product details page
//         window.location.href = 'Product.index?indexupdatedProdQuantity=' + updatedProdQuantity;
//     } else {
//         alert('Not enough stock');
//     }
// }

function updateProdQuantity() {
    var cartQuantity = parseInt(document.getElementById('cart_quantity').value);
    var prodQuantityElement = document.getElementById('prod_quantity');
    var prodQuantity = parseInt(prodQuantityElement.textContent);
    
    var updatedProdQuantity = prodQuantity - cartQuantity;
    
    // Perbarui nilai prod_quantity
    prodQuantityElement.textContent = updatedProdQuantity;
    
    // Tampilkan pesan jika stok tidak mencukupi
    if (updatedProdQuantity < 0) {
        alert('Out of stock');
        // Reset nilai prod_quantity ke 0 jika stok tidak mencukupi
        prodQuantityElement.textContent = 0;
    }
}

    </script>
      
    </body>
    </html>