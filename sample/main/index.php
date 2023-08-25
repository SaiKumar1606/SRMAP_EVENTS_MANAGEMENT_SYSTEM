<?php

    $con = mysqli_connect("localhost", "root", "", "event_form");
    $query = "SELECT * FROM event";

    $result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SRMAP-Event Management System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="">
  <link href="assets/img/apple-touch-icon.png" rel="">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl d-flex align-items-center">

      <div id="logo" class="me-auto">
        <a href="index.html" class="scrollto"><img src="assets/img/srmap.png" alt="" title=""></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#speakers">Clubs</a></li>
          <li><a class="nav-link scrollto" href="#schedule">Schedule</a></li>
          <li><a class="nav-link scrollto" href="#venue">Venue</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a class="buy-tickets scrollto" href="../logout.php">Log Out</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0">SRM<br><span>UNIVERSITY</span> AP</h1>
      <p class="mb-4 pb-0">Experience world-class higher education at SRM University, AP - Andhra Pradesh Campus with internationally recognised programs.</p>
      <a href="#schedule" class="about-btn scrollto">Upcoming Events</a>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Speakers Section ======= -->
    <section id="speakers">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Clubs</h2>
          <p>Here are some of the clubs in SRMAP.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <img src="https://images.pexels.com/photos/1332237/pexels-photo-1332237.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Sports Club</a></h3>
                <p>Learn More....</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="200">
              <img src="https://images.pexels.com/photos/33597/guitar-classical-guitar-acoustic-guitar-electric-guitar.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Speaker 2" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Music Club</a></h3>
                <p>Learn More....</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="300">
              <img src="https://images.pexels.com/photos/1117132/pexels-photo-1117132.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Speaker 3" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Movie Club</a></h3>
                <p>Learn More....</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <img src="https://images.pexels.com/photos/4056723/pexels-photo-4056723.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Speaker 4" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Yoga Club</a></h3>
                <p>Learn More....</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="200">
              <img src="https://images.pexels.com/photos/9072394/pexels-photo-9072394.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Speaker 5" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Esports Club</a></h3>
                <p>Learn More....</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="300">
              <img src="https://images.pexels.com/photos/1264210/pexels-photo-1264210.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Speaker 6" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Photography Club</a></h3>
                <p>Learn More....</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="300">
              <img src="https://images.pexels.com/photos/175658/pexels-photo-175658.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Speaker 6" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Dance Club</a></h3>
                <p>Learn More....</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="300">
              <img src="https://images.pexels.com/photos/9090746/pexels-photo-9090746.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Speaker 6" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Welfare Club</a></h3>
                <p>Learn More....</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="300">
              <img src="https://images.pexels.com/photos/1181244/pexels-photo-1181244.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Speaker 6" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">App Development Club</a></h3>
                <p>Learn More....</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- End Speakers Section -->

    <!-- ======= Schedule Section ======= -->
    <section id="schedule" class="section-with-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Event Schedule</h2>
          <p>Here is the event schedule</p>
        </div>

        <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item">
            <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab">Upcoming Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab">Recent Events</a>
          </li>
        </ul>

        <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <!-- Schdule Day 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

              <?php
              while($row = mysqli_fetch_assoc($result))
              {
              ?>
                <?php
                  if(date("Y-m-d") <= $row['dt'])
                  { ?>
                      <div class="row schedule-item">
                        <div class="col-md-2"><?php echo $row['dt']; ?></div>
                          <div class="col-md-10">
                              <div class="speaker">
                                  <img src="https://images.pexels.com/photos/1157557/pexels-photo-1157557.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Brenden Legros">
                              </div>
                              <h4><?php echo $row['eventname']; ?></h4>
                              <p><?php echo $row['club']; ?></p>
                              <p>Cheif Guest : <?php echo $row['guest']; ?></p>
                              <p><?php echo $row['about']; ?></p>
                          </div>
                      </div>  
                  <?php                      
                  } ?>    
            <?php
              }
            ?>
          

          </div>
          <!-- End Schdule Day 1 -->

          <!-- Schdule Day 2 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

            <?php
              while($row = mysqli_fetch_assoc($result))
              {
              ?>
                <?php
                  if(date("Y-m-d") > $row['dt'])
                  { ?>
                      <div class="row schedule-item">
                        <div class="col-md-2"><?php echo $row['dt']; ?></div>
                          <div class="col-md-10">
                              <div class="speaker">
                                  <img src="https://images.pexels.com/photos/1157557/pexels-photo-1157557.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Brenden Legros">
                              </div>
                              <h4><?php echo $row['eventname']; ?></h4>
                              <p><?php echo $row['club']; ?></p>
                          </div>
                      </div>  
                  <?php                      
                  } ?>    
            <?php
              }
            ?>
          

          <!-- End Schdule Day 2 -->

        </div>

      </div>

    </section><!-- End Schedule Section -->

    <!-- ======= Venue Section ======= -->
    <section id="venue">

      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>Event Venue</h2>
          <p>Event venue location.</p>
        </div>

        <div class="row g-0">
          <div class="col-lg-6 venue-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3826.209523816092!2d80.50613491527284!3d16.46492503308423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a35f253b87d44b3%3A0x591c2967f32abc19!2sSRM%20UNIVERSITY%20AP%20ANDHRA%20PRADESH!5e0!3m2!1sen!2sin!4v1657032545531!5m2!1sen!2sin" style="border:0" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6 venue-info">
            <div class="row justify-content-center">
              <div class="col-11 col-lg-8 position-relative">
                <h3>SRM UNIVERSITY, AP</h3>
                <p>Mangalagiri -Mandal, Neeru Konda, Amaravati, Andhra Pradesh 522502</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- End Venue Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Gallery</h2>
          <p>Check our gallery from the recent events</p>
        </div>
      </div>

      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><a href="https://images.pexels.com/photos/1157557/pexels-photo-1157557.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="gallery-lightbox"><img src="https://images.pexels.com/photos/1157557/pexels-photo-1157557.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="https://images.pexels.com/photos/1708936/pexels-photo-1708936.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="gallery-lightbox"><img src="https://images.pexels.com/photos/1708936/pexels-photo-1708936.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="https://images.pexels.com/photos/1190297/pexels-photo-1190297.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="gallery-lightbox"><img src="https://images.pexels.com/photos/1190297/pexels-photo-1190297.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="https://images.pexels.com/photos/787961/pexels-photo-787961.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="gallery-lightbox"><img src="https://images.pexels.com/photos/787961/pexels-photo-787961.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="https://images.pexels.com/photos/587741/pexels-photo-587741.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="gallery-lightbox"><img src="https://images.pexels.com/photos/587741/pexels-photo-587741.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="https://images.pexels.com/photos/2263436/pexels-photo-2263436.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="gallery-lightbox"><img src="https://images.pexels.com/photos/2263436/pexels-photo-2263436.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="https://images.pexels.com/photos/1983046/pexels-photo-1983046.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="gallery-lightbox"><img src="https://images.pexels.com/photos/1983046/pexels-photo-1983046.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="https://images.pexels.com/photos/3023317/pexels-photo-3023317.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="gallery-lightbox"><img src="https://images.pexels.com/photos/3023317/pexels-photo-3023317.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid" alt=""></a></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact Us</h2>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <address>Mangalagiri -Mandal, Neeru Konda, Amaravati, Andhra Pradesh 522502</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+91 **********</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">itkm.helpdesk@srmap.edu.in</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group col-md-6 mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>TheEvent</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
      -->
        Designed by <a href="https://bootstrapmade.com/">SRMAP</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>