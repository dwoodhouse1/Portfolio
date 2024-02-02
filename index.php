<?php 
    session_start();
    include("php/dbconnection.php");
    include("php/postdata.php");

    $pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0'; // Not currently in use
    
    if (!isset($_SESSION['success']))
    {
        $_SESSION['success'] = false;
    }
    
    if (!isset($_SESSION['errorMessage']))
    {
        $_SESSION['errorMessage'] = [];
    }

    if (!isset($_SESSION['form_sent']))
    {
        $_SESSION['form_sent'] = false;
    }
    
    function sanatiseInput($input)
    {
        $input = htmlspecialchars($input);
        $input = trim($input);
        $input = stripslashes($input);
        return $input;
    }

    function validateInput($postData, $input, $regex=true)
    {
        if (empty($postData) == true)
        {
            array_push($_SESSION['errorMessage'], "Please enter a value into " . $input . ".");
            return false;
        }
        else if ($regex == false)
        {
            array_push($_SESSION['errorMessage'], "The " . $input . " format is incorrect.");
            return false;
        }
        else
        {
            return true;
        }
        
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // Filering / Sanitising all inputs and storing the values into session variables

        $firstName = sanatiseInput($_POST['first_name']);
        $_SESSION['first_name'] = $firstName;

        $lastName = sanatiseInput($_POST['last_name']);
        $_SESSION['last_name'] = $lastName;

        $email = sanatiseInput($_POST['email']);
        $_SESSION['email'] = $email;

        $telephone = sanatiseInput($_POST['telephone']);
        $_SESSION['telephone'] = $telephone;

        $message = sanatiseInput($_POST['message']);
        $_SESSION['message'] = $message;
        
        

 
        $nameRegex = "/^[a-zA-Z-' ]*$/";
        $phoneRegex = "/^\+?\(?([0-9]{2,4})[)\s\d.-]+([0-9]{3,4})([\s.-]+([0-9]{3,4}))?$/";

        //function validateInput($postData, $input, $regex=true)
        $isFirstNameValid = validateInput($firstName, "First Name", preg_match($nameRegex, $firstName));
        $isLastNameValid = validateInput($lastName, "Last Name", preg_match($nameRegex, $lastName));
        $isEmailValid = validateInput($email, "Email", filter_var($email, FILTER_VALIDATE_EMAIL));
        $isPhoneValid = validateInput($telephone, "Phone Number", preg_match($phoneRegex, $telephone));
        //$isMessageValid = validateInput($message, "message");
       
        if ($isFirstNameValid && $isLastNameValid && $isEmailValid && $isPhoneValid) //   && $isMessageValid
        {
            postData($firstName, $lastName, $email, $telephone, $message);

            unset($_SESSION['first_name']);
            unset($_SESSION['last_name']);
            unset($_SESSION['email']);
            unset($_SESSION['telephone']);
            unset($_SESSION['message']);

            $_SESSION['success'] = true;
            $_SESSION['errorMessage'] = [];
            $error = $_SESSION['errorMessage'];

            $_SESSION['form_sent'] = true;
            $formSent = $_SESSION['form_sent'];
    

            echo 'Data submitted to the Database Successfully';
            header("Location: #contact");
        
            exit();

        }
        else
        {
            $_SESSION['form_sent'] = false;
            $formSent = $_SESSION['form_sent'];
            header("Location: #contact");

            exit();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drew Woodhouse | SCS Portfolio</title>

    <link rel="stylesheet" href="css/application.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="icons/favicon.PNG">
</head>
<body>
    <!--Icon Implementation-->
    <?php include("php/icons.php"); ?>

    <!-- Hamburger-->
    <?php include("php/hamburger.php"); ?>
        
    <!-- Navigation Section-->
    <?php include("php/menu.php"); ?>

    <div class="flex-container">
        <?php include("php/header.php"); ?>
        
        <main>
            <!--Project Section-->
            <div class="container__center container__center--projects">
                <section id="projects">
                    <h2 class="h1 text-center">Projects</h2>

                    <div class="project__grid">

                        <a href="http://netmatters.drew-woodhouse.netmatters-scs.co.uk" target="_blank" class="project__block project__block--hover">
                            <div class="project__block--content project__block--content-height">
                                <img src="img/netmatters-homepage.png" alt="Netmatters Homepage" class="project__block--image">
                                <div class="project__block-text margin-left margin-bottom">
                                    <h2 class="h3 text-center">Netmatters Homepage</h2>
                                    <p>The entire Netmatters Homepage recreated using HTML, CSS/SASS, JavaScript & PHP<br>&nbsp;</p>
                                </div>
                            </div>
                            <div class="project__block--view">
                                <h3>View the Project <svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg></h3>
                            </div>
                        </a>

                        <a href="http://js-array.drew-woodhouse.netmatters-scs.co.uk" target="_blank" class="project__block project__block--hover">
                            <div class="project__block--content project__block--content-height">
                                <img src="img/JS-Array.png" alt="JavaScript Array Assignment Webpage">
                                <div class="project__block-text margin-left margin-bottom">
                                    <h2 class="h3 text-center">JavaScript Array</h2>
                                    <p class="break">An Image to Email Assigner where users can enter their email address and assign images from an image API to them.</p>
                                </div>
                            </div>
                            <div class="project__block--view">
                                <h3>View the Project <svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg></h3>
                            </div>
                        </a>
                        
                        <a href="#" target="_blank" class="project__block project__block--hover">
                            <div class="project__block--content project__block--content-height">
                                <img src="img/coming-soon.PNG" alt="Coming Soon">
                                <div class="project__block-text margin-left margin-bottom">
                                    <h2 class="h3 text-center">Project 3</h2>
                                    <p>Coming soon...<br>&nbsp;<br>&nbsp;</p>
                                </div>
                            </div>
                            <div class="project__block--view">
                                <h3>View the Project <svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg></h3>
                            </div>
                        </a>

                        <a href="#" target="_blank" class="project__block project__block--hover">
                            <div class="project__block--content project__block--content-height">
                                <img src="img/coming-soon.PNG" alt="Coming Soon">
                                <div class="project__block-text margin-left margin-bottom">
                                    <h2 class="h3 text-center">Project 4</h2>
                                    <p>Coming soon...<br>&nbsp;<br>&nbsp;</p>
                                </div>
                            </div>
                            <div class="project__block--view">
                                <h3>View the Project <svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg></h3>
                            </div>
                        </a>

                        <a href="#" target="_blank" class="project__block project__block--hover">
                            <div class="project__block--content project__block--content-height">
                                <img src="img/coming-soon.PNG" alt="Coming Soon">
                                <div class="project__block-text margin-left">
                                    <h2 class="h3 text-center">Project 5</h2>
                                    <p>Coming soon...<br>&nbsp;<br>&nbsp;</p>
                                </div>
                            </div>
                            <div class="project__block--view">
                                <h3>View the Project <svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg></h3>
                            </div>
                        </a>

                        <a href="#" target="_blank" class="project__block project__block--hover">
                            <div class="project__block--content project__block--content-height">
                                <img src="img/coming-soon.PNG" alt="Coming Soon">
                                <div class="project__block-text margin-left">
                                    <h2 class="h3 text-center">Project 6</h2>
                                    <p>Coming soon...<br>&nbsp;<br>&nbsp;</p>
                                </div>
                            </div>
                            <div class="project__block--view">
                                <h3>View the Project <svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg></h3>
                            </div>
                        </a>
                    </div>
                </section>
            </div>
            
            <!--Form Section-->
            <div class="container__center">
                <section id="contact">
                    <div class="contact-me">
                        <hr>
                        <h2 class="h1 text-center">Get In Touch </h2>
                        <p>If you are interested in knowing more about me, please fill out the form below with your first name, last name, email, your phone number and the message you want
                            to send me. I will be in touch as soon as possible.
                        </p>
                    </div>
                    <div class="contact-form">
                        <form id="contact-form" action="index.php" method="POST">
                            <div class="hidden-all <?php if ($_SESSION['form_sent'] == true) {echo 'success-validating';} else if (!empty($_SESSION['errorMessage'])){echo 'error-validating';}   else {echo '';}   ?>">
                                <span class="padding-right"><?php if($_SESSION['form_sent'] == true) {echo "Your Enquiry has been Submitted";} else {echo implode("<br><br>",$_SESSION['errorMessage']);} ?></span>
                                <button type="button" class="close"><?php if ($_SESSION['form_sent'] == true || (!empty($_SESSION['errorMessage']))) {echo '×';}    else {echo '';}   ?></button>
                                <?php  $_SESSION['errorMessage'] = []; ?>
                            </div>
                            <div class="contact-form__content">
                                <div class="contact-form__first-name">
                                    <input type="text" id="contact-form__first-name" name="first_name" placeholder="First Name *" value="<?php echo $_SESSION['first_name'] ?? ''; ?>">
                                    <small></small>
                                </div>

                                <div class="contact-form__last-name textbox-format">
                                    <input type="text" id="contact-form__last-name" name="last_name" placeholder="Last Name *" value="<?php echo $_SESSION['last_name'] ?? ''; ?>">
                                    <small></small>
                                </div>

                                <div class="contact-form__email">
                                    <input type="text" id="contact-form__email" name="email" placeholder="Email Address *" value="<?php echo $_SESSION['email'] ?? ''; ?>">
                                    <small></small>
                                </div>

                                <div class="contact-form__phone">
                                    <input type="text" id="contact-form__phone" name="telephone" placeholder="Phone Number *" value="<?php echo $_SESSION['telephone'] ?? ''; ?>">
                                    <small></small>
                                </div>

                                <div class="contact-form__message">
                                    <textarea id="contact-form__message" name="message" placeholder="Message (Optional)"><?php echo $_SESSION['message'] ?? ''; ?></textarea>
                                </div>
                            </div>
                            <div class="contact-form__submit">
                                <button class="btn__submit" value="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </main>

        <?php include ("php/footer.php"); ?>
        
    </div>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/gsap-public/minified/gsap.min.js"></script>
    <script src="js/navMenuToggle.js"></script>
    <script src="js/form-validation.js"></script>
    <script src="js/main.js"></script>
</body>
</html>