<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<?php
$pageTitle = "Welcome"; // More generic for homepage, header adds " - LKD Travels"
$activePage = "home";
include 'templates/header.php';
?>
        <section id="hero">
            <h1 data-translate="heroTitle">Explore the World with Us</h1>
            <p data-translate="heroSubtitle">Your adventure starts here. Discover amazing destinations and book your dream vacation.</p>
            <a href="packages.html" class="btn-cta" data-translate="heroCta">View Packages</a>
        </section>

        <section id="popular-destinations">
            <h2 data-translate="popularDestinationsTitle">Popular Destinations in Sri Lanka</h2>
            <div class="grid-container">
                <div class="destination">
                    <img src="images/sigiriya-rock-fortress.jpg" alt="Sigiriya Rock Fortress, Sri Lanka">
                    <div class="card-content">
                        <h3 data-translate="sigiriyaTitle">Sigiriya Rock Fortress</h3>
                        <p data-translate="sigiriyaDescription">Climb the ancient Sigiriya Rock Fortress, a UNESCO World Heritage site, marvel at its frescoes and enjoy panoramic views.</p>
                        <a href="destinations.php#sigiriya" class="btn-details" data-translate="viewDetails">View Details</a>
                    </div>
                </div>
                <div class="destination">
                    <img src="images/ella-nine-arch-bridge.jpg" alt="Ella & Nine Arch Bridge, Sri Lanka">
                    <div class="card-content">
                        <h3 data-translate="ellaTitle">Ella & Nine Arch Bridge</h3>
                        <p data-translate="ellaDescription">Experience the scenic beauty of Ella, hike to Ella Rock, and witness the iconic Nine Arch Bridge amidst lush tea plantations.</p>
                        <a href="destinations.php#ella" class="btn-details" data-translate="viewDetails">View Details</a>
                    </div>
                </div>
                <div class="destination">
                    <img src="images/mirissa-beach-whales.jpg" alt="Mirissa Beach & Whale Watching, Sri Lanka">
                    <div class="card-content">
                        <h3 data-translate="mirissaTitle">Mirissa Beach & Whale Watching</h3>
                        <p data-translate="mirissaDescription">Relax on the golden sands of Mirissa Beach and embark on an exciting whale watching tour to spot majestic blue whales.</p>
                        <a href="destinations.php#mirissa" class="btn-details" data-translate="viewDetails">View Details</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="special-offers">
            <h2 data-translate="specialOffersTitle">Special Offers</h2>
            <div class="offer">
                <h3 data-translate="offer1Title">Weekend Getaway to the Mountains</h3>
                <p data-translate="offer1Description">Escape the city with our special weekend package. Includes 2 nights stay, guided hikes, and local cuisine. Starting from $299!</p>
            </div>
            <div class="offer">
                <h3 data-translate="offer2Title">Tropical Paradise Deal</h3>
                <p data-translate="offer2Description">7-day all-inclusive package to a stunning beach resort. Flights, accommodation, and meals included. Book now and save 20%!</p>
            </div>
        </section>

        <section id="testimonials">
            <h2 data-translate="testimonialsTitle">What Our Customers Say</h2>
            <div class="testimonial">
                <p data-translate="testimonial1Text">"The trip to Paris organized by this agency was flawless. Every detail was taken care of. Highly recommended!" - Jane D.</p>
            </div>
            <div class="testimonial">
                <p data-translate="testimonial2Text">"Our family vacation to Rome was unforgettable. The guides were knowledgeable and friendly. We'll definitely book with them again." - John S.</p>
            </div>
        </section>

        <section id="contact-info">
            <h2 data-translate="contactInfoTitle">Get In Touch</h2>
            <p data-translate="contactInfoSubtitle">Have questions or ready to book your next adventure?</p>
            <p data-translate="contactInfoEmail">Email: contact@globetrotters.com</p>
            <p data-translate="contactInfoPhone">Phone: (555) 123-4567</p>
            <p data-translate="contactInfoAddress">Office: 456 Adventure Avenue, Traveltown, USA</p>
            </div>
        </section>

        <section id="special-offers">
            <h2>Special Offers</h2>
            <div class="offer">
                <h3>Weekend Getaway to the Mountains</h3>
                <p>Escape the city with our special weekend package. Includes 2 nights stay, guided hikes, and local cuisine. Starting from $299!</p>
            </div>
            <div class="offer">
                <h3>Tropical Paradise Deal</h3>
                <p>7-day all-inclusive package to a stunning beach resort. Flights, accommodation, and meals included. Book now and save 20%!</p>
            </div>
        </section>

        <section id="testimonials">
            <h2>What Our Customers Say</h2>
            <div class="testimonial">
                <p>"The trip to Paris organized by this agency was flawless. Every detail was taken care of. Highly recommended!" - Jane D.</p>
            </div>
            <div class="testimonial">
                <p>"Our family vacation to Rome was unforgettable. The guides were knowledgeable and friendly. We'll definitely book with them again." - John S.</p>
            </div>
        </section>

        <section id="contact-info">
            <h2>Get In Touch</h2>
            <p>Have questions or ready to book your next adventure?</p>
            <p>Email: contact@globetrotters.com</p>
            <p>Phone: (555) 123-4567</p>
            <p>Office: 456 Adventure Avenue, Traveltown, USA</p>
        </section>
    </main>

<?php include 'templates/footer.php'; ?>
