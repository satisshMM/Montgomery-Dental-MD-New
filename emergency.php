<?php
 include"includes/header.php";
 ?>
<!-- banner-start -->
<section>
    <div class="w-100 generic-banner-con text-xl-left text-lg-left text-center">
        <div class="container">
            <div class="generic-banner-content text-white text-center">
                <h1>Emergency</h1>
                <p class="text-white mb-0"></p>
            </div>
        </div>
    </div>
</section>
<!-- banner-end -->
</div>
</div>
</div>


<section>
    <div class="w-100 float-left quality-system-con Experince-section" id="bonding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex align-items-center">
                    <div class="quality-system-left-con">
                        <h2>Emergency
                        </h2>
                        <p>Tooth pain is one of the most serious pain in the body close to Heart pain, Kidney pain and
                            Labor pain. Serious tooth pain is brought about by different variables like Tooth Decay, Gum
                            Infection or during eruption of Wisdom tooth .
                        </p>
                        <p>Likewise Pain can be a direct result of trauma or accident (tooth crack, luxation, horizontal
                            relocation or separation, subluxation, dental concussion(tooth was hit), dental interruption
                            (tooth was pushed in), root break, dento-Alveolar break).</p>
                        <div class="quality-system-list">
                            <a href="contact.php" class="appointment-btn">Make Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-md-flex align-items-md-end">
                    <div class="quality-system-right-con position-relative text-center overlay-img">
                        <img src="assets/Assets/kids.jpg"
                            style="width: 600px; height: 400px; border-radius:2rem 0 2rem 0">
                        </img>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact-section -->
<section>
    <div class="w-100 float-left form-main-con pt-4" id="contact-form">
        <div class="container ">
            <div class="text-center">
                <h2>Book An Appointment</h2>
                <p>It's simple and FAST to book your Montgomery Dental MD Appointment Online. Also, you can see a full
                    rundown of available times and pick the time that suits you best.

                </p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 order-xl-0 order-lg-0 order-2">
                    <div class=" position-relative text-center">
                        <img src="assets/Assets/contact.jpg"
                            style="width: 550px; height: 450px; border-radius:2rem 0 2rem 0">
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