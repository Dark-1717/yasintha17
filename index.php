<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<?php
$pageTitle = "Home";
$activePage = "home";
include 'templates/header.php';
?>
        <section id="hero">
            <h1 data-translate="heroTitle">Explore the World with Us</h1>
            <p data-translate="heroSubtitle">Your adventure starts here. Discover amazing destinations and book your dream vacation.</p>
            <a href="packages.html" class="btn-cta" data-translate="heroCta">View Packages</a>
        </section>

        <section id="popular-destinations">
            <h2 data-translate="popularDestinationsTitle">Popular Destinations</h2>
            <div class="grid-container">
                <div class="destination">
                    <img src="images/paris.jpg" alt="Paris, France">
                    <div class="card-content">
                        <h3 data-translate="parisTitle">Paris, France</h3>
                        <p data-translate="parisDescription">Experience the romance and charm of the City of Lights. Visit iconic landmarks like the Eiffel Tower and the Louvre Museum.</p>
                        <a href="destinations.html#paris" class="btn-details" data-translate="viewDetails">View Details</a>
                    </div>
                </div>
                <div class="destination">
                    <img src="images/rome.jpg" alt="Rome, Italy">
                    <div class="card-content">
                        <h3 data-translate="romeTitle">Rome, Italy</h3>
                        <p data-translate="romeDescription">Explore ancient ruins, magnificent basilicas, and enjoy world-class Italian cuisine in the Eternal City.</p>
                        <a href="destinations.html#rome" class="btn-details" data-translate="viewDetails">View Details</a>
                    </div>
                </div>
                <div class="destination">
                    <img src="images/tokyo.jpg" alt="Tokyo, Japan">
                    <div class="card-content">
                        <h3 data-translate="tokyoTitle">Tokyo, Japan</h3>
                        <p data-translate="tokyoDescription">Immerse yourself in a vibrant culture where ancient traditions meet futuristic technology. From serene temples to bustling cityscapes.</p>
                        <a href="destinations.html#tokyo" class="btn-details" data-translate="viewDetails">View Details</a>
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
