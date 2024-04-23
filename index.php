<?php get_header(); ?>
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
      <h3>Welcome to <strong>Aviatics</strong></h3>
      <h1>Navigating Futures, Guiding Skies.</h1>
      <h2>We're a squadron of skilled navigators crafting aviation futures with precision.</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>Who We Are</h2>
                <h3>Learn More <span>About Us</span></h3>
                <p></p>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <p>
                        <?php echo get_post_meta(get_the_ID(), 'custom_text_field', true); ?>
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Comprehensive curriculum covering all aspects of airport management.</li>
                        <li><i class="ri-check-double-line"></i> Hands-on training with real-world simulations and internships.</li>
                        <li><i class="ri-check-double-line"></i> Expert faculty with industry experience.</li>
                        <li><i class="ri-check-double-line"></i> Networking opportunities with alumni and industry partners.</li>
                        <li><i class="ri-check-double-line"></i> Reputation for excellence in aviation education.</li>

                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        At AeroAdmin, we're passionate pioneers in aviation education. Our dedicated team is
                        committed to shaping tomorrow's aviation leaders through innovative learning experiences
                        and industry-relevant curriculum. With a focus on excellence and safety, we empower our
                        students to soar to new heights in the dynamic world of airport management. Join us on 
                        this thrilling journey as we navigate the skies of knowledge and opportunity together
                    </p>
                    <a href="<?php echo esc_url(home_url('/index.php/about')); ?>" class="btn-learn-more">Learn More</a>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->
</main>


<!-- ======= Services Section ======= -->
<section id="" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <h3>We do offer awesome <span>Services</span></h3>
          <p>We provide top-notch airport management training, hands-on experience, expert guidance, and a strong alumni network for success in aviation.</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-airplane"></i></div>
              <h4 class="title"><a href="">Airport Management Course</a></h4>
              <p class="description">Comprehensive curriculum covering all aspects of airport operations.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-book"></i></div>
              <h4 class="title"><a href="">Hands-on Training</a></h4>
              <p class="description">Real-world simulations and internships to provide practical experience.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-star"></i></div>
              <h4 class="title"><a href="">Industry Expertise</a></h4>
              <p class="description"> Learn from experienced faculty with deep knowledge of aviation administration.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-sign-turn-right"></i></div>
              <h4 class="title"><a href="">Career Guidance</a></h4>
              <p class="description"> Personalized support and networking opportunities to help students succeed in their aviation careers.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->



    <!-- ======= Pricing Section ======= -->
    <section id="services" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Course</h2>
          <h3>Elevating careers, <span>One flight at a time.</span></h3>
          <p>Our course offers competitive pricing without sacrificing quality, ensuring accessible education for 
            aspiring aviation professionals.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box">
              <h3>Diploma In Airport<br> Management</h3>
              <h4><sup>₹</sup>30000<span> /-</span></h4>
              <ul>
                <li>Duration 6 Months</li>
                <li>Real-world simulations and internshipsl</li>
                <li>Personalized career guidance</li>
                <li>Enroll Today and Take Off Towards Success!</li>

                <!--<li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>-->
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Apply Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box recommended">
              <span class="recommended-badge">Offer</span>
              <h3>PG Diploma In Airport <br>Management</h3>
              <h4><sup>₹</sup>45000<span> /-</span></h4>
              <ul>
                <li>Duration 1 year</li>
                <li>Advanced curriculum</li>
                <li>Personalized career guidance</li>
                <li>Elevate Your Career in Aviation</li>
                <!--<li class="na">Massa ultricies mi</li>-->
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <h3>Certificate Course In Airport Management</h3>
              <h4><sup>₹</sup>15000<span> /-</span></h4>
              <ul>
                <li>Duration 1 Month</li>
                <li>Practical training</li>
                <li>Career development assistance </li>
                <li>Secure Your Spot Today</li>
                
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
      <div class="container">

        <div class="text-center">
          <h3>Call To Action</h3>
          <p>
          Ready to take flight towards your dream career in aviation? Enroll in our courses today and let us
           guide you to success in the dynamic world of aviation management. Don't miss out on this opportunity 
           to soar to new heights – join us now!
          </p>
          <a class="cta-btn" href="tel:+91 9958873874">Call To Action</a> <a class="cta-btn" href="https://api.whatsapp.com/send?phone=9656227714">Contact via WhatsApp</a>
        </div>

      </div>
    </section><!-- End Cta Section -->



    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <h3>Frequently Asked <span>Questions</span></h3>
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">What is the duration of the certificate course? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
              The duration of the Certificate Course in Airport Management is 1 Month</p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Are there any prerequisites for enrolling in the course? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
              No specific prerequisites are required. However, a basic understanding of the aviation industry or related fields can be beneficial.              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question"> Can I enroll in the course if I am currently employed? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
              Yes, the course is designed to accommodate both full-time professionals and students. </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">What career opportunities can I pursue after completing the course? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
              Graduates of the Certificate Course in Airport Management can explore various career paths in airport operations, airline management, ground handling, aviation security, and more.              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question"> Can I get financial assistance or scholarships to cover the course fees?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
              Financial assistance options may be available. Please contact our admissions office for more information on scholarships or payment plans.              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Are there any job placement services available for graduates? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
              Yes, we offer career counseling and job placement assistance to help graduates transition into employment opportunities in the aviation industry.              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <h3>Contact <span>Us</span></h3>
          <p>For inquiries about our Certificate Course in Airport Management or to enroll in the program, please don't hesitate to contact us:</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62868.36160144118!2d76.21595504863282!3d9.99432650000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080d403a0ee5b7%3A0xbb919585c97332e9!2sSMEClabs!5e0!3m2!1sen!2sin!4v1713429274187!5m2!1sen!2sin" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
                <br>
                <br>
                <br>
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>2nd floor Kaloor Complex,Kaloor, Kochi, Kerala 682017</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><a href="mailto:training@smeclabs.org">training@smeclabs.org</a></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p><a href="tel:+919958873874">+919958873874</a></p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <!--<form action="forms/contact.php" method="post" role="form" class="php-email-form">
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
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>-->
            <iframe id="JotFormIFrame-212670475476462" title="Website Form V1" onload="window.parent.scrollTo(0,0)" allowtransparency="true" allow="geolocation; microphone; camera; fullscreen" src="https://form.jotform.com/212670475476462" frameborder="0" style="min-width:100%;max-width:100%;height:539px;border:none;" scrolling="no" > </iframe> <script src='https://form.jotform.com/s/umd/latest/for-form-embed-handler.js'></script> <script>window.jotformEmbedHandler("iframe[id='JotFormIFrame-212670475476462'", "https://form.jotform.com/")</script>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <?php get_footer(); ?>