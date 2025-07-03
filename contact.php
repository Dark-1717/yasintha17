<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<?php
$pageTitle = "Contact LKD Travels";
$activePage = "contact";
include 'templates/header.php';
?>
        <section id="contact-form-section">
            <h2 data-translate="contactPageTitle">Get in Touch With Us</h2>
            <p data-translate="contactPageSubtitle">We'd love to hear from you! Whether you have a question about our packages, want to plan a custom trip, or just want to say hello, please use the form below or contact us via phone or email.</p>

            <form id="contactForm" action="contact_submit.php" method="POST">
                <div class="form-group">
                    <label for="name" data-translate="formFullName">Full Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email" data-translate="formEmailAddress">Email Address:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone" data-translate="formPhoneNumber">Phone Number (Optional):</label>
                    <input type="tel" id="phone" name="phone">
                </div>

                <div class="form-group">
                    <label for="subject" data-translate="formSubject">Subject:</label>
                    <input type="text" id="subject" name="subject" required>
                </div>

                <div class="form-group">
                    <label for="destination-interest" data-translate="formDestinationInterest">Destination/Package of Interest (Optional):</label>
                    <input type="text" id="destination-interest" name="destination_interest">
                </div>

                <div class="form-group">
                    <label for="message" data-translate="formYourMessage">Your Message:</label>
                    <textarea id="message" name="message" rows="6" required></textarea>
                </div>

                <button type="submit" class="btn-submit" data-translate="formSendMessage">Send Message</button>
            </form>
        </section>

        <section id="contact-details">
            <h2 data-translate="contactDetailsTitle">Our Contact Information</h2>
            <p><strong data-translate="contactAgencyName">LKD Travels</strong></p>
            <p data-translate="contactAddress">Address: 456 Adventure Avenue, Traveltown, USA</p>
            <p data-translate="contactPhone">Phone: (555) 123-4567</p>
            <p><span data-translate="contactEmailLabel">Email:</span> <a href="mailto:contact@lkdtravels.com">contact@lkdtravels.com</a></p>
            <p data-translate="contactBusinessHours">Business Hours: Monday - Friday, 9:00 AM - 6:00 PM (EST)</p>
        </section>

        <section id="map">
            <h2 data-translate="contactMapTitle">Find Us On The Map</h2>
            <!-- Placeholder for an embedded map. For now, a simple text or image placeholder. -->
            <div style="width:100%; height:300px; background:#eee; text-align:center; line-height:300px; color:#777; border:1px solid #ccc;" data-translate="contactMapPlaceholder">
                Embedded Map Placeholder (e.g., Google Maps iframe)
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 GlobeTrotters. All rights reserved.</p>
<?php include 'templates/footer.php'; ?>
