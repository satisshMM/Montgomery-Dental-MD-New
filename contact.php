<?php
 include"includes/header.php";
 ?>
<!-- banner-start -->
<section>
    <div class="w-100 float-left generic-banner-con text-xl-left text-lg-left text-center">
        <div class="container">
            <div class="generic-banner-content text-white text-center">
                <h1>Contact Us</h1>
                <p class="text-white mb-0">Customer service representatives are available nationwide to answer questions
                    about your dental insurance, <br> claims submissions, payment procedures, changes in.</p>

            </div>
        </div>
    </div>
</section>
<!-- banner-end -->
</div>
</div>
</div>
<!-- header-and-banner-section -->
<!-- Schedule-section -->
<section>
    <div class="w-100 float-left Schedule-con">
        <div class="wrapper">
            <div class="Schedule-heading text-center">
                <h2>Make Schedule Easier and <br>
                    Simpler for Patients
                </h2>
            </div>
            <div class="Schedule-box text-md-left text-center">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="Schedule-box-item position-relative w-100 float-left">
                            <figure class="mb-0 float-md-left overlay-img">
                                <img src="assets/image/Schedule-icon1.png" alt="Schedule-icon" class="img-fluid">
                            </figure>
                            <div class="Schedule-box-title float-md-left overlay-img">
                                <h5>Email</h5>
                                <span class="d-block">support@montgomery.com</span>
                                <span class="d-block">help@montgomery.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="Schedule-box-item position-relative w-100 float-left">
                            <figure class="mb-0 float-md-left overlay-img">
                                <img src="assets/image/Schedule-icon2.png" alt="Schedule-icon" class="img-fluid">
                            </figure>
                            <div class="Schedule-box-title float-md-left overlay-img">
                                <h5>Location</h5>
                                <span class="d-block">121 King Street,<br> 3000, NYC</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="Schedule-box-item position-relative w-100 float-left mb-md-0">
                            <figure class="mb-0 float-md-left overlay-img">
                                <img src="assets/image/Schedule-icon3.png" alt="Schedule-icon" class="img-fluid">
                            </figure>
                            <div class="Schedule-box-title float-md-left overlay-img">
                                <h5>Attendance</h5>
                                <span class="d-block">+123 45 678 901</span>
                                <span class="d-block">+234 56 789 012</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="Schedule-box-item position-relative w-100 float-left mb-0">
                            <figure class="mb-0 float-md-left overlay-img">
                                <img src="assets/image/Schedule-icon4.png" alt="Schedule-icon" class="img-fluid">
                            </figure>
                            <div class="Schedule-box-title float-md-left overlay-img">
                                <h5>Working Hours</h5>
                                <span class="d-block">Monday - Friday: 8AM - 9PM</span>
                                <span class="d-block"> Weekends: Closed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Schedule-section -->
<!-- contact-page-form -->
<section>
    <div class="w-100 float-left contact-page-form-con">
        <div class="wrapper">
            <div class="contact-page-form-txt text-center">
                <h2>Contact Our Friendly Reception<br>
                    Staff with any Enquiry
                </h2>
            </div>
            <div id="form_result"></div>
            <form class="contact-form-plan-box" id="contactpage" method="POST">
                <div class="form-row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name:" name="name" id="name">
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email:" name="email" id="email">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-lg-6 col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="tel" class="form-control" placeholder="Phone:" name="phone" id="phone">
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 col-md-6">
                        <div class="form-group">
                            <select class="form-control select-form position-relative">
                                <option>Subject:</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                            <i class="fas fa-angle-down down-icon"></i>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="textarea form-group">
                        <textarea class="form-control" placeholder="Message:" rows="3" name="comments"
                            id="comments"></textarea>
                    </div>
                </div>
                <div class="submitform-button">
                    <button type="submit" id="submit"
                        class="submitform-btn appointment-btn ml-auto mr-auto d-block">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- contact-page-form -->
<!-- map-section-->
<div class="w-100 float-left map-con">
    <div class="container">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3093.160503004109!2d-77.20934818470656!3d39.17107177952938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b62d4d71e50c7b%3A0xf74cb95959593487!2sMontgomery%20Dental%20MD!5e0!3m2!1sen!2sin!4v1652177960340!5m2!1sen!2sin"
            width="1100" height="450" style="border:0;margin:0 auto;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<!-- map-section-->


<?php
 include"includes/footer.php";
 ?>