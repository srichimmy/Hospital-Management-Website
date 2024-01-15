<?php
include_once("header.php");
?>

<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>CONTACT US</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Contact Us</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->
	<section id="contact" class="contact">
      <div class="container">

        

      </div>
	   <div class="col-lg-14">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message" required=""></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
       <div class="row">

          <div class="col-lg-14">
      
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.5627550821837!2d80.65780629999999!3d16.4976633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a35fac720a7deb7%3A0x4d62341a9390f207!2sSudhakar%20ENT%20%26%20Dental%20Care!5e0!3m2!1sen!2sin!4v1685599306711!5m2!1sen!2sin" ></iframe>
      </div>
</div>

      </div>
    </section>
	<!-- End Contact Section -->

  </main><!-- End #main -->

<?php
include_once("footer.php");
?>