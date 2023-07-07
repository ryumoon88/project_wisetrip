@extends('layouts.main')
@section('content')
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
<section class="apply-now-article" id="article">
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

@endsection
