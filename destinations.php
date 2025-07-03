<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<?php
$pageTitle = "Destinations";
$activePage = "destinations";
include 'templates/header.php';
?>
        <section id="destinations-list">
            <h2 data-translate="destinationsPageTitle">Discover the Wonders of Sri Lanka</h2>
            <p data-translate="destinationsPageSubtitle">Explore breathtaking landscapes, ancient cities, pristine beaches, and vibrant culture. LKD Travels offers curated experiences for every traveler.</p>

            <div class="grid-container">
                <div class="destination-item" id="sigiriya">
                    <img src="images/sigiriya-full.jpg" alt="Sigiriya Rock Fortress, Sri Lanka - Full View">
                    <div class="card-content">
                        <h3 data-translate="sigiriyaTitle">Sigiriya Rock Fortress</h3>
                        <p data-translate="sigiriyaFullDescription">Ascend the majestic Sigiriya Rock, a UNESCO World Heritage marvel. Discover ancient frescoes, palace ruins, and breathtaking panoramic views of the surrounding plains. A must-visit for history and nature lovers.</p>
                        <a href="contact.php?destination=sigiriya" class="btn-details" data-translate="inquireNow">Inquire Now</a>
                    </div>
                </div>

                <div class="destination-item" id="kandy">
                    <img src="images/kandy-temple.jpg" alt="Kandy & Temple of the Tooth, Sri Lanka">
                    <div class="card-content">
                        <h3 data-translate="kandyTitle">Kandy & Temple of the Tooth</h3>
                        <p data-translate="kandyFullDescription">Explore Kandy, Sri Lanka's cultural capital. Visit the sacred Temple of the Tooth Relic, stroll around Kandy Lake, and witness captivating traditional Kandyan dance performances.</p>
                        <a href="contact.php?destination=kandy" class="btn-details" data-translate="inquireNow">Inquire Now</a>
                    </div>
                </div>

                <div class="destination-item" id="yala">
                    <img src="images/yala-leopard.jpg" alt="Yala National Park Leopard Safari, Sri Lanka">
                    <div class="card-content">
                        <h3 data-translate="yalaTitle">Yala National Park Safari</h3>
                        <p data-translate="yalaFullDescription">Embark on an exciting wildlife safari in Yala National Park, renowned for its high density of leopards. Spot elephants, sloth bears, crocodiles, and a myriad of bird species in their natural habitat.</p>
                        <a href="contact.php?destination=yala" class="btn-details" data-translate="inquireNow">Inquire Now</a>
                    </div>
                </div>

                <div class="destination-item" id="ella">
                    <img src="images/ella-train-full.jpg" alt="Ella scenic train ride and Nine Arch Bridge, Sri Lanka">
                    <div class="card-content">
                        <h3 data-translate="ellaTitle">Ella's Scenic Highlands</h3>
                        <p data-translate="ellaFullDescription">Discover the charming hill country town of Ella. Hike to Little Adam's Peak, enjoy stunning views from Ella Gap, and take the iconic train journey over the Nine Arch Bridge through lush tea estates.</p>
                        <a href="contact.php?destination=ella" class="btn-details" data-translate="inquireNow">Inquire Now</a>
                    </div>
                </div>

                <div class="destination-item" id="galle">
                    <img src="images/galle-fort.jpg" alt="Galle Fort historical site, Sri Lanka">
                    <div class="card-content">
                        <h3 data-translate="galleTitle">Galle Fort & Colonial Charm</h3>
                        <p data-translate="galleFullDescription">Step back in time at Galle Fort, a UNESCO World Heritage Site. Explore its charming cobblestone streets, Dutch colonial architecture, boutique shops, and enjoy stunning ocean views from the ramparts.</p>
                        <a href="contact.php?destination=galle" class="btn-details" data-translate="inquireNow">Inquire Now</a>
                    </div>
                </div>
            </div>
            </div>

        </section>
    </main>

    <footer>
        <p>&copy; 2024 GlobeTrotters. All rights reserved.</p>
<?php include 'templates/footer.php'; ?>
