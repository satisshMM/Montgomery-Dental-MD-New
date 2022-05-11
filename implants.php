<?php
 include"includes/header.php";
 ?>
<!-- banner-start -->
<section>
    <div class="w-100 float-left generic-banner-con text-xl-left text-lg-left text-center">
        <div class="container">
            <div class="generic-banner-content text-white text-center">
                <h1>Implants</h1>
                <p class="text-white mb-0">Dentistry is a highly specialized and intricate medical profession, where
                    Dentist work on very small <br> surfaces to try and repair micro decay.</p>
            </div>
        </div>
    </div>
</section>
<!-- banner-end -->
</div>
</div>
</div>
<!-- header-and-banner-section -->
<!-- Bonding Dentistry -->
<section>
    <div class="w-100 float-left quality-system-con Experince-section" id="bridges">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex align-items-center">
                    <div class="quality-system-left-con">
                        <h2>Implants
                        </h2>
                        <p>Seram ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt.
                        </p>
                        <p>Aenean leo ligula, porttitor eu consequat vitae eleifend ac enim aliqu am lorem ante dapibus
                            in viverra quis feugiata tellus.</p>
                        <div class="quality-system-list">
                            <ul class="list-unstyled">
                                <li class="position-relative"><i class="fas fa-circle"></i>Appearance of
                                    Teeth</li>
                                <li class="position-relative"><i class="fas fa-circle"></i>Dental Cleanings</li>
                                <li class="position-relative"><i class="fas fa-circle"></i>Dental X-rays</li>
                            </ul>
                        </div>
                        <div class="quality-system-list">
                            <ul class="list-unstyled">
                                <li class="position-relative"><i class="fas fa-circle"></i>Regular Checkups</li>
                                <li class="position-relative"><i class="fas fa-circle"></i>Dental Treatments</li>
                                <li class="position-relative"><i class="fas fa-circle"></i>Faster Solutions</li>
                            </ul>
                            <a href="contact.php" class="appointment-btn">Make Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-md-flex align-items-md-end">
                    <div class="quality-system-right-con position-relative text-center overlay-img">
                        <img src="assets/Assets/implants.jpg"
                            style="width: 600px; height: 400px; border-radius:2rem 0 2rem 0">
                        </img>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Invisalign-section -->



<!-- Contact-section -->
<section>
    <div class="w-100 float-left form-main-con" id="contact-form">
        <div class="container">
            <div class="text-center">
                <h2 style="padding-top:3rem;">Book An Appointment</h2>
                <p>Seram ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt aenean<br>
                    leo ligula porttitor eu consequat vitae eleifend tac.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-6 order-xl-0 order-lg-0 order-2">
                    <div class="form-left-con position-relative text-center">
                        <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_fxvz0c.json"
                            background="transparent" speed="1" style="width: 500px; height: 500px;" loop autoplay>
                        </lottie-player>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form class="contact-form">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1" class="text-white">Department</label>
                            <select class="form-control position-relative" id="exampleFormControlSelect1">
                                <option>General Health Checkup</option>
                                <option>General Health Checkup</option>
                                <option>General Health Checkup</option>
                                <option>General Health Checkup</option>
                                <option>General Health Checkup</option>
                            </select>
                            <i class="fas fa-angle-down"></i>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name:" name="name" id="name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email:">
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="time" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <select class="form-control position-relative">
                                        <option>Choose Doctor </option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    <i class="fas fa-angle-down down-icon"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="textarea form-group W-100">
                                    <textarea class="form-control " placeholder="Message:" rows="3" name="comments"
                                        id="comments"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn  appointment-btn">Make Appointment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact-section -->
<?php
 include"includes/footer.php";
 ?>