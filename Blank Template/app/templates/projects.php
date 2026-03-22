<div class="main-block">
    <h1>Our Work</h1>
    <p class="non-projects-text"><?= $company_ProjectsPage_Introduction ?></p>
    <?php 
        foreach ($company_ProjectsPage_Projects as $index => $project) {
            echo "<div class='project'";

            if ($index === count($company_ProjectsPage_Projects) - 1) {
                    echo 'style="border-bottom: none;">'; }
            else
                {echo '>'; }

            echo "
                <h2>{$project['title']}</h2>
                <div class='project-container'>
                    
                    <div class='placeholder'>
                        <h3>Before</h3>
                        <img class='img' onclick='ZoomImage(this)' src='{$project['old_image']}' alt='old-{$project['title']}-image'>
                    </div>

                    
                    <div class='placeholder'>
                        <h3>After</h3>
                        <img class='img' onclick='ZoomImage(this)' src='{$project['new_image']}' alt='new-{$project['title']}-image'>
                    </div>
                </div>
                <p class='projects-text'>{$project['description']}</p>
            </div>

            ";}
    ?>
</div>