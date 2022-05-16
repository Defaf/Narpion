<?php
include 'conn.php';
$conn = OpenCon();
echo "Connected Successfully";
// CloseCon($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Narpion-bowling rank</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><span>Narpion</span></a></h1>
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <!--<li><a class="nav-link scrollto" href="#about">About Us</a></li>-->
          <li class="dropdown"><a href="#"><span>Challenges</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Beginner</a></li>
              <li><a href="#">Intermediate</a></li>
              <li><a href="#">Professional</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Player Lists</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <!--<li><a href="portfolio.php">Bowlling Details</a></li>-->
            <li>Player Lists</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->
<?php $sql = ("SELECT PlayerId, PlayerName, PlayerEmail, Score FROM player, scoreg1  WHERE player.PlayerId = scoreg1.PlayerFK 
 ORDER BY Score DESC");?>
    <section class="inner-page">
      <div class="container">
<?php if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){ ?>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Player Name</th>
              <th scope="col">Player Email</th>
              <th scope="col">Player Score</th>
            </tr>
          </thead>
          <tbody>
      <?php while($row = mysqli_fetch_array($result)){ ?>
            <tr>
              <th scope="row"><?php echo  $row['PlayerId'] ?></th>
              <td><?php echo $row['PlayerName'] ?></td>
              <td><?php echo $row['PlayerEmail'] ?></td>
              <td><?php echo $row['Score'] ?></td>
              <!-- <td><img src="'<?php echo $row['PlayerImg']?>'"</td> -->
            </tr>
          <?php } ?>
          </tbody>
        </table>
        <?php  mysqli_free_result($result); 
        } else{
        echo "No records matching your query were found.";
        }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?> 
      </div>
    </section>

   


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top section-bg">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Narpion</h3>
            <p> 
              Makkah-Jeddah Hwy <br>
              An Nuzhah<br>
              Mecca 24225 <br><br>
              <strong>Phone:</strong> +966 57 064 7945<br>
              <strong>Email:</strong> contacts@company.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Challenges</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Beginner</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Intermediate</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Professional</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>visit us in one of our pages in social media</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4 about">
      <div class="copyright">
        &copy; Copyright <strong><span>Narpion</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://ecapsspace.net/">Ecaps Space</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>