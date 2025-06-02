<?php
include 'layout/header.php';
?>

    <!-- Page Title Start -->
    <div class="page-title contact-title-bg">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-6 text-start">
                            <h2>Contact Us</h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title End -->

    <!-- Contact Section Start -->
    <section class="contact-section pb-100 pt-100">
        <div class="container">
            <div class="section-title text-center">
                <span>Contact Us</span>
                <h2>Get In Touch With Us</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-3">
                    <div class="row justify-content-center">

                        <div class="col-lg-12 col-sm-6">
                            <div class="contact-card">
                                <i class='bx bxs-envelope'></i>
                                <ul>
                                    <li>
                                         <a href="mailto:info@mecercontruction.com">info@mecercontruction.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-6  ">
                            <div class="contact-card">
                                <i class='bx bxs-location-plus'></i>
                                <ul>
                                    <li>
                                       4289 Willow Creek Blvd, Dallas, TX 75219 United States
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="contact-area">
                        <h3>Let's Talk</h3>
                        <form id="contactForm">
                            <div class="row justify-content-center">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required
                                               data-error="Please enter your name" placeholder="Your Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required
                                               data-error="Please enter your email" placeholder="Your Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="number" name="number" id="number" class="form-control" required
                                               data-error="Please enter your number" placeholder="Phone Number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="subject" id="subject" class="form-control" required
                                               data-error="Please enter your subject" placeholder="Your Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" class="message-field" id="message" rows="5" required
                                                  data-error="Please type your message"
                                                  placeholder="Write Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <button type="submit" class="default-btn contact-btn">
                                        Send Message
                                    </button>
                                    <div id="msgSubmit" class="h3 alert-text text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->


<?php
include 'layout/footer.php';
?>