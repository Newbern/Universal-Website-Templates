<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <!-- SEO Meta Tags -->
    <?php if (file_exists($SEO)) {include($SEO);} ?>

    <!-- Page Specific CSS -->
    <!-- Company Specific CSS -->
    <style>
        :root {
            --header-footer-color: <?= $company_Header_Footer_Color ?>;
            --page-bg-color: <?= $company_Page_Background_Color ?>;
            --page-text-color: <?= $company_Page_Text_Color ?>;
            --social-links-color: <?= $company_Social_Text_Color ?>;
            --page-font: '<?= $company_Page_Font ?>', sans-serif;
            --hamburger-btn-color: <?= $company_Hamburger_Button_Color ?>;
            --sidebar-bg-color: <?= $company_Sidebar_Color ?>;
            --sidebar-btn-bg-color: <?= $company_Sidebar_Button_Color ?>;
            --sidebar-btn-text-color: <?= $company_Sidebar_Button_Text_Color ?>;
            --sidebar-btn-hover-bg-color: <?= $company_Sidebar_Button_Hover_Color ?>;
            --sidebar-btn-hover-text-color: <?= $company_Sidebar_Button_Hover_Text_Color ?>;
            --sidebar-font: '<?= $company_Sidebar_Font ?>', sans-serif;
        }
    </style>
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

                <!-- Phone Button -->
                <a class='phone' href='tel:<?= $company_Phone ?>'>
                    <img src='app/media/Phone.png' alt='Company Phone Number: <?= $company_Phone ?>'>
                </a>
        </header>

        <!-- Sidebar -->
        <aside class="sidebar closing">
               <a href="/home">Home</a>
               <a href="/about">About</a>
               <a href="/contact">Contact</a>
               <a href="/services">Services</a>
               <a href="/projects">Projects</a>
               <a href="/facebook">FaceBook</a>
        </aside>

        <!-- Main Content Section -->
        <main id='main'>
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
                <p>&copy; 2025 Steven Newbern. All rights reserved Website by 
                    <a class='social-links' href="https://StevenNewbern.com">Steven Newbern</a>. Icons by 
                    <a class='social-links'href="https://icons8.com/">Icons8</a>
                </p>
        </footer>

        <!-- Page Specific JavaScript -->
        <script src='app/controllers/base.js'></script>
        <script src='<?php echo $JavaScript; ?>'></script>
        
    </body>
</html>