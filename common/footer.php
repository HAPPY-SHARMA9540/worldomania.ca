<!-- Footer Section -->
<footer class="footer">
    <div class="container" style="    padding: 20px 10px;">
        <div class="footer-top">
            <!-- Logo & About -->
            <div class="footer-box footer-about">
                <img src="assets/img/logo/WOM-Web-Banner-Size-logo.png" alt="Worldomania" title="Worldomania" class="footer-logo">
                <p>
                    Worldomania is a leading digital marketing, website development,
                    SEO and branding agency helping businesses grow online with
                    innovative digital solutions.
                </p>

                <div class="social-links">
                    <a href="https://www.facebook.com/worldomaniaa/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/worldomaniaa/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/worldomania"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.youtube.com/@worldomania"><i class="fab fa-youtube"></i></a>
                    <a href="https://in.pinterest.com/worldomaniaa"><i class="fa-brands fa-pinterest-p"></i></a>
                    <a href="https://x.com/worldomaniaa"><i class="fa-brands fa-x-twitter"></i></a>
                </div>

            </div>

            <!-- Quick Links -->

            <div class="footer-box">

                <h3>Quick Links</h3>

                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>

            </div>

            <!-- Contact -->

            <div class="footer-box">

                <h3>Contact Info</h3>

                <div class="contact-item">
                    <i class="fa-solid fa-location-dot"></i>
                    <span><?php echo $address; ?></span>
                </div>

                <div class="contact-item">
                    <i class="fa-solid fa-envelope"></i>
                    <span><?php echo $email; ?></span>
                </div>

                <div class="contact-item">
                    <i class="fa-solid fa-phone"></i>
                    <span><?php echo $phone; ?></span>
                </div>

            </div>

        </div>

    </div>

    <div class="footer-bottom">
        <div class="container footer-bottom-wrap">
            <p>© 2026 Worldomania. All Rights Reserved.</p>

            <div>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
            </div>
        </div>
    </div>

</footer>

<!-- CSS for Responsive Footer -->
</body>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="js/script.js"></script>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
    const img = document.querySelector('.scroll-img');

    const observer = new IntersectionObserver(
        ([entry]) => {
        if (entry.isIntersecting) {
            img.classList.add('show');
        }
        },
        {
        threshold: 0.25, 
        rootMargin: "0px 0px -80px 0px"
        }
    );
    observer.observe(img);
    </script>

<script>
  AOS.init({
    once: true,     // animation ek hi baar
    duration: 900,  // animation speed
    easing: 'ease-out-cubic'
  });
</script>

<script>
document.addEventListener("DOMContentLoaded", function(){

    const observer = new IntersectionObserver((entries)=>{

        entries.forEach((entry)=>{

            if(entry.isIntersecting){
                entry.target.classList.add("show");
            }

        });

    },{threshold:0.2});

    document.querySelectorAll(".left-animate,.right-animate")
    .forEach((el)=>{
        observer.observe(el);
    });

});
</script>

<script>
const text = `Leading Global <span style="color:#e32030;">Digital Marketing</span><br>
<span style="color:#e32030;">Agency</span> Based in India`;

let i = 0;

function typeWriter() {
    if (i < text.length) {
        document.getElementById("typing").innerHTML = text.slice(0, i + 1);
        i++;
        setTimeout(typeWriter, 40);
    }
}
window.onload = typeWriter;
</script>

<script type="text/javascript">
$("#contact1").click(function(event) {
    event.preventDefault();

    var user = $("#cont_name").val().trim();
    var cont_email = $("#cont_email").val().trim();
    var cont_phone = $("#cont_phone").val().trim();
    var cont_business = $("#cont_business").val().trim();
    var cont_message = $("#cont_message").val().trim();

    let error = false;
    let errorMsg = "";

    // Name validation
    if (user == "") {
        $("#usercontname").html("Please fill the name").show();
        errorMsg += "• Please fill the name\n";
        error = true;
    }

    // Email validation
    if (cont_email == "") {
        $("#usercontemail").html("Please fill the email").show();
        errorMsg += "• Please fill the email\n";
        error = true;
    }

    // Phone validation
    if (cont_phone == "") {
        $("#usercontphone").html("Please fill the phone no.").show();
        errorMsg += "• Please fill the phone number\n";
        error = true;
    } else if (isNaN(cont_phone)) {
        $("#usercontphone").html("Only digits allowed").show();
        errorMsg += "• Phone must contain digits only\n";
        error = true;
    } else if (cont_phone.length != 10) {
        $("#usercontphone").html("Phone must be 10 digits").show();
        errorMsg += "• Phone number must be 10 digits\n";
        error = true;
    }

    // city validation
    if (cont_business == "") {
        $("#usercontbusiness").html("Please fill the business").show();
        errorMsg += "• Please fill the business\n";
        error = true;
    }

    // address validation
    if (cont_message == "") {
        $("#usercontmessage").html("Please fill the message").show();
        errorMsg += "• Please fill the message\n";
        error = true;
    }

    // If error found — show alert after 3 seconds
    if (error) {
        // setTimeout(function(){
        //     alert("Please fix the following:\n\n" + errorMsg);
        // }, 3000);

        setTimeout(function(){
            $(".error").html('');
        }, 2000);

        return false;
    }

    // AJAX Submit
    $.ajax({
        type: "POST",
        url: "mailer.php",
        data: {user,cont_email,cont_phone,cont_business,cont_message},
        dataType: 'json',
        success: function(data) {
            if (data.msg) {
                $('.contactForm')[0].reset();
                
                alert("Your query has been sent successfully!");

            } else {
                alert("Something went wrong!");
            }
        }
    });

});

