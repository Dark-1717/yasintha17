<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<?php
$pageTitle = "Our Packages";
$activePage = "packages";
include 'templates/header.php';
?>
        <section id="packages-list">
            <h2 data-translate="packagesPageTitle">Sri Lanka Tour Packages by LKD Travels</h2>
            <p data-translate="packagesPageSubtitle">Discover the best of Sri Lanka with our expertly crafted tour packages. Adventure, culture, wildlife, and relaxation await!</p>

            <div class="grid-container">
                <div class="package-item">
                    <img src="images/package-cultural-triangle.jpg" alt="Sri Lanka Cultural Triangle Tour">
                    <div class="card-content">
                        <h3 data-translate="packageCulturalTitle">Cultural Triangle Explorer (7 Days)</h3>
                        <p data-translate="packageCulturalDescription">Journey through ancient kingdoms. Visit Anuradhapura, Polonnaruwa, Sigiriya, and Dambulla. Includes guided tours and comfortable stays.</p>
                        <p class="price" data-translate="packageCulturalPrice">Starting from $950 per person</p>
                        <a href="contact.php?package=cultural-explorer" class="btn-details" data-translate="bookNow">Book Now</a>
                    </div>
                </div>

                <div class="package-item">
                    <img src="images/package-sri-lanka-safari.jpg" alt="Sri Lanka Wildlife Safari Adventure">
                    <div class="card-content">
                        <h3 data-translate="packageSafariSLTitle">Sri Lankan Wildlife Safari (5 Days)</h3>
                        <p data-translate="packageSafariSLDescription">Experience thrilling safaris in Yala and Udawalawe National Parks. Spot leopards, elephants, and diverse birdlife. Includes jeep safaris and eco-lodges.</p>
                        <p class="price" data-translate="packageSafariSLPrice">Starting from $750 per person</p>
                        <a href="contact.php?package=sl-wildlife-safari" class="btn-details" data-translate="bookNow">Book Now</a>
                    </div>
                </div>

                <div class="package-item">
                    <img src="images/package-hill-coast.jpg" alt="Sri Lanka Hill Country and Coastal Escape">
                    <div class="card-content">
                        <h3 data-translate="packageHillCoastTitle">Hill Country & Coastal Bliss (10 Days)</h3>
                        <p data-translate="packageHillCoastDescription">Explore lush tea plantations in Nuwara Eliya and Ella, then unwind on the beautiful southern beaches like Mirissa or Unawatuna.</p>
                        <p class="price" data-translate="packageHillCoastPrice">Starting from $1200 per person</p>
                        <a href="contact.php?package=hill-coastal-bliss" class="btn-details" data-translate="bookNow">Book Now</a>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 GlobeTrotters. All rights reserved.</p>
<?php include 'templates/footer.php'; ?>
