<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Yummy Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <style>
    /* Mengurangi jarak antara header dan hero section */
    #header {
      margin-bottom: 0; /* Hilangkan margin bawah */
      padding-bottom: 0; /* Hilangkan padding bawah */
    }

    #hero {
      padding-top: 10px; /* Kurangi jarak padding atas */
      margin-top: -10px; /* Atur jarak lebih rapat */
    }

    .sitename {
      font-size: 70px;
      font-family: 'Amatic SC', cursive;
      color: rgb(80, 50, 50);
      margin-bottom: 0; /* Hilangkan margin bawah */
    }
  </style>
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">
      
      <!-- Yummy Text -->
      <div class="logo d-flex align-items-center me-auto me-xl-0">
        <h1 class="sitename">Restaurant Tradisional</h1>
      </div>

    </div>  
  </header>

  <main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">
      <div class="container">
        <div class="row gy-4 justify-content-center justify-content-lg-between">
          <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Welcome<br>Delicious Food</h1>
            <p data-aos="fade-up" data-aos-delay="100">Selamat datang di Ayam Bakar Restaurant, tempat di mana rasa dan kenikmatan bertemu dalam setiap hidangan.</p>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="assets/img/hero-img1.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>
    </section><!-- /Hero Section -->
  </main>
</body>
</html>
