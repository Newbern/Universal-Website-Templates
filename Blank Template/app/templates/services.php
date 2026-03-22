<div class="main-block">
    <h1>We are Local</h1>
    <img src="<?= $company_ServicePage_Map_Image ?>" alt="Google Maps">
    <p class="non-services-text"><?= $company_ServicePage_Map_Text ?></p>
    <h1>Our Services</h1>
    <p class="non-services-text active"><?= $company_ServicePage_Experience_Text ?></p>
    <?php
    foreach ($company_ServicePage_Services_Overview as $index => $service) {
        if ($index % 2 == 0) {
            $test = 'service-odd';
        } else {
            $test = 'service-even';
        }
        echo '<div class="service-item">';
        echo '<h2>' . $service['title'] . '</h2>';
        echo '<div class="'. $test . '">';
        echo '<img src="' . $service['image'] . '" alt="' . $service['title'] . ' Image">';
        echo '<p class="services-text">' . $service['description'] . '</p>';
        echo '</div>';
        echo '</div>';
    }
    ?>
    <div class="license-section">
        <h1>Licensed & Insured</h1>
        <img src="<?= $company_ServicePage_Licenses_Image ?>" alt="License">
        <p class="non-services-text"><?= $company_ServicePage_Licensed_Text ?></p>
    </div>
</div>