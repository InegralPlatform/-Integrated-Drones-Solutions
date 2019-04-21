<?php require_once 'header.php';?>

<!--=========================*
            Contact
*===========================-->
<section id="rt_contact">



    <div class="mt_heading">
        <h2 class="section_heading text-center"><span>Contact Us</span></h2>
        <p class="heading_txt text-center">Contact us freely Treat yourself completely as if you were in your home</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact_info">
                    <div class="contact_heading">
                        <span>Get in Touch</span>
                        <h3>Contact info</h3>
                    </div>
                    <div class="email_sec">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="location">
                                    <i class="icon-map"></i>
                                    <h5>Location</h5>
                                    <p>Anas Ibn Malek St., Riyadh</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="time">
                                    <i class="icon-alarmclock"></i>
                                    <h5>Available Time</h5>
                                    <p>Monday - Saturday</p>
                                    <p>9:00am - 5:00pm</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="location">
                                    <i class="icon-phone"></i>
                                    <div class="phone">
                                        <h5>Phone</h5>
                                        <p>+966 0554133374</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="email">
                                    <i class="icon-envelope"></i>
                                    <h5>Email</h5>
                                    <p><a href="majidyat@gmail.com">Hello@integraldrone.co</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="formProcess.php" method="post">
            <div class="col-md-6">
                <div class="contact_form">
                    <h3>Stay in Touch</h3>
                    <form id="contact_form">
                        <input type="text" name="first_name" id="name" placeholder="First name" required>
                        <input type="text" name="last_name" id="name" placeholder="Last name" required>
                        <input type="email" name="email" id="email" placeholder="Your email" required>
                        <input type="tel" name="telephone" id="phone" placeholder="Your phone" required>

                        <textarea cols="30" rows="5" name="comments" id="message" placeholder="Your message" required></textarea>
                        <button class="rt_btn_color" id="submit-btn" type="submit">Send<span
                                class="mt_load"><span></span></span></button>
                        <!-- <div id="msg"></div> -->
                    </form>
                </div>
            </div>
            </form>
        </div>
    </div>

</section>
<!--=========================*
          End Contact
*===========================-->
