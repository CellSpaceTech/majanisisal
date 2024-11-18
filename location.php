<?php include("header.php"); ?>

<section class="sub-bnr">
    <div class="position-center-center">
        <div class="container">
            <h4>Contact us</h4>
            <hr class="main">
            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Contact us</li>
            </ol>
        </div>
    </div>
    <div class="scroll"> <a href="#content" class="go-down"></a></div>
</section>

<section class="contact-section pb-100 pt-100" id="content">
    <div class="container">
        <div class="section-title text-center">
            <span>Contact Us</span>
            <h2>Get In Touch With Us</h2>
            <p>Feel free to talk to us, we are available 24/7</p>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="row">
                    <div class="col-lg-12 col-sm-6">
                        <div class="contact-card">
                            <i class="fas fa-mobile-alt"></i>
                            <ul>
                                <li><a href="tel:+254715123008">+254 715123008</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-6">
                        <div class="contact-card">
                            <i class="far fa-envelope"></i>
                            <ul>
                                <li><a href="mailto:support@majanisisal.co.ke">support@majanisisal.co.ke</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-6 offset-lg-0 offset-sm-3">
                        <div class="contact-card">
                            <i class="fas fa-map-marker-alt"></i>
                            <ul>
                                <li>133-2015, Mogotio 20100, Nakuru-Kenya</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="contact-area">
                    <h3>Find Us on the Map</h3>
                    <form id="locationForm" onsubmit="return showLocation()">
                        <div class="form-group">
                            <input type="text" id="place" name="place" class="form-control" placeholder="Enter a location (e.g., Nairobi)" required>
                            <button type="submit" class="default-btn contact-btn">Show Location</button>
                        </div>
                    </form>
                    <div id="map-container" style="margin-top: 20px; width: 100%; height: 500px;"></div>
                </div>
                <div class="contact-area mt-4">
                    <h3>Let's Talk</h3>
                    <form id="contactForm" novalidate="true">
                        <div class="row">
                            <!-- Contact Form Fields (Existing Form Content) -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your name" placeholder="Your Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required="" data-error="Please enter your email" placeholder="Your Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="number" name="number" id="number" class="form-control" required="" data-error="Please enter your number" placeholder="Phone Number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="subject" id="subject" class="form-control" required="" data-error="Please enter your subject" placeholder="Your Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea name="message" class="message-field" id="message" rows="5" required="" data-error="Please type your message" placeholder="Write Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="default-btn contact-btn disabled" style="pointer-events: all; cursor: pointer;">
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

<script>
    function showLocation() {
        const place = document.getElementById('place').value;
        const mapContainer = document.getElementById('map-container');

        if (place.trim() !== '') {
            const apiKey = 'YOUR_GOOGLE_MAPS_API_KEY'; // Replace with your actual API key
            const mapUrl = `https://www.google.com/maps/embed/v1/place?key=${apiKey}&q=${encodeURIComponent(place)}`;
            mapContainer.innerHTML = `<iframe width="100%" height="500" frameborder="0" style="border:0" src="${mapUrl}" allowfullscreen></iframe>`;
        }

        return false; // Prevent form submission
    }
</script>

<?php include("footer.php"); ?>
