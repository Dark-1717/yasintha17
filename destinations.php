<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<?php
$pageTitle = "Our Destinations";
$activePage = "destinations";
include 'templates/header.php';
?>
        <section id="destinations-list">
            <h2 data-translate="destinationsPageTitle">Explore Our Curated Destinations</h2>
            <p data-translate="destinationsPageSubtitle">Discover breathtaking places around the globe. We offer a wide variety of locations to suit every traveler's dream.</p>

            <div class="grid-container">
                <div class="destination-item" id="paris">
                    <img src="images/paris-full.jpg" alt="Paris, France - Eiffel Tower">
                    <div class="card-content">
                        <h3 data-translate="parisTitle">Paris, France</h3>
                        <p data-translate="parisFullDescription">The City of Love awaits you with its iconic Eiffel Tower, world-class museums like the Louvre, charming streets, and exquisite cuisine. Perfect for romantic getaways and cultural explorations.</p>
                        <a href="contact.html?destination=paris" class="btn-details" data-translate="inquireNow">Inquire Now</a>
                    </div>
                </div>

                <div class="destination-item" id="rome">
                    <img src="images/rome-full.jpg" alt="Rome, Italy - Colosseum">
                    <div class="card-content">
                        <h3 data-translate="romeTitle">Rome, Italy</h3>
                        <p data-translate="romeFullDescription">Step back in time in the Eternal City. Explore ancient wonders like the Colosseum and Roman Forum, toss a coin in the Trevi Fountain, and indulge in authentic Italian pasta and gelato.</p>
                        <a href="contact.html?destination=rome" class="btn-details" data-translate="inquireNow">Inquire Now</a>
                    </div>
                </div>

                <div class="destination-item" id="tokyo">
                    <img src="images/tokyo-full.jpg" alt="Tokyo, Japan - Shibuya Crossing">
                    <div class="card-content">
                        <h3 data-translate="tokyoTitle">Tokyo, Japan</h3>
                        <p data-translate="tokyoFullDescription">Experience the electrifying energy of Tokyo, a city where ancient traditions blend seamlessly with futuristic innovation. From tranquil temples to bustling Shibuya Crossing, Tokyo has it all.</p>
                        <a href="contact.html?destination=tokyo" class="btn-details" data-translate="inquireNow">Inquire Now</a>
                    </div>
                </div>

                <div class="destination-item" id="bali">
                    <img src="images/bali-full.jpg" alt="Bali, Indonesia - Rice Terraces">
                    <div class="card-content">
                        <h3 data-translate="baliTitle">Bali, Indonesia</h3>
                        <p data-translate="baliFullDescription">Known as the Island of Gods, Bali offers stunning beaches, lush rice paddies, vibrant coral reefs, and a unique spiritual culture. Ideal for relaxation, adventure, and yoga retreats.</p>
                        <a href="contact.html?destination=bali" class="btn-details" data-translate="inquireNow">Inquire Now</a>
                    </div>
                </div>

                <div class="destination-item" id="newyork">
                    <img src="images/newyork-full.jpg" alt="New York, USA - Skyline">
                    <div class="card-content">
                        <h3 data-translate="newyorkTitle">New York City, USA</h3>
                        <p data-translate="newyorkFullDescription">The city that never sleeps! Experience Broadway shows, iconic landmarks like the Statue of Liberty and Times Square, diverse neighborhoods, and world-class shopping and dining.</p>
                        <a href="contact.html?destination=newyork" class="btn-details" data-translate="inquireNow">Inquire Now</a>
                    </div>
                </div>
            </div>
            </div>

        </section>
    </main>

    <footer>
        <p>&copy; 2024 GlobeTrotters. All rights reserved.</p>
<?php include 'templates/footer.php'; ?>
