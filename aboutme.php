<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - Drew Woodhouse | SCS Portfolio</title>

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
        <?php include ("php/header.php"); ?>

        <!--Information Section-->
        <div class="container__center ishidden__section">
            <div class="section-title">
                <h2 class="h1 text-center">A Little Information</h2>
                <button class="toggle-section "><svg class="icon icon-circle-right"><use xlink:href="#icon-circle-right"></use></svg></button>
            </div>
            <div class="section-content">
                <p>I live in Little Massingham, Norfolk, UK.</p>
                <p>I am a university graduate with a BSc degree in Computer Games Development (achieved a 2-1).</p> 
                <p>I use sites like Udemy and Treehouse to expand my knowledge.</p>
            </div>
            
            
        </div>

        <!--Technical Skills Section-->
        <div class="container__center ishidden__section">
            <hr>
            <div class="section-title">
                <h2 class="h1 text-center">Technical Skills</h2>
                <button class="toggle-section "><svg class="icon icon-circle-right"><use xlink:href="#icon-circle-right"></use></svg></button> 
            </div>
            <div class="section-content">
                <ul>
                    <li>HTML</li>
                    <li>CSS / SASS</li>
                    <li>JavaScript</li>
                    <li>PHP</li>
                    <li>SQL</li>
                    <li>C++</li>
                    <li>C#</li>
                    <li>Unreal Engine 4 & Unity</li>
                    <li>OpenGL</li>
                </ul>
            </div>
            
        </div>

        <!--Working On Section-->
        <div class="container__center ishidden__section">
            <hr>
            <div class="section-title">
                <h2 class="h1 text-center">Currently Working On</h2>
                <button class="toggle-section "><svg class="icon icon-circle-right"><use xlink:href="#icon-circle-right"></use></svg></button> 
            </div>
            <div class="section-content">
                <ul>
                    <li>Improving my knowledge on website building using HTML & CSS/SASS.</li>
                    <li>Building the Netmatters Homepage from scratch using HTML & CSS/SASS.</li>
                </ul>
            </div>
            
            
        </div>

        <!--Link Section-->
        <div class="container__center">
            <hr>
            <div class="section-title">
                <h2 class="h1 text-center">My Links</h2>
                <button class="toggle-section "><svg class="icon icon-circle-right"><use xlink:href="#icon-circle-right"></use></svg></button>
            </div>
            <div class="section-content">
                <p>Feel free to check out any of my links below:</p>
                <p><a href="https://teamtreehouse.com/profiles/drewwoodhouse1" target="_blank">Treehouse Profile</a></p>
                <p><a href="https://github.com/dwoodhouse1" target="_blank">GitHub Profile</a></p>
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