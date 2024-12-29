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
  
  
  <title>Home</title>
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

 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 </head>
 <style>
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

    #Button1 {
      position: 100;
      background-color: #000000;
      color: #fff;
      padding: 10px 130px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      z-index: 2; /* Set a higher z-index for the button */
    }

    #Button2 {
      position: 100;
      background-color: #000000;
      color: #fff;
      padding: 10px 100px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      z-index: 2; /* Set a higher z-index for the button */
    }

    #Button3 {
      position: 100;
      background-color: #000000;
      color: #fff;
      padding: 10px 125px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      z-index: 2; /* Set a higher z-index for the button */
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
        width: 500px; /* Set your desired width */}
        
        #buttonImage {
            margin-right: 10px; /* Adjust the margin to create space between the button and image */
            width: 30px; /* Set the width of the image */
            height: auto; /* Maintain aspect ratio */
        
    }
    
 </style>
</head>
<body>

  <div style="display: flex; align-items: center;">
    <button id="colorBlindButton" onclick="toggleTooltip()" style="background-color: #A67E57; color: rgb(255, 255, 255); border: 2px solid rgb(255, 255, 255);">
        {{-- <img id="buttonImage" src="assets/images/eye.png" alt="Button Image"> <!-- Add your image path here --> --}}
        Colour Blind
    </button>
</div>


<div id="tooltip" style="text-align: center;">
<div><h3 style="font-weight: bold;">Colour Blind</h3></div>
<img id="image" class="image" src="assets/images/contrast.png" style="width:100px; height:auto; display: inline-block;">
<p></p>

 <input type="range" id="contrastRange" min="50" max="500" value="100" step="1" oninput="updateFilters()">
  <br>   <br>

  <p><a id="Button1" style="width: 180px; height: 40px; margin-bottom: 10px;" href="stepContrast">How To Use </a></p><br>
  <p><a id="Button2" style="width: 180px; height: 40px; margin-bottom: 10px;" href="colourBlind">What is Colour Blind </a></p><br>
  <p><a id="Button3" style="width: 180px; height: 40px; margin-bottom: 10px;" href="whyContrast">Why Contrast </a></p>
 
  <div style="display: flex; align-items: center;">
    <button id="colorBlindButton" onclick="toggleTooltip()" style="background-color: #A67E57; color: rgb(255, 255, 255); border: 2px solid rgb(255, 255, 255);">
        {{-- <img id="buttonImage" src="assets/images/eye.png" alt="Button Image"> <!-- Add your image path here --> --}}
        Colour Blind
    </button>
</div>
 <br>   <br>
</div>


<script>
 function toggleTooltip() {
    var tooltip = document.getElementById("tooltip");
    tooltip.style.display = (tooltip.style.display === "none" || tooltip.style.display === "") ? "block" : "none";
 }

 function updateFilters() {
    var contrastValue = document.getElementById("contrastRange").value;
    
    var image = document.getElementById("image");
    image.style.filter = "contrast(" + contrastValue + "%)";
 }



</script>
</body>


</html>