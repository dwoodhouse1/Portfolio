<?php
    $getURI = $_SERVER['REQUEST_URI'];

    $indexPageURI = "/portfolio/index.php";
    $codingExamplePageURI =  "/portfolio/codingexamples.php";
    $aboutPageURI = "/portfolio/aboutme.php";
    $scsSchemePageURI = "/portfolio/scsscheme.php";

    // Index Page: h1 - Drew Woodhouse  h2 - Web Developer
    // About Me Page: h1 - About Me     <img src="img/profile.png" class="image__profile" alt="Profile Picture">
    // Coding Examples Page: h1 - Coding Examples
    // SCS Scheme Page: h1 - SCS Scheme
?>

<header>
    <!--Banner Section-->
    <div id="banner">
        <hgroup class="banner__heading">
            <div class="banner__text">
                <h1 id="banner__h1">
                <?php
                    switch ($getURI)
                    {
                        case $indexPageURI:
                            echo 'Drew Woodhouse';
                            break;

                        case $aboutPageURI:
                            echo 'About Me';
                            break;
                        
                        case $codingExamplePageURI:
                            echo 'Coding Examples';
                            break;

                        case $scsSchemePageURI:
                            echo 'SCS Scheme';
                            break;
                    }
                ?>
                </h1>
                <p id="banner__h2" class="h2 text-center bold">
                <?php
                    if ($getURI == $indexPageURI)
                    {
                        echo 'Web Developer';
                    }
                ?>
                </p>
            </div>
        </hgroup>
        <?php if ($getURI == $aboutPageURI) {echo '<img src="img/profile.png" class="image__profile" alt="Profile Picture">';} ?>
    </div>
</header>