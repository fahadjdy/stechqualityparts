@extends('layout.user.base')

@section('title') {{ $profile['name'] ?? ''}}  @endsection

@section('content')


    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
              <div class="company-badge mb-4">
                <i class="bi bi-gear-fill me-2"></i>
                Working for your success
              </div>

              <h1 class="mb-4">
              Premium Quality  
                <span class="accent-text">Automobile Body Parts</span> for Every Need! 
              </h1>

              <p class="mb-4 mb-md-5">
              We specialize in high-quality auto parts, ensuring durability and performance. Explore our wide range of products and upgrade your vehicle today!
              </p>

              <div class="hero-buttons">
                <a href="#about" class="btn btn-primary me-0 me-sm-2 mx-1">Get Started</a>
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="btn btn-link mt-2 mt-sm-0 glightbox">
                  <i class="bi bi-play-circle me-1"></i>
                  Play Video
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
              <img src="{{ asset('admin\img\profile\bolero-left-view.png') }}" alt="Hero Image" class="img-fluid">
              <!-- <img src="{{ asset('user/img/illustration-1.webp') }}" alt="Hero Image" class="img-fluid"> -->
              
              <div class="customers-badge">
                <!-- <div class="customer-avatars">
                  <img src="{{ asset('user/img/avatar-1.webp') }}" alt="Customer 1" class="avatar">
                  <img src="{{ asset('user/img/avatar-2.webp') }}" alt="Customer 2" class="avatar">
                  <img src="{{ asset('user/img/avatar-3.webp') }}" alt="Customer 3" class="avatar">
                  <img src="{{ asset('user/img/avatar-4.webp') }}" alt="Customer 4" class="avatar">
                  <img src="{{ asset('user/img/avatar-5.webp') }}" alt="Customer 5" class="avatar">
                  <span class="avatar more">12+</span>
                </div> -->
                <p class="mb-0 mt-2">13+ years of experience</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row stats-row gy-4 mt-5" data-aos="fade-up" data-aos-delay="500">
          <div class="col-lg-3 col-md-6">
            <div class="stat-item">
              <div class="stat-icon">
                <i class="bi bi-trophy"></i>
              </div>
              <div class="stat-content">
                <h4>Industry Awards </h4>
                <p class="mb-0">Recognized for Excellence in Automobile Parts Quality</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="stat-item">
              <div class="stat-icon">
                <i class="bi bi-briefcase"></i>
              </div>
              <div class="stat-content">
                <h4>6.5k+ Satisfied Customers </h4>
                <p class="mb-0">Trusted by Thousands of Mechanics & Car Owners</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="stat-item">
              <div class="stat-icon">
                <i class="bi bi-graph-up"></i>
              </div>
              <div class="stat-content">
                <h4>80k+ Parts Delivered</h4>
                <p class="mb-0">Ensuring Quality & Performance Across the Industry</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="stat-item">
              <div class="stat-icon">
                <i class="bi bi-award"></i>
              </div>
              <div class="stat-content">
                <h4> 13+ Years of Experience </h4>
                <p class="mb-0">Expertise in Manufacturing & Supplying Auto Parts</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 align-items-center justify-content-between">

          <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
            <span class="about-meta">MORE ABOUT US</span>
            <h2 class="about-title">{{ $profile['name'] ?? ''}}</h2>
            <p class="about-description">{{ $profile['about'] ?? ''}}</p>

            <div class="row feature-list-wrapper">
              <div class="col-md-6">
                <ul class="feature-list">
                  <li><i class="bi bi-check-circle-fill"></i> High-Quality & Durable Auto Parts</li>
                  <li><i class="bi bi-check-circle-fill"></i> Wide Range of Products for Various Vehicles</li>
                  <li><i class="bi bi-check-circle-fill"></i> Trusted by Thousands of Customers</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="feature-list">
                  <li><i class="bi bi-check-circle-fill"></i> Fast & Reliable Delivery</li>
                  <li><i class="bi bi-check-circle-fill"></i> Competitive Pricing with Excellent Support</li>
                  <li><i class="bi bi-check-circle-fill"></i> Proven Track Record</li>
                </ul>
              </div>
            </div>

            <div class="info-wrapper">
              <div class="row gy-4">
                <div class="col-lg-5">
                  <div class="profile d-flex align-items-center gap-3">
                      <!-- <img src="{{ asset('user/img/ceo-profile.webp') }}" alt="Founder Profile" class="profile-image"> -->
                      <div>
                          <h4 class="profile-name">Taiyab Badhra</h4>
                          <p class="profile-position">Founder & Director</p>
                      </div>
                  </div>
              </div>              
                <div class="col-lg-7">
                  <div class="contact-info d-flex align-items-center gap-2">
                    <i class="bi bi-telephone-fill"></i>
                    <div>
                      <p class="contact-label">Call us anytime</p>
                      <p class="contact-number">+91 {{ $profile['contact_1'] ?? ''}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
            <div class="image-wrapper">
              <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                <img src="{{ asset('user/img/hydroulic_machine.jpeg') }}" style="transform: scaleX(-1);" alt="Business Meeting" class="img-fluid main-image rounded-4">
                <img src="{{ asset('user/img/machine.jpeg') }}" alt="Team Discussion" class="img-fluid small-image rounded-4">
              </div>
              <div class="experience-badge floating">
                <h3>13+ <span>Years</span></h3>
                <p>Of experience in business service</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->


    
    <!-- Features Cards Section -->
    <section id="features-cards" class="features-cards section">

      <div class="container">

        <div class="row gy-4">
          <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
              <div class="feature-box orange">
                  <i class="bi bi-award"></i>
                  <h4>Premium Quality Parts</h4>
                  <p>We provide high-performance, durable auto parts to keep your vehicle running smoothly.</p>
              </div>
          </div><!-- End Feature Box -->
          
          <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
              <div class="feature-box blue">
                  <i class="bi bi-patch-check"></i>
                  <h4>Trusted by Experts</h4>
                  <p>Our parts are trusted by professional mechanics and workshops for reliability and efficiency.</p>
              </div>
          </div><!-- End Feature Box -->
          
          <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
              <div class="feature-box green">
                  <i class="bi bi-truck"></i>
                  <h4>Fast & Secure Delivery</h4>
                  <p>We ensure quick and safe shipping so you receive your parts on time, every time.</p>
              </div>
          </div><!-- End Feature Box -->
          
          <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
              <div class="feature-box red">
                  <i class="bi bi-shield-check"></i>
                  <h4>100% Customer Satisfaction</h4>
                  <p>We stand behind our products with top-notch support and guaranteed quality assurance.</p>
              </div>
          </div><!-- End Feature Box -->        

        </div>

      </div>

    </section><!-- /Features Cards Section -->


    <!-- products Section -->
    <section id="products" class="products section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Products</h2>
        <p>Providing top-quality service is our ultimate goal and commitment.</p>
      </div><!-- End Section Title -->


     


      <div class="container" data-aos="fade-up" data-aos-delay="100" >
        <div id="productListing"></div>
        <div id="pagination"></div>

      </div>

    </section><!-- /products Section -->


    
      <!-- Call To Action Section -->
      <section id="call-to-action" class="call-to-action section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row content justify-content-center align-items-center position-relative">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-4 mb-4">Get the Best Auto Parts for Your Vehicle</h2>
                    <p class="mb-4">Upgrade your ride with premium-quality parts designed for durability and performance. Order now and experience the difference!</p>
                    <a href="tel:{{ $profile['contact_1'] ?? ''}}" class="btn btn-cta">Get in Touch</a>
                </div>

                <!-- Background Abstract Shapes -->
                <div class="shape shape-1">
                    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                        <path d="M47.1,-57.1C59.9,-45.6,68.5,-28.9,71.4,-10.9C74.2,7.1,71.3,26.3,61.5,41.1C51.7,55.9,35,66.2,16.9,69.2C-1.3,72.2,-21,67.8,-36.9,57.9C-52.8,48,-64.9,32.6,-69.1,15.1C-73.3,-2.4,-69.5,-22,-59.4,-37.1C-49.3,-52.2,-32.8,-62.9,-15.7,-64.9C1.5,-67,34.3,-68.5,47.1,-57.1Z" transform="translate(100 100)"></path>
                    </svg>
                </div>

                <div class="shape shape-2">
                    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                        <path d="M41.3,-49.1C54.4,-39.3,66.6,-27.2,71.1,-12.1C75.6,3,72.4,20.9,63.3,34.4C54.2,47.9,39.2,56.9,23.2,62.3C7.1,67.7,-10,69.4,-24.8,64.1C-39.7,58.8,-52.3,46.5,-60.1,31.5C-67.9,16.4,-70.9,-1.4,-66.3,-16.6C-61.8,-31.8,-49.7,-44.3,-36.3,-54C-22.9,-63.7,-8.2,-70.6,3.6,-75.1C15.4,-79.6,28.2,-58.9,41.3,-49.1Z" transform="translate(100 100)"></path>
                    </svg>
                </div>

            </div>

        </div>

      </section><!-- /Call To Action Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Premium Quality Auto Parts for Maximum Performance and Durability</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 g-lg-5">
          <div class="col-lg-5">
            <div class="info-box" data-aos="fade-up" data-aos-delay="200">
              <h3>Contact Info</h3>
              <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div class="content">
                  <h4>Our Location</h4>
                  <p>{{ $profile['address_1'] ?? ''}}</p>
                </div>
              </div>

              <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-telephone"></i>
                </div>
                <div class="content">
                  <h4>Phone Number</h4>
                  <p>+91 {{ $profile['contact_1'] ?? ''}}</p>
                  <p><?php if(!empty($profile['contact_2'])){ echo '+91', $profile['contact_2']; } ?></p>
                </div>
              </div>

              <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bi bi-envelope"></i>
                </div>
                <div class="content">
                  <h4>Email Address</h4>
                  <p>{{ $profile['email_1'] ?? ''}}</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
              <h3>Get In Touch</h3>

              <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">

                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                  </div>

                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                  </div>

                  <div class="col-12">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                  </div>

                  <div class="col-12">
                    <textarea class="form-control" name="message" rows="4" placeholder="Message" required=""></textarea>
                  </div>

                  <div class="col-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>

                    <button type="submit" class="btn">Send Message</button>
                  </div>

                </div>
              </form>

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Contact Section -->

   
@endsection

