
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<title>DARS</title>


	  <link rel="icon" href="../image/288962599_408601677857494_1395590741157851249_n.jpg" type="image/x-icon">
	  <link rel="apple-touch-icon" sizes="180x180" href="../image/288962599_408601677857494_1395590741157851249_n.jpg">
    <link rel="stylesheet" href="../assets/frontend/default-new/css/all.min.css">
    <link rel="stylesheet" href="../assets/frontend/default-new/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/frontend/default-new/css/jquery.webui-popover.min.css">
    <link rel="stylesheet" href="../assets/frontend/default-new/css/h-2-carousel.css">
    <link rel="stylesheet" href="../assets/frontend/default-new/css/jquery.webui-popover.min.css">
    <link rel="stylesheet" href="../assets/frontend/default-new/css/nice-select.css">
    <link rel="stylesheet" href="../assets/frontend/default-new/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/frontend/default-new/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../assets/frontend/default-new/css/slick-theme.css">
    <link rel="stylesheet" href="../assets/frontend/default-new/css/slick.css">
    <link rel="stylesheet" href="../assets/frontend/default-new/css/style.css">
    <link rel="stylesheet" href="../assets/frontend/default-new/css/new-style.css">
    <link rel="stylesheet" href="../assets/frontend/default-new/css/responsive.css">
    <link rel="stylesheet" href="../assets/frontend/default-new/summernote-0.8.20-dist/summernote-lite.min.css">
    <link rel="stylesheet" href="../assets/global/tagify/tagify.css">
    <link rel="stylesheet" href="../assets/global/toastr/toastr.css">
    <link rel="stylesheet" href="../assets/frontend/default-new/css/custom.css">
    <script src="../assets/global/js/jquery-3.6.1.min.js"></script>
	              <style type="text/css">
			          </style>

<style>
  body {
      font-family: Arial, sans-serif;
  }
  #map-container {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
      margin: 100px;
      margin-top: 50px;
      margin-bottom: 5px;
      background: rgba(209, 218, 221, 0.8);
      border: 2px solid #ccc;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }
  #map-container img {
      max-width: 100%;
      height: auto;
      border-radius: 10px;
  }
  #map-text {
      max-width: 40%;
      margin-left: 20px;
      padding: 20px;
      background: rgb(255, 255, 255);
      border: 2px solid #ccc;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
      position: relative;
  }
  #map-text::before {
      content: "";
      position: absolute;
      top: -10px;
      left: -10px;
      right: -10px;
      bottom: -10px;
      z-index: -1;
      background: linear-gradient(135deg, #ffcc33, #ff6699);
      border-radius: 15px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
  }
  #map-text h1 {
      font-size: 2em;
      color: #333;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
      position: relative;
  }
  #map-text h1::after {
      content: "✨";
      position: absolute;
      top: -10px;
      right: -30px;
      font-size: 1.5em;
      animation: sparkle 1s infinite;
  }
  #map-text p {
      font-size: 1.2em;
      color: #555;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
      position: relative;
      text-align: justify;
  }
  @keyframes sparkle {
      0%, 100% {
          opacity: 1;
          transform: scale(1);
      }
      50% {
          opacity: 0.5;
          transform: scale(1.5);
      }
  }
  @media (max-width: 768px) {
      #map-container {
          flex-direction: column;
      }
      #map-text {
          max-width: 100%;
          margin-left: 0;
          margin-top: 20px;
      }
  }
  .map-wrapper {
      position: relative;
      width: 100%;
      max-width: 800px;
  }
  .map-wrapper img {
      width: 100%;
      height: auto;
      border-radius: 10px;
  }
  .region-point {
      position: absolute;
      width: 15px;
      height: 15px;
      background: red;
      border-radius: 50%;
      cursor: pointer;
      border: 2px solid #fff;
  }
  .region-point:hover {
      transform: scale(1.2);
  }
</style>
</head>



  <!-- Include the navbar -->
  <?php include 'headerm.php'; ?>







  <body class="">

<div id="map-container">
  <div>


<div class="map-wrapper">
  <img src="../image/64_2_2021-12-25_22-00-45_ethiopia-basic-facts.webp" alt="Ethiopia Map">
  <a href="100AA.php" class="region-point" style="top: 51%; left: 38%;"></a>
  <a href="200Oromia.php" class="region-point" style="top: 61%; left: 44%;"></a>
  <a href="300Amhara.php" class="region-point" style="top: 32%; left: 33%;"></a>
  <a href="400DireDawa.php" class="region-point" style="top: 44%; left: 58%;"></a>
  <a href="500Harari.php" class="region-point" style="top: 48%; left: 60%;"></a>
  <a href="600Somali.php" class="region-point" style="top: 69%; left: 71%;"></a>
  <a href="700Benishangul.php" class="region-point" style="top: 40%; left: 15%;"></a>
  <a href="800Tigray.php" class="region-point" style="top: 11.5%; left: 35%;"></a>
  <a href="900Afar.php" class="region-point" style="top: 26%; left: 51.5%;"></a>
  <a href="1000Gambela.php" class="region-point" style="top: 60%; left: 10%;"></a>
  <a href="1100SNNPR.php" class="region-point" style="top: 77%; left: 26%;"></a>
  <a href="1200Sidama.php" class="region-point" style="top: 65%; left: 35%;"></a>
  <a href="1300SouthWest.php" class="region-point" style="top: 68%; left: 20%;"></a>
