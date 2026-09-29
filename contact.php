<title>Contact WOW Canada | Let's Build Your Digital Future </title>
    <meta name="title" content="Start Meaningful Conversations That Transform Ambitious Ideas into Powerful Digital Success 
Stories Across Canada.  "> 

    <meta name="keyboard" content="Contact digital agency Canada, marketing consultation, website development inquiry, SEO 
consultation, branding services, business growth experts, software solutions, app development 
company, Canadian digital agency, marketing support, digital transformation, online business 
consultation, technology partner.">

    <meta name="description" content="Every successful partnership begins with a conversation. WOW Canada welcomes businesses, 
startups, and organizations looking for strategic digital solutions that drive measurable growth. 
Whether the objective is building a new website, increasing online visibility, developing a custom 
application, or creating a comprehensive marketing strategy, expert guidance is available to support 
every stage of the journey. A collaborative approach, transparent communication, and results
oriented execution ensure every project is aligned with business goals.">
<?php include "common/header.php"?>
        <!-- about bannre -->
                <section class="about-banner">
                    <div class="about-overlay"></div>
                    <div class="about-content">
                        <h1>CONTACT US</h1>
                        <span class="down-arrow">&#8595;</span>
                    </div>
                </section>
        <!-- about banner end -->

        <!-- contact section -->
<section class="contact-dark">
  <div class="container d-flex gap-5">
    <!-- LEFT CONTENT -->
    <div class="contact-info">
      <h2>WE ARE ALWAYS HERE<br>TO HELP YOU</h2>

      <p>
        There are many variations of passages the majority have suffered
        alteration in some form randomised words believable.
      </p>

      <div class="info-item">
        <span class="icon"><i class="fa-solid fa-location-dot"></i></span>
        <div>
          <h4>VISIT US</h4>
          <p><?php echo "$address"?></p>
        </div>
      </div>

      <div class="info-item">
        <span class="icon"><i class="fa-solid fa-envelope"></i></span>
        <div>
          <h4>EMAIL ADDRESS</h4>
          <p><?php echo "$email"?></p>
        </div>
      </div>

      <div class="info-item">
        <span class="icon"><i class="fa-solid fa-phone"></i></span>
        <div>
          <h4>CALL NOW</h4>
          <p><?php echo "$phone"?></p>
        </div>
      </div>
    </div>

    <!-- RIGHT FORM -->
    <div class="contact-form">
      <form class="contactFormm" id="contactForm" action="#" method="post">
        <div class="input-field">
            <div style="width: 100%;">
                <input type="text" name="conte_name" id="conte_name" placeholder="Your Name*" >
                <span id="usercontename" class="text-danger error"></span>
            </div>
            <div style="width: 100%;">
                <input type="email" name="conte_email" id="conte_email" placeholder="Email Address*" >
                <span id="userconteemail" class="text-danger error"></span>
            </div>
        </div>

        <div class="input-field">
            <div style="width: 100%;">
                <input type="text" name="conte_phone" id="conte_phone" placeholder="Phone Number*">
                <span id="usercontephone" class="text-danger error"></span>
            </div>
            <div style="width: 100%;">
                <input type="text" name="conte_business" id="conte_business" placeholder="Business Name*">
                <span id="usercontebusiness" class="text-danger error"></span>
            </div>
        </div>

        <textarea type="text"  name="conte_message" id="conte_message" placeholder="Message"></textarea>

        <button type="submit" class="it-btn-theme" id="contact11" onclick="alertpuppo()" name="contact11">SEND MESSAGE</button>
      </form>
    </div>

  </div>
</section>
<!-- contact section end -->

<section class="contact-dark">
    <div class="container d-flex gap-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3511.2003675070077!2d79.42304801507632!3d28.352791282529118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a0079a75e2fd33%3A0x93dd44a9ad166d5f!2sWorldomania!5e0!3m2!1sen!2sin!4v1650633372659!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<?php include "common/footer.php"?>
