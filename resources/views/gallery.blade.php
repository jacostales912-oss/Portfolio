<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Norman Costales | Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" href="{{ asset('images/icon.png') }}" type="image/png">

</head>
<body data-theme="dark" class="home-page">

    <!-- NAVBAR -->
 <nav class="liquid-glass-nav">
    <div class="nav-center">
        <a href="{{ url('/') }}" class="nav-link">
            <i class="fas fa-home"></i> Home
        </a>
        <a href="{{ url('/gallery') }}" class="nav-link">
            <i class="fas fa-image"></i> Gallery
        </a>
    </div>

    <div class="nav-right">
        <button id="modeToggleBtn">🌓</button>
        <div id="modeOptions" class="mode-options hidden">
            <span id="lightMode">Light Mode</span>
            <span id="darkMode">Dark Mode</span>
        </div>
    </div>
</nav>

    <!-- Back to Home -->
    <a href="{{ url('/') }}" class="back-home">
        <i class="fas fa-arrow-left"></i> Back to Home
    </a>

 <div class="gallery-card-container">

    <div class="gallery-card">

                <div class="gallery-card-caption">
                            PHOTOS  
                </div>  
                      <!-- Images -->
        <div class="gallery-card-images">
            <img src="{{ asset('images/pic1.jpg') }}" alt="Outfit Steals the Show">
            <img src="{{ asset('images/pic2.jpg') }}" alt="Holiday Party Fun">
            <img src="{{ asset('images/pic3.jpg') }}" alt="Where I belong.">
            <img src="{{ asset('images/pic4.jpg') }}" alt="Holiday Party Fun">
            <img src="{{ asset('images/pic5.jpg') }}" alt="Christmas Cheers">
            <img src="{{ asset('images/pic6.jpg') }}" alt="Merry Christmas">
        </div>


    </div>
</div>

<!-- Modal -->
<div id="galleryModal" class="gallery-modal">

    <span class="close">&times;</span>

    <span class="nav prev">&#10094;</span>
    <img class="modal-content" id="modalImg">
    <span class="nav next">&#10095;</span>
</div>



    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