</div>

  </div>
  <div id="map-text">
      <h1>Explore the Beauty of Ethiopia</h1>
      <p>Discover the diverse regions of Ethiopia, each with its unique culture, landscape, and history.
        iscover the diverse regions of Ethiopia, each with its unique culture, landscape, and history.  
       iscover the di 
        iscover the diverse regions of Ethiopia, each with its unique culture, landscape, and history. 
   </p>
  </div>
</div>



<script>




  function showRegionMap(regionPath) {
      document.getElementById('ethiopia-map-img').src = regionPath;
  }
</script>

</header>
<!---------- Header Section End  ---------->
<link rel="stylesheet" type="text/css" href="../assets/frontend/eu-cookie/purecookie.css" async />
































<!-- Start Upcoming Courses -->
<section class="pt-100 pb-50">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="title-one pb-20">
            <p class="subtitle text-uppercase">Ethiopia</p>
            <h4 class="title">Regions of Ethiopia</h4>
            <div class="bar"></div>
          </div>
          <p class="fz_15_m_24">Discover a world of learning opportunities through our upcoming courses, where 
            industry experts and thought leaders will guide you in acquiring new expertise, expanding your h
            orizons, and reaching your full potential.
            Discover a world of learning opportunities through our upcoming courses, where 
            industry experts and thought leaders will guide you in acquiring new expertise, expanding your h
            orizons, and reaching your full potential.
            Discover a world of learning opportunities through our upcoming courses, where 
            industry experts and thought leaders will guide you in acquiring new expertise, expanding your h
            orizons, and reaching your full potential.</p>
            Discover a world of learning opportunities through our upcoming courses, where 
            industry experts and thought leaders will guide you in acquiring new expertise, expanding your h
            orizons, and reaching your full potential.
            Discover a world of learning opportunities through our upcoming courses, where 
            industry experts and thought leaders will guide you in acquiring new expertise, expanding your h
            orizons, and reaching your full potential.
            Discover a world of learning opportunities through our upcoming courses, where 
            industry experts and thought leaders will guide you in acquiring new expertise, expanding your h
            orizons, and reaching your full potential.
            Discover a world of learning opportunities through our upcoming courses, where 
            industry experts and thought leaders will guide you in acquiring new expertise, expanding your h
            orizons, and reaching your full potential.
            Discover a world of learning opportunities through our upcoming courses, where 
            industry experts and thought leaders will guide you in acquiring new expertise, expanding your h
            orizons, and reaching your full potential.
            Discover a world of learning opportunities through our upcoming courses, where 
            industry experts and thought leaders will guide you in acquiring new expertise, expanding your h
            orizons, and reaching your full potential.
        </div>
        <div class="col-lg-8">
          <!-- Items -->
          <div class="row g-3">
                            <div class="col-lg-4">
                <a href="#/course/color-theory-for-designers/42.html" class="course-item-one">
                  <div class="img-rating">
                    <div class="img"><img loading="lazy" src="../image/photo_2023-08-22_16-54-47.jpg" alt="" /></div>
                    <!-- <p class="date">Sep<span>12</span></p> -->
                  </div>
                  <div class="content">
                    <h4 class="title"> Ethiopia</h4>
                     </div>
                </a>
              </div>
                            <div class="col-lg-4">
                <a href="#/course/blog-masterclass-how-to-build-a-successful/41.html" class="course-item-one">
                  <div class="img-rating">
                    <div class="img"><img loading="lazy" src="../image/Flag_of_Dire_Dawa.png" alt="" /></div>
                    <!-- <p class="date">Sep<span>12</span></p> -->
                  </div>
                  <div class="content">
                    <h4 class="title">Dire Dawa</h4>
                   </div>
                </a>
              </div>
                            <div class="col-lg-4">
                <a href="#/course/customer-service-english-essentials/40.html" class="course-item-one">
                  <div class="img-rating">
                    <div class="img"><img loading="lazy" src="../image/Flag_of_Sidama.svg.png" alt="" /></div>
                    <!-- <p class="date">Sep<span>12</span></p> -->
                  </div>
                  <div class="content">
                    <h4 class="title">Sidama</h4>
                   </div>
                </a>
              </div>

              <div class="col-lg-4">
                <a href="#/course/blog-masterclass-how-to-build-a-successful/41.html" class="course-item-one">
                  <div class="img-rating">
                    <div class="img"><img loading="lazy" src="../image/Flag_of_South_West_Ethiopia.svg.png" alt="" /></div>
                    <!-- <p class="date">Sep<span>12</span></p> -->
                  </div>
                  <div class="content">
                    <h4 class="title">South West</h4>
                     </div>
                </a>
              </div>
                            <div class="col-lg-4">
                <a href="#/course/customer-service-english-essentials/40.html" class="course-item-one">
                  <div class="img-rating">
                    <div class="img"><img loading="lazy" src="../image/Flag_of_the_Somali_Region_(1994-2008,_2018-).svg.png" alt="" /></div>
                    <!-- <p class="date">Sep<span>12</span></p> -->
                  </div>
                  <div class="content">
                    <h4 class="title">Somali</h4>
                  </div>
                </a>
              </div>

              <div class="col-lg-4">
                <a href="#/course/blog-masterclass-how-to-build-a-successful/41.html" class="course-item-one">
                  <div class="img-rating">
                    <div class="img"><img loading="lazy" src="../image/Flag_of_the_Tigray_Region.svg.png" alt="" /></div>
                    <!-- <p class="date">Sep<span>12</span></p> -->
                  </div>
                  <div class="content">
                    <h4 class="title">Tigray</h4>
                  </div>
                </a>
              </div>
                            <div class="col-lg-4">
                <a href="#/course/customer-service-english-essentials/40.html" class="course-item-one">
                  <div class="img-rating">
                    <div class="img"><img loading="lazy" src="../image/photo_2023-08-22_17-01-47.jpg" alt="" /></div>
                    <!-- <p class="date">Sep<span>12</span></p> -->
                  </div>
                  <div class="content">
                    <h4 class="title">Customer Service English Essentials</h4>
                  </div>
                </a>
              </div>
              <div class="col-lg-4">
                <a href="#/course/blog-masterclass-how-to-build-a-successful/41.html" class="course-item-one">
                  <div class="img-rating">
                    <div class="img"><img loading="lazy" src="../image/photo_2023-08-22_17-03-56.jpg" alt="" /></div>
                    <!-- <p class="date">Sep<span>12</span></p> -->
                  </div>
                  <div class="content">
                    <h4 class="title">Blog Masterclass: How To Build A Successful</h4>
                  </div>
                </a>
              </div>
                            <div class="col-lg-4">
                <a href="#/course/customer-service-english-essentials/40.html" class="course-item-one">
                  <div class="img-rating">
                    <div class="img"><img loading="lazy" src="../image/photo_2023-08-22_17-05-08.jpg" alt="" /></div>
                    <!-- <p class="date">Sep<span>12</span></p> -->
                  </div>
                  <div class="content">
                    <h4 class="title">Customer Service English Essentials</h4>
                   </div>
                </a>
              </div>  <div class="col-lg-4">
                <a href="#/course/blog-masterclass-how-to-build-a-successful/41.html" class="course-item-one">
                  <div class="img-rating">
                    <div class="img"><img loading="lazy" src="../image/photo_2023-08-22_17-09-04.jpg" alt="" /></div>
                    <!-- <p class="date">Sep<span>12</span></p> -->
                  </div>
                  <div class="content">
                    <h4 class="title">Blog Masterclass: How To Build A Successful</h4>
                  </div>
                </a>
              </div>
                            <div class="col-lg-4">
                <a href="#/course/customer-service-english-essentials/40.html" class="course-item-one">
                  <div class="img-rating">
                    <div class="img"><img loading="lazy" src="../image/photo_2023-08-22_17-11-13.jpg" alt="" /></div>
                    <!-- <p class="date">Sep<span>12</span></p> -->
                  </div>
                  <div class="content">
                    <h4 class="title">Customer Service English Essentials</h4>
                  </div>
                </a>
              </div>
                            
              <div class="col-lg-4">
                <a href="#/course/customer-service-english-essentials/40.html" class="course-item-one">
                  <div class="img-rating">
                    <div class="img"><img loading="lazy" src="../image/photo_2023-08-22_17-13-24.jpg" alt="" /></div>
                    <!-- <p class="date">Sep<span>12</span></p> -->
                  </div>
                  <div class="content">
                    <h4 class="title">Customer Service English Essentials</h4>
                    <p class="info ellipsis-line-2">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                  </div>
                </a>
              </div>
                     
        </div>
      </div>
    </div>
  </section>
<!-- End Upcoming Courses -->








  <!-- Include the navbar -->
  <?php include 'footerm.php'; ?>








</body>
</html>