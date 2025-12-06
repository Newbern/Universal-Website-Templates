<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <!-- SEO Meta Tags -->
    <?php if (file_exists($SEO)) {include($SEO);} ?>

    <!-- Page Specific CSS -->
    <link rel='stylesheet' href='app/styles/base.css'>
    <link rel='stylesheet' href='<?php echo $CSS; ?>'>

    <!-- Googel Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    
</head>
    <body>
        <!-- Header Section -->
        <header>
            <!-- Hamburger Button -->
            <div class='hamburger-btn'>
               <div class='hamburger-btn-bar'></div>
               <div class='hamburger-btn-bar'></div>
               <div class='hamburger-btn-bar'></div>
            </div>

            <!-- Logo/Brand Name -->
            <div class='logo'>
                <a href='/'><img src='app/media/Logo.jpg' alt='Logo'></a>
            </div>
        </header>

        <!-- Sidebar -->
        <aside class="sidebar">
           <a href="/home">Home</a>
           <a href="/about">About</a>
           <a href="/contact">Contact</a>
           <a href="/services">Services</a>
           <a href="/facebook">FaceBook</a>
        </aside>

        <!-- Main Content Section -->
        <main>
            <?php include($HTML); ?>
        </main>

        <!-- Footer Section -->
        <footer>
            <!-- Social Media Links -->
            <div>
                <!-- Facebook -->
                <a href='https://www.facebook.com/'><img class='social-links' src='https://img.icons8.com/fluency/48/facebook-new.png' alt='Facebook'></a>
                <!-- Instagram -->
                <a href='https://www.instagram.com/'><img class='social-links' src='https://img.icons8.com/fluency/48/instagram-new.png' alt='Instagram'></a>
                <!-- Twitter/X -->
                <a href='https://twitter.com/'><img class='social-links' src='https://img.icons8.com/?size=100&id=fJp7hepMryiw&format=png&color=000000' alt='Twitter'></a>
            </div>
            <p>&copy; 2025 Steven Newbern. All rights reserved Website by <a style='color:black' href="StevenNewbern.com">Steven Newbern</a>. Icons by <a style='color:black' href="https://icons8.com/">Icons8</a></p>
        </footer>

        <!-- Page Specific JavaScript -->
        <script src='app/controllers/base.js'></script>
        <script src='<?php echo $JavaScript; ?>'></script>
    </body>
</html>