<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>WISE TRIP</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-edu-meeting.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">

<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
  </head>

<body>
  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo">
                        <img src="{{ asset('images/lgo.png') }}" width="200" height="50">
                    </a>

                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                          <li><a href="meetings.html">Acara</a></li>
                          <li class="scroll-to-section"><a href="#apply">Wilayah</a></li>
                          <li class="scroll-to-section"><a href="#courses">destinasi</a></li>
                          <li class="scroll-to-section"><a href="#courses">Artikel</a></li>
                          <li class="scroll-to-section"><a href="#contact">Contact </a></li>
                          <li class="auth-buttons">
                            <a href="#" class="btn btn-primary">Login</a>
                            <a href="#" class="btn btn-secondary">Register</a>
                        </li>
                      </ul>

                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
    <img src="{{ asset('images/r.jpg') }}" alt="Video Poster" />
    {{-- <video autoplay muted loop id="bg-video">
        <source src="{{ asset('images/vid.mp4') }}" type="video/mp4" />
    </video> --}}
      {{-- <div class="video-overlay header-text">
      </div> --}}
  </section>
  <!-- ***** Main Banner Area End ***** -->
{{-- ADAT --}}
  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
            <div class="item">
                <h1>Pacu Jawi</h1><p>Tanah Datar</p><br>
                <button class="view-details-button">View Details</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
{{-- END ADAT --}}

{{-- WISATA POPULAR --}}
<section class="upcoming-meetings" id="meetings">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Wisata Popular</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi, pariatur recusandae? Et dignissimos consequatur iste, esse similique distinctio magnam mollitia ullam deserunt, magni sint voluptatem eius minus exercitationem consequuntur ex?</p>
                </div><br>
            </div>
            <div class="row">
                    <div class="col-lg-4">
                        <div class="meeting-item">
                            <div class="thumb">
                                <div class="price">
                                    <span>Padang</span>
                                </div>
                                <a href="meeting-details.html"><img src="images/masjid.jpg" alt="New Lecturer Meeting"></a>
                            </div>
                            <div class="down-content">
                                <div class="date">
                                    <img src={{asset('images/service-icon-03.png')}} alt="Logo" width="30" height="30">
                                </div>
                                <h4>Masjid Raya Sumatera Barat</h4></a>
                                <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="meeting-item">
                            <div class="thumb">
                                <div class="price">
                                    <span>Padang</span>
                                </div>
                                <a href="meeting-details.html"><img src="images/masjid.jpg" alt="New Lecturer Meeting"></a>
                            </div>
                            <div class="down-content">
                                <div class="date">
                                    <img src={{asset('images/service-icon-03.png')}} alt="Logo" width="30" height="30">
                                </div>
                                <h4>Masjid Raya Sumatera Barat</h4></a>
                                <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="meeting-item">
                            <div class="thumb">
                                <div class="price">
                                    <span>Padang</span>
                                </div>
                                <a href="meeting-details.html"><img src="images/masjid.jpg" alt="New Lecturer Meeting"></a>
                            </div>
                            <div class="down-content">
                                <div class="date">
                                    <img src={{asset('images/service-icon-03.png')}} alt="Logo" width="30" height="30">
                                </div>
                                <h4>Masjid Raya Sumatera Barat</h4></a>
                                <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="meeting-item">
                            <div class="thumb">
                                <div class="price">
                                    <span>Padang</span>
                                </div>
                                <a href="meeting-details.html"><img src="images/masjid.jpg" alt="New Lecturer Meeting"></a>
                            </div>
                            <div class="down-content">
                                <div class="date">
                                    <img src={{asset('images/service-icon-03.png')}} alt="Logo" width="30" height="30">
                                </div>
                                <h4>Masjid Raya Sumatera Barat</h4></a>
                                <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="meeting-item">
                            <div class="thumb">
                                <div class="price">
                                    <span>Padang</span>
                                </div>
                                <a href="meeting-details.html"><img src="images/masjid.jpg" alt="New Lecturer Meeting"></a>
                            </div>
                            <div class="down-content">
                                <div class="date">
                                    <img src={{asset('images/service-icon-03.png')}} alt="Logo" width="30" height="30">
                                </div>
                                <h4>Masjid Raya Sumatera Barat</h4></a>
                                <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="meeting-item">
                            <div class="thumb">
                                <div class="price">
                                    <span>Padang</span>
                                </div>
                                <a href="meeting-details.html"><img src="images/masjid.jpg" alt="New Lecturer Meeting"></a>
                            </div>
                            <div class="down-content">
                                <div class="date">
                                    <img src={{asset('images/service-icon-03.png')}} alt="Logo" width="30" height="30">
                                </div>
                                <h4>Masjid Raya Sumatera Barat</h4></a>
                                <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div></div>
