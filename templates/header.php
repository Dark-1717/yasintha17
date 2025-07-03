<?php
// Ensure $pageTitle and $activePage are set before including this file
$pageTitle = isset($pageTitle) ? $pageTitle : "GlobeTrotters";
$activePage = isset($activePage) ? $activePage : ""; // e.g., "home", "destinations"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?> - LKD Travels</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Link to Google Fonts is in style.css via @import -->
</head>
<body class="<?php echo htmlspecialchars($activePage); ?>"> <!-- Add activePage class to body for potential page-specific styling -->
    <header>
        <a href="index.php" class="logo">LKD<span> Travels</span></a>
        <nav>
            <ul>
                <li><a href="index.php" class="<?php echo ($activePage === 'home') ? 'active' : ''; ?>" data-translate="navHome">Home</a></li>
                <li><a href="destinations.php" class="<?php echo ($activePage === 'destinations') ? 'active' : ''; ?>" data-translate="navDestinations">Destinations</a></li>
                <li><a href="packages.php" class="<?php echo ($activePage === 'packages') ? 'active' : ''; ?>" data-translate="navPackages">Packages</a></li>
                <li><a href="about.php" class="<?php echo ($activePage === 'about') ? 'active' : ''; ?>" data-translate="navAbout">About Us</a></li>
                <li><a href="contact.php" class="<?php echo ($activePage === 'contact') ? 'active' : ''; ?>" data-translate="navContact">Contact</a></li>
            </ul>
        </nav>
        <div class="language-switcher">
            <button id="lang-en" data-lang="en">EN</button>
            <button id="lang-hi" data-lang="hi">HI</button>
        </div>
    </header>
    <main>
        <!-- Main content of each page will go here -->
