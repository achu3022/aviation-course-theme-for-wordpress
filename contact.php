<?php
/*
Template Name: Contact Template
*/
get_header();
?>
<style>
    #hero {
        width: 100%;
        height: 50vh;
        background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/about.jpeg')top;
        background-size: cover;
        background-position: center;
        position: relative;
    }
</style>

<section id="hero">
    <div class="hero-container">
        <h3>Welcome to <strong>Aviatics</strong></h3>
        <h1>Courses</h1>
    </div>
</section><!-- End Hero -->
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <h3>Contact <span>Us</span></h3>
          <p>For inquiries about our Certificate Course in Airport Management or to enroll in the program, please don't hesitate to contact us:</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 480px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62868.36160144118!2d76.21595504863282!3d9.99432650000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080d403a0ee5b7%3A0xbb919585c97332e9!2sSMEClabs!5e0!3m2!1sen!2sin!4v1713429274187!5m2!1sen!2sin" frameborder="0" allowfullscreen></iframe>
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

    <?php get_footer(); ?>