</section>
{{-- END WISATA POPULAR --}}

{{-- VIDEO --}}
  <section class="apply-now" id="apply">
    <div class="container">
      <div class="row">
            <div class="col-lg-6">
                <div class="cardText">
                    <h3> Lets watching video destination in sumatera barat</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, neque quaerat id voluptatem reiciendis assumenda rem nesciunt! Est architecto laborum odit, officia tempore esse consequatur perferendis repellendus quis vel fugiat!</p>
                    <br><a href="https://www.example.com/explore" class="btn btn-primary">Explore More</a>

                  </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                      <a href="https://www.youtube.com/watch?v=VIDEO_ID">
                        <div class="thumbnail-container">
                          <img src="images/museum.jpg" alt="Video Thumbnail" class="video-thumbnail">
                          <div class="play-icon">
                            <img src="images/playbutton.png" alt="Play Icon">
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>

        </div>
  </section>
{{-- END VIDEO --}}


{{-- TIPS&ARTICLE --}}
<section class="apply-now-article" id="apply">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <div class="section-heading">
                <h2>TIPS & ARTICLE</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi, pariatur recusandae? Et dignissimos consequatur iste, esse similique distinctio magnam mollitia ullam deserunt, magni sint voluptatem eius minus exercitationem consequuntur ex?</p>
            </div><br>
        </div>
        <div class="col-lg-6">
            <div class="CardImage" style="padding-bottom: 20px;">
                <img src="images/gd.jpg" alt=""><br>
                <h3>Lets watching video destination in sumatera barat</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias temporibus a velit voluptatem distinctio, rerum asperiores harum, reiciendis error, molestias veritatis earum possimus. Laboriosam, odio impedit sequi obcaecati architecto deserunt!</p>
                <a href="https://www.example.com/see-more" class="btn btn-primary" style="width: 150px; padding: 10px 20px;">See More</a>
            </div>

          </div>
        <div class="col-lg-6 ">
          <div class="row">
            <div class="col-lg-12">
              <div class="item">
                <h3>9 Popular Travel Destination on sale in 2023</h3>
                <p>You are allowed to use this edu meeting CSS template for your school or university or business. You can feel free to modify or edit this layout.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias temporibus a velit voluptatem distinctio, rerum asperiores harum, reiciendis error, molestias veritatis earum possimus.
                </p>
                <a href="https://www.example.com/see-more" class="btn btn-primary" style="width: 150px; padding: 10px 20px;">See More</a>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h3>How are we going to travel in 2023</h3>
                <p>You are not allowed to redistribute the template ZIP file on any other template website. Please contact us for more information.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias temporibus a velit voluptatem distinctio, rerum asperiores harum, reiciendis error, molestias veritatis earum possimus. Laboriosam, odio impedit sequi obcaecati architecto deserunt!
                </p>
                <a href="https://www.example.com/see-more" class="btn btn-primary" style="width: 150px; padding: 10px 20px;">See More</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
{{--
  END TIPS&ARTICLE --}}

  {{-- CONTACT US --}}
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-heading">
            <h2>Contact Us</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi, pariatur recusandae? Et dignissimos consequatur iste, esse similique distinctio magnam mollitia ullam deserunt, magni sint voluptatem eius minus exercitationem consequuntur ex?</p>
        </div><br>

      <div class="row gx-lg-0 gy-4">

        <div class="col-lg-4">

          <div class="info-container d-flex flex-column align-items-center justify-content-center">
            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Call:</h4>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-clock flex-shrink-0"></i>
              <div>
                <h4>Open Hours:</h4>
                <p>Mon-Sat: 11AM - 23PM</p>
              </div>
            </div><!-- End Info Item -->
          </div>

        </div>

        <div class="col-lg-8">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
           <center> <div class="btn btn-primary" style="padding:10px;">Send Message</div></center>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>
  </section><!-- End Contact Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Impact</span>
          </a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta
            donna mare fermentum iaculis eu non diam phasellus.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            A108 Adam Street <br>
            New York, NY 535022<br>
            United States <br><br>
            <strong>Phone:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> info@example.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Impact</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>
  <!-- End Footer -->


  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/isotope.min.js') }}"></script>
  <script src="{{ asset('js/owl-carousel.js') }}"></script>
  <script src="{{ asset('js/lightbox.js') }}"></script>
  <script src="{{ asset('js/tabs.js') }}"></script>
  <script src="{{ asset('js/video.js') }}"></script>
  <script src="{{ asset('js/slick-slider.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>

    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</body>
</html>
