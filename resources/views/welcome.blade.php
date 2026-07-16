<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeAcademy - IT Testlar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Kameron:wght@400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Yuyu+Short&display=swap');

        body {
            margin: 0;
            padding: 0;
            background: #36454F; 
            color: #ffffff;
        }

        h1 {
            font-family: 'Kameron', serif;
            font-weight: 700;
        }

    p {
    font-family: "Dancing Script", "Playfair Display", Georgia, serif !important;
    font-optical-sizing: auto;
    font-weight: 600 !important; 
    font-style: normal;
    font-size: 1.85rem !important; 
}
        header {
            background-color: #242f35;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        header ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            overflow-x: auto;
            white-space: nowrap;
        }
        header li a {
            display: block;
            color: #e0e0e0;
            text-decoration: none;
            padding: 15px 20px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        header li a:hover {
            background-color: #04AA6D;
            color: white;
        }
        .carousel-container {
            max-width: 650px; 
            width: 100%;
            margin: 0 auto;
        }
        .carousel-item img {
            height: 380px;
            object-fit: cover;
        }
    </style>
</head>
<body>
<header>
    <div class="container-fluid">
        <ul>
            <li><a href="">HTML</a></li>
            <li><a href="">CSS</a></li>
            <li><a href="">Bootstrap</a></li>
            <li><a href="">JavaScript</a></li>
            <li><a href="">SQL</a></li>
            <li><a href="">Laravel</a></li>
            <li><a href="/register">Register</a></li>
            <li><a href="/login">Login</a></li>
        </ul>
    </div>
</header>
<main class="container my-5 py-4">
    <div class="row text-center mb-5">
        <div class="col-12">
            <h1 class="display-4 text-white">
                Testni o'ting va IT da o'z darajangizni tekshirib ko'ring
            </h1>
        </div>
    </div>
    <div class="row align-items-center g-4 justify-content-center">
        <div class="col-lg-6 d-flex justify-content-center justify-content-lg-end">
            <div class="carousel-container shadow-lg rounded-3 overflow-hidden">
                <div id="mainCodeCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('image/code.png') }}" class="d-block w-100" alt="Slide 1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/code2.jpg') }}" class="d-block w-100" alt="Slide 2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/code3.jpg') }}" class="d-block w-100" alt="Slide 3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-start">
            <p class="fs-3 lh-base ps-lg-3" style="color: #b0bec5; max-width: 500px;">
                O'z bilimingizni sinab ko'ring va natijalarni maksimal darajaga olib chiqing! Har bir topshirilgan test sizning real ko'nikmalaringizni aniqlashga yordam beradi.
            </p>
        </div>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min .js"></script>
</body>
</html>