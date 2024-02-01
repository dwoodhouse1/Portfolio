<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCS Scheme - Drew Woodhouse | SCS Portfolio</title>

    <link rel="stylesheet" href="css/application.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="icons/favicon.PNG">
</head>
<body>
    <!--Icon Implementation-->
    <?php include ("php/icons.php"); ?>


    <!--Hamburger-->
    <?php include ("php/hamburger.php"); ?>

    <!-- Navigation Section-->    
    <?php include ("php/menu.php"); ?>

    <div class="flex-container">
        <header>
            <div id="banner">
                <hgroup class="banner__heading">
                    <h1 id="banner__h1">SCS Scheme</h1>
                </hgroup>
            </div>
        </header>

        <!--Scion Coalition Scheme Section-->
        <div class="container__center">
            <div class="section-title">
                <h2 class="h1 text-center">Introduction to the Scion Coalition Scheme</h2>
                <button class="toggle-section "><svg class="icon icon-circle-right"><use xlink:href="#icon-circle-right"></use></svg></button>
            </div>
            <div class="section-content">
                <p>The Scion Coalition Scheme is an intensive, specially tailored training program run by Netmatters in order to give willing candidates the opportunity to enter 
                    the industry as web developers. </p> 
                <p>Under the supervision of senior web developers, scions generally aim to complete training within six to nine months. </p>
                <p>The course is intensive and therefore the level of learning achieved is extensive in a short space of time.</p>
            </div>
        </div>

        <!--Treehouse Section-->
        <div class="container__center">
            <hr>
            <div class="section-title">
                <h2 class="h1 text-center">Treehouse</h2>
                <button class="toggle-section "><svg class="icon icon-circle-right"><use xlink:href="#icon-circle-right"></use></svg></button>
            </div>
            <div class="section-content">
                <p>Treehouse is an online learning community, featuring videos covering a number of topics from basic HTML to C# programming, iOS development, data analysis, and more.</p>
                <p>By completing courses users can earn points, allowing them to track their progress and see how much they've covered in certain areas.</p>
                <p>Total Score: <i>12,654</i></p>
            </div>
            
        </div>

        <!--About Netmatters Section-->
        <div class="container__center">
            <hr>
            <div class="section-title">
                <h2 class="h1 text-center">About Netmatters</h2>
                <button class="toggle-section "><svg class="icon icon-circle-right"><use xlink:href="#icon-circle-right"></use></svg></button>
            </div>
            <div class="section-content">
                <ul>
                    <li>Established in 2008</li>
                    <li>Norfolk's leading technology company</li>
                    <li>Winner of the Princess Royal Training Award</li>
                    <li>Winner of EDP Skills of Tomorrow Award</li>
                    <li>80+ staff, 2 locations across Norfolk</li>
                    <li>Digital Marketing, Website & Software development & IT Support</li>
                    <li>Broad spectrum of clients, working nationwide</li>
                    <li>Operate to strict company values</li>
                </ul>
            </div>
            
        </div>

        <?php include ("php/footer.php"); ?>
        
        
    </div>

    
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/navMenuToggle.js"></script>
    <script src="js/sectionToggle.js"></script>
    <script src="js/main.js"></script>
</body>

</html>