<?php
 include"includes/header.php";
 ?>
<!-- banner-start -->
<section>
    <div class="w-100 float-left generic-banner-con text-xl-left text-lg-left text-center">
        <div class="container">
            <div class="generic-banner-content text-white text-center">
                <h1>Gallery</h1>
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