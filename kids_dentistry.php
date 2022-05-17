<?php
 include"includes/header.php";
 ?>
<!-- banner-start -->
<section>
    <div class="w-100  generic-banner-con text-xl-left text-lg-left text-center">
        <div class="container">
            <div class="generic-banner-content text-white text-center">
                <h1>Kids Dentistry</h1>
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
    <div class="w-100 float-left quality-system-con Experince-section" id="bonding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex align-items-center">
                    <div class="quality-system-left-con">
                        <h2>Kids Dentistry
                        </h2>
                        <p>At Kid's Dentistry of Montgomery Dental MD, we understand that children have totally
                            different necessities with regards to dental visits and that a positive involvement with the
                            dental specialist makes way for a long period of healthy teeth and a huge smile.
                        </p>
                        <p>That is the reason our pediatric dental office is committed to treating kids in a fun-filled
                            atmosphere where an excursion to the dental specialist is effortless.</p>

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
<!-- Bonding Dentistry-section -->
<!-- Dental Veneer section -->
<section>
    <div class="w-100 float-left core-vaule-con mb-4" id="veneers">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 d-md-flex  order-xl-0 order-lg-0 order-md-0 order-2">
                    <div class=" core-vaule-left-con position-relative text-center">
                        <img src="assets/Assets/brush.jpg"
                            style="width:500px; height: 450px; border-radius:0 2rem 0 2rem;" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="core-vaule-right-con text-xl-left text-lg-left text-md-left text-center">
                        <div class="core-vaule-title">
                            <h2>Brushing Twice
                            </h2>
                            <p>Most dental specialists believe that you should clean your teeth two times every day -
                                once at the beginning of the day and once at night.
                            </p>
                        </div>
                        <p> This is important during the night, the development of plaque is for the most part
                            undisturbed. Brushing after every supper is additionally supported by dental specialists.
                        </p><br>
                        <a href="contact.php" class="appointment-btn">Make Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Dental Veneers-section -->



<!-- Contact-section -->
<section>
    <div class="w-100 float-left form-main-con" id="contact-form">
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