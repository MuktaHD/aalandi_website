
<!-- Contact Section -->
<section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>संपर्क</h2>
    <p><span>Need Help?</span> <span class="description-title">संपर्क</span></p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="mb-5">
    <iframe style="width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3779.7165686162452!2d73.89946562606856!3d18.6767105324475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c89cbe661e79%3A0xcb33eea082a1feb7!2sAlandi%20Devachi%2C%20Vadgaon%2C%20Maharashtra%20412105!5e0!3m2!1sen!2sin!4v1733460466937!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <!-- <iframe style="width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen=""></iframe> -->
    </div><!-- End Google Maps -->

    <div class="row gy-4">

      <div class="col-md-6">
        <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
          <i class="icon bi bi-geo-alt flex-shrink-0"></i>
          <div>
            <h3>आळंदी कार्यालय</h3>
            <p>आळंदी देवाची, ता. खेड, जि. पुणे, ४१२१०५</p>
           <p>आळंदी संपर्क क्रमांक – ०८५३०६१७२७२</p>
          </div>
        </div>
      </div><!-- End Info Item -->

      <div class="col-md-6">
        <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
          <i class="icon bi bi-telephone flex-shrink-0"></i>
          <div>
            <h3>फोन</h3>
            <p>+91 9850868214</p>
          </div>
        </div>
      </div><!-- End Info Item -->

      <div class="col-md-6">
        <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
          <i class="icon bi bi-envelope flex-shrink-0"></i>
          <div>
            <h3>ईमेल</h3>
            <p>muktabhosale3@gmail.com</p>
          </div>
        </div>
      </div><!-- End Info Item -->

      <div class="col-md-6">
        <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
          <i class="icon bi bi-clock flex-shrink-0"></i>
          <div>
            <h3>कार्यालयीन वेळा<br></h3>
            <p><strong>सोमवार-रविवार:</strong> 6AM - 22PM; </p>
          </div>
        </div>
      </div><!-- End Info Item -->

    </div>
<!-- 
    <form action="<?= base_url('contactForm') ?>" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="600">
   
      <div class="row gy-4">

        <div class="col-md-6">
          <input type="text" name="name" class="form-control" placeholder="तुमचे नाव" required="">
        </div>

        <div class="col-md-6 ">
          <input type="email" class="form-control" name="email" placeholder="तुमचा ईमेल" required="">
        </div>

        <div class="col-md-12">
          <input type="text" class="form-control" name="subject" placeholder="विषय" required="">
        </div>

        <div class="col-md-12">
          <textarea class="form-control" name="message" rows="6" placeholder="संदेश" required=""></textarea>
        </div>

        <div class="col-md-12 text-center">
          <div class="loading">लोड होत आहे</div>
          <div class="error-message"></div>
          <div class="sent-message">तुमचा संदेश पाठविला गेला आहे. धन्यवाद.!</div>

          <button type="submit">संदेश पाठवा</button>
        </div>

      </div>
    </form>End Contact Form -->
    <form id="contact-form" action="<?= base_url('contactForm') ?>" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="600">
   <div class="row gy-4">
      <div class="col-md-6">
         <input type="text" name="name" class="form-control" placeholder="तुमचे नाव" required="">
      </div>
      <div class="col-md-6">
         <input type="email" class="form-control" name="email" placeholder="तुमचा ईमेल" required="">
      </div>
      <div class="col-md-12">
         <input type="text" class="form-control" name="subject" placeholder="विषय" required="">
      </div>
      <div class="col-md-12">
         <textarea class="form-control" name="message" rows="6" placeholder="संदेश" required=""></textarea>
      </div>
      <div class="col-md-12 text-center">
         <div class="loading">लोड होत आहे</div>
         <div class="error-message"></div>
         <div class="sent-message">तुमचा संदेश पाठविला गेला आहे. धन्यवाद.!</div>
         <button type="submit">संदेश पाठवा</button>
      </div>
   </div>
</form>

  </div>

</section><!-- /Contact Section -->