$("#closePopup").click(function(){
    $("#popupSuccess").fadeOut();
});
</script>

<script>
const counters = document.querySelectorAll('.counter');

counters.forEach(counter => {
    const updateCounter = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;

        const increment = target / 100;

        if(count < target){
            counter.innerText = Math.ceil(count + increment);
            setTimeout(updateCounter, 20);
        }else{
            counter.innerText = target;
        }
    };

    updateCounter();
});
</script>


<script>
document.addEventListener("DOMContentLoaded", function () {

    const hash = window.location.hash;

    if(hash){

        const allServices = document.querySelectorAll(".service-card");

        allServices.forEach(service => {
            service.style.display = "none";
        });

        const activeService = document.querySelector(hash);

        if(activeService){
            activeService.style.display = "flex";
            activeService.scrollIntoView({
                behavior: "smooth"
            });
        }
    }

});
</script>

<script type="text/javascript">
$("#contact11").click(function(event) {
    event.preventDefault();

    var user = $("#conte_name").val().trim();
    var conte_email = $("#conte_email").val().trim();
    var conte_phone = $("#conte_phone").val().trim();
    var conte_business = $("#conte_business").val().trim();
    var conte_message = $("#conte_message").val().trim();

    let error = false;
    let errorMsg = "";

    // Name validation
    if (user == "") {
        $("#usercontename").html("Please fill the name").show();
        errorMsg += "• Please fill the name\n";
        error = true;
    }

    // Email validation
    if (conte_email == "") {
        $("#userconteemail").html("Please fill the email").show();
        errorMsg += "• Please fill the email\n";
        error = true;
    }

    // Phone validation
    if (conte_phone == "") {
        $("#usercontephone").html("Please fill the phone no.").show();
        errorMsg += "• Please fill the phone number\n";
        error = true;
    } else if (isNaN(conte_phone)) {
        $("#usercontephone").html("Only digits allowed").show();
        errorMsg += "• Phone must contain digits only\n";
        error = true;
    } else if (conte_phone.length != 10) {
        $("#usercontephone").html("Phone must be 10 digits").show();
        errorMsg += "• Phone number must be 10 digits\n";
        error = true;
    }

    // city validation
    if (conte_business == "") {
        $("#usercontebusiness").html("Please fill the business").show();
        errorMsg += "• Please fill the business\n";
        error = true;
    }

    // address validation
    if (conte_message == "") {
        $("#usercontemessage").html("Please fill the message").show();
        errorMsg += "• Please fill the message\n";
        error = true;
    }

    // If error found — show alert after 3 seconds
    if (error) {
        // setTimeout(function(){
        //     alert("Please fix the following:\n\n" + errorMsg);
        // }, 3000);

        setTimeout(function(){
            $(".error").html('');
        }, 2000);

        return false;
    }

    // AJAX Submit
    $.ajax({
        type: "POST",
        url: "mailer1.php",
        data: {user,conte_email,conte_phone,conte_business,conte_message},
        dataType: 'json',
        success: function(data) {
            if (data.msg) {
                $('.contactFormm')[0].reset();
                
                alert("Your query has been sent successfully!");

            } else {
                alert("Something went wrong!");
            }
        }
    });

});

$("#closePopup").click(function(){
    $("#popupSuccess").fadeOut();
});
</script>

<!-- header js -->
<script>
let lastScrollTop = 0;
const header = document.querySelector(".main-header");

window.addEventListener("scroll", function () {

    let currentScroll =
        window.pageYOffset || document.documentElement.scrollTop;

    if (currentScroll > lastScrollTop && currentScroll > 100) {
        // Scroll Down
        header.classList.add("hide-header");
    } else {
        // Scroll Up
        header.classList.remove("hide-header");
    }

    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
});
</script>


<script>
new Swiper(".reviewSwiper", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,

    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    breakpoints: {
        0: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 2
        },
        1200: {
            slidesPerView: 3
        }
    }
});
</script>

</html>