
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
  
  
  <title>View product</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

  
  
  
  <style>
    .product-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }

    .product-item {
        text-align: center;
        border: 1px solid #ccc;
        padding: 10px;
    }

    .product-item img {
        object-fit: cover;
        max-width: 100%; /* Adjust this value as needed */
        height: auto;
    }

    html, body {
      scroll-behavior: smooth;
    }

    
</style>

</head>
<body>
@extends('contrast')
  <section data-bs-version="5.1" class="menu menu2 cid-tTTWI4dtRx" once="menu" id="menu2-2d">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index-scarve">
                        <img src="assets/images/logo-nd-144x144.png" alt="Needeane Scarves" style="height: 4.5rem;" href="index-scarve">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black text-primary display-4" href="index-scarve">NeedeaneScarve</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>

            

            <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="dashboard">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="index-scarve">Home</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="view-products">All Collection</a></li>
                    <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="ourStory">Our Story</a></li>
                    

                    <div class="icons-menu">
                        <a class="iconfont-wrapper" href="{{ route('index-cart') }}" target="_blank">
                            <span class="p-2 mbr-iconfont mobi-mbri-shopping-cart mobi-mbri"></span>
                        </a>
                    </div>
            </div>    
            
        </div>
    </nav>
</section>

    <section data-bs-version="5.1" class="features4 cid-tTTsiOJjtV" id="features04-n">
        <!-- Existing content before the product grid -->

        <div class="container">
            <div class="row">
            <!-- Product Grid -->
            <div class="product-grid">
                @foreach($products as $product)
                <div class="product-item">
                    <a href="{{ route('detailProduct-product',['id'=>$product->prod_id]) }}" onmouseover="changeImageToImageThree(this)" onmouseout="changeImageBack(this)">
                        <img id="productImage" src="{{ asset('images/' . $product->prod_image) }}" alt="{{ $product->prod_name }}">
                    </a>

            <br>
                <p>{{ $product->prod_name }}</p>
                <p>RM{{ $product->prod_price }}</p>
                <!-- Add to Cart Button with Redirect -->
                @csrf
                @csrf
                <a class="btn btn-primary" href="{{route('detailProduct-product',['id'=>$product->prod_id]) }}">Add to cart</a>
            </div>
            @endforeach
        </div>
<!-- End Product Grid -->

            </div>
        </div>

    </section>
<br><br>

<section data-bs-version="5.1" class="footer6 cid-tTWQ4qe8wC" once="footers" id="footer6-2g">

    <div class="container">
        <div class="row content mbr-white">
            <div class="col-12 col-md-3 mbr-fonts-style display-4">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-4">
                    <strong>Address</strong>
                </h5>
                <p class="mbr-text mbr-fonts-style display-4">Needeane Scarves, No. 27, Jln Padi Emas 1/5, Bandar Baru Uda, 81200 Johor Bahru, Johor</p> <br>
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 mt-4 display-4">
                    <strong>Contacts</strong>
                </h5>
                <p class="mbr-text mbr-fonts-style mb-4 display-4">Email: care@needeane.com
<br>Phone: +601 1 803016
<br>WhatsApp: +601 27595171<br><br></p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-4">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-4"><strong>About</strong></h5>
                <ul class="list mbr-fonts-style mb-4 display-4"><p><strong><a href="ourStory" class="text-white">Our Story</a></strong></p><p><strong><br></strong></p><p><strong><br></strong></p><p><br></p></ul>
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 mt-5 display-4"></h5>
                <p class="mbr-text mbr-fonts-style mb-4 display-4"></p>
            </div>
            <div class="col-12 col-md-6">
                <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d360.14938711827426!2d103.70847175266472!3d1.4934268623763152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da73050b8d424b%3A0xd1f9e8c69f17af84!2sDian%20Johor%20Bahru!5e0!3m2!1sen!2smy!4v1698463870738!5m2!1sen!2smy" allowfullscreen=""></iframe></div>
            </div>
            <div class="col-md-6">
                
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="col-sm-12 copyright pl-0">
                <p class="mbr-text mbr-fonts-style mbr-white display-4">
                    © Copyright 2024&nbsp;<a href="index.html" class="text-white">Needeane Scarves</a> - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>

<script>
    function changeImageToImageThree(image) {
        image.setAttribute('data-original-src', image.src); // Save original image source
        image.src = "{{ asset('images/' . $product->prod_image3) }}";
    }

    function changeImageBack(image) {
        if (image.getAttribute('data-original-src')) {
            image.src = image.getAttribute('data-original-src'); // Restore original image source
        }
    }

    function increaseQuantity() {
        var quantityInput = document.getElementById('quantityInput');
        var currentValue = parseInt(quantityInput.value);
        var maxValue = parseInt(quantityInput.getAttribute('max') || 10);

        if (currentValue < maxValue) {
            quantityInput.value = currentValue + 1;
        }
    }

    function decreaseQuantity() {
        var quantityInput = document.getElementById('quantityInput');
        var currentValue = parseInt(quantityInput.value);
        var minValue = parseInt(quantityInput.getAttribute('min') || 1);

        if (currentValue > minValue) {
            quantityInput.value = currentValue - 1;
        }
    }
</script>
  
  
</body>
</html>



